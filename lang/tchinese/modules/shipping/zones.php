<?php
/* --------------------------------------------------------------
   $Id: zones.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   
   // CUSTOMIZE THIS SETTING
define('NUMBER_OF_ZONES',10);

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', '分區計費');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', '以區域為基礎的運費');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', '公斤');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE', '啟用分區計費');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', '確定要使用分區計費');


for ($ii=0;$ii<NUMBER_OF_ZONES;$ii++) {
define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_TITLE', '區域 '.$ii.'國家');
define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_DESC', '用逗點分隔兩位 ISO 國家編碼');
define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_TITLE', '區域 '.$ii.'運費表');
define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_DESC', '區域運費 '.$ii.'設定使用這個方式接受的重量上限，例如 3:8.50,7:10.50,... ，低於或等於3公斤的訂單收取費用 8.50 元。');
define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_TITLE', '區域 '.$ii.'處理費');
define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_DESC', '使用這個方式的處理費');
}

define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>