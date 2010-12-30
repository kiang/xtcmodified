<?php
/* --------------------------------------------------------------
   $Id: orders.php 1573 2010-12-10 20:18:27Z web28 $   

   XT-Commerce - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce; www.oscommerce.com 
   (c) 2003      nextcommerce; www.nextcommerce.org
   (c) 2006      xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('TEXT_BANK', '銀行列表');
define('TEXT_BANK_OWNER', '銀行帳戶：');
define('TEXT_BANK_NUMBER', '銀行帳號：');
define('TEXT_BANK_BLZ', '銀行代碼：');
define('TEXT_BANK_NAME', '銀行名稱：');
define('TEXT_BANK_FAX', '傳真銀行授權');
define('TEXT_BANK_STATUS', '確認狀態：');
define('TEXT_BANK_PRZ', '認證方式：');
define('TEXT_BANK_ERROR_1', '帳號與銀行代碼不符合！<br />再試試！');
define('TEXT_BANK_ERROR_2', '對不起, 我們無法驗證您的帳號！');
define('TEXT_BANK_ERROR_3', '帳號沒有驗證! 驗證方式沒有生效');
define('TEXT_BANK_ERROR_4', '帳號無法通過驗證!<br />再試試！');
define('TEXT_BANK_ERROR_5', '銀行代碼錯誤!<br />再試試！');
define('TEXT_BANK_ERROR_8', '銀行代碼不符合或是銀行尚未授權！');
define('TEXT_BANK_ERROR_9', '沒有授權帳號！');
define('TEXT_BANK_ERRORCODE', '錯誤碼：');
define('HEADING_TITLE', '訂單');
define('HEADING_TITLE_SEARCH', '訂單序號：');
define('HEADING_TITLE_STATUS', '狀態：');
define('TABLE_HEADING_COMMENTS', '意見欄');
define('TABLE_HEADING_CUSTOMERS', '客戶');
define('TABLE_HEADING_ORDER_TOTAL', '訂單總計');
define('TABLE_HEADING_DATE_PURCHASED', '購買日期');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Qty.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Products');
define('TABLE_HEADING_TAX', 'Tax');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Price (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Price (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy');
define('TABLE_HEADING_STATUS', 'Status');define('TABLE_HEADING_ACTION', '動作');
define('TABLE_HEADING_QUANTITY', '數量');
define('TABLE_HEADING_PRODUCTS_MODEL', '型號');
define('TABLE_HEADING_PRODUCTS', '品名');
define('TABLE_HEADING_TAX', '稅');
define('TABLE_HEADING_TOTAL', '總計');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '價格（未稅）');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '價格（含稅）');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '總計（未稅）');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '總計（含稅）');
define('TABLE_HEADING_AFTERBUY', '交易資訊(AFTER BUY)');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', '通知客戶');
define('TABLE_HEADING_DATE_ADDED', '新增日期');
define('ENTRY_CUSTOMER', '客戶：');
define('ENTRY_SOLD_TO', '賣給：');
define('ENTRY_STREET_ADDRESS', '地址：');
define('ENTRY_SUBURB', '鄰／里：');
define('ENTRY_CITY', '鄉／鎮：');
define('ENTRY_POST_CODE', '郵遞區號：');
define('ENTRY_STATE', '縣市：');
define('ENTRY_COUNTRY', '國家：');
define('ENTRY_TELEPHONE', '電話：');
define('ENTRY_EMAIL_ADDRESS', '電子郵件：');
define('ENTRY_DELIVERY_TO', '郵寄給：');
define('ENTRY_SHIP_TO', '運送給：');
define('ENTRY_SHIPPING_ADDRESS', '出貨地址:');
define('ENTRY_BILLING_ADDRESS', '帳單地址:');
define('ENTRY_PAYMENT_METHOD', '付款方式：');
define('ENTRY_CREDIT_CARD_TYPE', '信用卡別：');
define('ENTRY_CREDIT_CARD_OWNER', '持卡人：');
define('ENTRY_CREDIT_CARD_NUMBER', '卡號：');
define('ENTRY_CREDIT_CARD_CVV', '安全碼 (CVV))：');
define('ENTRY_CREDIT_CARD_EXPIRES', '信用卡過期：');
define('ENTRY_SUB_TOTAL', '小計:');
define('ENTRY_TAX', '稅：');
define('ENTRY_SHIPPING', '購物：');
define('ENTRY_TOTAL', '總計：');
define('ENTRY_DATE_PURCHASED', '購買日期：');
define('ENTRY_STATUS', '狀態：');
define('ENTRY_DATE_LAST_UPDATED', '上次更新日期：');
define('ENTRY_NOTIFY_CUSTOMER', '通知客戶：');
define('ENTRY_NOTIFY_COMMENTS', '信件內含意見欄：');
define('ENTRY_PRINTABLE', '列印發票');
define('TEXT_INFO_HEADING_DELETE_ORDER', '刪除訂單');
define('TEXT_INFO_DELETE_INTRO', '確定要刪除這筆訂單？');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '回補售出之商品數量');
define('TEXT_DATE_ORDER_CREATED', '新增日期：');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '上次修改：');
define('TEXT_INFO_PAYMENT_METHOD', '付款方式：');
define('TEXT_ALL_ORDERS', '所有訂單');
define('TEXT_NO_ORDER_HISTORY', '無訂單紀錄');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', ' 訂單狀態更新');
define('EMAIL_TEXT_ORDER_NUMBER', '訂單編號：');
define('EMAIL_TEXT_INVOICE_URL', '發票內容：');
define('EMAIL_TEXT_DATE_ORDERED', '訂單日期：');
define('EMAIL_TEXT_STATUS_UPDATE', '您的訂單已更新為下列狀態' . "\n\n" . '新狀態是： %s' . "\n\n" . '如有任何疑問，請直接回信告訴我們' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', '您的意見如下：' . "\n\n%s\n\n");
define('ERROR_ORDER_DOES_NOT_EXIST', '錯誤：訂單不存在');
define('SUCCESS_ORDER_UPDATED', '完成：訂單已更新完成');
define('WARNING_ORDER_NOT_UPDATED', '注意： 此筆訂單狀態沒有改變，無法更新');
define('TABLE_HEADING_DISCOUNT', '折扣');
define('ENTRY_CUSTOMERS_GROUP', '客戶群組:');
define('ENTRY_CUSTOMERS_VAT_ID', '統一編號：');
define('TEXT_VALIDATING', '尚未生效');
// BOF - Tomcraft - 2010-04-22 - Added a missing language definition
define('TEXT_PRODUCTS', '產品');
// EOF - Tomcraft - 2010-04-22 - Added a missing language definition
//BOF - web28 - 2010-03-20 - Send Order by Admin
define('COMMENT_SEND_ORDER_BY_ADMIN', '訂單資訊已經送出'); //ACHTUNG hier  keine HTML-Entities verwenden
define('BUTTON_ORDER_CONFIRMATION', '發送確認');
define('SUCCESS_ORDER_SEND', '訂單確認已經送出');
//EOF - web28 - 2010-03-20 - Send Order by Admin
// web28 2010-12-07 add new defines
define('ENTRY_CUSTOMERS_ADDRESS', 'Customers Address:');
define('TEXT_ORDER', '訂單：');
define('TEXT_ORDER_HISTORY', '訂單記錄：');
define('TEXT_ORDER_STATUS', '訂單狀態：');
?>