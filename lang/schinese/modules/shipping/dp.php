<?php
/* -----------------------------------------------------------------------------------------
   $Id: dp.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   enhanced on 2010-12-08 18:17:30Z franky_n
   ---------------------------------------------------------------------------------------*/
define('MODULE_SHIPPING_DP_TEXT_TITLE', '德国邮政');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', '德国邮政 - 全球运送机制');
define('MODULE_SHIPPING_DP_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_DP_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_DP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_DP_STATUS_TITLE', '启用运送机制');
define('MODULE_SHIPPING_DP_STATUS_DESC', '你同意启用德国邮政运送机制吗?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_DP_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_DP_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_DP_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_DP_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_DP_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE', 'Number of zones');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC', 'Number of zones to use');
$check_zones_query = xtc_db_query("SELECT * FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = 'MODULE_SHIPPING_DP_NUMBER_ZONES'");
while ($check_number_zones = xtc_db_fetch_array($check_zones_query)) {
    $number_of_zones = $check_number_zones['configuration_value'];
}
for ($module_shipping_dp_i = 1;$module_shipping_dp_i <= $number_of_zones;$module_shipping_dp_i++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_' . $module_shipping_dp_i . '_TITLE', 'DP Zone ' . $module_shipping_dp_i . ' Countries');
    define('MODULE_SHIPPING_DP_COUNTRIES_' . $module_shipping_dp_i . '_DESC', 'Comma separated list of two character ISO country codes that are part of Zone ' . $module_shipping_dp_i . '');
    define('MODULE_SHIPPING_DP_COST_' . $module_shipping_dp_i . '_TITLE', 'DP Zone ' . $module_shipping_dp_i . ' Shipping Table');
    define('MODULE_SHIPPING_DP_COST_' . $module_shipping_dp_i . '_DESC', 'Shipping rates to Zone ' . $module_shipping_dp_i . ' destinations based on a range of order weights. Example: 3:8.50,7:10.50,99999:12.00... Weights greater than 0 and less than 3 would cost 8.50, less than 7 would cost 10.50 for Zone ' . $module_shipping_dp_i . ' destinations.');
}
?>