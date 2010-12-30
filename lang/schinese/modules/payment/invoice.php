<?php
/* -----------------------------------------------------------------------------------------
   $Id: invoice.php 1101 2005-07-24 14:51:13Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', '发票请款(月结)');
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', '发票请款(月结)');
define('MODULE_PAYMENT_INVOICE_TEXT_INFO', '');
define('MODULE_PAYMENT_INVOICE_STATUS_TITLE', '启用发票请款(月结)');
define('MODULE_PAYMENT_INVOICE_STATUS_DESC', '您同意启用发票请款(月结)？');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_INVOICE_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_INVOICE_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_INVOICE_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_INVOICE_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_TITLE', '单笔订单金额下限');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_DESC', '客户要能使用该付款方式，单笔订单必须高于这个金额');
// BOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
define('MODULE_PAYMENT_INVOICE_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_INVOICE_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by comma)');
// EOF - Hendrik - 2010-08-09 - exlusion config for shipping modules

?>