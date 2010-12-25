<?php
/* --------------------------------------------------------------
   $Id: gv_queue.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_queue.php,v 1.2.2.1 2003/04/27); www.oscommerce.com

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
   ---------------------------------------------------------------------------------------  */


define('HEADING_TITLE', '礼券销售管理');

define('TABLE_HEADING_CUSTOMERS', '客户');
define('TABLE_HEADING_ORDERS_ID', '编号');
define('TABLE_HEADING_VOUCHER_VALUE', '礼券价值');
define('TABLE_HEADING_DATE_PURCHASED', '购买日期');
define('TABLE_HEADING_ACTION', '动作');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '您最近在我们的联机商店购买了礼券' . "\n"
                                          . '为了安全理由这礼券无法让您立即使用' . "\n"
                                          . '但是礼券的价值是已经确定，您可以立即光临我们的联机商店' . "\n"
                                          . '经由电子邮件将此礼券寄送给其他人' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', '您购买的礼券面额为 %s' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_COUPON_SUBJECT', '购买礼券');
?>