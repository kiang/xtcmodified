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
define('TOP_REFERRERS', 'Top 10 Referrers');
define('TOP_HOSTS', 'Top Ten Hosts');
define('LIST_ALL', 'List all');
define('SEARCH_ENGINE_SUMMARY', 'Search Engine Summary');
define('SEARCH_ENGINE_SUMMARY_TEXT', ' ( Percentage is based on total visits referred from search engines. )');
define('SEARCH_QUERY_SUMMARY', 'Search Query Summary');
define('SEARCH_QUERY_SUMMARY_TEXT', ' ) ( Percentage is based on total search query strings logged. )');
define('REFERRING_URL', 'Reffering Url');
define('HITS', 'Hits');
define('PERCENTAGE', 'Percentage');
define('HOST', 'Host');
// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF
// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Orders');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_TITLE_SEARCH', 'Order-Nr.:');
define('HEADING_TITLE_STATUS', 'Status:');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Customers');
define('TABLE_HEADING_ORDER_TOTAL', 'Total value');
define('TABLE_HEADING_DATE_PURCHASED', 'Order Date');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Quantity');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Product-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Product');
define('TABLE_HEADING_TAX', 'VAT');
define('TABLE_HEADING_TOTAL', 'Total sum');
define('TABLE_HEADING_DATE_ADDED', 'added on:');
define('ENTRY_CUSTOMER', 'Customer:');
define('TEXT_DATE_ORDER_CREATED', 'Order Date:');
define('TEXT_INFO_PAYMENT_METHOD', 'Payment method:');
define('TEXT_VALIDATING', 'Not validated');
define('TEXT_ALL_ORDERS', 'All orders');
define('TEXT_NO_ORDER_HISTORY', 'No order history available');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last change');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS', 'Customers total');
define('TOTAL_SUBSCRIBERS', 'Newsletter 	subscriptions');
define('TOTAL_PRODUCTS_ACTIVE', 'Active products');
define('TOTAL_PRODUCTS_INACTIVE', 'Inactive products');
define('TOTAL_PRODUCTS', 'Products total');
define('TOTAL_SPECIALS', 'Specials');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Unassigned');
define('TURNOVER_TODAY', 'Turnover today');
define('TURNOVER_YESTERDAY', 'Turnover yesterday');
define('TURNOVER_THIS_MONTH', 'this month');
define('TURNOVER_LAST_MONTH', 'last month (all)');
define('TURNOVER_LAST_MONTH_PAID', 'last month (paid)');
define('TOTAL_TURNOVER', 'Total turnover');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', '歡迎');define('HEADING_TITLE_SEARCH', 'Order-Nr.:');
define('HEADING_TITLE_STATUS', 'Status:');
define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
define('TABLE_HEADING_CUSTOMERS', 'Customers');
define('TABLE_HEADING_ORDER_TOTAL', 'Total value');
define('TABLE_HEADING_DATE_PURCHASED', 'Order Date');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Quantity');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Product-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Product');
define('TABLE_HEADING_TAX', 'VAT');
define('TABLE_HEADING_TOTAL', 'Total sum');
define('TABLE_HEADING_DATE_ADDED', 'added on:');
define('ENTRY_CUSTOMER', 'Customer:');
define('TEXT_DATE_ORDER_CREATED', 'Order Date:');
define('TEXT_INFO_PAYMENT_METHOD', 'Payment method:');
define('TEXT_VALIDATING', 'Not validated');
define('TEXT_ALL_ORDERS', 'All orders');
define('TEXT_NO_ORDER_HISTORY', 'No order history available');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last change');
// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS', 'Customers total');
define('TOTAL_SUBSCRIBERS', 'Newsletter 	subscriptions');
define('TOTAL_PRODUCTS_ACTIVE', 'Active products');
define('TOTAL_PRODUCTS_INACTIVE', 'Inactive products');
define('TOTAL_PRODUCTS', 'Products total');
define('TOTAL_SPECIALS', 'Specials');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Unassigned');
define('TURNOVER_TODAY', 'Turnover today');
define('TURNOVER_YESTERDAY', 'Turnover yesterday');
define('TURNOVER_THIS_MONTH', 'this month');
define('TURNOVER_LAST_MONTH', 'last month (all)');
define('TURNOVER_LAST_MONTH_PAID', 'last month (paid)');
define('TOTAL_TURNOVER', 'Total turnover');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Welcome to the Admin Area');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'Users Online');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Please click user name for details***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'Online Since');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Name');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Last Click');
define('TABLE_HEADING_USERS_ONLINE_INFO', '資訊');
define('TABLE_CELL_USERS_ONLINE_INFO', 'More...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'New Customers');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(Last 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Last Name');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'First Name');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'Registered');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', '編輯');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Orders');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', '編輯...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'Delete...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'Show...');
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
