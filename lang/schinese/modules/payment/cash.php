<?php
/* -----------------------------------------------------------------------------------------
   $Id: cash.php 1102 2005-07-24 15:05:38Z mz $

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
define('MODULE_PAYMENT_CASH_TEXT_DESCRIPTION', '现金交易');
define('MODULE_PAYMENT_CASH_TEXT_TITLE', '现金交易');
define('MODULE_PAYMENT_CASH_TEXT_INFO', '');
define('MODULE_PAYMENT_CASH_STATUS_TITLE', '使用现金交易模组');
define('MODULE_PAYMENT_CASH_STATUS_DESC', '您确定要使用现金交易模组？');
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
define('MODULE_PAYMENT_CASH_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_CASH_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_CASH_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_CASH_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_CASH_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_CASH_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
// BOF - Hendrik - 2010-07-15 - exlusion config for shipping modules
define('MODULE_PAYMENT_CASH_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_CASH_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by comma)');
// EOF - Hendrik - 2010-07-15 - exlusion config for shipping modules

?>