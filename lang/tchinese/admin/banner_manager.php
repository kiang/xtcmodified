<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 30 2006-12-27 16:34:34Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   -------------------------------------------------------------- */

define('HEADING_TITLE', '廣告總管');

define('TABLE_HEADING_BANNERS', '廣告');
define('TABLE_HEADING_GROUPS', '群組');
define('TABLE_HEADING_STATISTICS', '瀏覽次數 / 點閱次數');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_ACTION', '動作');

define('TEXT_BANNERS_TITLE', '廣告名稱：');
define('TEXT_BANNERS_URL', '廣告連結：');
define('TEXT_BANNERS_GROUP', '廣告群組：');
define('TEXT_BANNERS_NEW_GROUP', ', 或在下方輸入一個新的群組');
define('TEXT_BANNERS_IMAGE', '圖片：');
define('TEXT_BANNERS_IMAGE_LOCAL', ', 或在下方輸入一個本機檔案');
define('TEXT_BANNERS_IMAGE_TARGET', '圖片目標 (儲存到)：');
define('TEXT_BANNERS_HTML_TEXT', 'HTML語法：');
define('TEXT_BANNERS_EXPIRES_ON', '過期日：');
define('TEXT_BANNERS_OR_AT', ', 或是經過');
define('TEXT_BANNERS_IMPRESSIONS', '瀏覽次數');
define('TEXT_BANNERS_SCHEDULED_AT', '預定日期：');
define('TEXT_BANNERS_BANNER_NOTE', '<b>廣告提示：</b><ul><li>廣告可以使用圖片或HTML語法，但兩者無法同時使用</li><li>HTML語法與圖片同時存在時，HTML語法優先</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>圖片提示：</b><ul><li>上傳圖片到資料夾，使用者必須有寫入該資料夾的權限！</li><li>如果你不是要上傳圖片到 webserver 請不要填 \'儲存到\' 那一欄。(例如,你用的是本地(server端)的圖片).</li><li> \'儲存到\' 欄位裡所填的必須是一個已經存在的資料夾且結尾必須加反斜線(例, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>過期提示：</b><ul><li>兩個欄位只能使用其中一個</li><li>如果不設定過期日，將該欄留白即可</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>預定日期提示：</b><ul><li>如果設定預定日期，廣告會在到期日啟動</li><li>所有預定日期的廣告，一開始都會被設定為不啟動，直到每一個廣告的到期日再逐一啟動</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', '新增日期：');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '預定日期： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '過期日： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '過期在： <b>%s</b> 瀏覽次數');
define('TEXT_BANNERS_STATUS_CHANGE', '狀態變更： %s');

define('TEXT_BANNERS_DATA', '資<br />料');
define('TEXT_BANNERS_LAST_3_DAYS', '過去三天');
define('TEXT_BANNERS_BANNER_VIEWS', '廣告瀏覽數');
define('TEXT_BANNERS_BANNER_CLICKS', '廣告擊點數');

define('TEXT_INFO_DELETE_INTRO', '確定要刪除這個廣告？');
define('TEXT_INFO_DELETE_IMAGE', '刪除廣告圖片');

define('SUCCESS_BANNER_INSERTED', '完成：廣告已經加入');
define('SUCCESS_BANNER_UPDATED', '完成：廣告已經更新');
define('SUCCESS_BANNER_REMOVED', '完成：廣告已經移除');
define('SUCCESS_BANNER_STATUS_UPDATED', '完成：廣告狀態已經更新');

define('ERROR_BANNER_TITLE_REQUIRED', '錯誤：廣告名稱沒有輸入');
define('ERROR_BANNER_GROUP_REQUIRED', '錯誤：廣告群組沒有輸入');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '錯誤：目標資料夾不存在');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '錯誤：目標資料夾無寫入權限');
define('ERROR_IMAGE_DOES_NOT_EXIST', '錯誤：圖片不存在');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '錯誤：圖片無法移除');
define('ERROR_UNKNOWN_STATUS_FLAG', '錯誤：不明的狀態旗標');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '錯誤：Graphs 資料夾不存在，請在\'images\' 底下新增 \'graphs\' 資料夾');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '錯誤：Graphs 資料夾無寫入權限');
?>