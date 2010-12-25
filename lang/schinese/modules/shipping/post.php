<?php
/* --------------------------------------------------------------
   $Id: post.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn


   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(information.php,v 1.6 2003/02/10); www.oscommerce.com 
   (c) 2003	 nextcommerce (content.php,v 1.2 2003/08/21); www.nextcommerce.org   
   
   Released under the GNU General Public License 
---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_POST_TEXT_TITLE', '中华邮政(台湾)');
define('MODULE_SHIPPING_POST_TEXT_DESCRIPTION', '中华邮政(台湾)运送机制，依照商品重量或金额多寡按表收费');
define('MODULE_SHIPPING_POST_TEXT_WAY', '小计');
define('MODULE_SHIPPING_POST_TEXT_WEIGHT', '重量');
define('MODULE_SHIPPING_POST_TEXT_AMOUNT', '金额');
define('MODULE_SHIPPING_POST_STATUS_TITLE', '启用中华邮政(台湾)');
define('MODULE_SHIPPING_POST_STATUS_DESC', '确定要启用中华邮政(台湾)运送机制？');
define('MODULE_SHIPPING_POST_COST_TITLE', '中华邮政(台湾)费率表');
define('MODULE_SHIPPING_POST_COST_DESC', '依商品重量或金额设置收费表费率，例如： 1:60,2:80,3:100,5:120， 表示重量达 1公斤 时，收费 60， 1 到 2公斤，收费 80, 依此类推');
define('MODULE_SHIPPING_POST_MODE_TITLE', '中华邮政(台湾)计价方式');
define('MODULE_SHIPPING_POST_MODE_DESC', '中华邮政(台湾)运费会依订单商品的重量或订单总计金额，按表收取相对应之金额');
define('MODULE_SHIPPING_POST_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_POST_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_POST_TAX_CLASS_TITLE', '税别');
define('MODULE_SHIPPING_POST_TAX_CLASS_DESC', '选择要加计何项运送税率');
define('MODULE_SHIPPING_POST_ZONE_TITLE', '运送特定区域');
define('MODULE_SHIPPING_POST_ZONE_DESC', '如果选择地区，则只有该区域可以使用这个运送方式');
define('MODULE_SHIPPING_POST_SORT_ORDER_TITLE', '显示顺序');
define('MODULE_SHIPPING_POST_SORT_ORDER_DESC', '显示顺序，数字越小顺序在前');
define('MODULE_SHIPPING_POST_ALLOWED_TITLE', '运送使用区域');
define('MODULE_SHIPPING_POST_ALLOWED_DESC', '输入区域代码，则只有列出区域可以使用这个运送方式 (例如 TW,CN (留白表示不设限))');

define('MODULE_SHIPPING_POST_TEXT_TIME0','白天送达');
define('MODULE_SHIPPING_POST_TEXT_TIME1','夜间送达');

?>