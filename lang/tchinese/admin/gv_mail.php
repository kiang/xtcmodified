<?php
/* --------------------------------------------------------------
   $Id: gv_mail.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_mail.php,v 1.5.2.2 2003/04/27); www.oscommerce.com

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

define('HEADING_TITLE', '郵寄禮券給客戶');

define('TEXT_CUSTOMER', '客戶：');
define('TEXT_SUBJECT', '摘要：');
define('TEXT_FROM', '從：');
define('TEXT_TO', '郵寄給：');
define('TEXT_AMOUNT', '禮券面額');
define('TEXT_MESSAGE', '訊息：');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">使用此欄位寄給單一特定客戶，否則請使用上方下拉式選單選擇郵寄對象</span>');
define('TEXT_SELECT_CUSTOMER', '選擇客戶');
define('TEXT_ALL_CUSTOMERS', '所有客戶');
define('TEXT_NEWSLETTER_CUSTOMERS', '所有訂閱電子報客戶');

define('NOTICE_EMAIL_SENT_TO', '備註：電子郵件寄給： %s');
define('ERROR_NO_CUSTOMER_SELECTED', '錯誤：沒有選擇客戶');
define('ERROR_NO_AMOUNT_SELECTED', '錯誤: 禮券面額欄位未填');

define('TEXT_GV_WORTH', '禮券面額價值');
define('TEXT_TO_REDEEM', '兌換此禮券-請按下連結--輸入正確的兌換碼--');
define('TEXT_WHICH_IS', ' 哪一些是');
define('TEXT_IN_CASE', ' 有任何疑問');
define('TEXT_OR_VISIT', '或蒞臨');
define('TEXT_ENTER_CODE', ' 結帳時輸入正確的兌換碼');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '您最近有從我們的線上商店購買一份禮券，為了安全起見沒有立即幫您建立這份禮券，商店目前已經釋出這份禮券。');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . '禮券的價值是 %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . '您現在可以蒞臨我們的商店，可以在登入後將此禮券寄給您的親友。');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>