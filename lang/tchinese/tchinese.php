<?php
/* -----------------------------------------------------------------------------------------
   $Id: tchinese.php 35 2006-12-28 13:17:39Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com
   (c) 2003  nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------------------------------- */

/*
 *
 *  DATE / TIME
 *
 */

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', '首頁');     
define('HEADER_TITLE_CATALOG', '目錄位置');

define('HTML_PARAMS','dir="ltr" lang="zh-tw"');

@setlocale(LC_TIME, 'zh_TW@UTF-8', 'zh_tw', 'zh-tw', 'zh_TW', 'zh-TW', 'zh_tw.UTF-8', 'zh-tw.UTF-8' , 'zh_TW.UTF-8', 'zh-TW.UTF-8' , 'Taiwan');

define('DATE_FORMAT_SHORT', '%Y.%m.%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y年 %m月 %d日 %A'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');

function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

define('MALE', '先生');
define('FEMALE', '小姐');

/*
 *
 *  BOXES
 *
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','禮券兌換');

define('BOX_TITLE_STATISTICS','商店狀態：');
define('BOX_ENTRY_CUSTOMERS','客戶');
define('BOX_ENTRY_PRODUCTS','商品');
define('BOX_ENTRY_REVIEWS','回應');
define('TEXT_VALIDATING','尚未生效');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s 首頁');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', '更多商品');

define('BOX_HEADING_ADD_PRODUCT_ID','放到購物車');

define('BOX_LOGINBOX_STATUS','客戶群組:');     
define('BOX_LOGINBOX_DISCOUNT', '商品折扣');
define('BOX_LOGINBOX_DISCOUNT_TEXT', '折扣');
define('BOX_LOGINBOX_DISCOUNT_OT', '');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', '我要回應此商品！');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s 最高 5 顆星!');

// pull down default text
define('PULL_DOWN_DEFAULT', '請選擇');

// javascript messages
define('JS_ERROR', '您的資料還沒填完整喔！\n麻煩再看看您還漏掉什麼？\n\n');

define('JS_REVIEW_TEXT', '* 您的回應最少要' . REVIEW_TEXT_MIN_LENGTH . ' 個字...\n');
define('JS_REVIEW_RATING', '* 請給這商品評等\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* 請選一個付款方式\n');
define('JS_ERROR_SUBMITTED', '此表單已經送出，請按 ok 後等待處理');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '您必須選一個付款方式');

/*
 *
 * ACCOUNT FORMS
 *
 */

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', '請選擇性別');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', '中文姓名的字數不可少於 ' . (ENTRY_FIRST_NAME_MIN_LENGTH/2) . ' 個字');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', '暱稱的字數不得少於 ' . ENTRY_LAST_NAME_MIN_LENGTH . ' 個字');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', '請確認生日的格式 日.月.年 (範例： 22.05.1988) ');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* 日.月.年(22.05.1988)');
define('ENTRY_EMAIL_ADDRESS_ERROR', '電子郵件不可少於 ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' 個字');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '電子郵件格式錯誤 - 請重新輸入');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '這個電子郵件已有人註冊使用，請重新輸入！');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', '地址不可少於' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' 個字');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', '郵遞區號最少必須 ' . ENTRY_POSTCODE_MIN_LENGTH . ' 個字');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', '鄉／鎮／市的字數最少必須 ' . ENTRY_CITY_MIN_LENGTH . ' 個字');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', '縣市的字數最少必須 ' . ENTRY_STATE_MIN_LENGTH . ' 個字');
define('ENTRY_STATE_ERROR_SELECT', '請從下拉式選單中選取縣市...');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', '請從下拉式選單中選取國家名稱');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '電話號碼不得少於 ' . ENTRY_TELEPHONE_MIN_LENGTH . ' 個字');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', '密碼的字數最少必須 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 個字');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '密碼不符');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR','密碼的字數最少必須 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 個字');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', '新密碼的字數最少必須 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 個字');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '密碼不符');

/*
 *
 *  RESTULTPAGES
 *
 */

define('TEXT_RESULT_PAGE', '總頁數：');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '顯示 <b>%d</b> 到 <b>%d</b> （共 <b>%d</b> 件商品）');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '顯示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 筆訂單）');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '顯示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 個回應）');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '顯示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 件新進商品）');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '顯示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 件特價品）');

/*
 *
 * SITE NAVIGATION
 *
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE', '上1頁');
define('PREVNEXT_TITLE_NEXT_PAGE', '下1頁');
define('PREVNEXT_TITLE_PAGE_NO', '第 %d 頁');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '上 %d 頁');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '下 %d 頁');

/*
 *
 * PRODUCT NAVIGATION
 *
 */

define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;往前]');
define('PREVNEXT_BUTTON_NEXT', '[往後&nbsp;&gt;&gt;]');

/*
 *
 * IMAGE BUTTONS
 *
 */

define('IMAGE_BUTTON_ADD_ADDRESS', '新增地址');
define('IMAGE_BUTTON_BACK', '回上一項');
define('IMAGE_BUTTON_CHANGE_ADDRESS', '修改地址');
define('IMAGE_BUTTON_CHECKOUT', '結帳');
define('IMAGE_BUTTON_CONFIRM_ORDER', '訂單確認');
define('IMAGE_BUTTON_CONTINUE', '下一項');
define('IMAGE_BUTTON_DELETE', '刪除');
define('IMAGE_BUTTON_LOGIN', '登入');
define('IMAGE_BUTTON_IN_CART', '放到購物車');
define('IMAGE_BUTTON_SEARCH', '搜尋');
define('IMAGE_BUTTON_UPDATE', '上傳／更新');
define('IMAGE_BUTTON_UPDATE_CART', '更改購物清單');
define('IMAGE_BUTTON_WRITE_REVIEW', '編寫回應');
define('IMAGE_BUTTON_ADMIN', '管理');
define('IMAGE_BUTTON_PRODUCT_EDIT', '編輯商品');
define('IMAGE_BUTTON_LOGIN', '會員登入');

define('SMALL_IMAGE_BUTTON_DELETE', '刪除');
define('SMALL_IMAGE_BUTTON_EDIT', '編輯');
define('SMALL_IMAGE_BUTTON_VIEW', '檢視');

define('ICON_ARROW_RIGHT', '更多');
define('ICON_CART', '放到購物車');
define('ICON_SUCCESS', '完成');
define('ICON_WARNING', '注意');

/*
 *
 *  GREETINGS
 *
 */

define('TEXT_GREETING_PERSONAL', '感謝您再度光臨 <span class="greetUser">%s!</span> 本商店推出了以下 <a style="text-decoration:underline;" href="%s">新商品</a>');
define('TEXT_GREETING_PERSONAL_RELOGON', '請 <a href="%s">登入會員</a>。');
define('TEXT_GREETING_GUEST', '請&nbsp;<a href="%s">[登入]</a>&nbsp;或&nbsp;<a href="%s">[註冊]</a>&nbsp;會員');

define('TEXT_SORT_PRODUCTS', '商品排序方式');
define('TEXT_DESCENDINGLY', '遞減');
define('TEXT_ASCENDINGLY', '遞增');
define('TEXT_BY', ' 排序鍵 ');

define('TEXT_REVIEW_BY', '來自 %s 的回應');
define('TEXT_REVIEW_WORD_COUNT', '%s 字');
define('TEXT_REVIEW_RATING', '評比： %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', '回應時間： %s');
define('TEXT_NO_REVIEWS', '目前沒有任何回應.');
define('TEXT_NO_NEW_PRODUCTS', '目前沒有新進商品');
define('TEXT_UNKNOWN_TAX_RATE', '稅率尚未定義');

/*
 *
 * WARNINGS
 *
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', '警告： 安裝目錄仍未刪除： ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/xtc_installer. 基於安全的考量，請將這個目錄刪除');
define('WARNING_CONFIG_FILE_WRITEABLE', '警告： 設定檔的權限允許被寫入： ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. 這將具有潛在的系統安全風險 - 請將檔案設定為正確的使用權限');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', '警告： sessions 資料夾不存在： ' . xtc_session_save_path() . '在這個目錄未建立之前 Sessions 無法正常動作');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', '警告： 無法寫入sessions 資料夾： ' . xtc_session_save_path() . '伺服器使用者權限未正確設定之前 Sessions 無法正常動作，請作適度修改');
define('WARNING_SESSION_AUTO_START', '警告： session.auto_start 已啟動 - 請到 php.ini 內關閉這個功能，並重新啟動網頁主機！');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', '警告： 下載的商品資料夾不存在：' . DIR_FS_DOWNLOAD . '這個資料夾未建立，無法下載商品');

define('SUCCESS_ACCOUNT_UPDATED', '您的帳號資訊已經更新');
define('SUCCESS_PASSWORD_UPDATED', '您的密碼已經更新！');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', '密碼不符，請再試試');
define('TEXT_MAXIMUM_ENTRIES', '<font color="#ff0000"><b>註:</b></font> 通訊錄上限為 %s 筆');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', '已從通訊錄移除選取的地址');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', '通訊錄更新完成');
define('WARNING_PRIMARY_ADDRESS_DELETION', '預設的通訊地址不能刪除，請選擇其他通訊地址--設定成預設地址後--才能刪除');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', '通訊錄資料不存在');
define('ERROR_ADDRESS_BOOK_FULL', '通訊錄筆數已滿，請先刪除不需要的地址才能再新增通訊錄');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED', '請閱讀購物條款，並勾選同意購物條款，才能進入下一個訂單確認程序');

define('SUB_TITLE_OT_DISCOUNT','折扣：');

define('TAX_ADD_TAX','含稅價');
define('TAX_NO_TAX','未稅價');

define('NOT_ALLOWED_TO_SEE_PRICES','您目前的權限，不被允許檢視商品價格');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','您目前的權限，不被允許檢視商品價格, 請加入會員');

define('TEXT_DOWNLOAD','下載');
define('TEXT_VIEW','檢視');

define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' 訂購');
define('TEXT_GUEST','訪客');

/*
 *
 * ADVANCED SEARCH
 *
 */

define('TEXT_ALL_CATEGORIES', '所有的分類');
define('TEXT_ALL_MANUFACTURERS', '所有的廠商');
define('JS_AT_LEAST_ONE_INPUT', '* 搜尋表單內至少必須填一個欄位：\n    關鍵字\n    商品上架日期\n    上架時間範圍\n    價格範圍（上限／底限）\n');
define('AT_LEAST_ONE_INPUT', '搜尋表單內至少必須填一個欄位：<br />關鍵字至少要兩個字<br />價格範圍<br />');
define('JS_INVALID_FROM_DATE', '* 無效的開始日期\n');
define('JS_INVALID_TO_DATE', '* 無效的結束日期\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* 結束日期必須大於或等於開始日期\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* 價格必須是數字\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* 價格必須是數字\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* 價格上限必須大於或等於價格底限\n');
define('JS_INVALID_KEYWORDS', '* 無效的關鍵字\n');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>請注意：</b></font>「電子郵件地址」或是「密碼」有錯誤...請重新輸入');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>請注意：</b></font>您輸入的電子郵件尚未註冊、請再試試...');
define('TEXT_PASSWORD_SENT', '新的密碼已經寄到您的信箱囉！');
define('TEXT_PRODUCT_NOT_FOUND', '商品不存在！');
define('TEXT_MORE_INFORMATION', '想瞭解更完整的商品訊息，請點 <a style="text-decoration:underline;" href="%s" onclick="window.open(this.href); return false;">商品首頁</a>');
define('TEXT_DATE_ADDED', '產品上架時間: %s');
define('TEXT_DATE_AVAILABLE', '<font color="#ff0000">本商品預計推出的時間是 %s </font>');
define('SUB_TITLE_SUB_TOTAL', '總計：');

define('OUT_OF_STOCK_CANT_CHECKOUT', '標示' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 的商品表示目前庫存量可能不太夠，可能會缺貨！請勿大量訂購，謝謝！');
define('OUT_OF_STOCK_CAN_CHECKOUT', '標示' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 的商品，目前庫存量可能已經不夠，如果您仍然願意等待堅持要買...可以繼續完成結帳程序，我們會在補足商品後立即將您所訂購的商品寄出。謝謝！');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', '您需要訂購的最低的數量是：');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' <br />請再增加訂購數量：');
define('MAXIMUM_ORDER_VALUE_REACHED_1', '您所訂購的，已經超過最低訂購量：');
define('MAXIMUM_ORDER_VALUE_REACHED_2', '<br /> 您也可以降低訂購數量: ');

define('ERROR_INVALID_PRODUCT', '沒有發現這個商品');

/*
 *
 * NAVBAR Titel
 *
 */

define('NAVBAR_TITLE_ACCOUNT', '我的帳號');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', '我的帳號');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', '更改我的個人資料');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', '我的帳號');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', '我的訂購紀錄');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', '我的帳號');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', '確認訂單');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', '訂單序號 %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', '我的帳號');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', '更改密碼');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', '我的帳號');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', '通訊錄');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', '我的帳號');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', '通訊錄');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', '新增通訊地址');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', '修改');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', '刪除');
define('NAVBAR_TITLE_ADVANCED_SEARCH', '進階搜尋');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', '進階搜尋');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', '搜尋結果');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', '結帳');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', '確認');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', '結帳');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', '付款方式');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', '結帳');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', '修改帳單地址');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', '結帳');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', '出貨資訊');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', '結帳');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', '修改出貨地址');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', '結帳');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', '結帳完成');
define('NAVBAR_TITLE_CREATE_ACCOUNT', '新增帳號');
if ($navigation->snapshot['page'] == FILENAME_CHECKOUT_SHIPPING) {
  define('NAVBAR_TITLE_LOGIN', '訂購');
} else {
  define('NAVBAR_TITLE_LOGIN', '登入');
}
define('NAVBAR_TITLE_LOGOFF','登出');
define('NAVBAR_TITLE_PRODUCTS_NEW', '新上架商品');
define('NAVBAR_TITLE_SHOPPING_CART', '購物車');
define('NAVBAR_TITLE_SPECIALS', '推薦商品');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Cookie用法');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', '商品回應');
define('NAVBAR_TITLE_REVIEWS_WRITE', '推薦商品');
define('NAVBAR_TITLE_REVIEWS','意見回應');
define('NAVBAR_TITLE_SSL_CHECK', 'SSL網頁加密');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT','新增帳號');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','忘記密碼？');
define('NAVBAR_TITLE_NEWSLETTER','電子報');
define('NAVBAR_GV_REDEEM', '禮券兌換');
define('NAVBAR_GV_SEND', '寄送禮券');

/*
 *
 *  MISC
 *
 */

define('TEXT_NEWSLETTER','您希望收到最新消息嗎？<br />訂閱我們的電子報後，您可以隨時掌握網站上的最新好康喔！');
define('TEXT_EMAIL_INPUT','您的E-Mail已經註冊了<br />接著您將會收到一封確認信函，請跟著信中的指示點選連結來完成訂閱的程序。');

define('TEXT_WRONG_CODE','<font color="FF0000">請重新填寫電子郵件與安全碼欄位</font>');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','<font color="FF0000">這個電子郵件經註冊，但是還沒啟用！</font>');
define('TEXT_EMAIL_EXIST_NEWSLETTER','<font color="FF0000">這個電子郵件經註冊，而且已經啟用！</font>');
define('TEXT_EMAIL_NOT_EXIST','<font color="FF0000">這個電子郵件經註冊，但是沒有訂閱電子報！</font>');
define('TEXT_EMAIL_DEL','您的電子郵件已經加到我們的電子報訂閱清單中');
define('TEXT_EMAIL_DEL_ERROR','<font color="FF0000">刪除資料過程發生錯誤，請聯絡管理員！</font>');
define('TEXT_EMAIL_ACTIVE','<font color="FF0000">您已經完成訂閱我們的電子報！</font>');
define('TEXT_EMAIL_ACTIVE_ERROR','<font color="FF0000">訂閱過程發生錯誤，您的訂閱作業尚未生效！</font>');
define('TEXT_EMAIL_SUBJECT','您的電子報帳號');

define('TEXT_CUSTOMER_GUEST','訪客');

define('TEXT_LINK_MAIL_SENDED','補發密碼的作業須經過本人的確認<br />你會在註冊的信箱中收到確認的連結。<font color=red">（請注意：奇摩信箱有時會寄到垃圾信箱中）</font><br />請點擊信中的連結，讓我們確認是你的信箱沒錯。<br />隨後將會收到密碼');
define('TEXT_PASSWORD_MAIL_SENDED','您將會在幾分鐘內收到新的密碼<br />請在下次登入後立即變更！');
define('TEXT_CODE_ERROR','請重新輸入安全碼欄位....請注意大小寫！');
define('TEXT_EMAIL_ERROR','請重新輸入電子郵件！');
define('TEXT_NO_ACCOUNT','抱歉，您查詢密碼的作業程序錯誤、有重複或是已經超過確認的時間....請重試！');
define('HEADING_PASSWORD_FORGOTTEN','忘記密碼？');
define('TEXT_PASSWORD_FORGOTTEN','我們將透過三個簡單的步驟來補發密碼');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','補發密碼的確認信');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','您的新密碼');
define('ERROR_MAIL','E-Mail有誤，請檢查電子郵件信箱是否正確');

define('CATEGORIE_NOT_FOUND','沒有這個分類');

define('GV_FAQ', '禮券問答集');
define('ERROR_NO_REDEEM_CODE', '您沒有輸入禮券碼');
define('ERROR_NO_INVALID_REDEEM_GV', '錯誤的禮券碼');
define('TABLE_HEADING_CREDIT', '☆使用折扣券');
define('EMAIL_GV_TEXT_SUBJECT', '%s 給你的禮物');
define('MAIN_MESSAGE', '你將寄送價值「%s」的禮券給%s E-mail 是 %s 的人<br />並且附上文字說明如下～<br />（請確認無誤後點擊送出）<br /><br />親愛的 %s<br /><br />您已經收到一張價值%s 的禮券，從%s 寄過來的。');
define('REDEEMED_AMOUNT','您所購買的禮券已經成功加入帳號中，禮券的金額為：');
define('REDEEMED_COUPON','您的折扣券已經順利加入帳冊中，可以在你下一次的訂購中使用（請注意折扣券的時效）');

define('ERROR_INVALID_USES_USER_COUPON','只有會員可以使用這個折價券(Customers can redeem this coupon only)');
define('ERROR_INVALID_USES_COUPON','只有顧客可以使用這個折價券');
define('TIMES',' 次');
define('ERROR_INVALID_STARTDATE_COUPON','您的折價券目前無法使用');
define('ERROR_INVALID_FINISDATE_COUPON','您的折價券已經過期囉！');
define('PERSONAL_MESSAGE', '%s 說：');

//Popup Window
define('TEXT_CLOSE_WINDOW', '關閉視窗');

/*
 *
 * COUPON POPUP 折價券
 *
 */

define('TEXT_CLOSE_WINDOW', '關閉視窗 [x]');
define('TEXT_COUPON_HELP_HEADER', '恭喜您！您已經兌換了一張折價券');
define('TEXT_COUPON_HELP_NAME', '<br /><br />折價券名稱： %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />透過這個折價券的訂單可以享有 %s 折扣');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />您的訂單金額必須超過 %s 才能使用這個折價券');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />透過這個折價券的訂單可以享有免運費的待遇');
define('TEXT_COUPON_HELP_DESC', '<br /><br />折價券說明： %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />折價券有效期間介於 %s 與 %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />產品、類別限制');
define('TEXT_COUPON_HELP_CATEGORIES', '類別');
define('TEXT_COUPON_HELP_PRODUCTS', '產品');

// VAT ID
define('ENTRY_VAT_TEXT','* 僅使用於德國及歐盟');
define('ENTRY_VAT_ERROR', '選擇的稅區編碼(VatID)目前無法通過檢驗！請填入正確資料或是保持空白。');
define('MSRP','網路售價：');
define('YOUR_PRICE','您目前的收費：');
define('ONLY','只要 ');
define('FROM','特價 ');
define('YOU_SAVE','您節省了');
define('INSTEAD','原價 ');
define('TXT_PER',' 每筆 ');
define('TAX_INFO_INCL','含 %s 稅額');
define('TAX_INFO_EXCL','不含 %s 稅額');
define('TAX_INFO_ADD','plus. %s 稅額');
define('SHIPPING_EXCL','不含');
define('SHIPPING_COSTS','運費');

// changes 3.0.4 SP2
define('SHIPPING_TIME','裝運時間: ');
define('MORE_INFO','[更多]');

// changes 3.0.4 SP2.2
define('ENTRY_PRIVACY_ERROR','請接受我們的隱私政策!');
define('TEXT_PAYMENT_FEE','手續費');

define('_MODULE_INVALID_SHIPPING_ZONE', '很抱歉商品無法寄送至這個國家.');
define('_MODULE_UNDEFINED_SHIPPING_RATE', '該區域運費無法計算.');
?>