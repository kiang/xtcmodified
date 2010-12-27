<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_sent.php 1502 2010-11-16 18:13:52Z dokuman $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_sent.php,v 1.2 2003/02/18 00:15:52); www.oscommerce.com

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
define('HEADING_TITLE', '禮券/折價券郵寄統計');
define('TABLE_HEADING_ID', 'cID');
define('TABLE_HEADING_SENDERS_NAME', '寄件人名稱');
define('TABLE_HEADING_VOUCHER_VALUE', '禮券價值');
define('TABLE_HEADING_VOUCHER_CODE', '禮券密碼');
define('TABLE_HEADING_DATE_SENT', '傳送日期');
define('TABLE_HEADING_ACTION', '動作');
define('TEXT_INFO_SENDERS_ID', '寄件人 ID:');
define('TEXT_INFO_AMOUNT_SENT', '傳送總額:');
define('TEXT_INFO_DATE_SENT', '傳送日期:');
define('TEXT_INFO_VOUCHER_CODE', '禮券密碼:');
define('TEXT_INFO_EMAIL_ADDRESS', '電子郵件位址:');
define('TEXT_INFO_DATE_REDEEMED', '兌換日期:');
define('TEXT_INFO_IP_ADDRESS', 'IP 位置:');
define('TEXT_INFO_CUSTOMERS_ID', '客戶 Id:');
define('TEXT_INFO_NOT_REDEEMED', '未兌換禮券');
//BOF - DokuMan - 2010-08-10 - show customer's remaining credit
define('TEXT_INFO_REMAINING_CREDIT', '禮券餘額：');
//EOF - DokuMan - 2010-08-10 - show customer's remaining credit
define('TEXT_INFO_HEADING_DELETE_GV', '刪除折價券');
define('TEXT_DELETE_INTRO', '確定要刪除選擇的折價券？');
define('TABLE_HEADING_ADDRESSEE', '住址');
define('TEXT_VOUCHER_STATUS', '狀態');
define('STATUS_ICON_STATUS_GREEN', '已兌換');
define('STATUS_ICON_STATUS_RED', '尚未兌換');
?>