<?php
/* --------------------------------------------------------------
   $Id: ot_coupon.php 32 2006-12-28 13:15:17Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com

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

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', '折价券');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', '礼券/折价券');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', '折价券');
  define('SHIPPING_NOT_INCLUDED', ' [不包含运费]');
  define('TAX_NOT_INCLUDED', ' [不包含税金]');
  define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
  define('ERROR_NO_INVALID_REDEEM_COUPON', '无效的折价券码');
  define('ERROR_INVALID_STARTDATE_COUPON', '这个折价券尚不能使用');
  define('ERROR_INVALID_FINISDATE_COUPON', '这个折价券有使用期限');
  define('ERROR_INVALID_USES_COUPON', '这个折价券已经超过 ');  
  define('TIMES', ' 次使用限制.');
  define('ERROR_INVALID_USES_USER_COUPON', '您使用折价券的次数,已经超过每一个客户使用次数的限制.'); 
  define('REDEEMED_COUPON', '折价券值 ');  
  define('REDEEMED_MIN_ORDER', '订单超过');  
  define('REDEEMED_RESTRICTIONS', ' [限制使用折价券商品/商品种类]');  
  define('TEXT_ENTER_COUPON_CODE', '输入折价券兑换码&nbsp;&nbsp;');
  
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', '显示折价券总计');
  define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', '显示折价券总计?');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', '显示顺序');
  define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', '显示时的顺序.');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', '包含运费');
  define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', '计算时包含运费');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', '包含税金');
  define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', '计算时包含税金.');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', '税金计算方式');
  define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', '选择税金计算方式');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', '税别');
  define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', '折价券使用税别');
?>