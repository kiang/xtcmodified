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

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', '分区计费');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', '以区域为基础的运费');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', '公斤');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE', '启用分区计费');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', '确定要使用分区计费');


for ($ii=0;$ii<NUMBER_OF_ZONES;$ii++) {
define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_TITLE', '区域 '.$ii.'国家');
define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$ii.'_DESC', '用逗点分隔两位 ISO 国家编码');
define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_TITLE', '区域 '.$ii.'运费表');
define('MODULE_SHIPPING_ZONES_COST_'.$ii.'_DESC', '区域运费 '.$ii.'设置使用这个方式接受的重量上限，例如 3:8.50,7:10.50,... ，低于或等于3公斤的订单收取费用 8.50 元。');
define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_TITLE', '区域 '.$ii.'处理费');
define('MODULE_SHIPPING_ZONES_HANDLING_'.$ii.'_DESC', '使用这个方式的处理费');
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