<?php
/* -----------------------------------------------------------------------------------------
   $Id: configuration.php 1440 2010-10-29 13:43:34Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(configuration.php,v 1.8 2002/01/04); www.oscommerce.com
   (c) 2003	 nextcommerce (configuration.php,v 1.16 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('TABLE_HEADING_CONFIGURATION_TITLE', '名稱');
define('TABLE_HEADING_CONFIGURATION_VALUE', '值');
define('TABLE_HEADING_ACTION', '動作');
define('TEXT_INFO_EDIT_INTRO', '請做適當修改');
define('TEXT_INFO_DATE_ADDED', '建檔日期:');
define('TEXT_INFO_LAST_MODIFIED', '最後修改日期:');
// language definitions for config
define('STORE_NAME_TITLE', '商店名稱');
define('STORE_NAME_DESC', '商店名稱');
define('STORE_OWNER_TITLE', '商店擁有人');
define('STORE_OWNER_DESC', '商店擁有人');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE', '電子信箱');
define('STORE_OWNER_EMAIL_ADDRESS_DESC', '商店擁有人的電子信箱');
define('EMAIL_FROM_TITLE', '寄件人');
define('EMAIL_FROM_DESC', '郵件寄件人');
define('STORE_COUNTRY_TITLE', '國家');
define('STORE_COUNTRY_DESC', '商店所在的國家 <br /><br /><b>注意： 請記得更新商店地區</b>');
define('STORE_ZONE_TITLE', '地區');
define('STORE_ZONE_DESC', '商店所在地區');
define('EXPECTED_PRODUCTS_SORT_TITLE', '商品顯示排序');
define('EXPECTED_PRODUCTS_SORT_DESC', '商品顯示在前台的排序依據(遞增或遞減)');
define('EXPECTED_PRODUCTS_FIELD_TITLE', '商品顯示欄位依據');
define('EXPECTED_PRODUCTS_FIELD_DESC', '商品顯示在前台排序的欄位依據');
define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE', '語言與貨幣選項同步');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC', '變更語系時，自動切換至該語系之貨幣');
define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE', '新訂單郵件額外通知：');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC', '有新訂單時額外通知的電子郵件地址，兩個郵件地址間以逗號隔開，格式如下: Name1<email@address1>,Name2<email@address2>');
define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE', '啟用友善搜尋引擎連結模式？');
// BOF - Dokuman - 2009-11-12 - enhance explanation of SEO-URL procedure
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC', '啟用友善搜尋引擎模式應用到網站內的所有連結');
// EOF - Dokuman - 2009-11-12 - enhance explanation of SEO-URL procedure
define('DISPLAY_CART_TITLE', '購買後顯示購物車？');
define('DISPLAY_CART_DESC', '購買商品後立刻顯示購物車(或留在原來的位置)？');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE', '非會員可否推薦商品？');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC', '沒有加入會員可否推薦商品給親友？');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE', '搜尋運算元');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC', '預設的商品搜尋運作方式');
define('STORE_NAME_ADDRESS_TITLE', '商店地址與電話');
define('STORE_NAME_ADDRESS_DESC', '請輸入：商店名稱、地址與電話，此內容會顯示在列印文件上');
define('SHOW_COUNTS_TITLE', '顯示分類中的商品數');
define('SHOW_COUNTS_DESC', '計算並顯示每一個分類內的商品數量');
define('DISPLAY_PRICE_WITH_TAX_TITLE', '顯示含稅金額');
define('DISPLAY_PRICE_WITH_TAX_DESC', '顯示含稅金額(true) 或將稅金加於尾端(false)');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE', '管理員群組');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC', '請選擇要授與管理權限的會員群組');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE', '訪客群組');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC', '請為訪客預設群組');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE', '新進會員群組');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC', '請選擇新加入會員的預設群組');
define('ALLOW_ADD_TO_CART_TITLE', '允許加到購物車');
define('ALLOW_ADD_TO_CART_DESC', '如果群組設定「顯示價格」為"0(否)"時，是否允許顧客將商品放到購物車？');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE', '允許商品屬性折扣？');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC', '是否允許顧客從商品屬性區得到價格折扣(即使商品並不是特價品)');
define('CURRENT_TEMPLATE_TITLE', '樣版設定');
define('CURRENT_TEMPLATE_DESC', '選擇網站主題外觀樣版，選取前請先將樣版的(目錄及檔案)上傳到 /templates/ 資料夾內');
define('CC_KEYCHAIN_TITLE', '信用卡 CC 字串');
define('CC_KEYCHAIN_DESC', '要加密信用卡 CC 數字的字串(請修改！)');
define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE', '姓');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC', '輸入的姓最少要有多少字數？');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE', '名');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC', '輸入的名最少要有多少字數？');
define('ENTRY_DOB_MIN_LENGTH_TITLE', '生日');
define('ENTRY_DOB_MIN_LENGTH_DESC', '生日最少字數');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE', '電子郵件信箱');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC', '輸入的 電子信箱 最少應有多少字數？');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE', '街道/門牌號碼');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC', '輸入的 街道/門牌號碼 最少應有多少字數？');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE', '公司');
define('ENTRY_COMPANY_MIN_LENGTH_DESC', '輸入的公司最少應有多少字數？');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE', '郵遞區號');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC', '輸入 郵遞區號 最少應有多少字數？');
define('ENTRY_CITY_MIN_LENGTH_TITLE', '鄉/鎮/市/區');
define('ENTRY_CITY_MIN_LENGTH_DESC', '輸入 鄉/鎮/市/區 最少應有多少字數？');
define('ENTRY_STATE_MIN_LENGTH_TITLE', '縣/市');
define('ENTRY_STATE_MIN_LENGTH_DESC', '輸入 縣/市 最少應有多少字數？');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE', '電話號碼');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC', '輸入 電話號碼 最少應有多少字數？');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE', '密碼');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC', '輸入 密碼 最少應有多少字數？');
define('CC_OWNER_MIN_LENGTH_TITLE', '信用卡持卡人姓名');
define('CC_OWNER_MIN_LENGTH_DESC', '輸入持卡人姓名 最少應有多少字數？');
define('CC_NUMBER_MIN_LENGTH_TITLE', '信用卡卡號');
define('CC_NUMBER_MIN_LENGTH_DESC', '輸入信用卡卡號 最少應有多少字數？');
define('REVIEW_TEXT_MIN_LENGTH_TITLE', '商品回應(評論)文字');
define('REVIEW_TEXT_MIN_LENGTH_DESC', '商品回應 最少應有多少字數？');
define('MIN_DISPLAY_BESTSELLERS_TITLE', '暢銷商品排行');
define('MIN_DISPLAY_BESTSELLERS_DESC', '暢銷商品排行榜最少顯示數量');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE', '推薦購買商品');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC', '推薦購買商品區塊 顯示的最少數目');
define('MAX_ADDRESS_BOOK_ENTRIES_TITLE', '通訊簿筆數');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC', '每個會員的通訊簿 能擁有的最大筆數');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE', '搜尋結果');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC', '搜尋產品後，每頁顯示的商品數量');
define('MAX_DISPLAY_PAGE_LINKS_TITLE', '商品列表每頁顯示數量');
define('MAX_DISPLAY_PAGE_LINKS_DESC', '商品列表或其它相關列表，每一頁可顯示商品的最大數目');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE', '特價商品');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC', '特價商品每頁顯示的數量');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE', '新進商品模組');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC', '分類目錄中，新進商品的最大顯示數量');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE', '預告上市商品');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC', '預告上市商品的最大顯示數量');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE', '製造廠商區塊顯示');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC', '用於製造廠商區塊；當製造廠商數超過這個數量，預設的清單形式會轉變成「下拉式」選單');
define('MAX_MANUFACTURERS_LIST_TITLE', '製造廠商選取格式');
define('MAX_MANUFACTURERS_LIST_DESC', '用於製造廠商區塊; 如果這個值是\'1\' 則顯示下拉式選單，否則會依這個數值作為製造廠商列表的列數，例如，數值 3 則會出現 3 列的製造廠商列表，而不會出現下拉式選單');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE', '廠商名稱字數');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC', '用於廠商區塊；顯示名稱的字數');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE', '新的回應(評論)');
define('MAX_DISPLAY_NEW_REVIEWS_DESC', '新的商品回應(評論)的顯示數量');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE', '商品評論隨機選取');
define('MAX_RANDOM_SELECT_REVIEWS_DESC', '從多少筆資料中隨機選取一筆商品評論');
define('MAX_RANDOM_SELECT_NEW_TITLE', '新上市商品隨機選取');
define('MAX_RANDOM_SELECT_NEW_DESC', '從多少筆記錄中隨機選取一筆新上市資料');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE', '特價商品隨機選取');
define('MAX_RANDOM_SELECT_SPECIALS_DESC', '從多少筆資料中選取一筆特價商品資料');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE', '每列要列舉的分類');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC', '每列要列舉多少分類');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE', '新上市商品列表');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC', '新上市商品每頁顯示數量');
define('MAX_DISPLAY_BESTSELLERS_TITLE', '暢銷商品');
define('MAX_DISPLAY_BESTSELLERS_DESC', '暢銷商品最大顯示數量');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE', '建議購買商品');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC', '建議客戶購買商品區塊所能顯示的最大數目');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE', '訂單記錄區塊');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC', '會員的訂單記錄區塊中，顯示已購買商品的數量');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE', '訂單記錄');
define('MAX_DISPLAY_ORDER_HISTORY_DESC', '訂單記錄每頁顯示的筆數');
define('MAX_PRODUCTS_QTY_TITLE', '大量購買數目');
define('MAX_PRODUCTS_QTY_DESC', '大量購買商品數量的上限');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE', '新商品上架日數上限');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC', '新商品區域顯示的商品為指定日數以內上架的商品');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE', '商品縮圖寬度(小)');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC', '商品縮圖的最大寬度(顯示在首頁)(單位：Pixel像素)');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE', '商品縮圖高度(小)');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC', '商品縮圖的最大高度(顯示在首頁)(單位：Pixel像素)');
define('PRODUCT_IMAGE_INFO_WIDTH_TITLE', '內容圖寬度(中)');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC', '商品內容圖的最大寬度(顯示在商品頁)(單位：Pixel像素)');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE', '內容圖高度(中)');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC', '商品內容圖的最大高度(顯示在商品頁)(單位：Pixel像素)');
define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE', '彈出圖的寬度(大)');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC', '彈出視窗圖片的最大寬度(點內容圖後，彈出視窗的圖)(單位：Pixel像素)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE', '彈出視窗圖的最大高度(大)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC', '彈出視窗圖片的最大高度(點內容圖後，自動彈出視窗的圖)(單位：Pixel像素)');
define('SMALL_IMAGE_WIDTH_TITLE', '小圖寬度');
define('SMALL_IMAGE_WIDTH_DESC', '商品小圖寬度');
define('SMALL_IMAGE_HEIGHT_TITLE', '小圖高度');
define('SMALL_IMAGE_HEIGHT_DESC', '商品小圖高度');
define('HEADING_IMAGE_WIDTH_TITLE', '標題列圖片寬度');
define('HEADING_IMAGE_WIDTH_DESC', '標題列圖片寬度設定');
define('HEADING_IMAGE_HEIGHT_TITLE', '標題列圖片高度');
define('HEADING_IMAGE_HEIGHT_DESC', '標題列圖片高度設定');
define('SUBCATEGORY_IMAGE_WIDTH_TITLE', '次分類目錄圖片寬度');
define('SUBCATEGORY_IMAGE_WIDTH_DESC', '次分類目錄圖片寬度設定');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE', '次分類目錄圖片高度');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC', '次分類目錄圖片高度設定');
define('CONFIG_CALCULATE_IMAGE_SIZE_TITLE', '計算圖檔');
define('CONFIG_CALCULATE_IMAGE_SIZE_DESC', '是否計算圖檔大小？');
define('IMAGE_REQUIRED_TITLE', '顯示圖片');
define('IMAGE_REQUIRED_DESC', '可以顯示失去連結的圖片，以利除錯');
define('MO_PICS_TITLE', '商品圖數量');
define('MO_PICS_DESC', '設定值是 0 時是一張圖，設定值是 1 時可以上傳兩張圖....以此類推，可以顯示多圖');
//This is for the Images showing your products for preview. All the small stuff.
define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_TITLE', '縮圖(小)：斜角效果<br /><br /><img src="images/config_bevel.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_DESC', '產生斜角效果的小圖<br />預設值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部顏色,暗部顏色)');
define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_TITLE', '縮圖(小)：灰階<br /><br /><img src="images/config_greyscale.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_DESC', '小圖的灰階效果<br />預設值：(32,22,22)<br /><br />使用黑白灰階產生縮圖。灰階用法：&nbsp;(紅,綠,藍)，不使用灰階縮圖請留空白');
define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_TITLE', '縮圖(小)：橢圓背景<br /><br /><img src="images/config_eclipse.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_DESC', '產生橢圓形的小圖<br />預設值：(FFFFFF)<br /><br />橢圓背景遮罩的顏色。設定方法：&nbsp;(背景顏色)');
define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_TITLE', '縮圖(小)：圓角效果<br /><br /><img src="images/config_edge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_DESC', '產生圓角效果的小圖<br />預設值：(5,FFFFFF,3)<br /><br />設定方法：&nbsp;(圓角半徑,背景顏色,消除鋸齒尺寸)');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE', '縮圖(小)：加浮水印<br /><br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC', '小圖加上浮水印<br />預設值：(overlay.gif,10,-50,60,FF0000)<br /><br />設定方法：<br />(浮水印圖檔, x座標[正數:由左邊算起;負數:由右邊算起], y 座標[正數:由上面算起;負數:由下面算起], 容許度, 浮水印圖片透明顏色)<br />浮水印圖檔位置(overlay.gif)在/images/');
define('PRODUCT_IMAGE_THUMBNAIL_FRAME_TITLE', '縮圖(小)：加外框<br /><br /><img src="images/config_frame.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_FRAME_DESC', '小圖加上邊緣浮雕的外框效果<br />預設值： (FFFFFF,000000,3,EEEEEE)<br /><br />設定方法：&nbsp;(亮部顏色,暗部顏色,尺寸,外框顏色[選項])<br />※[選項說明]～如果不設定外框顏色，則預設為亮部顏色與暗部顏色之中間色');
define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADOW_TITLE', '縮圖(小)：下陰影<br /><img src="images/config_shadow.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADOW_DESC', '縮圖(小)：下陰影<br /><br />預設值： (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />設定方法：<br />(陰影寬度, 陰影顏色, 背景顏色)');
define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_TITLE', '縮圖(小)：邊緣殘影效果<br /><br /><img src="images/config_motion.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_DESC', '小圖加上邊緣殘影的效果<br />預設值： (4,FFFFFF)<br /><br />平行漸層的殘影風動效果<br /><br />設定方法：&nbsp;(殘影數目, 背景顏色)');
//And this is for the Images showing your products in single-view
define('PRODUCT_IMAGE_INFO_BEVEL_TITLE', '內容圖(中)：斜角效果');
define('PRODUCT_IMAGE_INFO_BEVEL_DESC', '內容圖產生斜角效果(中圖，顯示於商品說明頁)<br />預設值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部顏色,暗部顏色)');
define('PRODUCT_IMAGE_INFO_GREYSCALE_TITLE', '內容圖(中)：灰階');
define('PRODUCT_IMAGE_INFO_GREYSCALE_DESC', '中圖的灰階效果<br />預設值：(32,22,22)<br /><br />使用黑白灰階產生內容圖。灰階用法：&nbsp;(紅,綠,藍)，不使用灰階縮圖請留空白');
define('PRODUCT_IMAGE_INFO_ELLIPSE_TITLE', '內容圖(中)：橢圓形');
define('PRODUCT_IMAGE_INFO_ELLIPSE_DESC', '輸出橢圓形的內容圖<br />預設值：(FFFFFF)<br /><br />橢圓背景遮罩的顏色。設定方法：&nbsp;(背景顏色)');
define('PRODUCT_IMAGE_INFO_ROUND_EDGES_TITLE', '內容圖(中)：圓角效果');
define('PRODUCT_IMAGE_INFO_ROUND_EDGES_DESC', '內容圖產生圓角效果<br />預設值：(5,FFFFFF,3)<br /><br />設定方法：&nbsp;(圓角半徑,背景顏色,消除鋸齒尺寸)');
define('PRODUCT_IMAGE_INFO_MERGE_TITLE', '內容圖(中)：加浮水印');
define('PRODUCT_IMAGE_INFO_MERGE_DESC', '內容圖加上浮水印(可避免盜拷)<br />預設值：(overlay.gif,10,-50,60,FF0000)<br /><br />設定方法：<br />(浮水印圖檔, x座標[正數:由左邊算起;負數:由右邊算起], y 座標[正數:由上面算起;負數:由下面算起], 容許度, 浮水印圖片透明顏色)<br />浮水印圖檔位置(overlay.gif)在/images/');
define('PRODUCT_IMAGE_INFO_FRAME_TITLE', '內容圖(中)：加外框');
define('PRODUCT_IMAGE_INFO_FRAME_DESC', '內容圖加上邊緣浮雕的外框<br />預設值： (FFFFFF,000000,3,EEEEEE)<br /><br />設定方法：&nbsp;(亮部顏色,暗部顏色,尺寸,外框顏色[選項])<br />※[選項說明]～如果不設定外框顏色，則預設為亮部顏色與暗部顏色之中間色');
define('PRODUCT_IMAGE_INFO_DROP_SHADOW_TITLE', '內容圖(中)：下陰影');
define('PRODUCT_IMAGE_INFO_DROP_SHADOW_DESC', '縮圖(中)：下陰影<br /><br />預設值： (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />設定方法：<br />(陰影寬度, 陰影顏色, 背景顏色)');
define('PRODUCT_IMAGE_INFO_MOTION_BLUR_TITLE', '內容圖(中)：邊緣殘影效果');
define('PRODUCT_IMAGE_INFO_MOTION_BLUR_DESC', '內容圖加上邊緣殘影的效果<br />預設值： (4,FFFFFF)<br /><br />平行漸層的殘影風動效果<br /><br />設定方法：&nbsp;(殘影數目, 背景顏色)');
//so this image is the biggest in the shop this
define('PRODUCT_IMAGE_POPUP_BEVEL_TITLE', '彈出視窗圖(大)：斜角效果');
define('PRODUCT_IMAGE_POPUP_BEVEL_DESC', '彈出視窗圖產生斜角效果(點內容圖後，自動彈出視窗的大圖)<br />預設值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部顏色,暗部顏色)');
define('PRODUCT_IMAGE_POPUP_GREYSCALE_TITLE', '彈出視窗圖(大)：灰階');
define('PRODUCT_IMAGE_POPUP_GREYSCALE_DESC', '彈出圖的灰階效果<br />預設值：(32,22,22)<br /><br />使用黑白灰階產生內容圖。灰階用法：&nbsp;(紅,綠,藍)，不使用灰階縮圖請留空白');
define('PRODUCT_IMAGE_POPUP_ELLIPSE_TITLE', '彈出視窗圖(大)：橢圓形');
define('PRODUCT_IMAGE_POPUP_ELLIPSE_DESC', '輸出橢圓形的彈出視窗圖<br />預設值：(FFFFFF)<br /><br />橢圓背景遮罩的顏色。設定方法：&nbsp;(背景顏色)');
define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_TITLE', '彈出視窗圖(大)：圓角效果');
define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_DESC', '彈出視窗圖產生圓角效果<br />預設值：(5,FFFFFF,3)<br /><br />設定方法：&nbsp;(圓角半徑,背景顏色,消除鋸齒尺寸)');
define('PRODUCT_IMAGE_POPUP_MERGE_TITLE', '彈出視窗圖(大)：加浮水印');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC', '彈出視窗圖加上浮水印(可避免盜拷)<br />預設值：(overlay.gif,10,-50,60,FF0000)<br /><br />設定方法：<br />(浮水印圖檔, x座標[正數:由左邊算起;負數:由右邊算起], y 座標[正數:由上面算起;負數:由下面算起], 容許度, 浮水印圖片透明顏色)<br />浮水印圖檔位置(overlay.gif)在/images/');
define('PRODUCT_IMAGE_POPUP_FRAME_TITLE', '彈出視窗圖(大)：加外框');
define('PRODUCT_IMAGE_POPUP_FRAME_DESC', '彈出視窗圖加上邊緣浮雕的外框<br />預設值： (FFFFFF,000000,3,EEEEEE)<br /><br />設定方法：&nbsp;(亮部顏色,暗部顏色,尺寸,外框顏色[選項])<br />※[選項說明]～如果不設定外框顏色，則預設為亮部顏色與暗部顏色之中間色');
define('PRODUCT_IMAGE_POPUP_DROP_SHADOW_TITLE', '彈出視窗圖(大)：下陰影');
define('PRODUCT_IMAGE_POPUP_DROP_SHADOW_DESC', '彈出視窗圖(大)：下陰影<br /><br />預設值： (3,333333,FFFFFF)<br /><br />more like a dodgy motion blur [semi buggy]<br />設定方法：<br />(陰影寬度, 陰影顏色, 背景顏色)');
define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_TITLE', '彈出視窗圖(大)：邊緣殘影效果');
define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_DESC', '彈出視窗圖加上邊緣殘影的效果<br />預設值： (4,FFFFFF)<br /><br />平行漸層的殘影風動效果<br /><br />設定方法：&nbsp;(殘影數目, 背景顏色)');
define('IMAGE_MANIPULATOR_TITLE', 'GDlib處理');
define('IMAGE_MANIPULATOR_DESC', '伺服器影像處理函數是 GD2 或 GD1');
define('ACCOUNT_GENDER_TITLE', '性別');
define('ACCOUNT_GENDER_DESC', '會員註冊是否要顯示「性別」選項？');
define('ACCOUNT_DOB_TITLE', '生日');
define('ACCOUNT_DOB_DESC', '會員註冊是否要顯示「生日」選項？');
define('ACCOUNT_COMPANY_TITLE', '公司');
define('ACCOUNT_COMPANY_DESC', '會員註冊是否要顯示「公司」選項？');
define('ACCOUNT_SUBURB_TITLE', '里／鄰');
define('ACCOUNT_SUBURB_DESC', '會員註冊是否需要填寫「里/鄰」文字框？');
define('ACCOUNT_STATE_TITLE', '縣／市');
define('ACCOUNT_STATE_DESC', '會員註冊是否需要填寫「縣/市」文字框？');
define('DEFAULT_CURRENCY_TITLE', '預設貨幣');
define('DEFAULT_CURRENCY_DESC', '預設貨幣');
define('DEFAULT_LANGUAGE_TITLE', '預設語言');
define('DEFAULT_LANGUAGE_DESC', '預設語言');
define('DEFAULT_ORDERS_STATUS_ID_TITLE', '新到訂單的預設狀態');
define('DEFAULT_ORDERS_STATUS_ID_DESC', '新到訂單的預設狀態.');
define('SHIPPING_ORIGIN_COUNTRY_TITLE', '出貨國家');
define('SHIPPING_ORIGIN_COUNTRY_DESC', '出貨單上商店的國家');
define('SHIPPING_ORIGIN_ZIP_TITLE', '郵遞區號');
define('SHIPPING_ORIGIN_ZIP_DESC', '請輸入出貨單上商店所在地區的--郵遞區號--');
define('SHIPPING_MAX_WEIGHT_TITLE', '貨運的重量限制');
define('SHIPPING_MAX_WEIGHT_DESC', '請輸入貨運寄送時，單一包裝的重量限制(便於在結帳時計算是否要外加費用「單位kg」，商品沒設重量時不必填)');
define('SHIPPING_BOX_WEIGHT_TITLE', '包裝重量');
define('SHIPPING_BOX_WEIGHT_DESC', '一般中小型包裝時的大略重量是多少？(商品沒設重量時不必填)');
define('SHIPPING_BOX_PADDING_TITLE', '大包裝--增值比率--');
define('SHIPPING_BOX_PADDING_DESC', '輸入 10 代表 10％，(此為超出一般包裝時，加收運費的標準)');
define('SHOW_SHIPPING_TITLE', '在商品資訊中顯示運費');
define('SHOW_SHIPPING_DESC', '在商品資訊中顯示運費');
define('SHIPPING_INFOS_TITLE', '群組編號');
define('SHIPPING_INFOS_DESC', '運費內容的群組編號。');
define('PRODUCT_LIST_FILTER_TITLE', '顯示分類目錄／廠商資訊');
define('PRODUCT_LIST_FILTER_DESC', '是否顯示分類目錄／廠商資訊？ (0=關閉; 1=開啟)');
define('STOCK_CHECK_TITLE', '檢查庫存量');
define('STOCK_CHECK_DESC', '是否需要檢查商品庫存量？');
define('ATTRIBUTE_STOCK_CHECK_TITLE', '從商品屬性檢查庫存量');
define('ATTRIBUTE_STOCK_CHECK_DESC', '如果在設定商品屬性時有設商品數量，是否以此為依據作庫存量檢查？');
define('STOCK_LIMITED_TITLE', '自動扣除庫存');
define('STOCK_LIMITED_DESC', '從顧客訂購中自動扣除商品的庫存量');
define('STOCK_ALLOW_CHECKOUT_TITLE', '允許結帳');
define('STOCK_ALLOW_CHECKOUT_DESC', '庫存量不足時，仍然可以讓顧客結帳');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE', '缺貨標示');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC', '缺貨時會顯示這個標示，讓顧客知道哪一項商品已缺貨');
define('STOCK_REORDER_LEVEL_TITLE', '安全庫存量');
define('STOCK_REORDER_LEVEL_DESC', '低於安全庫存量時提醒進貨');
define('STORE_PAGE_PARSE_TIME_TITLE', '儲存網頁解析時間');
define('STORE_PAGE_PARSE_TIME_DESC', '儲存網頁解析時間');
define('STORE_PAGE_PARSE_TIME_LOG_TITLE', '紀錄檔位置');
define('STORE_PAGE_PARSE_TIME_LOG_DESC', '頁面解析時間紀錄檔的資料夾與檔名');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE', '紀錄檔日期格式');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC', '日期格式');
define('DISPLAY_PAGE_PARSE_TIME_TITLE', '顯示網頁解析時間');
define('DISPLAY_PAGE_PARSE_TIME_DESC', '是否顯示網頁解析時間？(必須要啟動「儲存頁解析時間」的設定)');
define('STORE_DB_TRANSACTIONS_TITLE', '儲存資料庫查詢');
define('STORE_DB_TRANSACTIONS_DESC', '儲存每頁查詢資料庫的解析時間紀錄(僅適用PHP4以上的版本)');
define('USE_CACHE_TITLE', '快取');
define('USE_CACHE_DESC', '使用快取？');
define('DB_CACHE_TITLE', '資料庫快取');
define('DB_CACHE_DESC', '啟用後會將資料庫取出的資訊做快取處理，加快讀取速度');
define('DB_CACHE_EXPIRE_TITLE', '資料庫快取存活時間');
define('DB_CACHE_EXPIRE_DESC', '選擇希望快取資料的時間長短');
define('DIR_FS_CACHE_TITLE', '快取目錄');
define('DIR_FS_CACHE_DESC', '快取檔案儲存的目錄');
define('ACCOUNT_OPTIONS_TITLE', '會員購物帳號選項');
define('ACCOUNT_OPTIONS_DESC', '會員購物帳號管理 <br />你可以選擇需加入會員(customer)與非會員購物(guest)或是全選(all),當你開啟非會員購物的"一次性訂單"時,帳號仍會被建立,但不會通知顧客');
define('EMAIL_TRANSPORT_TITLE', 'E-Mail 寄送方式');
define('EMAIL_TRANSPORT_DESC', '經由Linux(Unix-like)伺服器主機sendmail寄信或經由 SMTP 主機寄信(如果您的伺服器主機是Windows NT、XP或是MacOS)，一般建議使用PHP');
define('EMAIL_LINEFEED_TITLE', '電子郵件換行');
define('EMAIL_LINEFEED_DESC', '定義電子郵件表頭所使用的換行字元');
define('EMAIL_USE_HTML_TITLE', '使用 MIME HTML 格式寄電子郵件');
define('EMAIL_USE_HTML_DESC', '傳送 HTML 格式的電子郵件');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE', '利用 DNS 檢查電子郵件地址');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC', '利用 DNS 主機檢查電子郵件地址');
define('SEND_EMAILS_TITLE', '傳送電子郵件');
define('SEND_EMAILS_DESC', '寄出電子郵件');
define('SENDMAIL_PATH_TITLE', 'sendmail 的路徑');
define('SENDMAIL_PATH_DESC', '如果您使用 sendmail 必須指定路徑(Linux: /usr/bin/sendmail)，(FreeBSD:/usr/sbin/sendmail)');
define('SMTP_MAIN_SERVER_TITLE', 'SMTP 伺服器位址');
define('SMTP_MAIN_SERVER_DESC', '輸入SMTP 位址.');
define('SMTP_BACKUP_SERVER_TITLE', '備用smtp伺服器');
define('SMTP_BACKUP_SERVER_DESC', '輸入備用SMTP 位址.');
define('SMTP_USERNAME_TITLE', 'SMTP 帳號');
define('SMTP_USERNAME_DESC', '輸入 SMTP 帳號.');
define('SMTP_PASSWORD_TITLE', 'SMTP 密碼');
define('SMTP_PASSWORD_DESC', '輸入  SMTP 密碼.');
define('SMTP_AUTH_TITLE', 'SMTP 安全確認');
define('SMTP_AUTH_DESC', '你的 SMTP 伺服器需要安全確認?');
define('SMTP_PORT_TITLE', 'SMTP 連接埠');
define('SMTP_PORT_DESC', '輸入 SMTP 連接埠(一般: 25)');
//Constants for contact_us
define('CONTACT_US_EMAIL_ADDRESS_TITLE', '「聯絡我們」E-mail地址');
define('CONTACT_US_EMAIL_ADDRESS_DESC', '請輸入客戶使用「聯絡我們」功能時，店家收信的電子郵件');
define('CONTACT_US_NAME_TITLE', '「聯絡我們」 - 寄件人設定');
define('CONTACT_US_NAME_DESC', '請輸入客戶使用「聯絡我們」功能時，店家收信的電子郵件寄件人(也可說是信件標題，EX：XX商店客戶聯絡信)');
define('CONTACT_US_FORWARDING_STRING_TITLE', '「聯絡我們」 - 轉寄電子郵件地址');
define('CONTACT_US_FORWARDING_STRING_DESC', '請輸入客戶使用「聯絡我們」時，一併要轉寄的電子郵件地址(請以 "," 逗號分隔)，也就是說一起寄到多個信箱，你可以設定多個信箱多人同時收信。');
define('CONTACT_US_REPLY_ADDRESS_TITLE', '「聯絡我們」 - 回信的電子郵件地址');
define('CONTACT_US_REPLY_ADDRESS_DESC', '請輸入客戶使用「聯絡我們」時，回信的電子郵件地址');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE', '「聯絡我們」- 回信的收件人');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC', '請輸入客戶使用「聯絡我們」時，回信的收件人');
define('CONTACT_US_EMAIL_SUBJECT_TITLE', '「聯絡我們」 - 電子郵件標題');
define('CONTACT_US_EMAIL_SUBJECT_DESC', '請輸入客戶使用「聯絡我們」時的電子郵件標題(內容主旨)');
//Constants for support system
define('EMAIL_SUPPORT_ADDRESS_TITLE', '「技術支援」- 電子郵件地址');
define('EMAIL_SUPPORT_ADDRESS_DESC', '請輸入電子郵件地址 (新增帳號, 變更密碼)');
define('EMAIL_SUPPORT_NAME_TITLE', '「技術支援」- 電子郵件寄件人名稱');
define('EMAIL_SUPPORT_NAME_DESC', '請輸入電子郵件寄件人名稱 (新增帳號, 變更密碼).');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE', '「技術支援」- 轉寄電子郵件地址');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC', '請輸入轉寄電子郵件地址(請以 "," 逗號分隔)(新增帳號, 變更密碼)');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE', '「技術支援」- 回信的電子郵件地址');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC', '請輸入接收回信的電子郵件地址.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE', '「技術支援」- 客戶回信的收件人');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC', '請輸入客戶回信時的郵件寄件人.');
define('EMAIL_SUPPORT_SUBJECT_TITLE', '「技術支援」- 電子郵件標題');
define('EMAIL_SUPPORT_SUBJECT_DESC', '請輸入由商店寄給你的電子郵件標題(內容主旨)');
//Constants for Billing system
define('EMAIL_BILLING_ADDRESS_TITLE', '「訂單處理」- E-mail地址');
define('EMAIL_BILLING_ADDRESS_DESC', '請輸入客戶訂購之後經由<b>網站系統自動寄出</b>的發信E-mail地址');
define('EMAIL_BILLING_NAME_TITLE', '「訂單處理」- E-mail寄件人');
define('EMAIL_BILLING_NAME_DESC', '請輸入經由<b>網站系統自動寄出</b>的E-mail寄件人名稱(EX：XXX商店通知)');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE', '「訂單處理」- 轉寄E-mail');
define('EMAIL_BILLING_FORWARDING_STRING_DESC', '請輸入<b>網站系統寄E-mail</b>一併要轉寄的電子郵件地址(以 ", " 區隔)，你可以設定多個信箱多人同時收信。');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE', '「訂單管理」- 回覆郵件的E-mail');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC', '請輸入訂單管理中，回覆客戶時經由<b>網站系統寄E-mail</b>時，店家或服務人員的電子郵件地址。');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE', '「訂單處理」- 回覆郵件的收件人');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC', '請輸入訂單處理中，客戶要回覆給網站系統的電子郵件時的店家或服務人員名稱(EX：XXX商店)');
define('EMAIL_BILLING_SUBJECT_TITLE', '「訂單處理」- E-mail標題');
define('EMAIL_BILLING_SUBJECT_DESC', '請輸入--由店家透過網站系統寄給客戶<b>訂單處理</b>的電子郵件標題(EX：你的訂單處理進度...)');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE', '「訂單通知」- 訂單的E-mail標題');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC', '請輸入--客戶訂貨後--經由網站系統寄出的「訂單確認信」電子郵件標題(EX：<b>XXX商店訂單通知 {$nr},{$date}</b>) 註:可以使用的變數,{$nr},{$date},{$firstname},{$lastname}');
define('DOWNLOAD_ENABLED_TITLE', '啟用下載');
define('DOWNLOAD_ENABLED_DESC', '啟用產品下載');
define('DOWNLOAD_BY_REDIRECT_TITLE', '轉址下載');
define('DOWNLOAD_BY_REDIRECT_DESC', '使用瀏覽器轉址下載，非 Unix 系統無法使用');
define('DOWNLOAD_MAX_DAYS_TITLE', '到期日(天數)');
define('DOWNLOAD_MAX_DAYS_DESC', '設定下載過期天數，輸入 0 代表沒有期限');
define('DOWNLOAD_MAX_COUNT_TITLE', '最大下載數');
define('DOWNLOAD_MAX_COUNT_DESC', '設定最大下載數，輸入 0 代表不可下載');
define('GZIP_COMPRESSION_TITLE', '使用 GZip 壓縮');
define('GZIP_COMPRESSION_DESC', '使用 HTTP GZip 壓縮.');
define('GZIP_LEVEL_TITLE', '壓縮等級');
define('GZIP_LEVEL_DESC', '使用的壓縮等級 0-9 (0 = 最小, 9 = 最大)');
define('SESSION_WRITE_DIRECTORY_TITLE', 'Session 儲存目錄');
define('SESSION_WRITE_DIRECTORY_DESC', '如果你的 session 是儲存於檔案，則會放到此目錄');
define('SESSION_FORCE_COOKIE_USE_TITLE', '強迫使用 Cookie');
// klären, vr
define('SESSION_FORCE_COOKIE_USE_DESC', '當只有 cookie 啟動時，強迫使用 session');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE', '檢查 SSL Session ID');
define('SESSION_CHECK_SSL_SESSION_ID_DESC', '在每一個加密網頁(https)確認 SSL_SESSION_ID');
define('SESSION_CHECK_USER_AGENT_TITLE', '檢查訪客瀏覽器');
define('SESSION_CHECK_USER_AGENT_DESC', '確認訪客在每一個網頁使用的瀏覽器種類');
define('SESSION_CHECK_IP_ADDRESS_TITLE', '檢查 IP 位址');
define('SESSION_CHECK_IP_ADDRESS_DESC', '每一個網頁檢查訪客的 IP 位址');
define('SESSION_RECREATE_TITLE', '重新建立 Session');
define('SESSION_RECREATE_DESC', '當使用者登入或新增帳號時，重建 session 及新增 session ID (PHP 版本必須為 4.1 以上)');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE', '顯示購物條款');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC', '結帳時顯示購物條款(需勾選「同意」才能完成結帳程序)');
define('META_MIN_KEYWORD_LENGTH_TITLE', 'meta-keyword 最小長度');
define('META_MIN_KEYWORD_LENGTH_DESC', 'meta-keyword 單一關鍵字的最小長度(由商品說明產生)');
define('META_KEYWORDS_NUMBER_TITLE', 'meta-keyword 數目');
define('META_KEYWORDS_NUMBER_DESC', 'meta-keyword 數目');
define('META_AUTHOR_TITLE', '網頁META設定：author');
define('META_AUTHOR_DESC', '請填入網頁META的「作者」標示，(告訴搜尋引擎這個網站作者是誰？)');
define('META_PUBLISHER_TITLE', '網頁META設定：publisher');
define('META_PUBLISHER_DESC', '請填入META的「發行者」標示，(告訴搜尋引擎這個網站發行者是誰？)');
define('META_COMPANY_TITLE', '網頁META設定：company');
define('META_COMPANY_DESC', '請填入META的「公司」標示，(告訴搜尋引擎這個網站是哪家公司的？)');
define('META_TOPIC_TITLE', '網頁META設定：page-topic');
define('META_TOPIC_DESC', '請填入META的「主題」標示');
define('META_REPLY_TO_TITLE', '網頁META設定：reply-to');
define('META_REPLY_TO_DESC', '請填入META的<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE', '網頁META設定：revisit-after');
define('META_REVISIT_AFTER_DESC', '告訴搜尋引擎幾天之後再來這個網站要重新登錄(EX：30days)');
define('META_ROBOTS_TITLE', '網頁META設定：robots');
define('META_ROBOTS_DESC', '請填入加入搜尋引擎的範圍，(EX：all)');
define('META_DESCRIPTION_TITLE', '網頁META設定：Description');
define('META_DESCRIPTION_DESC', '請填入META的「網頁內容摘要」(告訴搜尋引擎這個網站的內容摘要)');
define('META_KEYWORDS_TITLE', '網頁META設定：Keywords');
define('META_KEYWORDS_DESC', '請填入網頁的關鍵字標示，讓搜尋引擎知道這個網站的一些重要關鍵字(請以逗號分隔，EX：關鍵字, 關鍵時刻, 關鍵報告)');
define('MODULE_PAYMENT_INSTALLED_TITLE', '已啟用付款模組');
define('MODULE_PAYMENT_INSTALLED_DESC', '付款模組列表，每一個模組以分號隔開，系統會自動更新，不需手動修改 (例如: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE', '已啟用的訂單總計模組');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC', '訂單總計模組列表，每一個模組以分號隔開，系統會自動更新，不需手動修改 (例如: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE', '已啟用的出貨模組');
define('MODULE_SHIPPING_INSTALLED_DESC', '運送模組列表，每一個模組以分號隔開，系統會自動更新，不需手動修改 (例如: ups.php;flat.php;item.php)');
define('CACHE_LIFETIME_TITLE', '快取存活時間');
define('CACHE_LIFETIME_DESC', '快取內容保存的秒數');
define('CACHE_CHECK_TITLE', '快取內容變動檢查');
define('CACHE_CHECK_DESC', '如果啟用快取, 那麼將會以快取內容的方式來儲存最近所更動的網頁表頭資訊，並以 HTTP 專用的表頭資訊的方式來送出，這個快取網頁的方法可以讓使用者在瀏覽網頁時不用非得要系統重新下載所有的網頁。');
define('PRODUCT_REVIEWS_VIEW_TITLE', '商品回應');
define('PRODUCT_REVIEWS_VIEW_DESC', '每頁顯示幾篇商品回應');
define('DELETE_GUEST_ACCOUNT_TITLE', '刪除免會員購物者帳號');
define('DELETE_GUEST_ACCOUNT_DESC', '免會員購物者的帳號在購物完成後是否刪除？(訂單資訊仍會保留)');
define('USE_WYSIWYG_TITLE', '啟動線上編輯器');
define('USE_WYSIWYG_DESC', '是否啟動網頁編輯器(內容管理及商品說明文字區塊)？');
define('PRICE_IS_BRUTTO_TITLE', '小數點管理');
define('PRICE_IS_BRUTTO_DESC', '是否使用小數點管理？');
define('PRICE_PRECISION_TITLE', '小點數位數');
define('PRICE_PRECISION_DESC', '依小數點位數(4捨5入計算)，計算價格及其顯示位數');
define('CHECK_CLIENT_AGENT_TITLE', '避免搜尋引擎連線');
define('CHECK_CLIENT_AGENT_DESC', '避免已知的搜尋引擎找尋網站資料');
define('SHOW_IP_LOG_TITLE', '顯示客戶IP');
define('SHOW_IP_LOG_DESC', '顧客結帳時是否要顯示 「您目前的IP已經紀錄」？');
define('ACTIVATE_GIFT_SYSTEM_TITLE', '禮券系統');
define('ACTIVATE_GIFT_SYSTEM_DESC', '是否啟動禮券系統？');
define('ACTIVATE_SHIPPING_STATUS_TITLE', '出貨狀態顯示');
define('ACTIVATE_SHIPPING_STATUS_DESC', '是否顯示出貨狀態？(可以針對不同商品設定不同的出貨時間，在新增商品時會顯示<b>出貨時間</b>供你選擇)');
define('IMAGE_QUALITY_TITLE', '圖片壓縮比例');
define('IMAGE_QUALITY_DESC', '圖片壓縮品質(設定範圍：0～100)(0=低品質；100=最高品質)');
define('GROUP_CHECK_TITLE', '購物等級檢查');
define('GROUP_CHECK_DESC', '只有特定的會員等級才有權檢視商品的權利(啟動此功能後，會在建立分類目錄與新增商品時，顯示勾選的欄位)');
define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', '反向相關販售');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', '啟用反向相關商品販售？');
define('ACTIVATE_NAVIGATOR_TITLE', '商品導覽列設定');
define('ACTIVATE_NAVIGATOR_DESC', '開啟或是關閉商品列表的商品導覽列？(若商品數量過多時可以設定為關閉，可獲得較好的系統執行效能)');
define('QUICKLINK_ACTIVATED_TITLE', '開啟多重連結／商品複製');
define('QUICKLINK_ACTIVATED_DESC', '是否開啟開啟多連結／複製商品？(商品上架時可以使用「複製商品」的動作，直接將商品複製到多個分類目錄，而不必在重複上傳商品。)');
// BOF - Tomcraft - 2009-06-18 - make clear this is a list of NOT allowed download payment modules
//define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Download Paymentmodules');
//define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', 'Not allowed Payment modules for downloads. List, seperated by comma, e.g. {banktransfer,cod,invoice,moneyorder}');
define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', '下載付款模組');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', '不允許被下載的付款模組(設定時以逗點分隔，例如 {banktransfer,cod,invoice,moneyorder})');
// EOF - Tomcraft - 2009-06-18 - make clear this is a list of NOT allowed download payment modules
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', '訂單狀態下限');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', '要下載檔案，訂單狀態至少為何？');
// Vat Check
define('STORE_OWNER_VAT_ID_TITLE', '購物站稅務編號(VAT-ID)');
define('STORE_OWNER_VAT_ID_DESC', '購物站擁有者的 VAT-ID (歐盟稅制，與台灣的公司統一編號同義)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE', '客戶群組 - 校正 VAT ID(外國)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC', '校正客戶群組的 VAT ID 歸屬，購物站與客戶不同國家');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE', '驗證VAT ID');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC', '驗證VAT ID(檢查校正語法)');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE', '啟用線上驗證VAT ID');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC', '啟用線上驗證VAT ID(如果你手邊沒有其它國家的檢查語法)，將會透過德國政府的金融匣道來作驗證');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE', '自動修正？');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC', '啟用這個項目時，客戶群組將會因校正 VAT ID 使用時而隨之修正。');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE', '啟用驗證錯誤 Vat-ID？');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC', '啟用這個項目時，只接受經過驗證的 VAT IDs 。');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE', '客戶群組 - 校正 VAT ID (購物站所在國家)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC', '校正客戶群組的 VAT ID 歸屬，購物站與客戶為同一國家');
// Google Conversion
define('GOOGLE_CONVERSION_TITLE', 'Google 廣告追蹤統計');
define('GOOGLE_CONVERSION_DESC', '是否讓Google搜尋引擎程式，有規律的追蹤網站的關鍵字？');
define('GOOGLE_CONVERSION_ID_TITLE', '連線ID');
define('GOOGLE_CONVERSION_ID_DESC', '您在Google網站登記的ID');
define('GOOGLE_LANG_TITLE', 'Google語言');
define('GOOGLE_LANG_DESC', '在Google搜尋引擎中要設定的語言〔ISO編碼〕');
// Afterbuy
define('AFTERBUY_ACTIVATED_TITLE', '啟用');
define('AFTERBUY_ACTIVATED_DESC', '啟用交易資訊(afterbuy)模組');
define('AFTERBUY_PARTNERID_TITLE', '管理 ID');
define('AFTERBUY_PARTNERID_DESC', '管理交易資訊模組的 ID');
define('AFTERBUY_PARTNERPASS_TITLE', '管理密碼');
define('AFTERBUY_PARTNERPASS_DESC', '管理交易資訊模組的密碼');
define('AFTERBUY_USERID_TITLE', '會員 ID');
define('AFTERBUY_USERID_DESC', '交易會員 ID');
define('AFTERBUY_ORDERSTATUS_TITLE', '訂單狀態');
define('AFTERBUY_ORDERSTATUS_DESC', '在已經匯出訂購商品資料中的所有訂購細節');
define('AFTERBUY_URL', '你可以透過以下連結了解交易資訊模組的使用細節: <a href="http://www.xt-commerce.com/modules/wfsection/dossier-65.html" target="new">http://www.xt-commerce.com/modules/wfsection/dossier-65.html</a>');
// Search-Options
define('SEARCH_IN_DESC_TITLE', '搜尋商品說明細節');
define('SEARCH_IN_DESC_DESC', '啟用可以搜尋商品的說明細節');
define('SEARCH_IN_ATTR_TITLE', '搜尋商品屬性');
define('SEARCH_IN_ATTR_DESC', '啟用可以搜尋商品的屬性');
// changes for 3.0.4 SP2
define('REVOCATION_ID_TITLE', '撤銷訂單 ID');
define('REVOCATION_ID_DESC', '撤銷訂單的內容 ID');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE', '顯示撤銷訂單的權利?');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC', '在最後結帳確認動作時顯示關於撤銷訂單的權利事項?');
// BOF - web28 - 2010-05-07 - PayPal API Modul
define('PAYPAL_MODE_TITLE', 'PayPal 模式：');
define('PAYPAL_MODE_DESC', '正式 (預設) 或 測試 (Sandbox)');
define('PAYPAL_API_USER_TITLE', 'PayPal API 帳號 (正式)');
define('PAYPAL_API_USER_DESC', '輸入 PayPal API 帳號 (正式)');
define('PAYPAL_API_PWD_TITLE', 'PayPal API 密碼 (正式)');
define('PAYPAL_API_PWD_DESC', '輸入 PayPal API 密碼 (正式)');
define('PAYPAL_API_SIGNATURE_TITLE', 'PayPal API 簽名 (正式)');
define('PAYPAL_API_SIGNATURE_DESC', '輸入 PayPal API 簽名 (正式)');
define('PAYPAL_API_SANDBOX_USER_TITLE', 'PayPal API 帳號 (Sandbox)');
define('PAYPAL_API_SANDBOX_USER_DESC', '輸入 PayPal API 帳號 (Sandbox)');
define('PAYPAL_API_SANDBOX_PWD_TITLE', 'PayPal API 密碼 (Sandbox)');
define('PAYPAL_API_SANDBOX_PWD_DESC', '輸入 PayPal API 密碼 (Sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_TITLE', 'PayPal API 簽名 (Sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_DESC', '輸入 PayPal API 簽名 (Sandbox)');
define('PAYPAL_API_VERSION_TITLE', 'PayPal API 版本');
define('PAYPAL_API_VERSION_DESC', '輸入 PayPal API 版本，例如 62.0');
define('PAYPAL_API_IMAGE_TITLE', 'PayPal 商店圖示');
define('PAYPAL_API_IMAGE_DESC', '請輸入要顯示在 PayPal 付款過程的商店圖示檔案名稱。<br />注意：只有在商店使用 SSL 時顯示<br />最大寬度： 750px, 最大高度： 90px.<br />商店圖示會透過 ' . DIR_WS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/img/ 目錄取得');
define('PAYPAL_API_CO_BACK_TITLE', 'PayPal 背景顏色');
define('PAYPAL_API_CO_BACK_DESC', 'Enter a background colour to be displayed with PayPal. e.g. FEE8B9');
define('PAYPAL_API_CO_BORD_TITLE', 'PayPal Border Colour');
define('PAYPAL_API_CO_BORD_DESC', 'Enter a border colour to be displayed with PayPal. e.g. E4C558');
define('PAYPAL_ERROR_DEBUG_TITLE', 'PayPal Error Message');
define('PAYPAL_ERROR_DEBUG_DESC', 'Display PayPal error message? default=false');
define('PAYPAL_ORDER_STATUS_TMP_ID_TITLE', 'Order Status "cancel"');
define('PAYPAL_ORDER_STATUS_TMP_ID_DESC', 'Select the order status for aborted transaction (e.g. PayPal abort)');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_TITLE', 'Order Status OK');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_DESC', 'Select the order status for a successful transaction (e.g. open PP paid)');
define('PAYPAL_ORDER_STATUS_PENDING_ID_TITLE', 'Order Status "pending"');
define('PAYPAL_ORDER_STATUS_PENDING_ID_DESC', 'Select the order status for a transaction which hasn\'t been fully processed by PayPal (e.g. open PP waiting)');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_TITLE', 'Order Status "rejected"');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_DESC', 'Select the order status for a rejected transaction (e.g. PayPal rejected)');
define('PAYPAL_COUNTRY_MODE_TITLE', 'PayPal Country Mode');
define('PAYPAL_COUNTRY_MODE_DESC', 'Select a country mode. Some PayPal functions are available only in the UK (e.g. DirectPayment)');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_TITLE', 'PayPal-Express Address Data');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_DESC', 'Permits changing address data transferred by PayPal.');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_TITLE', 'Ship-To-Address Overwrite');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_DESC', 'Permits changing address data transferred by PayPal (existing account)');
// EOF - web28 - 2010-05-07 - PayPal API Modul
// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('USE_ADMIN_TOP_MENU_TITLE', 'Admin Top Navigation');
define('USE_ADMIN_TOP_MENU_DESC', 'Activate Admin Top Navigation? Otherwise the menu will be displayed on the left (classic view)');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('USE_ADMIN_LANG_TABS_TITLE', 'Language Tabs with Categories / Articles');
define('USE_ADMIN_LANG_TABS_DESC', 'Use language tabs with categories / articles?');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('USE_ADMIN_THUMBS_IN_LIST_TITLE', 'Admin products list images');
define('USE_ADMIN_THUMBS_IN_LIST_DESC', 'Show an extra column in Admin products list with images of the categories / products?');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
// BOF - Tomcraft - 2009-11-05 - Advanced contact form
define('USE_CONTACT_EMAIL_ADDRESS_TITLE', 'Contact Us - sending option');
define('USE_CONTACT_EMAIL_ADDRESS_DESC', 'Use "Contact Us" e-mail address for sending contact form (important for some Hosters like Hosteurope)');
// EOF - Tomcraft - 2009-11-05 - Advanced contact form
// BOF - Dokuman - 2010-02-04 - delete cache files in admin section
define('DELETE_CACHE_SUCCESSFUL', '快取刪除成功');
define('DELETE_TEMP_CACHE_SUCCESSFUL', '樣板快取刪除成功');
// EOF - Dokuman - 2010-02-04 - delete cache files in admin section
// BOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section
define('GOOGLE_RSS_FEED_REFID_TITLE', 'Google RSS Feed - refID');
define('GOOGLE_RSS_FEED_REFID_DESC', 'Enter your campaign ID here. It will be appended to every link of the Google RSS Feed automaticallyt.');
// EOF - DokuMan - 2010-08-13 - set Google RSS Feed in admin section

?>