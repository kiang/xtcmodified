<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_coupon.php 1243 2010-08-31 15:27:48Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_coupon.php 899 2005-04-29)

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('MODULE_ORDER_TOTAL_COUPON_TITLE', '折價券');
define('MODULE_ORDER_TOTAL_COUPON_HEADER', '禮券/折價券');
define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', '折價券');
define('SHIPPING_NOT_INCLUDED', ' [不包含運費]');
define('TAX_NOT_INCLUDED', ' [不包含稅金]');
define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
define('ERROR_NO_INVALID_REDEEM_COUPON', '無效的折價券碼');
//BOF - DokuMan - 2010-08-31 - constants already defined in english.php
//define('ERROR_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
//define('ERROR_INVALID_FINISDATE_COUPON', 'This coupon has expired');
//define('ERROR_INVALID_USES_COUPON', 'This coupon could only be used ');
//define('TIMES', ' times.');
//define('ERROR_INVALID_USES_USER_COUPON', 'You have used the coupon the maximum number of times allowed per customer.');
//define('REDEEMED_COUPON', 'a coupon worth ');
//EOF - DokuMan - 2010-08-31 - constants already defined in english.php
define('REDEEMED_MIN_ORDER', 'on orders over ');
define('REDEEMED_RESTRICTIONS', ' [限制使用折價券商品/商品種類]');
define('TEXT_ENTER_COUPON_CODE', '輸入折價券兌換碼&nbsp;&nbsp;');
define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', '顯示折價券總計');
define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', '顯示折價券總計?');
define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', '顯示順序');
define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', '顯示時的順序.');
define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', '包含運費');
define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', '計算時包含運費');
define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', '包含稅金');
define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', '計算時包含稅金.');
define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', '稅金計算方式');
define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', '選擇稅金計算方式');
define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', '稅別');
define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', '折價券使用稅別');
//BOF - web28 - 2010-06-20 - no discount for special offers
define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_TITLE', 'Discount for special offers');
define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_DESC', 'Allowed discount for special offers');
//EOF - web28 - 2010-06-20 - no discount for special offers

?>