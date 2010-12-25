<?php
/* --------------------------------------------------------------
   $Id: table.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(table.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (table.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License       
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', '运费表');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', '运费表运送机制，依照商品重量或金额多寡按表收费');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', '最佳');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', '重量');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', '金额');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , '启动运费表');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , '确定要启动运费表?');
define('MODULE_SHIPPING_TABLE_COST_TITLE' , '运费表');
define('MODULE_SHIPPING_TABLE_COST_DESC' , '运费表系依照销售物品的金额或重量按表计算运费，例如：25:8.50,50:5.50，表示达 25 时收费 8.50，26 到 50 者收费 5.50');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , '计算方式');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , '运费系依照销售物品的总计金额或总重量按表计算运费');
define('MODULE_SHIPPING_TABLE_HANDLING_TITLE' , '处理费');
define('MODULE_SHIPPING_TABLE_HANDLING_DESC' , '运送计算方式处理费');


define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>