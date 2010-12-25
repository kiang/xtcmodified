<?php
/* --------------------------------------------------------------
   $Id: coupon_admin.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(coupon_admin.php,v 1.1.2.5 2003/05/13); www.oscommerce.com
   
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

define('TOP_BAR_TITLE', '統計');
define('HEADING_TITLE', '折價券管理');
define('HEADING_TITLE_STATUS', '狀態：');
define('TEXT_CUSTOMER', '客戶：');
define('TEXT_COUPON', '折價券名稱');
define('TEXT_COUPON_ALL', '全部折價券');
define('TEXT_COUPON_ACTIVE', '有效的折價券');
define('TEXT_COUPON_INACTIVE', '無效的折價券');
define('TEXT_SUBJECT', '主題：');
define('TEXT_FROM', '從：');
define('TEXT_FREE_SHIPPING', '免運費');
define('TEXT_MESSAGE', '訊息：');
define('TEXT_SELECT_CUSTOMER', '選擇客戶');
define('TEXT_ALL_CUSTOMERS', '所有客戶');
define('TEXT_NEWSLETTER_CUSTOMERS', '訂閱電子報的客戶');
define('TEXT_CONFIRM_DELETE', '您確定要刪除這個折價券？');

define('TEXT_TO_REDEEM', '您可以在結帳時填入兌換碼，按下「兌換鈕」來兌換這個折價券');
define('TEXT_IN_CASE', ' 有任何疑問');
define('TEXT_VOUCHER_IS', '折價券兌換碼是 ');
define('TEXT_REMEMBER', '請妥善保存折價券兌換碼，如此才能享受折價券的優惠');
define('TEXT_VISIT', '當您蒞臨 ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' 輸入折價券兌換碼');

define('TABLE_HEADING_ACTION', '動作');

define('CUSTOMER_ID', '客戶 ID');
define('CUSTOMER_NAME', '客戶名稱');
define('REDEEM_DATE', '兌換日期');
define('IP_ADDRESS', 'IP 位址');

define('TEXT_REDEMPTIONS', '兌換');
define('TEXT_REDEMPTIONS_TOTAL', '總計');
define('TEXT_REDEMPTIONS_CUSTOMER', '兌換客戶');
define('TEXT_NO_FREE_SHIPPING', '沒有免運費');

define('NOTICE_EMAIL_SENT_TO', '說明：寄送電子郵件給: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '錯誤: 沒有選擇客戶名稱');
define('COUPON_NAME', '折價券名稱');
//define('COUPON_VALUE', '折價券價值');
define('COUPON_AMOUNT', '折價券金額');
define('COUPON_CODE', '折價券碼');
define('COUPON_STARTDATE', '開始日期');
define('COUPON_FINISHDATE', '結束日期');
define('COUPON_FREE_SHIP', '免運費');
define('COUPON_DESC', '折價券說明');
define('COUPON_MIN_ORDER', '使用折價券最低訂購金額');
define('COUPON_USES_COUPON', '每一個折價券的使用次數');
define('COUPON_USES_USER', '每一個客戶的使用折價券次數');
define('COUPON_PRODUCTS', '指定商品');
define('COUPON_CATEGORIES', '指定商品種類');
define('VOUCHER_NUMBER_USED', '使用次數');
define('DATE_CREATED', '建置日期');
define('DATE_MODIFIED', '修改日期');
define('TEXT_HEADING_NEW_COUPON', '新增折價券');
define('TEXT_NEW_INTRO', '請填入下列折價券資訊<br />');


define('COUPON_NAME_HELP', '折價券名稱');
define('COUPON_AMOUNT_HELP', '這個值是給此折價券的折扣，可以填入一個固定值，或是直接輸入折扣數，例如：<b>20%</b>.');
define('COUPON_CODE_HELP', '你可以自建一個兌換碼或是留空白，系統會自動產生一組兌換碼');
define('COUPON_STARTDATE_HELP', '起始日期');
define('COUPON_FINISHDATE_HELP', '結束日期');
define('COUPON_FREE_SHIP_HELP', '折價券訂單免運費（提示：這個數值會凌駕於「折價券總計模組」之上 但仍受限於「最低購物金額」）');
define('COUPON_DESC_HELP', '給消費者關於這個折價券的說明');
define('COUPON_MIN_ORDER_HELP', '能夠使用折價券之最低購物金額');
define('COUPON_USES_COUPON_HELP', '折價券最多使用次數留空白表示沒限制');
define('COUPON_USES_USER_HELP', '每一個使用者可以使用此折價券的次數，留空白表示沒限制');
define('COUPON_PRODUCTS_HELP', '多項商品共用此一折價卷時，使用逗號分開每一個商品 ID，留空白表示沒限制');
define('COUPON_CATEGORIES_HELP', '多個種類共用此一折價卷時，使用逗號分開每一個商品目錄 ID，留空白表示沒限制');
?>