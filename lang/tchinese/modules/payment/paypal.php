<?php

/* -----------------------------------------------------------------------------------------
   $Id: paypal.php 42 2007-01-02 08:16:29Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(paypal.php,v 1.7 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (paypal.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_PAYPAL_TEXT_TITLE', 'PayPal 貝寶付款機制');
define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', 'PayPal 貝寶跨國交易線上收付款機制');
define('MODULE_PAYMENT_PAYPAL_TEXT_INFO','');
define('MODULE_PAYMENT_PAYPAL_STATUS_TITLE', '使用 PayPal 模組');
define('MODULE_PAYMENT_PAYPAL_STATUS_DESC', '您確定要使用 PayPal 模組？');
define('MODULE_PAYMENT_PAYPAL_ID_TITLE', 'eMail位址');
define('MODULE_PAYMENT_PAYPAL_ID_DESC', '您在PayPal註冊的eMail位址');
define('MODULE_PAYMENT_PAYPAL_CURRENCY_TITLE', '交易貨幣');
define('MODULE_PAYMENT_PAYPAL_CURRENCY_DESC', '信用卡交易時使用的貨幣');
define('MODULE_PAYMENT_PAYPAL_TMP_STATUS_ID_TITLE','設定處理中狀態');
define('MODULE_PAYMENT_PAYPAL_TMP_STATUS_ID_DESC','設定這筆交易尚在處理中的狀態');
define('MODULE_PAYMENT_PAYPAL_USE_CURL_TITLE', 'cURL');
define('MODULE_PAYMENT_PAYPAL_USE_CURL_DESC', '使用 cURL 或是重新導向.');

define('MODULE_PAYMENT_PAYPAL_COST_TITLE', _MODULES_PAYMENT_FEE_TITLE);
define('MODULE_PAYMENT_PAYPAL_COST_DESC', _MODULES_PAYMENT_FEE_DESC);
define('MODULE_PAYMENT_PAYPAL_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_PAYPAL_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_PAYPAL_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_PAYPAL_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_PAYPAL_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
?>
