<?php
/* -----------------------------------------------------------------------------------------
   $Id: iclear.php 1200 2010-08-23 14:51:10Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers; http://www.themedia.at & http://www.oscommerce.at
   (c) 2003	osCommerce (iclear.php,v 1.4 2007/05/10); www.nextcommerce.org
   (c) 2006 XT-Commerce (cash.php 1102 2005-07-24)

   Released under the GNU General Public License

   WSDL extensions
   ---------------------------------------------------------------------------------------*/
// iclear DMI
include (DIR_FS_CATALOG . 'includes/iclear/iclear_catalog.php');
class iclear extends iclearCatalog {
    // iclear DMI -> added global order var
    var $code, $title, $description, $enabled, $order;
    // class constructor
    // BOF - Hendrik - 2010-08-11 - php5 compatible
    //function iclear() {
    function __construct() {
        // EOF - Hendrik - 2010-08-11 - php5 compatible
        global $order;
        $this->code = 'iclear';
        $this->title = MODULE_PAYMENT_ICLEAR_TEXT_TITLE;
        $this->description = MODULE_PAYMENT_ICLEAR_TEXT_DESCRIPTION;
        $this->sort_order = MODULE_PAYMENT_ICLEAR_SORT_ORDER;
        $this->enabled = ((MODULE_PAYMENT_ICLEAR_STATUS == 'True') ? true : false);
        $this->shopID = MODULE_PAYMENT_ICLEAR_ID;
        $this->sessionID = xtc_session_id();
        if (isset($order) && is_object($order)) $this->update_status();
        $this->form_action_url = './checkout_iclear.php';
    }
    // class methods
    function update_status() {
        global $order;
        // BOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
        if (MODULE_PAYMENT_ICLEAR_NEG_SHIPPING != '') {
            $neg_shpmod_arr = explode(',', MODULE_PAYMENT_ICLEAR_NEG_SHIPPING);
            foreach ($neg_shpmod_arr as $neg_shpmod) {
                $nd = $neg_shpmod . '_' . $neg_shpmod;
                if ($_SESSION['shipping']['id'] == $nd || $_SESSION['shipping']['id'] == $neg_shpmod) {
                    $this->enabled = false;
                    break;
                }
            }
        }
        // EOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
        if (($this->enabled == true) && ((int)MODULE_PAYMENT_ICLEAR_ZONE > 0)) {
            $check_flag = false;
            $check_query = xtc_db_query("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_PAYMENT_ICLEAR_ZONE . "' and zone_country_id = '" . $order->billing['country']['id'] . "' order by zone_id");
            while ($check = xtc_db_fetch_array($check_query)) {
                if ($check['zone_id'] < 1) {
                    $check_flag = true;
                    break;
                } elseif ($check['zone_id'] == $order->billing['zone_id']) {
                    $check_flag = true;
                    break;
                }
            }
            if ($check_flag == false) {
                $this->enabled = false;
            }
        }
    }
    function javascript_validation() {
        return false;
    }
    function selection() {
        return array('id' => $this->code, 'module' => $this->title);
    }
    function pre_confirmation_check() {
        return false;
    }
    function confirmation() {
        global $HTTP_GET_VARS, $order, $iclearWsdlResult, $messageStack;
        // check if this is a redirect from the wsdl_iclear_order script and if a state is given
        return false;
    }
    function process_button() {
        global $order, $xtPrice, $languages_id, $iclearWsdlResult, $currency, $shipping, $customer_id, $billto;
        $process_button_string = '';
        // check if a reload of this page is done and a WSDL was already perfomed. If not, do one
        if ($this->sendOrder($order, $languages_id)) {
            $process_button_string = xtc_draw_hidden_field('targetURI', $this->wsdlResult['iclearURL']);
        } else {
            //        xtc_redirect(xtc_href_link($redirectUri, $infoMsg, 'SSL'));
            $process_button_string = xtc_draw_hidden_field('error_message', $this->getErrorString());
        }
        return $process_button_string;
    }
    function before_process() {
        global $order, $messageStack, $languages_id;
        $iclearWsdlResult = & $_SESSION['iclearWsdlResult'];
        $reset = false;
        // if there's no wsdlResult, no confirmation was done!
        if (!$iclearWsdlResult || !is_array($iclearWsdlResult)) {
            xtc_redirect(xtc_href_link(FILENAME_CHECKOUT_CONFIRMATION, '', 'SSL'));
            exit();
        } elseif (!$this->loadWsdlOrder($iclearWsdlResult['sessionID'], $iclearWsdlResult['basketID'])) {
            xtc_redirect(xtc_href_link(FILENAME_CHECKOUT_CONFIRMATION, '', 'SSL'));
            exit();
        }
        if ((int)$this->wsdlOrder['status'] != 1 && $this->wsdlOrder['accepted'] == '0000-00-00 00:00:00') {
            // only lagging orders can have a zero accepted date. otherwise some illegal thing is going on! remove this order and throw error!
            $this->deleteWsdlOrder($iclearWsdlResult['sessionID'], $iclearWsdlResult['basketID']);
            $messageString = 'Non accepted iclear order detected! Cart resetted automatically! Order deleted from iclear table';
            $messageType = 'error';
            $reset = true;
        } elseif ((int)$this->wsdlOrder['status'] == 2) {
            // this is a cancelled order, clean basket and redirect to home; information message given
            $messageString = 'Cancelled iclear order detected! Cart resetted automatically';
            $messageType = 'error';
            $reset = true;
        } elseif ((int)$this->wsdlOrder['status'] == 1) {
            // this is a lagging order, set state to iclear wait; store delivery and billing address and blank street & co.
            $address['delivery'] = $order->delivery;
            $address['billing'] = $order->billing;
            $this->storeLaggingAddress(array('delivery' => $order->delivery, 'billing' => $order->billing));
            foreach (array('city', 'postcode', 'state', 'suburb') AS $key) {
                $order->delivery[$key] = $order->billing[$key] = '*****';
            }
            $order->delivery['street_address'] = $order->billing['street_address'] = 'Zahlung noch nicht durch iclear freigeben';
            $order->info['order_status'] = MODULE_PAYMENT_ICLEAR_STATUS_WAIT_ID;
            // get wait message from iclear or use default
            $lang = strtolower($this->_setLanguage($languages_id));
            if (@$fp = fopen(URI_ICLEAR_WAIT_MESSAGE . $lang . '.html', 'r')) {
                $messageString = trim(fgets($fp, 4096));
                fclose($fp);
            } else {
                $messageString = 'Ihre Bestellung ist nicht aktiv. Bitte erhöhen Sie zur Aktivierung Ihren iclear Verfügungsrahmen!';
            }
            $messageType = 'success';
            // todo: maybe a redirect goes here
            
        } else {
            // everything is in sane - just go on
            $messageString = false;
        }
        if ($messageString && is_object($messageStack)) {
            $messageStack->add_session('<span style="font-size: 11px">' . $messageString . '</span>', 'error');
        }
        if ($reset) {
            $_SESSION['cart']->reset(true);
            // BOF - Hetfield - 2009-08-19 - removed deprecated function session_unregister to be ready for PHP >= 5.3
            unset($_SESSION['iclearWsdlResult']);
            unset($_SESSION['sendto']);
            unset($_SESSION['billto']);
            unset($_SESSION['shipping']);
            unset($_SESSION['payment']);
            unset($_SESSION['comments']);
            // EOF - Hetfield - 2009-08-19 - removed deprecated function session_unregister to be ready for PHP >= 5.3
            xtc_redirect(xtc_href_link(FILENAME_DEFAULT, '', 'SSL'));
        }
        return false;
    }
    function after_process() {
        global $insert_id;
        //BOF - DokuMan - 2010-08-23 - Also update status in TABLE_ORDERS_STATUS_HISTORY
        //$sql = 'UPDATE orders_iclear SET orders_id = "' . $insert_id . '" WHERE wsdl_id = "' . $this->wsdlOrder['wsdl_id'] . '" LIMIT 1';
        //xtc_db_query($sql);
        if (isset($this->order_status) && $this->order_status) {
            xtc_db_query("UPDATE " . TABLE_ORDERS . " SET orders_status='" . $this->order_status . "' WHERE orders_id='" . $insert_id . "'");
            xtc_db_query("UPDATE " . TABLE_ORDERS_STATUS_HISTORY . " SET orders_status_id='" . $this->order_status . "' WHERE orders_id='" . $insert_id . "'");
        }
        //EOF - DokuMan - 2010-08-23 - Also update status in TABLE_ORDERS_STATUS_HISTORY
        // remove wsdl session var
        unset($_SESSION['iclearWsdlResult']); // Hetfield - 2009-08-19 - removed deprecated function session_unregister to be ready for PHP >= 5.3
        return false;
    }
    function output_error() {
        return false;
    }
    function check() {
        if (!isset($this->_check)) {
            $check_query = xtc_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_ICLEAR_STATUS'");
            $this->_check = xtc_db_num_rows($check_query);
        }
        return $this->_check;
    }
    function _checkInstallation() {
        global $messageStack;
        // check if installation of this shop is ok
        $configQry = xtc_db_query('SELECT configuration_key, configuration_value FROM ' . TABLE_CONFIGURATION . ' WHERE configuration_key LIKE "MODULE_SHIPPING_%_TAX_CLASS" AND configuration_value = 0');
        while ($rec = xtc_db_fetch_array($configQry)) {
            preg_match('/MODULE_SHIPPING_(.*)_TAX_CLASS/', $rec['configuration_key'], $track);
            $this->addError('Invalid configuration value detected! Please check the tax setting of the ' . $track[1] . ' shipping module!');
        }
        if ($rc = $this->isError()) {
            $this->addError('Installation of the iclear module due to invalid shop configuration aborted!');
        }
        return $rc;
    }
    function install() {
        global $messageStack;
        xtc_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key LIKE 'MODULE_PAYMENT_ICLEAR%'");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " ( configuration_key, configuration_value,  configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_ICLEAR_ALLOWED', '',   '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) values ('MODULE_PAYMENT_ICLEAR_STATUS', 'True', '6', '0', 'xtc_cfg_select_option(array(\'True\', \'False\'), ', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_ICLEAR_ID', 'ShopID', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_ICLEAR_SHIPPING_TAX', '',  '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_ICLEAR_SORT_ORDER', '0', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) values ('MODULE_PAYMENT_ICLEAR_ZONE', '0', '6', '0', 'xtc_get_zone_class_title', 'xtc_cfg_pull_down_zone_classes(', now())");
        xtc_db_query("ALTER TABLE  orders_status ADD  review_remind_allowed VARCHAR( 64 ) NOT NULL");
        // iclear wsdl table stuff
        xtc_db_query("DROP TABLE IF EXISTS orders_iclear");
        xtc_db_query("CREATE TABLE orders_iclear (wsdl_id int(11) NOT NULL AUTO_INCREMENT, orders_id int(11), basket_id varchar(32) NOT NULL default '', request_id VARCHAR(100) NOT NULL default '', session_id varchar(32) NOT NULL default '', status int(4) NOT NULL default '0', status_message VARCHAR(255) default '', billing TEXT NOT NULL, delivery TEXT NOT NULL, accepted DATETIME NOT NULL, basket_value int(11) NOT NULL,ts TIMESTAMP NOT NULL, PRIMARY KEY (wsdl_id), KEY orders_id (orders_id), KEY basket_id (basket_id), KEY session_id (session_id))");
        $status_qry = xtc_db_query('SELECT orders_status_id FROM ' . TABLE_ORDERS_STATUS . ' WHERE orders_status_name LIKE "iclear%" LIMIT 1');
        $status = xtc_db_fetch_array($status_qry);
        if (!is_array($status) || !$status['orders_status_id']) {
            $status_qry = xtc_db_query('SELECT orders_status_id FROM ' . TABLE_ORDERS_STATUS . ' ORDER BY orders_status_id DESC LIMIT 1');
            $status = xtc_db_fetch_array($status_qry);
            $status['orders_status_id']++;
            xtc_db_query('INSERT INTO ' . TABLE_ORDERS_STATUS . ' (orders_status_id, language_id, orders_status_name, review_remind_allowed) VALUES (' . $status['orders_status_id'] . ', 1, "iclear pending", "true" )');
            xtc_db_query('INSERT INTO ' . TABLE_ORDERS_STATUS . ' (orders_status_id, language_id, orders_status_name, review_remind_allowed) VALUES (' . $status['orders_status_id'] . ', 2, "iclear wartend", "true" )');
            xtc_db_query('INSERT INTO ' . TABLE_ORDERS_STATUS . ' (orders_status_id, language_id, orders_status_name, review_remind_allowed) VALUES (' . $status['orders_status_id'] . ', 3, "iclear pendiente", "true" )');
        }
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) values ('MODULE_PAYMENT_ICLEAR_STATUS_WAIT_ID', '" . $status['orders_status_id'] . "', '6', '0', '', '', now())");
        // BOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value,  configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_ICLEAR_NEG_SHIPPING', '', '6', '10', now())");
        // EOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
        
    }
    function remove() {
        xtc_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
        // iclear
        // check 4 lagging orders, restock and delete 'em
        $status_qry = xtc_db_query('SELECT orders_status_id FROM ' . TABLE_ORDERS_STATUS . ' WHERE orders_status_name LIKE "iclear%" LIMIT 1');
        $status = xtc_db_fetch_array($status_qry);
        if (is_array($status) && $status['orders_status_id']) {
            // check if there are any lagging orders in the orders table
            // if, remove them and update stock and orders history
            $orders_qry = xtc_db_query('SELECT orders_id FROM ' . TABLE_ORDERS . ' WHERE orders_status = ' . $status['orders_status_id']);
            if ($orders_qry) {
                while ($order = xtc_db_fetch_array($orders_qry)) {
                    $products_query = xtc_db_query("select products_id, products_quantity from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$order['orders_id'] . "'");
                    while ($product = xtc_db_fetch_array($products_query)) {
                        xtc_db_query("update " . TABLE_PRODUCTS . " set products_quantity = products_quantity + " . $product['products_quantity'] . ", products_ordered = products_ordered - " . $product['products_quantity'] . " where products_id = '" . (int)$product['products_id'] . "'");
                    }
                    xtc_db_query('DELETE FROM ' . TABLE_ORDERS_PRODUCTS . ' WHERE orders_id = "' . $order['orders_id'] . '"');
                    xtc_db_query('DELETE FROM ' . TABLE_ORDERS . ' WHERE orders_id = "' . $order['orders_id'] . '" LIMIT 1');
                }
            }
            xtc_db_query('DELETE FROM ' . TABLE_ORDERS_STATUS . ' WHERE orders_status_name LIKE "%iclear%"');
        }
        xtc_db_query("ALTER TABLE orders_status DROP review_remind_allowed");
        xtc_db_query("DROP TABLE IF EXISTS orders_iclear");
    }
    function keys() {
        //      return array('MODULE_PAYMENT_ICLEAR_STATUS', 'MODULE_PAYMENT_ICLEAR_ID', 'MODULE_PAYMENT_ICLEAR_ZONE', 'MODULE_PAYMENT_ICLEAR_ORDER_STATUS_ID', 'MODULE_PAYMENT_ICLEAR_SORT_ORDER');
        return array('MODULE_PAYMENT_ICLEAR_STATUS', 'MODULE_PAYMENT_ICLEAR_ID', 'MODULE_PAYMENT_ICLEAR_ZONE', 'MODULE_PAYMENT_ICLEAR_SORT_ORDER', 'MODULE_PAYMENT_ICLEAR_SHIPPING_TAX', 'MODULE_PAYMENT_ICLEAR_NEG_SHIPPING'); // Hendrik - 2010-08-09 - exlusion config for shipping modules
        
    }
}
?>
