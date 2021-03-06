<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneyorder.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', '匯票付款');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', '以匯票付款(非本公司特約經銷商請勿使用此付款方式，否則該筆訂單不生效)');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', '您可以開立匯票的方式支付貨款，我們的\n地址是：' . MODULE_PAYMENT_MONEYORDER_STOREADDR . '\n電話是：' . MODULE_PAYMENT_MONEYORDER_STORETEL);
define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', '本公司特約經銷商方可使用此付款機制。');
define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE', '啟動匯票付款模組');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', '確定要啟動匯票付款模組？');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', '匯票收款人');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', '您希望匯票的收款人為誰？');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
// BOF - Hendrik - 2010-07-15 - exlusion config for shipping modules
define('MODULE_PAYMENT_MONEYORDER_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_MONEYORDER_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by commas)');
// EOF - Hendrik - 2010-07-15 - exlusion config for shipping modules

?>