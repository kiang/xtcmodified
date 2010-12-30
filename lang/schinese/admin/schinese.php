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
define('DATE_FORMAT', 'd.m.Y'); // this is used for strftime()
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
define('HTML_PARAMS', 'dir="ltr" lang="zh-CN"');
// page title
define('TITLE', 'XT-Commerce 网站后端管理');
// header text in includes/header.php
define('HEADER_TITLE_TOP', '系统管理');
define('HEADER_TITLE_SUPPORT_SITE', '支持网站');
define('HEADER_TITLE_ONLINE_CATALOG', '联机目录');
define('HEADER_TITLE_ADMINISTRATION', '系统管理');
// text for gender
define('MALE', '男生');
define('FEMALE', '女生');
// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');
// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '系统设置');
define('BOX_HEADING_MODULES', '模组管理区');
define('BOX_HEADING_ZONE', '地区 / 税');
define('BOX_HEADING_CUSTOMERS', '会员管理');
define('BOX_HEADING_PRODUCTS', '分类商品');
define('BOX_HEADING_STATISTICS', '统计');
define('BOX_HEADING_TOOLS', '工具');
define('BOX_HEADING_LOCALIZATION', '语言 / 货币');
define('BOX_HEADING_TEMPLATES', '样版');
define('BOX_HEADING_LOCATION_AND_TAXES', '地区 / 税别');
define('BOX_HEADING_CATALOG', '目录管理');
define('BOX_CONTENT', '内容管理员');
define('TEXT_ALLOWED', '权限');
define('TEXT_ACCESS', '使用范围');
define('BOX_CONFIGURATION', '一般设置');
define('BOX_CONFIGURATION_1', '商店基本设置');
define('BOX_CONFIGURATION_2', '最小值设置');
define('BOX_CONFIGURATION_3', '最大值设置');
define('BOX_CONFIGURATION_4', '图片设置');
define('BOX_CONFIGURATION_5', '客户帐号注册设置');
define('BOX_CONFIGURATION_6', '模组设置');
define('BOX_CONFIGURATION_7', '运送设置');
define('BOX_CONFIGURATION_8', '商品列表设置');
define('BOX_CONFIGURATION_9', '库存设置');
define('BOX_CONFIGURATION_10', '网页载入设置');
define('BOX_CONFIGURATION_11', '快取设置');
define('BOX_CONFIGURATION_12', '邮件设置');
define('BOX_CONFIGURATION_13', '下载设置');
define('BOX_CONFIGURATION_14', 'Gzip压缩设置');
define('BOX_CONFIGURATION_15', 'Sessions');
define('BOX_CONFIGURATION_16', '搜寻器／关键字');
define('BOX_CONFIGURATION_17', '额外模组设置');
define('BOX_CONFIGURATION_18', 'Vat ID');
define('BOX_CONFIGURATION_19', '网站经营分析工具');
define('BOX_CONFIGURATION_22', '搜寻选项');
define('BOX_MODULES', '付款/出货/订单');
define('BOX_PAYMENT', '付款模组');
define('BOX_SHIPPING', '出货模组');
define('BOX_ORDER_TOTAL', '订单总计');
define('BOX_CATEGORIES', '分类/商品');
define('BOX_PRODUCTS_ATTRIBUTES', '设置规格属性选项');
define('BOX_MANUFACTURERS', '厂商设置');
define('BOX_REVIEWS', '商品反应');
define('BOX_CAMPAIGNS', '活动报表');
define('BOX_XSELL_PRODUCTS', '相关商品贩售管理');
define('BOX_SPECIALS', '特价管理');
define('BOX_PRODUCTS_EXPECTED', '即将上市商品');
define('BOX_CUSTOMERS', '会员/客户');
define('BOX_ACCOUNTING', '管理员权限');
define('BOX_CUSTOMERS_STATUS', '会员群组设置');
define('BOX_ORDERS', '订单管理');
define('BOX_COUNTRIES', '国家');
define('BOX_ZONES', '地区');
define('BOX_GEO_ZONES', '征税地区');
define('BOX_TAX_CLASSES', '税别设置');
define('BOX_TAX_RATES', '税率建立');
define('BOX_HEADING_REPORTS', '各类报表');
define('BOX_PRODUCTS_VIEWED', '商品浏览排行');
define('BOX_STOCK_WARNING', '库存信息');
define('BOX_PRODUCTS_PURCHASED', '商品销售排行');
define('BOX_STATS_CUSTOMERS', '客户购物排行榜');
define('BOX_BACKUP', '资料库备份');
define('BOX_BANNER_MANAGER', '广告区块管理');
define('BOX_CACHE', '快取控制');
define('BOX_DEFINE_LANGUAGE', '语系定义');
define('BOX_FILE_MANAGER', '文件总管');
define('BOX_MAIL', '电子邮件');
define('BOX_NEWSLETTERS', '商品通知管理');
define('BOX_SERVER_INFO', '服务器信息');
define('BOX_WHOS_ONLINE', '谁联机上');
define('BOX_TPL_BOXES', '区块订单排序');
define('BOX_CURRENCIES', '货币设置');
define('BOX_LANGUAGES', '语言设置');
define('BOX_ORDERS_STATUS', '订单状态');
define('BOX_ATTRIBUTES_MANAGER', '商品属性管理');
define('BOX_MODULE_NEWSLETTER', '电子报');
define('BOX_SHIPPING_STATUS', '出货时间设置');
define('BOX_SALES_REPORT', '销售报表');
define('BOX_MODULE_EXPORT', '输出模组');
define('BOX_HEADING_GV_ADMIN', '礼券／折价券');
define('BOX_GV_ADMIN_QUEUE', '礼券销售管理');
define('BOX_GV_ADMIN_MAIL', '邮寄礼券');
define('BOX_GV_ADMIN_SENT', '礼券邮寄管理');
define('BOX_COUPON_ADMIN', '折价券管理');
define('BOX_TOOLS_BLACKLIST', '信用卡黑名单');
define('BOX_IMPORT', '导入／导出');
define('BOX_PRODUCTS_VPE', '内含收费单元设置');
define('BOX_CAMPAIGNS_REPORT', '活动报表输出');
define('BOX_ORDERS_XSELL_GROUP', '相关贩售群组');
define('TXT_GROUPS', '<b>群组</b>:');
define('TXT_SYSTEM', '系统');
define('TXT_CUSTOMERS', '客户 ／ 订单');
define('TXT_PRODUCTS', '分类 ／ 商品');
define('TXT_STATISTICS', '状态');
define('TXT_TOOLS', '工具');
define('TEXT_ACCOUNTING', '管理：');
// javascript messages
define('JS_ERROR', '错误：当您送出表单时发现错误!\n请确认下列资料是否正确:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* 新商品属性需要价格\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* 新商品属性需要价格前置字元 (+/-)n');
define('JS_PRODUCTS_NAME', '* 新商品需要名称n');
define('JS_PRODUCTS_DESCRIPTION', '* 新商品需要说明n');
define('JS_PRODUCTS_PRICE', '* 新商品需要价格n');
define('JS_PRODUCTS_WEIGHT', '* 新商品需要重量n');
define('JS_PRODUCTS_QUANTITY', '* 新商品需要数量n');
define('JS_PRODUCTS_MODEL', '* 新商品需要型号n');
define('JS_PRODUCTS_IMAGE', '* 新商品需要图片n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* 这个商品必须设置新价格n');
define('JS_GENDER', '* 请选择 \'性别\' n');
define('JS_FIRST_NAME', '* 请填写 \'姓\' 最少需 \' . (ENTRY_FIRST_NAME_MIN_LENGTH/2) . \' 字.n');
define('JS_LAST_NAME', '* 请填写 \'名\' 最少需 \' . ENTRY_LAST_NAME_MIN_LENGTH . \' 字.n');
define('JS_DOB', '* 请填写 \' 生日 \' ，参考格式: xx/xx/xxxx (日/月/年).n');
define('JS_EMAIL_ADDRESS', '* 请填写 \' 电子邮件\' 最少需要 \' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . \' 字.n');
define('JS_ADDRESS', '* 请填写 \' 路街道/门牌号码 \' 最少需 \' . ENTRY_STREET_ADDRESS_MIN_LENGTH . \' 字.n');
define('JS_POST_CODE', '* 请填写 \' 邮政编码 \' 最少需 \' . ENTRY_POSTCODE_MIN_LENGTH . \' 字.n');
define('JS_CITY', '* 请填写 \'地区／城市 \' 最少需 \' . ENTRY_CITY_MIN_LENGTH . \' 字.n');
define('JS_STATE', '* 请选择 \' 省／直辖市\' n');
define('JS_STATE_SELECT', '-- 请选择 --');
define('JS_ZONE', '* 请选择所在 \' 省／直辖市\'');
define('JS_COUNTRY', '* 请选择 \' 国家\' n');
define('JS_TELEPHONE', '* 请填写 \' 电话号码 \' 最少需 \' . ENTRY_TELEPHONE_MIN_LENGTH . \' 字.n');
define('JS_PASSWORD', '* 请填写 \'密码 \' 及 \' 确认密码 \' 密码最少需要 \' . ENTRY_PASSWORD_MIN_LENGTH . \' 字.n');
define('JS_ORDER_DOES_NOT_EXIST', '订单编号 %s 不存在!');
define('CATEGORY_PERSONAL', '个人资料');
define('CATEGORY_ADDRESS', '通讯地址');
define('CATEGORY_CONTACT', '联络方式');
define('CATEGORY_COMPANY', '公司资料');
define('CATEGORY_OPTIONS', '选项');
define('ENTRY_GENDER', '性别：');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_FIRST_NAME', '姓：');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' 个字</span>');
define('ENTRY_LAST_NAME', '名：');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_LAST_NAME_MIN_LENGTH . ' 几个字</span>');
define('ENTRY_DATE_OF_BIRTH', '生日：');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(例如 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail：');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' 个字</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">这个电子信箱无效！</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">这个电子信箱已经存在！</span>');
define('ENTRY_COMPANY', '公司名称：');
define('ENTRY_STREET_ADDRESS', '路街道/门牌号码：');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' 个字</span>');
define('ENTRY_SUBURB', '乡镇村／社区：');
define('ENTRY_POST_CODE', '邮政编码：');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_POSTCODE_MIN_LENGTH . ' 个字</span>');
define('ENTRY_CITY', '地区／城市：');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_CITY_MIN_LENGTH . ' 个字</span>');
define('ENTRY_STATE', '省／直辖市：');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">必填</span>');
define('ENTRY_COUNTRY', '国家：');
define('ENTRY_TELEPHONE_NUMBER', '电话：');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">少于 ' . ENTRY_TELEPHONE_MIN_LENGTH . ' 个字</span>');
define('ENTRY_FAX_NUMBER', '传真：');
define('ENTRY_NEWSLETTER', '电子报：');
define('ENTRY_CUSTOMERS_STATUS', '会员群组：');
define('ENTRY_NEWSLETTER_YES', '订阅');
define('ENTRY_NEWSLETTER_NO', '不订阅');
define('ENTRY_MAIL_ERROR', '&nbsp;请选择其中一个选项');
define('ENTRY_PASSWORD', '密码：');
define('ENTRY_PASSWORD_ERROR', '&nbsp;密码字数应该大于 ' . ENTRY_PASSWORD_MIN_LENGTH . ' 个字');
define('ENTRY_MAIL_COMMENTS', '新增与eMail相关的注解:');
define('ENTRY_MAIL', '用E-Mail寄送密码给客户？');
define('YES', '是');
define('NO', '否');
define('SAVE_ENTRY', '确定存贮？');
define('TEXT_CHOOSE_INFO_TEMPLATE', '(请选择)商品说明页模版');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', '(请选择)商品属性模版');
define('TEXT_SELECT', '-- 请选择 --');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT', 'marked');
define('ICON_BIG_WARNING', 'Attention!');
define('ICON_CROSS', '否');
define('ICON_CURRENT_FOLDER', '目前资料夹');
define('ICON_DELETE', '删除');
define('ICON_EDIT', 'Edit');
define('ICON_ERROR', '错误');
define('ICON_FILE', '文件');
define('ICON_FILE_DOWNLOAD', '下载');
define('ICON_FOLDER', '资料夹');
define('ICON_LOCKED', '锁住');
define('ICON_POPUP', 'Banner Preview');
define('ICON_PREVIOUS_LEVEL', '预设值');
define('ICON_PREVIEW', '预览');
define('ICON_STATISTICS', '统计资料');
define('ICON_SUCCESS', '完成');
define('ICON_TICK', '是');
define('ICON_UNLOCKED', '解开');
define('ICON_WARNING', '警告');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', ' %s ／ %d 页');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个广告)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个国家)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个客户)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个货币)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个语言)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个制造厂商)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 份电子报)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 笔订单)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个订单状态)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个相关商品群组)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个内含收费单元)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', '显示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 出货状态)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个商品)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个商品上市预告)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个商品反应)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个特价商品)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个税别)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个税区)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个税率)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '显示 <b>%d</b> 到 <b>%d</b> (共 <b>%d</b> 个地区)');
define('PREVNEXT_BUTTON_PREV', '&lt;&lt;〈');
define('PREVNEXT_BUTTON_NEXT', '〉&gt;&gt;');
define('TEXT_DEFAULT', '预设');
define('TEXT_SET_DEFAULT', '设为预设');
define('TEXT_FIELD_REQUIRED', '&nbsp;* 必填');
define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '错误：没有预设的货币，请到「语言／地区」&gt;&gt;「货币设置」去设置');
define('TEXT_CACHE_CATEGORIES', '类别区');
define('TEXT_CACHE_MANUFACTURERS', '厂商区');
define('TEXT_CACHE_ALSO_PURCHASED', '推荐商品模组');
define('TEXT_NONE', '--无--');
define('TEXT_TOP', '顶端');
define('ERROR_DESTINATION_DOES_NOT_EXIST', '错误: 目的地不存在');
define('ERROR_DESTINATION_NOT_WRITEABLE', '错误: 目的地无法写入');
define('ERROR_FILE_NOT_SAVED', '错误: 上传文件无法存贮');
define('ERROR_FILETYPE_NOT_ALLOWED', '错误r: 不允许文件上传');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '完成: 文件上传完成');
define('WARNING_NO_FILE_UPLOADED', '警告: 没有文件上传');
define('DELETE_ENTRY', '删除输入？');
define('TEXT_PAYMENT_ERROR', '<b>注意:</b><br />请选择至少一种付款方式！');
define('TEXT_SHIPPING_ERROR', '<b>注意:</b><br />请选择至少一种运送方式！');
define('TEXT_NETTO', '不含税：');
define('ENTRY_CID', '客户ID：');
define('IP', '订单 IP:');
define('CUSTOMERS_MEMO', '备注：');
define('DISPLAY_MEMOS', '显示／内容');
define('TITLE_MEMO', '客户备注');
define('ENTRY_LANGUAGE', '语系：');
define('CATEGORIE_NOT_FOUND', '搜寻商品分类不存在！');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', '兑换礼券');
define('IMAGE_ICON_STATUS_GREEN_STOCK', 'in stock');
define('IMAGE_ICON_STATUS_GREEN', 'active');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'activate');
define('IMAGE_ICON_STATUS_RED', 'inactive');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'deactivate');
define('IMAGE_ICON_INFO', 'select');
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
define('TEXT_NEWSLETTER_REMOVE', '点选此处即可取消订阅电子报:');
define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '显示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 礼券)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '显示 <b>%d</b> 到 <b>%d</b> (of <b>%d</b> 优待券)');
define('TEXT_VALID_PRODUCTS_LIST', '商品列表');
define('TEXT_VALID_PRODUCTS_ID', '商品 ID');
define('TEXT_VALID_PRODUCTS_NAME', '商品名称');
define('TEXT_VALID_PRODUCTS_MODEL', '商品型号');
define('TEXT_VALID_CATEGORIES_LIST', '商品分类列表');
define('TEXT_VALID_CATEGORIES_ID', '商品分类 ID');
define('TEXT_VALID_CATEGORIES_NAME', '商品分类名称');
define('SECURITY_CODE_LENGTH_TITLE', '礼券兑换密码长度');
define('SECURITY_CODE_LENGTH_DESC', '输入礼券兑换密码字数(最多 16 个字元)');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', '加入会员赠送礼券的金额');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', '赠送礼券：如果您不要在新增会员时立即寄送礼券可以输入 0 表示没有额度。(※不必输入货币标示)');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', '加入会员赠送折价券的密码');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', '赠送折价券：如果您不要在新增会员时立即寄送折价券请留空白，否则请填入你预定使用折价券的密码');
define('TXT_ALL', '全部');
// UST ID
define('HEADING_TITLE_VAT', 'Vat-ID');
define('ENTRY_VAT_ID', 'Vat-ID');
define('ENTRY_CUSTOMERS_VAT_ID', 'VatID:');
define('TEXT_VAT_FALSE', '<font color="FF0000">已选取／否！</font>');
define('TEXT_VAT_TRUE', '<font color="FF0000">已选取／是！</font>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<font color="FF0000">未选取／不知名的国家！</font>');
define('TEXT_VAT_UNKNOWN_ALGORITHM', '<font color="FF0000">未选取／无法检查！</font>');
define('ENTRY_VAT_ID_ERROR', '<font color="FF0000">* 您的 Vat ID 是错误的！</font>');
define('ERROR_GIF_MERGE', '你的服务器图形处理函数(GDlib)有误，无法合并影像，请联络主机服务商');
define('ERROR_GIF_UPLOAD', '你的服务器图形处理函数(GDlib)有错误或是不支持，无法处理影像效果，请联络主机服务商');
define('TEXT_REFERER', '参照: ');
// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
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
define('TEXT_ADMIN_START', 'Home');
define('BOX_HEADING_CONFIGURATION2', 'Advanced Configuration');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
// BOF - Tomcraft - 2009-11-28 - Included xs:booster
define('BOX_HEADING_XSBOOSTER', 'xs:booster');
define('BOX_XSBOOSTER_LISTAUCTIONS', 'List Auctions');
define('BOX_XSBOOSTER_ADDAUCTIONS', 'Add Auctions');
define('BOX_XSBOOSTER_CONFIG', 'Base Configuration');
// EOF - Tomcraft - 2009-11-28 - Included xs:booster
//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER', 'Customer: ');
define('ASB_QUICK_SEARCH_ORDER_ID', 'Order: ');
define('ASB_QUICK_SEARCH_ARTICLE', 'Product: ');
define('ASB_QUICK_SEARCH_EMAIL', 'E-Mail Address:');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET', 'Check All');
define('BUTTON_UNSET', 'Uncheck All');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes
//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS', 'Row');
define('TABLE_HEADING_RESET', 'Reset statistics');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW', 'Close Window');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW

?>