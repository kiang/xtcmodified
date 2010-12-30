<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypal.php 192 2007-02-24 16:24:52Z mzanier $
   XT-Commerce - community made shopping
   http://www.xt-commerce.com
   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(paypal.php,v 1.7 2002/04/17); www.oscommerce.com
   (c) 2003         nextcommerce (paypal.php,v 1.4 2003/08/13); www.nextcommerce.org
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_PAYPAL_TEXT_TITLE', 'PayPal 贝宝付款机制');
define('MODULE_PAYMENT_PAYPAL_TEXT_INFO', '');
define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', 'PayPal 贝宝跨国交易联机收付款机制');
define('MODULE_PAYMENT_PAYPAL_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_PAYPAL_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_PAYPAL_STATUS_TITLE', '使用 PayPal 模组');
define('MODULE_PAYMENT_PAYPAL_STATUS_DESC', '您确定要使用 PayPal 模组？');
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_PAYPAL_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_PAYPAL_ZONE_DESC', _MODULES_ZONE_DESC);
// BOF - Hendrik - 2010-08-11 - exlusion config for shipping modules
define('MODULE_PAYMENT_PAYPAL_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_PAYPAL_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by comma)');
// EOF - Hendrik - 2010-08-11 - exlusion config for shipping modules

?>