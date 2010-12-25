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


define('HEADING_TITLE', '禮券銷售管理');

define('TABLE_HEADING_CUSTOMERS', '客戶');
define('TABLE_HEADING_ORDERS_ID', '編號');
define('TABLE_HEADING_VOUCHER_VALUE', '禮券價值');
define('TABLE_HEADING_DATE_PURCHASED', '購買日期');
define('TABLE_HEADING_ACTION', '動作');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '您最近在我們的線上商店購買了禮券' . "\n"
                                          . '為了安全理由這禮券無法讓您立即使用' . "\n"
                                          . '但是禮券的價值是已經確定，您可以立即光臨我們的線上商店' . "\n"
                                          . '經由電子郵件將此禮券寄送給其他人' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', '您購買的禮券面額為 %s' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_COUPON_SUBJECT', '購買禮券');
?>