<?php
/* --------------------------------------------------------------
   $Id: categories.php,v 1.7 2004/04/15 18:22:16 oldpa Exp $

   TWE-Commerce - community made shopping   http://www.oldpa.com.tw
Copyright (c) 2003 TWE-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org   (c) 2003	 xt-commerce  www.xt-commerce.com
   Released under the GNU General Public License 
--------------------------------------------------------------*/
define('TEXT_EDIT_STATUS', 'estatus');
define('HEADING_TITLE', 'Noticias directorio / news');
define('HEADING_TITLE_SEARCH', 'Buscar:');
define('HEADING_TITLE_GOTO', 'ir a la');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Noticias directorio / news');
define('TABLE_HEADING_ACTION', 'acción');
define('TABLE_HEADING_STATUS', 'estatus');
define('TABLE_HEADING_STOCK','stock');

define('TEXT_WARN_MAIN','Principal');
define('TEXT_WARN_ATTRIBUTE','avisar atributo');
define('TEXT_NEW_PRODUCT', '新聞在 &quot;%s&quot;');
define('TEXT_CATEGORIES', '新聞目錄：');
define('TEXT_SUBCATEGORIES', '新聞子目錄：');
define('TEXT_PRODUCTS', '新聞：');
define('TEXT_PRODUCTS_PRICE_INFO', '價格：');
define('TEXT_PRODUCTS_TAX_CLASS', '稅別：');
define('TEXT_PRODUCTS_AVERAGE_RATING', '平均評等：');
define('TEXT_PRODUCTS_QUANTITY_INFO', '數量：');
define('TEXT_DATE_ADDED', '新增日期：');
define('TEXT_DATE_AVAILABLE', '發佈日期：');
define('TEXT_LAST_MODIFIED', '最後修改日期：');
define('TEXT_IMAGE_NONEXISTENT', '沒有圖片');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '請新增一個新聞目錄或新聞<br>&nbsp;<br><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', '更多資訊息,請到新聞 <a href="http://%s" target="blank"><u>網頁</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', '本新聞加入新聞目錄日期： %s');
define('TEXT_PRODUCT_DATE_AVAILABLE', '本新聞預定入庫日期： %s');
define('TEXT_CHOOSE_INFO_TEMPLATE', '新聞資訊樣式Product-Info Template:');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', '新聞選項樣式Product-Optionen Template:');
define('TEXT_SELECT', '請選擇:');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', '折扣設定:');
define('TEXT_EDIT_INTRO', '請做適當修改');
define('TEXT_EDIT_CATEGORIES_ID', '新聞目錄編號：');
define('TEXT_EDIT_CATEGORIES_NAME', '新聞目錄名稱：');
define('TEXT_EDIT_CATEGORIES_IMAGE', '新聞目錄圖片：');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', '新聞目錄說明:');
define('TEXT_EDIT_SORT_ORDER', '排列順序：');

define('TEXT_INFO_COPY_TO_INTRO', '請選擇一個您想將本新聞複製到那裡的新聞目錄');
define('TEXT_INFO_CURRENT_CATEGORIES', '現在新聞目錄：');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '新增新聞目錄');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '編輯新聞目錄');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '刪除新聞目錄');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '搬移新聞目錄');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '刪除新聞');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '新增新聞');
define('TEXT_INFO_HEADING_COPY_TO', '複製到');

define('TEXT_DELETE_CATEGORY_INTRO', '確定要刪除這個新聞目錄？');
define('TEXT_DELETE_PRODUCT_INTRO', '確定要永久刪除這個新聞？');

define('TEXT_DELETE_WARNING_CHILDS', '<b>注意：</b> 這個新聞目錄內尚有 %s 個子新聞目錄！');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>注意：</b> 這個新聞目錄內尚有 %s 個新聞！');

define('TEXT_MOVE_PRODUCTS_INTRO', '請選擇一個要放 <b>%s</b> 的新聞分類');
define('TEXT_MOVE_CATEGORIES_INTRO', '請選擇一個要放 <b>%s</b> 的新聞分類');
define('TEXT_MOVE', '搬移<b>%s</b>到：');

define('TEXT_NEW_CATEGORY_INTRO', '<br>請填寫下列新新聞目錄資料');
define('TEXT_CATEGORIES_NAME', '新聞目錄名稱：');
define('TEXT_CATEGORIES_IMAGE', '新聞目錄圖片：');

define('TEXT_META_TITLE', '新聞 Meta 標頭:');
define('TEXT_META_DESCRIPTION', '新聞 Meta 說明:');
define('TEXT_META_KEYWORDS', '新聞 Meta 關鍵字:');

define('TEXT_SORT_ORDER', '排序順序；');

define('TEXT_PRODUCTS_STATUS', '新聞狀態：');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '上架日期：');
define('TEXT_PRODUCT_AVAILABLE', '現貨');
define('TEXT_PRODUCT_NOT_AVAILABLE', '缺貨');
define('TEXT_PRODUCTS_MANUFACTURER', '新聞作者：');
define('TEXT_PRODUCTS_NAME', '標題：');
define('TEXT_PRODUCTS_DESCRIPTION', '新聞內容：');
define('TEXT_PRODUCTS_QUANTITY', '數量：');
define('TEXT_PRODUCTS_MODEL', '新聞主旨：');
define('TEXT_PRODUCTS_IMAGE', '新聞圖片：');
define('TEXT_PRODUCTS_MEDIA_IMAGE', '新聞影片：');
define('TEXT_PRODUCTS_URL', '新聞網址：');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(不需打 http://)</small>');
define('TEXT_PRODUCTS_PRICE', '新聞價格:');
define('TEXT_PRODUCTS_WEIGHT', '重量：');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', '摘要：');
define('EMPTY_CATEGORY', '空新聞目錄');

define('TEXT_HOW_TO_COPY', '複製方式：');
define('TEXT_COPY_AS_LINK', '新聞連結');
define('TEXT_COPY_AS_DUPLICATE', '新聞複製');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '錯誤：您無法在同一個新聞目錄內作新聞連結 ！');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '錯誤：新聞目錄圖片資料夾無法寫入(權限)：' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '錯誤：新聞目錄圖片的資料夾不存在： ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', '錯誤: 資料夾無法移動到子資料夾內');
define('ENTRY_CUSTOMERS_STATUS', '選擇可以檢視之客戶群組');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED','折扣:');
define('HEADING_PRICES_OPTIONS','<b>價格設定</b>');
define('HEADING_PRODUCT_OPTIONS','<b>新聞設定</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO','<small>(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION','簡短內容:');
define('TXT_STK','購買: ');
define('TXT_PRICE','每一個 :');
define('TXT_NETTO','最終價格: ');
define('TEXT_NETTO','淨價: ');
define('TXT_STAFFELPREIS','分級價格');

define('HEADING_PRODUCTS_MEDIA','<b>新聞媒體</b>');
define('TABLE_HEADING_PRICE','價格');

define('TEXT_CHOOSE_INFO_TEMPLATE','新聞說明樣式');
define('TEXT_SELECT','--請選擇--');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','新聞屬性樣式');
define('SAVE_ENTRY','儲存 ?');

define('TEXT_FSK18','禁止18歲以下觀看:');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE','新聞目錄列表樣式');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING','新聞列表樣式');
define('TEXT_PRODUCTS_SORT','排序:');
define('TEXT_EDIT_PRODUCT_SORT_ORDER','新聞排序模式');
define('TXT_PRICES','價格');
define('TXT_NAME','新聞名稱');
define('TXT_ORDERED','銷售量');
define('TXT_SORT','新聞排序');
define('TXT_WEIGHT','重量');
define('TXT_QTY','庫存量');

define('TEXT_MULTICOPY','多層複製');
define('TEXT_MULTICOPY_DESC','複製/多層新聞至新聞新聞目錄下 (如果有選擇, 單一複製設定將不於理會)');
define('TEXT_SINGLECOPY','單一複製');
define('TEXT_SINGLECOPY_DESC','複製/單一新聞至新聞目錄下');
define('CHOOSE_INFO_TEMPLATE','新聞明細樣式');
define('CHOOSE_OPTIONS_TEMPLATE','新聞屬性列表樣式');
?>