<?php
/* --------------------------------------------------------------
   $Id: tcat.php 48 2007-01-03 10:42:30Z sun $

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

define('MODULE_SHIPPING_TCAT_TEXT_TITLE', '宅急便');
define('MODULE_SHIPPING_TCAT_TEXT_DESCRIPTION', '所有订单运费固定，单次仅限乙件，货物包装依宅急便规定计算。');
define('MODULE_SHIPPING_TCAT_TEXT_WAY', '最佳');

define('MODULE_SHIPPING_TCAT_STATUS_TITLE', '启动宅急便模组');
define('MODULE_SHIPPING_TCAT_STATUS_DESC', '确定要启动宅急便模组？');

define('MODULE_SHIPPING_TCAT_COST_TITLE', '运费');
define('MODULE_SHIPPING_TCAT_COST_DESC', '宅急便不分县市每件统一收费');

define('MODULE_SHIPPING_TCAT_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_TCAT_HANDLING_DESC', '宅急便每件处理费用');

define('MODULE_SHIPPING_TCAT_TAX_CLASS_TITLE', '税别');
define('MODULE_SHIPPING_TCAT_TAX_CLASS_DESC', '选择要加计何项运送税率');

define('MODULE_SHIPPING_TCAT_ZONE_TITLE', '运送地区');
define('MODULE_SHIPPING_TCAT_ZONE_DESC', '如果选择地区，则只有该地区可以使用这个运送模组');

define('MODULE_SHIPPING_TCAT_SORT_ORDER_TITLE', '显示顺序');
define('MODULE_SHIPPING_TCAT_SORT_ORDER_DESC', '显示顺序，数字越小顺序在前');

define('MODULE_SHIPPING_TCAT_ALLOWED_TITLE', '运送区域');
define('MODULE_SHIPPING_TCAT_ALLOWED_DESC', '输入区域代码，则只有列出区域可以使用这个运送方式 (例如 TW,CN (留白表示不设限))<br />(宅急便目前只配送台湾及其附属岛屿，故建议仅要输入TW)');

define('MODULE_SHIPPING_TCAT_TEXT_TIME0','上午送达 08:00-12:00');
define('MODULE_SHIPPING_TCAT_TEXT_TIME1','下午送达 12:00-17:00');
define('MODULE_SHIPPING_TCAT_TEXT_TIME2','夜间送达 17:00-20:00');
?>