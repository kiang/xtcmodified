<?php
/* --------------------------------------------------------------
   $Id: start.php 890 2005-04-27 11:34:12Z gwinger $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2003	 nextcommerce (start.php,v 1.1 2003/08/19); www.nextcommerce.org
   
   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('ATTENTION_TITLE', '! 注意 !');
// text for Warnings:
define('TEXT_FILE_WARNING', '<b>注意:</b><br />下列檔案允許被寫入，基於安全的理由，在 unix-like 環境請將檔案權限改為<b>(644)</b> 在 Windows 環境請將檔案設成<b>唯讀</b>');
define('TEXT_FOLDER_WARNING', '<b>注意:</b><br />下列資料夾必須為可讀寫，在 unix-like 環境請將資料夾權限改為 <b>(777)</b>，在 Winodws 環境請將資料夾改為<b>可讀寫</b>');
define('REPORT_GENERATED_FOR', '報表：');
define('REPORT_GENERATED_ON', '產生日期：');
define('FIRST_VISIT_ON', '首次瀏覽：');
define('HEADING_QUICK_STATS', '摘要');
define('VISITS_TODAY', '今日訪問量：');
define('UNIQUE_TODAY', '今日不重複訪問量：');
define('DAILY_AVERAGE', '日平均：');
define('TOTAL_VISITS', '總訪問量：');
define('TOTAL_UNIQUE', '不重複訪問總量：');
define('TOP_REFFERER', '熱門來源網站：');
define('TOP_ENGINE', '熱門搜尋引擎：');
define('DAY_SUMMARY', '30 天摘要：');
define('VERY_LAST_VISITORS', '最近 10 個訪客：');
define('TODAY_VISITORS', '今日訪客：');
define('LAST_VISITORS', '最近 100 個訪客：');
define('ALL_LAST_VISITORS', '所有訪客：');
define('DATE_TIME', '日期/時間：');
define('IP_ADRESS', 'IP 位置：');
define('OPERATING_SYSTEM', '作業系統：');
define('REFFERING_HOST', '來源網站：');
define('ENTRY_PAGE', '進入頁面：');
define('HOURLY_TRAFFIC_SUMMARY', '每小時流量摘要');
define('WEB_BROWSER_SUMMARY', '網頁瀏覽器摘要');
define('OPERATING_SYSTEM_SUMMARY', '作業系統摘要');
define('TOP_REFERRERS', '10 大熱門來源');
define('TOP_HOSTS', '10 大熱門主機');
define('LIST_ALL', '全部顯示');
define('SEARCH_ENGINE_SUMMARY', '搜尋引擎摘要');
define('SEARCH_ENGINE_SUMMARY_TEXT', ' ( 比例是基於來自搜尋引擎的訪問數量加總 )');
define('SEARCH_QUERY_SUMMARY', '查詢辭彙摘要');
define('SEARCH_QUERY_SUMMARY_TEXT', ' ) ( 比例是基於已記錄的查詢關鍵字數量 )');
define('REFERRING_URL', '來源網址');
define('HITS', '點擊次數');
define('PERCENTAGE', '比例');
define('HOST', '主機');
// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF
// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Orders');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', '訂單編號：');
define('HEADING_TITLE_STATUS', '狀態：');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', '客戶');
define('TABLE_HEADING_ORDER_TOTAL', '總計');
define('TABLE_HEADING_DATE_PURCHASED', '訂購日期');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_QUANTITY', '數量');
define('TABLE_HEADING_PRODUCTS_MODEL', '產品編號');
define('TABLE_HEADING_PRODUCTS', '產品');
define('TABLE_HEADING_TAX', 'VAT');
define('TABLE_HEADING_TOTAL', '總計');
define('TABLE_HEADING_DATE_ADDED', '加入日期：');
define('ENTRY_CUSTOMER', '客戶：');
define('TEXT_DATE_ORDER_CREATED', '訂購日期：');
define('TEXT_INFO_PAYMENT_METHOD', '付款方式：');
define('TEXT_VALIDATING', '未確認');
define('TEXT_ALL_ORDERS', '所有訂單');
define('TEXT_NO_ORDER_HISTORY', '沒有任何訂購記錄');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '最後更新');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS', '客戶數量');
define('TOTAL_SUBSCRIBERS', '電子報訂閱');
define('TOTAL_PRODUCTS_ACTIVE', '啟用中產品數量');
define('TOTAL_PRODUCTS_INACTIVE', '停用中產品數量');
define('TOTAL_PRODUCTS', '產品總數');
define('TOTAL_SPECIALS', '特價商品');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', '未指定');
define('TURNOVER_TODAY', '今天週轉率');
define('TURNOVER_YESTERDAY', '昨天週轉率');
define('TURNOVER_THIS_MONTH', '本月');
define('TURNOVER_LAST_MONTH', '上個月 (全部)');
define('TURNOVER_LAST_MONTH_PAID', '上個月 (已付款)');
define('TOTAL_TURNOVER', '週轉率總計');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', '歡迎來到管理區');
// users online
define('TABLE_CAPTION_USERS_ONLINE', '線上會員');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***點選帳號可以看到更多細節***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', '登入時間');
define('TABLE_HEADING_USERS_ONLINE_NAME', '名稱');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', '最新瀏覽');
define('TABLE_HEADING_USERS_ONLINE_INFO', '資訊');
define('TABLE_CELL_USERS_ONLINE_INFO', '更多...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', '新客戶');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(前 15 個)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', '姓氏');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', '姓名');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', '註冊日期');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', '編輯');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', '訂單');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', '編輯...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', '刪除...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', '顯示...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', '新訂單');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(最新 20 筆)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', '訂單編號');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', '訂購日期');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', '客戶名稱');
define('TABLE_HEADING_NEW_ORDERS_EDIT', '編輯');
define('TABLE_HEADING_NEW_ORDERS_DELETE', '刪除');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', '參觀');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', '生日');
define('TABLE_CELL_BIRTHDAYS_TODAY', '今天生日的顧客');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', '這個月生日的顧客');
// EOF - vr 2010-04-01 -  Added missing definitions

?>
