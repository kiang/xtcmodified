<?php
/* --------------------------------------------------------------
   $Id: item.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(item.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (item.php,v 1.4 2003/08/13); www.nextcommerce.org

   
   Released under the GNU General Public License    
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', '单件运费');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', '若有一件以上货品，总费用= 单件运费 x 货品总件数');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', '最佳');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE' , '使用单件运费');
define('MODULE_SHIPPING_ITEM_STATUS_DESC' , '要提供单件运费模组?');
define('MODULE_SHIPPING_ITEM_COST_TITLE' , '单件运费金额');
define('MODULE_SHIPPING_ITEM_COST_DESC' , '总运费为订单内商品件数X单件运费金额');
define('MODULE_SHIPPING_ITEM_HANDLING_TITLE' , '处理费');
define('MODULE_SHIPPING_ITEM_HANDLING_DESC' , '单件运费的处理费用');


define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_ITEM_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_ITEM_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_ITEM_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>