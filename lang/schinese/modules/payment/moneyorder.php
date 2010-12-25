<?php
/* --------------------------------------------------------------
   $Id: moneyorder.php 42 2007-01-02 08:16:29Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', '汇票付款');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', '以汇票付款(非本公司特约经销商请勿使用此付款方式，否则该笔订单不生效)');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', '您可以开立汇票的方式支付货款，我们的\n地址是：' . MODULE_PAYMENT_MONEYORDER_STOREADDR . '\n电话是：' . MODULE_PAYMENT_MONEYORDER_STORETEL);
define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','本公司特约经销商方可使用此付款机制。');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , '启动汇票付款模组');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', '确定要启动汇票付款模组？');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', '汇票收款人');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', '您希望汇票的收款人为谁？');

define('MODULE_PAYMENT_MONEYORDER_COST_TITLE', _MODULES_PAYMENT_FEE_TITLE);
define('MODULE_PAYMENT_MONEYORDER_COST_DESC', _MODULES_PAYMENT_FEE_DESC);
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
?>
