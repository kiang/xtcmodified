<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 1570 2010-12-10 12:26:55Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com
   (c) 2003 nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
/*
 *
 *  DATE / TIME
 *
*/
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', '首页');
define('HEADER_TITLE_CATALOG', '目录位置');
define('HTML_PARAMS', 'dir="ltr" lang="zh-CN"');
@setlocale(LC_TIME, 'en_GB@euro', 'en_GB', 'en-GB', 'en', 'en_GB.ISO_8859-1', 'English', 'en_GB.ISO_8859-15');
//BOF - Dokuman - 2009-06-03 - correct english date format
define('DATE_FORMAT_SHORT', '%Y.%m.%d'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y年 %m月 %d日 %A'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');
function xtc_date_raw($date, $reverse = false) {
    if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
    }
}
//EOF - Dokuman - 2009-06-03 - correct english date format
// BOF - vr - 2009-12-11 - Added language dependent currency code
// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language,
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY', 'EUR');
// EOF - vr - 2009-12-11 - Added language dependent currency code
define('MALE', '先生');
define('FEMALE', '小姐');
/*
 *
 *  BOXES
 *
*/
// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT', '礼券兑换');
define('BOX_TITLE_STATISTICS', '商店状态：');
define('BOX_ENTRY_CUSTOMERS', '客户');
define('BOX_ENTRY_PRODUCTS', '商品');
define('BOX_ENTRY_REVIEWS', '反应');
define('TEXT_VALIDATING', '尚未生效');
// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s 首页');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', '更多商品'); //changed by electronica 2009-09-06
define('BOX_HEADING_ADD_PRODUCT_ID', '放到购物车'); //changed by electronica 2009-09-06
define('BOX_LOGINBOX_STATUS', '客户群组:');
define('BOX_LOGINBOX_DISCOUNT', '商品折扣');
define('BOX_LOGINBOX_DISCOUNT_TEXT', '折扣');
define('BOX_LOGINBOX_DISCOUNT_OT', '');
// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', '我要反应此商品！');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s 最高 5 颗星!');
// pull down default text
define('PULL_DOWN_DEFAULT', '请选择');
// javascript messages
define('JS_ERROR', '您的资料还没填完整喔！\n麻烦再看看您还漏掉什么？\n\n');
define('JS_REVIEW_TEXT', '* 您的反应最少要' . REVIEW_TEXT_MIN_LENGTH . ' 个字...\n'); //changed by electronica 2009-09-06
define('JS_REVIEW_RATING', '* 请给这商品评等\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* 请选一个付款方式\n');
define('JS_ERROR_SUBMITTED', '此表单已经送出，请按 ok 后等待处理'); //changed by electronica 2009-09-06
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '您必须选一个付款方式');
/*
 *
 * ACCOUNT FORMS
 *
*/
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', '请选择性别');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', '中文姓名的字数不可少于 ' . (ENTRY_FIRST_NAME_MIN_LENGTH/2) . ' 个字');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', '昵称的字数不得少于 ' . ENTRY_LAST_NAME_MIN_LENGTH . ' 个字');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', '请确认生日的格式 日.月.年 (范例： 22.05.2001) '); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (范例： 22.05.2001)'); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_EMAIL_ADDRESS_ERROR', '电子邮件不可少于 ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' 个字');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '电子邮件格式错误 - 请重新输入'); //changed by electronica 2009-09-06
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Your entered e-mail addresses do not match.'); // Hetfield - 2009-08-15 - confirm e-mail at registration
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '这个电子邮件已有人注册使用，请重新输入！'); //changed by electronica 2009-09-06
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', '地址不可少于' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' 个字'); //changed by electronica 2009-09-06
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', '邮政编码最少必须 ' . ENTRY_POSTCODE_MIN_LENGTH . ' 个字');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', '地区／城市的字数最少必须 ' . ENTRY_CITY_MIN_LENGTH . ' 个字');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', '省／直辖市的字数最少必须 ' . ENTRY_STATE_MIN_LENGTH . ' 个字');
define('ENTRY_STATE_ERROR_SELECT', '请从下拉式菜单中选取省／直辖市...'); //changed by electronica 2009-09-06
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', '请从下拉式菜单中选取国家名称');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '电话号码不得少于 ' . ENTRY_TELEPHONE_MIN_LENGTH . ' 个字');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', '密码的字数最少必须 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 个字');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', '密码不符');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', '密码的字数最少必须 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 个字');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', '新密码的字数最少必须 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 个字');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', '密码不符');
/*
 *
 *  RESULT PAGES
 *
*/
define('TEXT_RESULT_PAGE', '总页数：');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '显示 <b>%d</b> 到 <b>%d</b> （共 <b>%d</b> 件商品）');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '显示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 笔订单）');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '显示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 个反应）');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', '显示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 件新进商品）');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '显示 <b>%d</b> 到 第 <b>%d</b> （共 <b>%d</b> 件特价品）');
/*
 *
 * SITE NAVIGATION
 *
*/
define('PREVNEXT_TITLE_PREVIOUS_PAGE', '上1页');
define('PREVNEXT_TITLE_NEXT_PAGE', '下1页');
define('PREVNEXT_TITLE_PAGE_NO', '第 %d 页');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '上 %d 页');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '下 %d 页');
/*
 *
 * PRODUCT NAVIGATION
 *
*/
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;往前]');
define('PREVNEXT_BUTTON_NEXT', '[往后&nbsp;&gt;&gt;]');
/*
 *
 * IMAGE BUTTONS
 *
*/
define('IMAGE_BUTTON_ADD_ADDRESS', '新增地址');
define('IMAGE_BUTTON_BACK', '回上一项');
define('IMAGE_BUTTON_CHANGE_ADDRESS', '修改地址');
define('IMAGE_BUTTON_CHECKOUT', '结帐');
define('IMAGE_BUTTON_CONFIRM_ORDER', '订单确认');
define('IMAGE_BUTTON_CONTINUE', '下一项');
define('IMAGE_BUTTON_DELETE', '删除');
define('IMAGE_BUTTON_LOGIN', 'Login');
define('IMAGE_BUTTON_IN_CART', 'Add to cart'); //changed by electronica 2009-09-06
// BOF - vr - 2010-02-20 removed double definition
// define('IMAGE_BUTTON_LOGIN', 'Login');define('IMAGE_BUTTON_IN_CART', '放到购物车'); //changed by electronica 2009-09-06
define('IMAGE_BUTTON_SEARCH', '搜寻');
define('IMAGE_BUTTON_UPDATE', '上传／更新');
define('IMAGE_BUTTON_UPDATE_CART', '更改购物列表');
define('IMAGE_BUTTON_WRITE_REVIEW', '编写反应'); //changed by electronica 2009-09-06
define('IMAGE_BUTTON_ADMIN', '管理');
define('IMAGE_BUTTON_PRODUCT_EDIT', '编辑商品');
// BOF - vr - 2010-02-20 removed double definition
// define('IMAGE_BUTTON_LOGIN', 'Login');
// EOF - vr - 2010-02-20 removed double definition
define('IMAGE_BUTTON_SEND', 'Send'); //DokuMan - 2010-03-15 - Added button description for contact form
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continue shopping'); //Hendrik - 2010-11-12 - used in template xtc5...shopping_cart.html
define('SMALL_IMAGE_BUTTON_DELETE', '删除');
define('SMALL_IMAGE_BUTTON_EDIT', '编辑');
define('SMALL_IMAGE_BUTTON_VIEW', '查看');
define('ICON_ARROW_RIGHT', '更多');
define('ICON_CART', '放到购物车'); //changed by electronica 2009-09-06
define('ICON_SUCCESS', '完成');
define('ICON_WARNING', '注意');
define('ICON_ERROR', 'Error');
define('TEXT_PRINT', 'print'); //DokuMan - 2009-05-26 - Added description for 'account_history_info.php'
/*
 *
 *  GREETINGS
 *
*/
define('TEXT_GREETING_PERSONAL', '感谢您再度光临 <span class="greetUser">%s!</span> 本商店推出了以下 <a style="text-decoration:underline;" href="%s">新商品</a>');
define('TEXT_GREETING_PERSONAL_RELOGON', '请 <a href="%s">登入会员</a>。');
define('TEXT_GREETING_GUEST', '请&nbsp;<a href="%s">[登入]</a>&nbsp;或&nbsp;<a href="%s">[注册]</a>&nbsp;会员');
define('TEXT_SORT_PRODUCTS', '商品排序方式');
define('TEXT_DESCENDINGLY', '递减');
define('TEXT_ASCENDINGLY', '递增');
define('TEXT_BY', ' 排序键 ');
define('TEXT_OF_5_STARS', '%s of 5 Stars!');
define('TEXT_REVIEW_BY', '来自 %s 的反应');
define('TEXT_REVIEW_WORD_COUNT', '%s 字');
define('TEXT_REVIEW_RATING', '评比： %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', '反应时间： %s');
define('TEXT_NO_REVIEWS', '目前没有任何反应.');
define('TEXT_NO_NEW_PRODUCTS', '目前没有新进商品'); // Tomcraft - 2009-08-11 - changed text for new products_new function
define('TEXT_UNKNOWN_TAX_RATE', '税率尚未定义');
/*
 *
 * WARNINGS
 *
*/
define('WARNING_INSTALL_DIRECTORY_EXISTS', '警告： 安装目录仍未删除： ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/xtc_installer. 基于安全的考量，请将这个目录删除');
define('WARNING_CONFIG_FILE_WRITEABLE', '警告： 设置档的权限允许被写入： ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. 这将具有潜在的系统安全风险 - 请将文件设置为正确的使用权限');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', '警告： sessions 资料夹不存在： ' . xtc_session_save_path() . '在这个目录未建立之前 Sessions 无法正常动作');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', '警告： 无法写入sessions 资料夹： ' . xtc_session_save_path() . '服务器使用者权限未正确设置之前 Sessions 无法正常动作，请作适度修改');
define('WARNING_SESSION_AUTO_START', '警告： session.auto_start 已启动 - 请到 php.ini 内关闭这个功能，并重新启动网页主机！');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', '警告： 下载的商品资料夹不存在：' . DIR_FS_DOWNLOAD . '这个资料夹未建立，无法下载商品');
define('SUCCESS_ACCOUNT_UPDATED', '您的帐号信息已经更新');
define('SUCCESS_PASSWORD_UPDATED', '您的密码已经更新！');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', '密码不符，请再试试');
define('TEXT_MAXIMUM_ENTRIES', '<font color="#ff0000"><b>注:</b></font> 通讯录上限为 %s 笔');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', '已从通讯录移除选取的地址');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', '通讯录更新完成');
define('WARNING_PRIMARY_ADDRESS_DELETION', '预设的通讯地址不能删除，请选择其他通讯地址--设置成预设地址后--才能删除'); //changed by electronica 2009-09-06
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', '通讯录资料不存在');
define('ERROR_ADDRESS_BOOK_FULL', '通讯录笔数已满，请先删除不需要的地址才能再新增通讯录'); //changed by electronica 2009-09-06
//  conditions check
define('ERROR_CONDITIONS_NOT_ACCEPTED', '请阅读购物条款，并勾选同意购物条款，才能进入下一个订单确认程序');
define('SUB_TITLE_OT_DISCOUNT', '折扣：');
define('TAX_ADD_TAX', '含税价');
define('TAX_NO_TAX', '未税价');
define('TAX_SHORT_DISPLAY', ' VAT '); //DokuMan - 2010-09-28 - display VAT description multilingually
define('NOT_ALLOWED_TO_SEE_PRICES', '您目前的权限，不被允许查看商品价格');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT', '您目前的权限，不被允许查看商品价格, 请加入会员');
define('TEXT_DOWNLOAD', '下载');
define('TEXT_VIEW', '查看');
define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' 订购');
define('TEXT_GUEST', '访客');
/*
 *
 * ADVANCED SEARCH
 *
*/
define('TEXT_ALL_CATEGORIES', '所有的分类');
define('TEXT_ALL_MANUFACTURERS', '所有的厂商');
define('JS_AT_LEAST_ONE_INPUT', '* 搜寻表单内至少必须填一个栏位：\n    关键字\n    商品上架日期\n    上架时间范围\n    价格范围（上限／底限）\n'); //changed by electronica 2009-09-06
define('AT_LEAST_ONE_INPUT', '搜寻表单内至少必须填一个栏位：<br />关键字至少要两个字<br />价格范围<br />'); //changed by electronica 2009-09-06
define('JS_INVALID_FROM_DATE', '* 无效的开始日期\n');
define('JS_INVALID_TO_DATE', '* 无效的结束日期\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* 结束日期必须大于或等于开始日期\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* 价格必须是数字\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* 价格必须是数字\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* 价格上限必须大于或等于价格底限\n');
define('JS_INVALID_KEYWORDS', '* 无效的关键字\n');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>请注意：</b></font>「电子邮件地址」或是「密码」有错误...请重新输入'); //changed by electronica 2009-09-06
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>请注意：</b></font>您输入的电子邮件尚未注册、请再试试...'); //changed by electronica 2009-09-06
define('TEXT_PASSWORD_SENT', '新的密码已经寄到您的信箱罗！');
define('TEXT_PRODUCT_NOT_FOUND', '商品不存在！');
define('TEXT_MORE_INFORMATION', '想了解更完整的商品信息，请点 <a style="text-decoration:underline;" href="%s" onclick="window.open(this.href); return false;">商品首页</a>');
define('TEXT_DATE_ADDED', '产品上架时间: %s');
define('TEXT_DATE_AVAILABLE', '<font color="#ff0000">本商品预计推出的时间是 %s </font>');
define('SUB_TITLE_SUB_TOTAL', '总计：');
define('OUT_OF_STOCK_CANT_CHECKOUT', '标示' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 的商品表示目前库存量可能不太够，可能会缺货！请勿大量订购，谢谢！'); //changed by electronica 2009-09-06
define('OUT_OF_STOCK_CAN_CHECKOUT', '标示' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' 的商品，目前库存量可能已经不够，如果您仍然愿意等待坚持要买...可以继续完成结帐程序，我们会在补足商品后立即将您所订购的商品寄出。谢谢！'); //changed by electronica 2009-09-06
define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', '您需要订购的最低的数量是：'); //changed by electronica 2009-09-06
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' <br />请再增加订购数量：'); //changed by electronica 2009-09-06
define('MAXIMUM_ORDER_VALUE_REACHED_1', '您所订购的，已经超过最低订购量：');
define('MAXIMUM_ORDER_VALUE_REACHED_2', '<br /> 您也可以降低订购数量: '); //changed by electronica 2009-09-06
define('ERROR_INVALID_PRODUCT', '没有发现这个商品');
/*
 *
 * NAVBAR TITLE
 *
*/
define('NAVBAR_TITLE_ACCOUNT', '我的帐号');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', '我的帐号');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', '更改我的个人资料');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', '我的帐号');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', '我的订购纪录');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', '我的帐号');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', '确认订单');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', '订单序号 %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', '我的帐号');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', '更改密码');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', '我的帐号');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', '通讯录');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', '我的帐号');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', '通讯录');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', '新增通讯地址');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', '修改');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', '删除');
define('NAVBAR_TITLE_ADVANCED_SEARCH', '高级搜寻');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', '高级搜寻');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', '搜寻结果');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', '结帐');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', '确认');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', '结帐');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', '付款方式');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', '结帐');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', '修改帐单地址');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', '结帐');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', '出货信息');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', '结帐');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', '修改出货地址');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', '结帐');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', '结帐完成');
define('NAVBAR_TITLE_CREATE_ACCOUNT', '新增帐号');
if (isset($navigation) && $navigation->snapshot['page'] == FILENAME_CHECKOUT_SHIPPING) {
    define('NAVBAR_TITLE_LOGIN', 'Order');
} else {
    define('NAVBAR_TITLE_LOGIN', '登入');
}
define('NAVBAR_TITLE_LOGOFF', '登出');
define('NAVBAR_TITLE_PRODUCTS_NEW', '新上架商品');
define('NAVBAR_TITLE_SHOPPING_CART', '购物车');
define('NAVBAR_TITLE_SPECIALS', '推荐商品');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Cookie用法');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', '商品反应');
define('NAVBAR_TITLE_REVIEWS_WRITE', '推荐商品');
define('NAVBAR_TITLE_REVIEWS', '意见反应');
define('NAVBAR_TITLE_SSL_CHECK', 'SSL网页加密');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT', '新增帐号');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT', '忘记密码？');
define('NAVBAR_TITLE_NEWSLETTER', '电子报');
define('NAVBAR_GV_REDEEM', '礼券兑换');
define('NAVBAR_GV_SEND', '寄送礼券');
/*
 *
 *  MISC
 *
*/
define('TEXT_NEWSLETTER', '您希望收到最新消息吗？<br />订阅我们的电子报后，您可以随时掌握网站上的最新好康喔！'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_INPUT', '您的E-Mail已经注册了<br />接着您将会收到一封确认信函，请跟着信中的指示点选连结来完成订阅的程序。'); //changed by electronica 2009-09-06
define('TEXT_WRONG_CODE', '<font color="FF0000">请重新填写电子邮件与安全码栏位</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER', '<font color="FF0000">这个电子邮件经注册，但是还没启用！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_EXIST_NEWSLETTER', '<font color="FF0000">这个电子邮件经注册，而且已经启用！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_NOT_EXIST', '<font color="FF0000">这个电子邮件经注册，但是没有订阅电子报！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_DEL', '您的电子邮件已经加到我们的电子报订阅列表中'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_DEL_ERROR', '<font color="FF0000">删除资料过程发生错误，请联络管理员！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ACTIVE', '<font color="FF0000">您已经完成订阅我们的电子报！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ACTIVE_ERROR', '<font color="FF0000">订阅过程发生错误，您的订阅作业尚未生效！</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_SUBJECT', '您的电子报帐号'); //changed by electronica 2009-09-06
define('TEXT_CUSTOMER_GUEST', '访客');
define('TEXT_LINK_MAIL_SENDED', '补发密码的作业须经过本人的确认<br />你会在注册的信箱中收到确认的连结。<font color=red">（请注意：奇摩信箱有时会寄到垃圾信箱中）</font><br />请点击信中的连结，让我们确认是你的信箱没错。<br />随后将会收到密码'); //changed by electronica 2009-09-06
define('TEXT_PASSWORD_MAIL_SENDED', '您将会在几分钟内收到新的密码<br />请在下次登入后立即变更！'); //changed by electronica 2009-09-06
define('TEXT_CODE_ERROR', '请重新输入安全码栏位....请注意大小写！'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ERROR', '请重新输入电子邮件！'); //changed by electronica 2009-09-06
define('TEXT_NO_ACCOUNT', '抱歉，您查询密码的作业程序错误、有重复或是已经超过确认的时间....请重试！'); //changed by electronica 2009-09-06
define('HEADING_PASSWORD_FORGOTTEN', '忘记密码？');
define('TEXT_PASSWORD_FORGOTTEN', '我们将通过三个简单的步骤来补发密码');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN', '补发密码的确认信');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD', '您的新密码');
define('ERROR_MAIL', 'E-Mail有误，请检查电子邮件信箱是否正确');
define('CATEGORIE_NOT_FOUND', '没有这个分类'); //changed by electronica 2009-09-06
define('GV_FAQ', '礼券问答集'); //changed by electronica 2009-09-06
define('ERROR_NO_REDEEM_CODE', '您没有输入礼券码');
define('ERROR_NO_INVALID_REDEEM_GV', '错误的礼券码'); //changed by electronica 2009-09-06
define('TABLE_HEADING_CREDIT', '☆使用折扣券'); //changed by electronica 2009-09-06
define('EMAIL_GV_TEXT_SUBJECT', '%s 给你的礼物');
define('MAIN_MESSAGE', '你将寄送价值「%s」的礼券给%s E-mail 是 %s 的人<br />并且附上文字说明如下～<br />（请确认无误后点击送出）<br /><br />亲爱的 %s<br /><br />您已经收到一张价值%s 的礼券，从%s 寄过来的。'); //changed by electronica 2009-09-06
define('REDEEMED_AMOUNT', '您所购买的礼券已经成功加入帐号中，礼券的金额为：'); //changed by electronica 2009-09-06
define('REDEEMED_COUPON', '您的折扣券已经顺利加入帐册中，可以在你下一次的订购中使用（请注意折扣券的时效）'); //changed by electronica 2009-09-06
define('ERROR_INVALID_USES_USER_COUPON', '只有会员可以使用这个折价券(Customers can redeem this coupon only)'); //changed by electronica 2009-09-06
define('ERROR_INVALID_USES_COUPON', '只有顾客可以使用这个折价券'); //changed by electronica 2009-09-06
define('TIMES', ' 次');
define('ERROR_INVALID_STARTDATE_COUPON', '您的折价券目前无法使用'); //changed by electronica 2009-09-06
define('ERROR_INVALID_FINISDATE_COUPON', '您的折价券已经过期罗！'); //changed by electronica 2009-09-06
define('PERSONAL_MESSAGE', '%s 说：'); //changed by electronica 2009-09-06
//Popup Window
// BOF - DokuMan - 2010-02-25 removed double definition
//define('TEXT_CLOSE_WINDOW', 'Close window.'); //changed by electronica 2009-09-06
// EOF - DokuMan - 2010-02-25 removed double definition
/*
 *
 * CUOPON POPUP
 *
*/
define('TEXT_CLOSE_WINDOW', '关闭窗口 [x]'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_HEADER', '恭喜您！您已经兑换了一张折价券'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_NAME', '<br /><br />折价券名称： %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_FIXED', '<br /><br />通过这个折价券的订单可以享有 %s 折扣'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />您的订单金额必须超过 %s 才能使用这个折价券'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />通过这个折价券的订单可以享有免运费的待遇'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_DESC', '<br /><br />折价券说明： %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_DATE', '<br /><br />折价券有效期间介于 %s 与 %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />产品、类别限制'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_CATEGORIES', '类别'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_PRODUCTS', '产品'); //changed by electronica 2009-09-06
//BOF - DokuMan - 2010-10-28 - Added text-constant for emailing voucher
define('ERROR_ENTRY_AMOUNT_CHECK', 'Invalid amount');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Invalid e-mail address');
//EOF - DokuMan - 2010-10-28 - Added text-constant for emailing voucher
// VAT Reg No
define('ENTRY_VAT_TEXT', '* 仅使用于德国及欧盟'); //changed by electronica 2009-09-06 anmerkung: besser wenn laden im EU ausland ist
define('ENTRY_VAT_ERROR', '选择的税区编码(VatID)目前无法通过检验！请填入正确资料或是保持空白。'); //changed by electronica 2009-09-06
define('MSRP', '网络售价：');
define('YOUR_PRICE', '您目前的收费：');
// BOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('UNIT_PRICE', 'unit price ');
// EOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('ONLY', '只要 ');
define('FROM', '特价 ');
define('YOU_SAVE', '您节省了');
define('INSTEAD', '原价 ');
define('TXT_PER', ' 每笔 ');
define('TAX_INFO_INCL', '含 %s 税额');
define('TAX_INFO_EXCL', '不含 %s 税额');
define('TAX_INFO_ADD', 'plus. %s 税额');
define('SHIPPING_EXCL', '不含');
define('SHIPPING_COSTS', '运费');
// changes 3.0.4 SP2
define('SHIPPING_TIME', '装运时间: ');
define('MORE_INFO', '[更多]');
// changes 3.0.4 SP2.2
define('ENTRY_PRIVACY_ERROR', '请接受我们的隐私政策!');
define('TEXT_PAYMENT_FEE', '手续费');
define('_MODULE_INVALID_SHIPPING_ZONE', '很抱歉商品无法寄送至这个国家.'); //changed by electronica 2009-09-06
define('_MODULE_UNDEFINED_SHIPPING_RATE', '该区域运费无法计算.'); //changed by electronica 2009-09-06
//Dokuman - 2009-08-21 - Added 'delete account' functionality for customers
define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Your account');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Delete account');
//contact-form messages
define('ERROR_EMAIL', '<p><b>Your e-mail address:</b> None or invalid input!</p>');
define('ERROR_VVCODE', '<p><b>Security code:</b> No match, please enter your security code again!</p>');
define('ERROR_MSG_BODY', '<p><b>Your message:</b> No input!</p>');
// BOF - DokuMan - 2010-09-06 - combined contact form messages in one language file
define('EMAIL_COMPANY', 'Company: ');
define('EMAIL_STREET', 'Street: ');
define('EMAIL_POSTCODE', 'Postcode: ');
define('EMAIL_CITY', 'City: ');
define('EMAIL_PHONE', 'Telephone: ');
define('EMAIL_FAX', 'Fax: ');
define('EMAIL_SENT_BY', 'Sent by %s %s at %s to %s clock');
define('EMAIL_NOTIFY', 'Attention, this e-mail can NOT be answered with -ANSWER THE SENDER-!');
define('EMAIL_NAME', 'Name: ');
define('EMAIL_EMAIL', 'E-mail: ');
define('EMAIL_MESSAGE', 'Message: ');
// EOF - DokuMan - 2010-09-06 - combined contact form messages in one language file
// BOF - DokuMan - 2010-09-06 - combined checkout_confirmation messages in one language file
//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Number');
define('HEADER_ARTICLE', 'Item');
define('HEADER_SINGLE', 'Singleprice');
define('HEADER_TOTAL', 'Total');
// EOF - DokuMan - 2010-09-06 - combined checkout_confirmation messages in one language file
// BOF - web28 - 2010-05-07 - PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT', 'PayPal-Checkout');
define('PAYPAL_ERROR', 'PayPal abort');
define('PAYPAL_NOT_AVIABLE', 'PayPal Express is not available.<br />Please select another method of payment<br />or try again later.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'We are not able to accept your order if you do not accept your address!');
define('PAYPAL_FEHLER', 'PayPal announced an error to the completion..<br />Your order is stored, is however not implemented.<br />Please enter a new order.<br />Thanks for your understanding.<br />');
define('PAYPAL_WARTEN', 'PayPal announced an error to the completion.<br />You must pay again to PayPal around the order.<br />Down you see the stored order.<br /> Thanks for it pressing to understanding request you again the button PayPal express.<br />');
define('PAYPAL_NEUBUTTON', 'Press please again around the order to pay.<br />Every other key leads to the abort of the order.');
define('PAYPAL_GS', 'Coupon');
define('PAYPAL_TAX', 'Tax');
define('PAYPAL_EXP_WARN', 'Note! Possibly resulting forwarding expenses are only computed in the shop finally.');
define('PAYPAL_EXP_VORL', 'Provisional forwarding expenses');
define('PAYPAL_EXP_VERS', '12.90');
// EOF - web28 - 2010-05-07 - PayPal API Modul
define('BASICPRICE_VPE_TEXT', 'in this volume only '); // Hetfield - 2009-11-26 - Added language definition for vpe at graduated prices
//web - 2010-07-11 - Preisanzeige bei Staffelpreisen (größte Staffel)
define('GRADUATED_PRICE_MAX_VALUE', 'from');
?>