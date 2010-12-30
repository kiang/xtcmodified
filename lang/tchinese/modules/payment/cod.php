<?php
/* -----------------------------------------------------------------------------------------
   $Id: cod.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.7 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (cod.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_TYPE_PERMISSION', 'cod');
define('MODULE_PAYMENT_COD_TEXT_TITLE', '貨到付款');
define('MODULE_PAYMENT_COD_TEXT_DESCRIPTION', '貨到付款');
define('MODULE_PAYMENT_COD_TEXT_INFO', '第一次交易之客戶，請另選其它付款方式。');
define('MODULE_PAYMENT_COD_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_COD_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_COD_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_COD_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_COD_STATUS_TITLE', '啟用貨到付款模組');
define('MODULE_PAYMENT_COD_STATUS_DESC', '您確定要啟用貨到付款模組？');
define('MODULE_PAYMENT_COD_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_COD_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
// BOF - Hendrik - 2010-07-15 - exlusion config for shipping modules
define('MODULE_PAYMENT_COD_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_COD_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by commas)');
// EOF - Hendrik - 2010-07-15 - exlusion config for shipping modules

?>