<?php

/* -----------------------------------------------------------------------------------------
  $Id: NewebmPP.php,v 1.1 2003/09/06 22:13:54 oldpa Exp $

  TWE-Commerce - community made shopping
  http://www.oldpa.com.tw
  Copyright (c) 2003 TWE-Commerce
  -----------------------------------------------------------------------------------------
  based on:
  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
  (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
  (c) 2003	 nextcommerce (cod.php,v 1.7 2003/08/24); www.nextcommerce.org
  (c) 2003	 xt-commerce  www.xt-commerce.com
  Released under the GNU General Public License
  --------------------------------------------------------------------------------------- */

class NewebmPP {

    var $code, $title, $description, $enabled;

    // class constructor
    function NewebmPP() {
        global $order;
        $this->code = 'NewebmPP';
        $this->title = MODULE_PAYMENT_NEWEBMPP_TEXT_TITLE;
        $this->description = MODULE_PAYMENT_NEWEBMPP_TEXT_DESCRIPTION;
        $this->sort_order = MODULE_PAYMENT_NEWEBMPP_SORT_ORDER;
        $this->enabled = ((MODULE_PAYMENT_NEWEBMPP_STATUS == 'True') ? true : false);

        if ((int) MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID > 0) {
            $this->order_status = MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID;
        }
        if (is_object($order))
            $this->update_status();
        $this->form_action_url = MODULE_PAYMENT_NEWEBMPP_TRANSURL;
    }

    // class methods
    function update_status() {
        global $order;
    }

    function javascript_validation() {

    }

    function selection() {
        return array('id' => $this->code,
            'module' => $this->title);
    }

    function pre_confirmation_check() {

    }

    function confirmation() {

    }

    function getOrderNumber() {
        $Year = substr(date('Y'), 3);
        $Day = date('z');
        $Hour = date('H');
        $Minute = date('i');
        $Second = date('s');
        $Sec = ($Hour * 60 + $Minute) * 60 + $Second;
        return "$Year$Day$Sec";
    }

    function process_button() {
        global $order, $SID;
        $SID = xtc_session_name() . '=' . xtc_session_id();

        $MerchantNumber = MODULE_PAYMENT_NEWEBMPP_MERCHANTNUMBER;
        $CheckSum = MODULE_PAYMENT_NEWEBMPP_CHECKSUM;
        $Amount = round($order->info['total']) . ".00";
        $OrderNumber = $this->getOrderNumber();

        $code = md5($MerchantNumber . $OrderNumber . $CheckSum . $Amount);
        $process_button_string =
                xtc_draw_hidden_field('MerchantNumber', $MerchantNumber) .
                xtc_draw_hidden_field('Amount', $Amount) .
                xtc_draw_hidden_field('checksum', $code) .
                xtc_draw_hidden_field('OrderNumber', $OrderNumber) .
                xtc_draw_hidden_field('PaymentType', "SSL") .
                xtc_draw_hidden_field('op', "AcceptPayment") .
                xtc_draw_hidden_field('OrgOrderNumber', $OrderNumber) .
                xtc_draw_hidden_field('ApproveFlag', "1") .
                xtc_draw_hidden_field('DepositFlag', MODULE_PAYMENT_NEWEBMPP_DEPOSITFLAG) .
                xtc_draw_hidden_field('Englishmode', "0") .
                xtc_draw_hidden_field('OrderURL', MODULE_PAYMENT_NEWEBMPP_VERIFYURL) .
                xtc_draw_hidden_field('ReturnURL', MODULE_PAYMENT_NEWEBMPP_RETURNURL);
        return $process_button_string;
    }

    function before_process() {
        global $_POST;
        $FinalResult = $_POST['final_result'];
        $PRC = $_POST['final_return_PRC'];
        $SRC = $_POST['final_return_SRC'];
        if ($FinalResult != "1") {
            xtc_redirect(xtc_href_link(FILENAME_CHECKOUT_PAYMENT, "error_message=" . urlencode("交易失敗! 回覆碼=(" . $_POST['final_return_PRC'] . "/" . $_POST['final_return_SRC'] . "/" . $_POST['final_return_BankRC'] . ")"), 'SSL', true, false));
        } else {
            //-- 接收結果參數
            $MerchantNumber = $_POST['P_MerchantNumber'];
            $OrderNumber = $_POST['P_OrderNumber'];
            $Amount = $_POST['P_Amount'];
            $CheckSum = $_POST['P_CheckSum'];

            //交易結果成功，檢查結果是否遭竄改
            $Code = MODULE_PAYMENT_NEWEBMPP_CHECKSUM;
            $checkstr = md5($MerchantNumber . $OrderNumber . $FinalResult . $PRC . $Code . $SRC . $Amount);
            if ($checkstr != $CheckSum) {
                xtc_redirect(xtc_href_link(FILENAME_CHECKOUT_PAYMENT, "error_message=" . urlencode("交易失敗(檢查碼錯誤)!)"), 'SSL', true, false));
            } else {
                //交易成功，請自行處理後續動作
                $ApproveCode = $_POST['final_return_ApproveCode'];
                $BankRC = $_POST['final_return_BankRC'];
                $BatchNumber = $_POST['final_return_BatchNumber'];
            }
        }
    }

    function after_process() {
        return false;
    }

    function get_error() {
        return false;
    }

    function check() {
        if (!isset($this->_check)) {
            $check_query = xtc_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_NEWEBMPP_STATUS'");
            $this->_check = xtc_db_num_rows($check_query);
        }
        return $this->_check;
    }

    function install() {
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) values ('MODULE_PAYMENT_NEWEBMPP_STATUS', 'True', '6', '1', 'xtc_cfg_select_option(array(\'True\', \'False\'), ', now());");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) values ('MODULE_PAYMENT_NEWEBMPP_DEPOSITFLAG', '1', '6', '1', 'xtc_cfg_select_option(array(\'1\', \'0\'), ', now());");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, use_function, date_added) values ('MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID', '0', '6', '0', 'xtc_cfg_pull_down_order_statuses(', 'xtc_get_order_status_name', now())");

        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_MERCHANTNUMBER', '201387','6', '1', now());");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_CHECKSUM', 'abcd1234', '6', '1', now());");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_SORT_ORDER', '0', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_TRANSURL', 'https://maple.neweb.com.tw/NewebmPP/cdcard.jsp', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_VERIFYURL', 'http://127.0.0.1/xt-Commerce/checkout_process.php', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_RETURNURL', 'http://192.168.1.5/xt-Commerce/checkout_process.php', '6', '0', now())");
        xtc_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) values ('MODULE_PAYMENT_NEWEBMPP_ALLOWED', '',   '6', '0', now())");
    }

    function remove() {
        xtc_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
        return array('MODULE_PAYMENT_NEWEBMPP_STATUS',
            'MODULE_PAYMENT_NEWEBMPP_MERCHANTNUMBER',
            'MODULE_PAYMENT_NEWEBMPP_CHECKSUM',
            'MODULE_PAYMENT_NEWEBMPP_DEPOSITFLAG',
            'MODULE_PAYMENT_NEWEBMPP_SORT_ORDER',
            'MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID',
            'MODULE_PAYMENT_NEWEBMPP_TRANSURL',
            'MODULE_PAYMENT_NEWEBMPP_VERIFYURL',
            'MODULE_PAYMENT_NEWEBMPP_RETURNURL',
            'MODULE_PAYMENT_NEWEBMPP_ALLOWED');
    }

}