<?php
/* --------------------------------------------------------------
   $Id: categories.php 1249 2005-09-27 12:06:40Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_EDIT_STATUS', 'Status');
define('TEXT_EDIT_STATUS', '狀態');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', '(分類 / 商品) 編輯區');
define('HEADING_TITLE_SEARCH', '搜尋：');
define('HEADING_TITLE_GOTO', '前往：');
define('TABLE_HEADING_ID', '編號');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '分類 / 商品');
define('TABLE_HEADING_ACTION', '動作');
define('TABLE_HEADING_STATUS', '狀態');
define('TABLE_HEADING_STARTPAGE', '首頁顯示');
define('TABLE_HEADING_STOCK', '庫存狀態');
define('TABLE_HEADING_SORT', '排序');
define('TABLE_HEADING_EDIT', '選取');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL', '產品型號');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model
// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE', '圖片');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TEXT_ACTIVE_ELEMENT', '編輯元件');
define('TEXT_INFORMATIONS', '資訊');
define('TEXT_MARKED_ELEMENTS', '勾選的元件');
define('TEXT_INSERT_ELEMENT', '新增元件');
define('TEXT_WARN_MAIN', '<font size="-1">缺貨中</font>');
define('TEXT_NEW_PRODUCT', '新商品在 &quot;%s&quot;');
define('TEXT_CATEGORIES', '分類：');
define('TEXT_PRODUCTS', '商品：');
define('TEXT_PRODUCTS_PRICE_INFO', '價格：');
define('TEXT_PRODUCTS_TAX_CLASS', '稅別：');
define('TEXT_PRODUCTS_AVERAGE_RATING', '平均評等：');
define('TEXT_PRODUCTS_QUANTITY_INFO', '數量：');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', '折扣設定：');
define('TEXT_DATE_ADDED', '新增日期：');
define('TEXT_DATE_AVAILABLE', '上架日期：');
define('TEXT_LAST_MODIFIED', '最後修改日期：');
define('TEXT_IMAGE_NONEXISTENT', '沒有圖片');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '請新增一個分類或商品 &nbsp;<b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', '更多完整訊息,請到商品 <a href="http://%s" target="blank"><u>網頁</u></a>');
define('TEXT_PRODUCT_DATE_ADDED', '此商品加入分類日期： %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '此商品預定入庫日期： %s.');
define('TEXT_EDIT_INTRO', '請做適當修改');
define('TEXT_EDIT_CATEGORIES_ID', '分類編號：');
define('TEXT_EDIT_CATEGORIES_NAME', '分類名稱：');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', '摘要：');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', '分類說明：');
define('TEXT_EDIT_CATEGORIES_IMAGE', '分類圖片：');
define('TEXT_EDIT_SORT_ORDER', '排序順序：');
define('TEXT_INFO_COPY_TO_INTRO', '請選擇一個你想將所指定的元件複製到的分類位置');
define('TEXT_INFO_CURRENT_CATEGORIES', '目前的分類：');
define('TEXT_INFO_HEADING_NEW_CATEGORY', '新增分類');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '編輯分類');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '刪除分類');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '搬移分類');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '刪除商品');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '新增商品');
define('TEXT_INFO_HEADING_COPY_TO', '複製到');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', '搬移元件');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', '刪除元件');
define('TEXT_DELETE_CATEGORY_INTRO', '確定要刪除這個分類？');
define('TEXT_DELETE_PRODUCT_INTRO', '確定要永久刪除這個商品？');
define('TEXT_DELETE_WARNING_CHILDS', '<b>注意：</b> 這個分類內尚有 %s 個子分類！');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>注意：</b> 這個分類內尚有 %s 個商品！');
define('TEXT_MOVE_WARNING_CHILDS', '<b>請注意：</b> 目前仍有 %s 個「子分類」連結到此分類！');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>請注意：</b> 目前仍有 %s 個商品連結到此分類！');
define('TEXT_MOVE_PRODUCTS_INTRO', '請選擇一個要放 <b>%s</b> 的商品分類');
define('TEXT_MOVE_CATEGORIES_INTRO', '請選擇一個要放 <b>%s</b> 的商品分類');
define('TEXT_MOVE', '搬移<b>%s</b>到：');
define('TEXT_MOVE_ALL', '搬移全部資料至：');
define('TEXT_NEW_CATEGORY_INTRO', '<br>請填寫下列新分類資料');
define('TEXT_CATEGORIES_NAME', '分類名稱：');
define('TEXT_CATEGORIES_IMAGE', '分類圖片：');
define('TEXT_META_TITLE', 'Meta 標頭:');
define('TEXT_META_DESCRIPTION', 'Meta 說明:');
define('TEXT_META_KEYWORDS', 'Meta 關鍵字:');
define('TEXT_SORT_ORDER', '排序：');
define('TEXT_PRODUCTS_STATUS', '產品狀態：');
define('TEXT_PRODUCTS_STARTPAGE', '顯示在首頁');
define('TEXT_PRODUCTS_STARTPAGE_YES', '是');
define('TEXT_PRODUCTS_STARTPAGE_NO', '否');
define('TEXT_PRODUCTS_STARTPAGE_SORT', '首頁排序：');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '上架日期：');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', '上架');
define('TEXT_PRODUCT_NOT_AVAILABLE', '下架');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', '（請選擇）商品廠商：');
define('TEXT_PRODUCTS_NAME', '品名：');
define('TEXT_PRODUCTS_DESCRIPTION', '商品說明：');
define('TEXT_PRODUCTS_QUANTITY', '商品存量：');
define('TEXT_PRODUCTS_MODEL', '商品型號：');
define('TEXT_PRODUCTS_IMAGE', '商品圖片：');
define('TEXT_PRODUCTS_URL', '商品廠商網址：');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(without http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Products Price:');
define('TEXT_PRODUCTS_WEIGHT', 'Products Weight:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(不用打 http://)</small>');
define('TEXT_PRODUCTS_PRICE', '商品價格：');
define('TEXT_PRODUCTS_WEIGHT', '重量：');
define('TEXT_PRODUCTS_EAN', '條碼/EAN');
define('TEXT_PRODUCT_LINKED_TO', '連結至:');
define('TEXT_DELETE', '刪除');
define('EMPTY_CATEGORY', '目前的分類是空的');
define('TEXT_HOW_TO_COPY', '複製方式：');
define('TEXT_COPY_AS_LINK', '僅複製源元件的連結');
define('TEXT_COPY_AS_DUPLICATE', '複製成新的元件');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '錯誤：不能在同一個分類內作連結 ！');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '錯誤：分類圖片資料夾無法寫入（權限錯誤）：' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '錯誤：分類圖片的資料夾不存在： ' . DIR_FS_CATALOG_IMAGES);
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED', '允許折扣：');
define('HEADING_PRICES_OPTIONS', '<b>價格設定</b>');
define('HEADING_PRODUCT_IMAGES', '<b>產品圖片</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO', '<small>公斤(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION', '簡短說明：');
define('TEXT_PRODUCTS_KEYWORDS', '搜尋使用的關鍵字:');
define('TXT_STK', '購買：');
define('TXT_PRICE', '每一個：');
define('TXT_NETTO', '網路售價：');
define('TXT_STAFFELPREIS', '分級價格');
define('HEADING_PRODUCTS_MEDIA', '<b>商品媒體</b>');
define('TABLE_HEADING_PRICE', '價格');
define('TEXT_FSK18', '未成年禁止購買：');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE', '分類列表樣板');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING', '商品列表樣板');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Sorting:');
define('TEXT_PRODUCTS_SORT', '排列順序：');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER', '商品排序');
define('TXT_PRICES', '價格');
define('TXT_NAME', '品名');
define('TXT_ORDERED', '銷售量');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT', 'Sorting');
define('TXT_SORT', '排序');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT', '重量');
define('TXT_QTY', '庫存量');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE', '推出日期');
define('TXT_MODEL', '產品型號');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TEXT_MULTICOPY', '多重複製');
define('TEXT_MULTICOPY_DESC', '複製 / 指定的元件至多個分類位置（如果有勾選核取方塊，單一複製的設定將不予理會）');
define('TEXT_SINGLECOPY', '單一複製');
define('TEXT_SINGLECOPY_DESC', '複製 / 指定的元件至單一分類位置');
define('TEXT_SINGLECOPY_CATEGORY', '分類：');
define('TEXT_PRODUCTS_VPE', '(請選擇)內含收費單位');
define('TEXT_PRODUCTS_VPE_VISIBLE', '顯示內含收費');
define('TEXT_PRODUCTS_VPE_VALUE', ' 價格：');
define('CROSS_SELLING', '相關商品販售');
define('CROSS_SELLING_SEARCH', '搜尋產品：');
define('BUTTON_EDIT_CROSS_SELLING', '交叉販售');
define('HEADING_DEL', '刪除');
define('HEADING_ADD', '新增?');
define('HEADING_GROUP', '群組');
define('HEADING_SORTING', '排序');
define('HEADING_MODEL', '型號');
define('HEADING_NAME', '商品');
define('HEADING_CATEGORY', '類別');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_SORT_ASC', '升冪');
define('TEXT_SORT_DESC', '降冪');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS', '字元');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

?>