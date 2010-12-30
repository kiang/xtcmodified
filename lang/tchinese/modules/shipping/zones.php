<?php
/* -----------------------------------------------------------------------------------------
   $Id: zones.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
// CUSTOMIZE THIS SETTING
define('NUMBER_OF_ZONES', 10);
define('MODULE_SHIPPING_ZONES_TEXT_TITLE', '分區計費');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', '以區域為基礎的運費');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', '公斤');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_ZONES_STATUS_TITLE', '啟用分區計費');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', '確定要使用分區計費');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
for ($ii = 0;$ii < NUMBER_OF_ZONES;$ii++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $ii . '_TITLE', 'Zone ' . $ii . ' Countries');
    define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $ii . '_DESC', 'Comma separated list of two character ISO country codes that are part of Zone ' . $ii . '.');
    define('MODULE_SHIPPING_ZONES_COST_' . $ii . '_TITLE', 'Zone ' . $ii . ' Shipping Table');
    define('MODULE_SHIPPING_ZONES_COST_' . $ii . '_DESC', 'Shipping rates to Zone ' . $ii . ' destinations based on a group of maximum order weights. Example: 3:8.50,7:10.50,... Weights less than or equal to 3 would cost 8.50 for Zone ' . $ii . ' destinations.');
    define('MODULE_SHIPPING_ZONES_HANDLING_' . $ii . '_TITLE', 'Zone ' . $ii . ' Handling Fee');
    define('MODULE_SHIPPING_ZONES_HANDLING_' . $ii . '_DESC', 'Handling Fee for this shipping zone');
}
?>