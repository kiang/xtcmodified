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
define('HEADING_TITLE', '礼券/折价券邮寄统计');
define('TABLE_HEADING_ID', 'cID');
define('TABLE_HEADING_SENDERS_NAME', '寄件人名称');
define('TABLE_HEADING_VOUCHER_VALUE', '礼券价值');
define('TABLE_HEADING_VOUCHER_CODE', '礼券密码');
define('TABLE_HEADING_DATE_SENT', '传送日期');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_INFO_SENDERS_ID', '寄件人 ID:');
define('TEXT_INFO_AMOUNT_SENT', '传送总额:');
define('TEXT_INFO_DATE_SENT', '传送日期:');
define('TEXT_INFO_VOUCHER_CODE', '礼券密码:');
define('TEXT_INFO_EMAIL_ADDRESS', '电子邮件地址:');
define('TEXT_INFO_DATE_REDEEMED', '兑换日期:');
define('TEXT_INFO_IP_ADDRESS', 'IP 位置:');
define('TEXT_INFO_CUSTOMERS_ID', '客户 Id:');
define('TEXT_INFO_NOT_REDEEMED', '未兑换礼券');
//BOF - DokuMan - 2010-08-10 - show customer's remaining credit
define('TEXT_INFO_REMAINING_CREDIT', 'Remaining credit:');
//EOF - DokuMan - 2010-08-10 - show customer's remaining credit
define('TEXT_INFO_HEADING_DELETE_GV', 'Delete Voucher');
define('TEXT_DELETE_INTRO', 'Would you like to delete the selected voucher?');
define('TABLE_HEADING_ADDRESSEE', 'Addressee');
define('TEXT_VOUCHER_STATUS', 'Status');
define('STATUS_ICON_STATUS_GREEN', 'redeemed');
define('STATUS_ICON_STATUS_RED', 'until today not redeemed');
?>