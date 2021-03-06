<?php
/* -----------------------------------------------------------------------------------------
   $Id: xtc_set_customer_status_upgrade.inc.php 1279 2010-09-07 11:03:18Z dokuman $   

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(general.php,v 1.225 2003/05/29); www.oscommerce.com 
   (c) 2003	 nextcommerce (xtc_set_customer_status_upgrade.inc.php,v 1.3 2003/08/13); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
//set customer satus to new customer for upgrade account
function xtc_set_customer_status_upgrade($customer_id) {
    if (($_SESSION['customer_status_value']['customers_status_id'] == "' . DEFAULT_CUSTOMERS_STATUS_ID_NEWSLETTER .'") AND ($_SESSION['customer_status_value']['customers_is_newsletter'] == 0)) {
        xtc_db_query("update " . TABLE_CUSTOMERS . " set customers_status = '" . DEFAULT_CUSTOMERS_STATUS_ID . "' where customers_id = '" . $_SESSION['customer_id'] . "'");
        xtc_db_query("insert into " . TABLE_CUSTOMERS_STATUS_HISTORY . " (customers_id, new_value, old_value, date_added, customer_notified) values ('" . $_SESSION['customer_id'] . "', '" . DEFAULT_CUSTOMERS_STATUS_ID . "', '" . DEFAULT_CUSTOMERS_STATUS_ID_NEWSLETTER . "', now(), '" . $customer_notified . "')");
    }
    return 1;
}
?>