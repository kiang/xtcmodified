<?php
/* --------------------------------------------------------------
   $Id: english.php 1231 2005-09-21 13:05:36Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.99 2003/05/28); www.oscommerce.com 
   (c) 2003	 nextcommerce (german.php,v 1.24 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contributions:
   Customers Status v3.x (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_GB@euro', 'en_GB', 'en-GB', 'en', 'en_GB.ISO_8859-1', 'English', 'en_GB.ISO_8859-15');
define('DATE_FORMAT_SHORT', '%Y/%m/%d'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y年 %m月 %d日 %A'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
    if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
    }
}
// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="zh-tw"');
// page title
define('TITLE', 'xt:Commerce 網站後端管理');
// header text in includes/header.php
define('HEADER_TITLE_TOP', '系統管理');
define('HEADER_TITLE_SUPPORT_SITE', '支援網站');
define('HEADER_TITLE_ONLINE_CATALOG', '線上目錄');
define('HEADER_TITLE_ADMINISTRATION', '系統管理');
// text for gender
define('MALE', '先生');
define('FEMALE', '小姐');
// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');
// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '系統設定');
define('BOX_HEADING_MODULES', '模組管理區');
define('BOX_HEADING_ZONE', '地區 / 稅');
define('BOX_HEADING_CUSTOMERS', '會員管理');
define('BOX_HEADING_PRODUCTS', '分類/商品');
define('BOX_HEADING_STATISTICS', '統計');
define('BOX_HEADING_TOOLS', '工具');
define('BOX_HEADING_LOCALIZATION', '語言  /貨幣');
define('BOX_HEADING_TEMPLATES', '樣版');
define('BOX_HEADING_LOCATION_AND_TAXES', '地區 / 稅別');
define('BOX_HEADING_CATALOG', '目錄管理');
define('BOX_CONTENT', '內容管理員');
define('TEXT_ALLOWED', '權限');
define('TEXT_ACCESS', '使用範圍');
define('BOX_CONFIGURATION', '一般設定');
define('BOX_CONFIGURATION_1', '商店基本設定');
define('BOX_CONFIGURATION_2', '最小值設定');
define('BOX_CONFIGURATION_3', '最大值設定');
define('BOX_CONFIGURATION_4', '圖片設定');
define('BOX_CONFIGURATION_5', '客戶帳號註冊設定');
define('BOX_CONFIGURATION_6', '模組設定');
define('BOX_CONFIGURATION_7', '運送設定');
define('BOX_CONFIGURATION_8', '商品列表設定');
define('BOX_CONFIGURATION_9', '庫存設定');
define('BOX_CONFIGURATION_10', '網頁載入設定');
define('BOX_CONFIGURATION_11', '快取設定');
define('BOX_CONFIGURATION_12', '郵件設定');
define('BOX_CONFIGURATION_13', '下載設定');
define('BOX_CONFIGURATION_14', 'Gzip壓縮設定');
define('BOX_CONFIGURATION_15', 'Sessions');
define('BOX_CONFIGURATION_16', '搜尋器／關鍵字');
define('BOX_CONFIGURATION_17', '額外模組設定');
define('BOX_CONFIGURATION_18', 'Vat ID');
define('BOX_CONFIGURATION_19', '網站經營分析工具');
define('BOX_CONFIGURATION_22', '搜尋選項');
define('BOX_MODULES', '付款/出貨/訂單');
define('BOX_PAYMENT', '付款模組');
define('BOX_SHIPPING', '出貨模組');
define('BOX_ORDER_TOTAL', '訂單總計');
define('BOX_CATEGORIES', '分類/商品');
define('BOX_PRODUCTS_ATTRIBUTES', '設定規格屬性選項');
define('BOX_MANUFACTURERS', '廠商設定');
define('BOX_REVIEWS', '商品回應');
define('BOX_CAMPAIGNS', '活動報表');
define('BOX_XSELL_PRODUCTS', '相關商品販售管理');
define('BOX_SPECIALS', '特價管理');
define('BOX_PRODUCTS_EXPECTED', '即將上市商品');
define('BOX_CUSTOMERS', '會員/客戶');
define('BOX_ACCOUNTING', '管理員權限');
define('BOX_CUSTOMERS_STATUS', '會員群組設定');
define('BOX_ORDERS', '訂單管理');
define('BOX_COUNTRIES', '國家');
define('BOX_ZONES', '地區');
define('BOX_GEO_ZONES', '課稅地區');
define('BOX_TAX_CLASSES', '稅別設定');
define('BOX_TAX_RATES', '稅率建立');
define('BOX_HEADING_REPORTS', '各類報表');
define('BOX_PRODUCTS_VIEWED', '商品瀏覽排行');
define('BOX_STOCK_WARNING', '庫存資訊');
define('BOX_PRODUCTS_PURCHASED', '商品銷售排行');
define('BOX_STATS_CUSTOMERS', '客戶購物排行榜');
define('BOX_BACKUP', '資料庫備份');
define('BOX_BANNER_MANAGER', '廣告區塊管理');
define('BOX_CACHE', '快取控制');
define('BOX_DEFINE_LANGUAGE', '語系定義');
define('BOX_FILE_MANAGER', '檔案總管');
define('BOX_MAIL', '電子郵件');
define('BOX_NEWSLETTERS', '商品通知管理');
define('BOX_SERVER_INFO', '伺服器資訊');
define('BOX_WHOS_ONLINE', '誰在線上');
define('BOX_TPL_BOXES', '區塊訂單排序');
define('BOX_CURRENCIES', '貨幣設定');
define('BOX_LANGUAGES', '語言設定');
define('BOX_ORDERS_STATUS', '訂單狀態');
define('BOX_ATTRIBUTES_MANAGER', '商品屬性管理');
define('BOX_MODULE_NEWSLETTER', '電子報');
define('BOX_SHIPPING_STATUS', '出貨時間設定');
define('BOX_SALES_REPORT', '銷售報表');
define('BOX_MODULE_EXPORT', '輸出模組');
define('BOX_HEADING_GV_ADMIN', '禮券／折價券');
define('BOX_GV_ADMIN_QUEUE', '禮券銷售管理');
define('BOX_GV_ADMIN_MAIL', '郵寄禮券');
define('BOX_GV_ADMIN_SENT', '禮券郵寄管理');
define('BOX_COUPON_ADMIN', '折價券管理');
define('BOX_TOOLS_BLACKLIST', '信用卡黑名單');
define('BOX_IMPORT', '匯入／匯出');
define('BOX_PRODUCTS_VPE', '內含收費單元設定');
define('BOX_CAMPAIGNS_REPORT', '活動報表輸出');
define('BOX_ORDERS_XSELL_GROUP', '相關販售群組');
define('TXT_GROUPS', '<b>群組</b>:');
define('TXT_SYSTEM', '系統');
define('TXT_CUSTOMERS', '客戶 / 訂單');
define('TXT_PRODUCTS', '分類 / 商品');
define('TXT_STATISTICS', '狀態');
define('TXT_TOOLS', '工具');
define('TEXT_ACCOUNTING', '管理：');
// javascript messages
define('JS_ERROR', '錯誤：當您送出表單時發現錯誤!\n請確認下列資料是否正確:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* 新商品屬性需要價格\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* 新商品屬性需要價格前置字元 (+/-)n');
define('JS_PRODUCTS_NAME', '* 新商品需要名稱n');
define('JS_PRODUCTS_DESCRIPTION', '* 新商品需要說明n');
define('JS_PRODUCTS_PRICE', '* 新商品需要價格n');
define('JS_PRODUCTS_WEIGHT', '* 新商品需要重量n');
define('JS_PRODUCTS_QUANTITY', '* 新商品需要數量n');
define('JS_PRODUCTS_MODEL', '* 新商品需要型號n');
define('JS_PRODUCTS_IMAGE', '* 新商品需要圖片n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* 這個商品必須設定新價格n');
define('JS_GENDER', '* 請選擇 \'性別\' n');
define('JS_FIRST_NAME', '* 請填寫 \'姓\' 最少需 \' . (ENTRY_FIRST_NAME_MIN_LENGTH/2) . \' 字.n');
define('JS_LAST_NAME', '* 請填寫 \'名\' 最少需 \' . ENTRY_LAST_NAME_MIN_LENGTH . \' 字.n');
define('JS_DOB', '* 請填寫 \' 生日 \' ，參考格式: xx/xx/xxxx (日/月/年).n');
define('JS_EMAIL_ADDRESS', '* 請填寫 \' 電子郵件\' 最少需要 \' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . \' 字.\n');
define('JS_ADDRESS', '* 請填寫 \' 路街道/門牌號碼 \' 最少需 \' . ENTRY_STREET_ADDRESS_MIN_LENGTH . \' 字.\n');
define('JS_POST_CODE', '* 請填寫 \' 郵遞區號 \' 最少需 \' . ENTRY_POSTCODE_MIN_LENGTH . \' 字.n');
define('JS_CITY', '* 請填寫 \'鄉鎮市區 \' 最少需 \' . ENTRY_CITY_MIN_LENGTH . \' 字.n');
define('JS_STATE', '* 請選擇 \' 縣市\' n');
define('JS_STATE_SELECT', '-- 請選擇 --');
define('JS_ZONE', '* 請選擇所在 \' 縣市\'');
define('JS_COUNTRY', '* 請選擇 \' 國家\' n');
define('JS_TELEPHONE', '* 請填寫 \' 電話號碼 \' 最少需 \' . ENTRY_TELEPHONE_MIN_LENGTH . \' 字.n');
define('JS_PASSWORD', '* 請填寫 \'密碼 \' 及 \' 確認密碼 \' 密碼最少需要 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 字.n');
define('JS_ORDER_DOES_NOT_EXIST', '訂單編號 %s 不存在!');
define('CATEGORY_PERSONAL', '個人資料');
define('CATEGORY_ADDRESS', '通訊地址');
define('CATEGORY_CONTACT', '聯絡方式');
define('CATEGORY_COMPANY', '公司資料');
define('CATEGORY_OPTIONS', '選項');
define('ENTRY_GENDER', '性別：');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_FIRST_NAME', '姓：');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' 個字</span>');
define('ENTRY_LAST_NAME', '名：');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_LAST_NAME_MIN_LENGTH . ' 幾個字</span>');
define('ENTRY_DATE_OF_BIRTH', '生日：');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(例如 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail：');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' 個字</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">這個電子信箱無效！</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">這個電子信箱已經存在！</span>');
define('ENTRY_COMPANY', '公司名稱：');
define('ENTRY_STREET_ADDRESS', '路街道/門牌號碼：');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' 個字</span>');
define('ENTRY_SUBURB', '村里鄰：');
define('ENTRY_POST_CODE', '郵遞區號：');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_POSTCODE_MIN_LENGTH . ' 個字</span>');
define('ENTRY_CITY', '鄉鎮市區：');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_CITY_MIN_LENGTH . ' 個字</span>');
define('ENTRY_STATE', '縣市：');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_COUNTRY', '國家：');
define('ENTRY_TELEPHONE_NUMBER', '電話：');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">少於 ' . ENTRY_TELEPHONE_MIN_LENGTH . ' 個字</span>');
define('ENTRY_FAX_NUMBER', '傳真：');
define('ENTRY_NEWSLETTER', '電子報：');
define('ENTRY_CUSTOMERS_STATUS', '會員群組：');
define('ENTRY_NEWSLETTER_YES', '訂閱');
define('ENTRY_NEWSLETTER_NO', '不訂閱');
define('ENTRY_MAIL_ERROR', '&nbsp;請選擇其中一個選項');
define('ENTRY_PASSWORD', '密碼：');
define('ENTRY_PASSWORD_ERROR', '&nbsp;密碼字數應該大於 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 個字');
define('ENTRY_MAIL_COMMENTS', '新增與eMail相關的註解:');
define('ENTRY_MAIL', '用E-Mail寄送密碼給客戶？');
define('YES', '是');
define('NO', '否');
define('SAVE_ENTRY', '確定儲存？');
define('TEXT_CHOOSE_INFO_TEMPLATE', '(請選擇)商品說明頁模版');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', '(請選擇)商品屬性模版');
define('TEXT_SELECT', '-- 請選擇 --');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT', '選擇的');
define('ICON_BIG_WARNING', '注意！');
define('ICON_CROSS', '否');
define('ICON_CURRENT_FOLDER', '目前資料夾');
define('ICON_DELETE', '刪除');
define('ICON_EDIT', '編輯');
define('ICON_ERROR', '錯誤');
define('ICON_FILE', '檔案');
define('ICON_FILE_DOWNLOAD', '下載');
define('ICON_FOLDER', '資料夾');
define('ICON_LOCKED', '鎖住');
define('ICON_POPUP', '預覽廣告');
define('ICON_PREVIOUS_LEVEL', '預設值');
define('ICON_PREVIEW', '預覽');
define('ICON_STATISTICS', '統計資料');
define('ICON_SUCCESS', '完成');
define('ICON_TICK', '是');
define('ICON_UNLOCKED', '解開');
define('ICON_WARNING', '警告');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', ' %s ／ %d 頁');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個廣告)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個國家)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個客戶)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個貨幣)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個語言)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個製造廠商)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 份電子報)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 筆訂單)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個訂單狀態)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個相關商品群組)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個內含收費單元)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', '顯示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 出貨狀態)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個商品)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個商品上市預告)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個商品回應)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個特價商品)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個稅別)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個稅區)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個稅率)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '顯示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 個地區)');
define('PREVNEXT_BUTTON_PREV', '&lt;&lt;〈');
define('PREVNEXT_BUTTON_NEXT', '〉&gt;&gt;');
define('TEXT_DEFAULT', '預設');
define('TEXT_SET_DEFAULT', '設為預設');
define('TEXT_FIELD_REQUIRED', '&nbsp;* 必填');
define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '錯誤：沒有預設的貨幣，請到「語言／地區」&gt;&gt;「貨幣設定」去設定');
define('TEXT_CACHE_CATEGORIES', '類別區');
define('TEXT_CACHE_MANUFACTURERS', '廠商區');
define('TEXT_CACHE_ALSO_PURCHASED', '推薦商品模組');
define('TEXT_NONE', '--無--');
define('TEXT_TOP', '頂端');
define('ERROR_DESTINATION_DOES_NOT_EXIST', '錯誤: 目的地不存在');
define('ERROR_DESTINATION_NOT_WRITEABLE', '錯誤: 目的地無法寫入');
define('ERROR_FILE_NOT_SAVED', '錯誤: 上傳檔案無法儲存');
define('ERROR_FILETYPE_NOT_ALLOWED', '錯誤: 不允許檔案上傳');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '完成: 檔案上傳完成');
define('WARNING_NO_FILE_UPLOADED', '警告: 沒有檔案上傳');
define('DELETE_ENTRY', '刪除輸入？');
define('TEXT_PAYMENT_ERROR', '<b>注意:</b><br />請選擇至少一種付款方式！');
define('TEXT_SHIPPING_ERROR', '<b>注意:</b><br />請選擇至少一種運送方式！');
define('TEXT_NETTO', '不含稅：');
define('ENTRY_CID', '客戶ID：');
define('IP', '訂單 IP:');
define('CUSTOMERS_MEMO', '備註：');
define('DISPLAY_MEMOS', '顯示／內容');
define('TITLE_MEMO', '客戶備註');
define('ENTRY_LANGUAGE', '語系：');
define('CATEGORIE_NOT_FOUND', '搜尋商品分類不存在！');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', '兌換禮券');
define('IMAGE_ICON_STATUS_GREEN_STOCK', '有庫存');
define('IMAGE_ICON_STATUS_GREEN', '啟用中');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', '啟用');
define('IMAGE_ICON_STATUS_RED', '停用中');
define('IMAGE_ICON_STATUS_RED_LIGHT', '停用');
define('IMAGE_ICON_INFO', '選擇');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
define('_JANUARY', '一月 ');
define('_FEBRUARY', '二月 ');
define('_MARCH', '三月 ');
define('_APRIL', '四月 ');
define('_MAY', '五月 ');
define('_JUNE', '六月 ');
define('_JULY', '七月 ');
define('_AUGUST', '八月 ');
define('_SEPTEMBER', '九月 ');
define('_OCTOBER', '十月 ');
define('_NOVEMBER', '十一月 ');
define('_DECEMBER', '十二月 ');
// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', '點選此處即可取消訂閱電子報:');
define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '顯示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 禮券)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '顯示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 優待券)');
define('TEXT_VALID_PRODUCTS_LIST', '商品列表');
define('TEXT_VALID_PRODUCTS_ID', '商品 ID');
define('TEXT_VALID_PRODUCTS_NAME', '商品名稱');
define('TEXT_VALID_PRODUCTS_MODEL', '商品型號');
define('TEXT_VALID_CATEGORIES_LIST', '商品分類列表');
define('TEXT_VALID_CATEGORIES_ID', '商品分類 ID');
define('TEXT_VALID_CATEGORIES_NAME', '商品分類名稱');
define('SECURITY_CODE_LENGTH_TITLE', '禮券兌換密碼長度');
define('SECURITY_CODE_LENGTH_DESC', '輸入禮券兌換密碼字數(最多 16 個字元)');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', '加入會員贈送禮券的金額');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', '贈送禮券：如果您不要在新增會員時立即寄送禮券可以輸入 0 表示沒有額度。(※不必輸入貨幣標示)');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', '加入會員贈送折價券的密碼');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', '贈送折價券：如果您不要在新增會員時立即寄送折價券請留空白，否則請填入你預定使用折價券的密碼');
define('TXT_ALL', '全部');
// UST ID
define('HEADING_TITLE_VAT', 'Vat-ID');
define('ENTRY_VAT_ID', 'Vat-ID');
define('ENTRY_CUSTOMERS_VAT_ID', 'VatID:');
define('TEXT_VAT_FALSE', '<font color="FF0000">已選取／否！</font>');
define('TEXT_VAT_TRUE', '<font color="FF0000">已選取／是！</font>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<font color="FF0000">未選取／不知名的國家！</font>');
define('TEXT_VAT_UNKNOWN_ALGORITHM', '<font color="FF0000">未選取／無法檢查！</font>');
define('ENTRY_VAT_ID_ERROR', '<font color="FF0000">* 您的 Vat ID 有誤！</font>');
define('ERROR_GIF_MERGE', '你的伺服器圖形處理函數(GDlib)有誤，無法合併影像，請聯絡主機服務商');
define('ERROR_GIF_UPLOAD', '你的伺服器圖形處理函數(GDlib)有錯誤或是不支援，無法處理影像效果，請聯絡主機服務商');
define('TEXT_REFERER', '參照: ');
// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google 網站地圖');
// EOF - Tomcraft - 2009-06-17 Google Sitemap
// BOF - web28 - 2010-05-07 - PayPal API Modul
define('BOX_PAYPAL', 'PayPal');
// EOF  - web28 - 2010-05-07 - PayPal API Modul
// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE', 'Moneybookers email address');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC', 'Email address you have registered with Moneybookers.<br />If not having a Moneybookers account you may get one for free at <a href="https://www.moneybookers.com/app/register.pl" target="_blank">Moneybookers.com</a>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE', 'Merchant ID');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC', 'Your Moneybookers Merchant ID');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE', 'Moneybookers Secret Word');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC', 'The secret word can be found in your Moneybookers profile (this is not your password!). It must be lower-case characters and numbers only.<br />To activate the processing at Moneybookers: Send an email including your Moneybookers email address and shopsystems domain name<br />To: <a href="mailto:ecommerce@moneybookers.com?subject=XTCOMMERCE: Activation of Moneybookers Quick Checkout">ecommerce@moneybookers.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE', 'order status - temporary order');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC', 'A temporary order is created after submitting "send order" during order process. If problems occur you find an order with this status.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'order status - payment OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC', 'If everything is fine and transaction confirmed by Moneybookers.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'order status - payment on hold');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC', 'If someone does not have balance at his Moneybookers account. The payment is pending until moneybookers receive settlement.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'order status - payment cancelled');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC', 'If a (credit card) payment is rejected.');
define('MB_TEXT_MBDATE', 'last update:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Status:');
define('MB_ERROR_NO_MERCHANT', 'There is no Moneybookers account associated with this email address.');
define('MB_MERCHANT_OK', 'Moneybookers account OK, merchant ID %s received and saved.');
define('MB_INFO', '<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />xt:Commerce-user may accept credit cards, debit notes, DIRECTebanking.com, Giropay and other major local payment payments after one single activation. You do not need the hassle of contracts with every payment processor if going with Moneybookers. All is done with <a href="https://www.moneybookers.com/app/register.pl" target="_blank"><b>free Moneybookers account</b></a>. Additional payment options are free of charge, and there are <b>no monthy fees or activation costs</b>.<br /><br /><b>Your advantage:</b><br />- more sales by accepting all major payments<br />- reduced costs and effort - just one contract<br />- easy processing for your customer - direct payment without need to create an extra account<br />- one click activation and integration<br />- good <a href="http://www.moneybookers.com/app/help.pl?s=m_fees" target="_blank"><b>conditions</b></a><br />- instant payment notification and proof of customer details<br />- no extra costs, even abroad<br />- 11 mio. customers worldwide');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP', 'CG-authorizations');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', '首頁');
define('BOX_HEADING_CONFIGURATION2', '進階設定');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
// BOF - Tomcraft - 2009-11-28 - Included xs:booster
define('BOX_HEADING_XSBOOSTER', 'xs:booster');
define('BOX_XSBOOSTER_LISTAUCTIONS', '列出拍賣');
define('BOX_XSBOOSTER_ADDAUCTIONS', '新增拍賣');
define('BOX_XSBOOSTER_CONFIG', '基礎設定');
// EOF - Tomcraft - 2009-11-28 - Included xs:booster
//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER', '客戶：');
define('ASB_QUICK_SEARCH_ORDER_ID', '訂單：');
define('ASB_QUICK_SEARCH_ARTICLE', '產品：');
define('ASB_QUICK_SEARCH_EMAIL', '信箱：');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET', '全選');
define('BUTTON_UNSET', '全部取消');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes
//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS', '列');
define('TABLE_HEADING_RESET', '重設統計資料');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW', '關閉視窗');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW

?>