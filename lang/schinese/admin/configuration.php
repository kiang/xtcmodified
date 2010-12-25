<?php
/* --------------------------------------------------------------
   $Id: configuration.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(configuration.php,v 1.8 2002/01/04); www.oscommerce.com
   (c) 2003	 nextcommerce (configuration.php,v 1.16 2003/08/25); www.nextcommerce.org 

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('TABLE_HEADING_CONFIGURATION_TITLE', '名称');
define('TABLE_HEADING_CONFIGURATION_VALUE', '值');
define('TABLE_HEADING_ACTION', '动作');

define('TEXT_INFO_EDIT_INTRO', '请做适当修改');
define('TEXT_INFO_DATE_ADDED', '建档日期:');
define('TEXT_INFO_LAST_MODIFIED', '最后修改日期:');

// language definitions for config
define('STORE_NAME_TITLE' , '商店名称');
define('STORE_NAME_DESC' , '商店名称');
define('STORE_OWNER_TITLE' , '商店拥有人');
define('STORE_OWNER_DESC' , '商店拥有人');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE' , '电子信箱');
define('STORE_OWNER_EMAIL_ADDRESS_DESC' , '商店拥有人的电子信箱');

define('EMAIL_FROM_TITLE' , '寄件人');
define('EMAIL_FROM_DESC' , '邮件寄件人');

define('STORE_COUNTRY_TITLE' , '国家');
define('STORE_COUNTRY_DESC' , '商店所在的国家 <br /><br /><b>注意： 请记得更新商店地区</b>');
define('STORE_ZONE_TITLE' , '地区');
define('STORE_ZONE_DESC' , '商店所在地区');

define('EXPECTED_PRODUCTS_SORT_TITLE', '商品显示排序'); 
define('EXPECTED_PRODUCTS_SORT_DESC', '商品显示在前台的排序依据(递增或递减)'); 
define('EXPECTED_PRODUCTS_FIELD_TITLE', '商品显示栏位依据'); 
define('EXPECTED_PRODUCTS_FIELD_DESC', '商品显示在前台排序的栏位依据');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE' , '语言与货币选项同步');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC' , '变更语系时，自动切换至该语系之货币');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE' , '新订单邮件额外通知：');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC' , '有新订单时额外通知的电子邮件地址，两个邮件地址间以逗号隔开，格式如下: Name1<email@address1>,Name2<email@address2>');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE' , '启用友善搜寻引擎连结方式？');
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC' , '启用友善搜寻引擎方式应用到网站内的所有连结');

define('DISPLAY_CART_TITLE' , '购买后显示购物车？');
define('DISPLAY_CART_DESC' , '购买商品后立刻显示购物车(或留在原来的位置)？');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE' , '非会员可否推荐商品？');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC' , '没有加入会员可否推荐商品给亲友？');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE' , '搜寻运算元');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC' , '预设的商品搜寻运作方式');

define('STORE_NAME_ADDRESS_TITLE' , '商店地址与电话');
define('STORE_NAME_ADDRESS_DESC' , '请输入：商店名称、地址与电话，此内容会显示在打印文件上');

define('SHOW_COUNTS_TITLE' , '显示分类中的商品数');
define('SHOW_COUNTS_DESC' , '计算并显示每一个分类内的商品数量');

define('DISPLAY_PRICE_WITH_TAX_TITLE' , '显示含税金额');
define('DISPLAY_PRICE_WITH_TAX_DESC' , '显示含税金额(true) 或将税金加于尾端(false)');

	
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMI N_TITLE','管理员群組'); 
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMI N_DESC','请选择要授与管理权限的会员群组'); 
define('DEFAULT_CUSTOMERS_STATUS_ID_GUES T_TITLE','访客群组'); 
define('DEFAULT_CUSTOMERS_STATUS_ID_GUES T_DESC','请为访客预设群组'); 
define('DEFAULT_CUSTOMERS_STATUS_ID_TITL E','新进会员群组'); 
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC ','请选择新加入会员的预设群组'); 

define('ALLOW_ADD_TO_CART_TITLE' , '允许加到购物车');
define('ALLOW_ADD_TO_CART_DESC' , '如果群组设置「显示价格」为"0(否)"时，是否允许顾客将商品放到购物车？');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE' , '允许商品属性折扣？');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC' , '是否允许顾客从商品属性区得到价格折扣(即使商品并不是特价品)');
define('CURRENT_TEMPLATE_TITLE' , '布景选项');
define('CURRENT_TEMPLATE_DESC' , '选择网站外观设计，选取前请先将布景的(目录及文件)上传到 /templates/ 资料夹内');
define('CC_KEYCHAIN_TITLE', '信用卡 CC 字串');
define('CC_KEYCHAIN_DESC', '要加密信用卡 CC 数字的字串(请修改！)');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE' , '姓');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC' , '输入的姓最少要有多少字数？');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE' , '名');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC' , '输入的名最少要有多少字数？');
define('ENTRY_DOB_MIN_LENGTH_TITLE' , '生日');
define('ENTRY_DOB_MIN_LENGTH_DESC' , '生日最少字数');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE' , '电子邮件信箱');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC' , '输入的 电子信箱 最少应有多少字数？');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE' , '街道/门牌号码');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC' , '输入的 街道/门牌号码 最少应有多少字数？');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE' , '公司');
define('ENTRY_COMPANY_MIN_LENGTH_DESC' , '输入的公司最少应有多少字数？');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE' , '邮政编码');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC' , '输入 邮政编码 最少应有多少字数？');
define('ENTRY_CITY_MIN_LENGTH_TITLE' , '地区／城市');
define('ENTRY_CITY_MIN_LENGTH_DESC' , '输入 乡/镇/市/区 最少应有多少字数？');
define('ENTRY_STATE_MIN_LENGTH_TITLE' , '省／直辖市');
define('ENTRY_STATE_MIN_LENGTH_DESC' , '输入 省／直辖市 最少应有多少字数？');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE' , '电话号码');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC' , '输入 电话号码 最少应有多少字数？');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE' , '密码');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC' , '输入 密码 最少应有多少字数？');

define('CC_OWNER_MIN_LENGTH_TITLE' , '信用卡持卡人姓名');
define('CC_OWNER_MIN_LENGTH_DESC' , '输入持卡人姓名 最少应有多少字数？');
define('CC_NUMBER_MIN_LENGTH_TITLE' , '信用卡卡号');
define('CC_NUMBER_MIN_LENGTH_DESC' , '输入信用卡卡号 最少应有多少字数？');

define('REVIEW_TEXT_MIN_LENGTH_TITLE' , '商品反应(评论)文字');
define('REVIEW_TEXT_MIN_LENGTH_DESC' , '商品反应 最少应有多少字数？');

define('MIN_DISPLAY_BESTSELLERS_TITLE' , '畅销商品排行');
define('MIN_DISPLAY_BESTSELLERS_DESC' , '畅销商品排行榜最少显示数量');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE' , '推荐购买商品');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC' , '推荐购买商品区块 显示的最少数目');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE' , '通讯簿笔数');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC' , '每个会员的通讯簿 能拥有的最大笔数');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE' , '搜寻结果');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC' , '搜寻产品后，每页显示的商品数量');
define('MAX_DISPLAY_PAGE_LINKS_TITLE' , '商品列表每页显示数量');
define('MAX_DISPLAY_PAGE_LINKS_DESC' , '商品列表或其它相关列表，每一页可显示商品的最大数目');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE' , '特价商品');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC' , '特价商品每页显示的数量');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE' , '新进商品模组');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC' , '分类目录中，新进商品的最大显示数量');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE' , '预告上市商品');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC' , '预告上市商品的最大显示数量');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE' , '制造厂商区块显示');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC' , '用于制造厂商区块；当制造厂商数超过这个数量，预设的列表形式会转变成「下拉式」菜单');
define('MAX_MANUFACTURERS_LIST_TITLE' , '制造厂商选取格式');
define('MAX_MANUFACTURERS_LIST_DESC' , '用于制造厂商区块; 如果这个值是\'1\' 则显示下拉式菜单，否则会依这个数值作为制造厂商列表的列数，例如，数值 3 则会出现 3 列的制造厂商列表，而不会出现在拉式菜单');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE' , '厂商名称字数');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC' , '用于厂商区块；显示名称的字数');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE' , '新的反应(评论)');
define('MAX_DISPLAY_NEW_REVIEWS_DESC' , '新的商品反应(评论)的显示数量');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE' , '商品评论随机选取');
define('MAX_RANDOM_SELECT_REVIEWS_DESC' , '从多少笔资料中随机选取一笔商品评论');
define('MAX_RANDOM_SELECT_NEW_TITLE' , '新上市商品随机选取');
define('MAX_RANDOM_SELECT_NEW_DESC' , '从多少笔记录中随机选取一笔新上市资料');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE' , '特价商品随机选取');
define('MAX_RANDOM_SELECT_SPECIALS_DESC' , '从多少笔资料中选取一笔特价商品资料');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE' , '每列要列举的分类');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC' , '每列要列举多少分类');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE' , '新上市商品列表');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC' , '新上市商品每页显示数量');
define('MAX_DISPLAY_BESTSELLERS_TITLE' , '畅销商品');
define('MAX_DISPLAY_BESTSELLERS_DESC' , '畅销商品最大显示数量');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE' , '建议购买商品');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC' , '建议客户购买商品区块所能显示的最大数目');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE' , '订单记录区块');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC' , '会员的订单记录区块中，显示已购买商品的数量');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE' , '订单记录');
define('MAX_DISPLAY_ORDER_HISTORY_DESC' , '订单记录每页显示的笔数');
define('MAX_PRODUCTS_QTY_TITLE', '大量购买数目');
define('MAX_PRODUCTS_QTY_DESC', '大量购买商品数量的上限');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE', '新商品上架日数上限');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC', '新商品区域显示的商品为指定日数以内上架的商品');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE' , '商品缩图宽度(小)');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC' , '商品缩图的最大宽度(显示在首页)(单位：Pixel像素)');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE' , '商品缩图高度(小)');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC' , '商品缩图的最大高度(显示在首页)(单位：Pixel像素)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE' , '内容图宽度(中)');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC' , '商品内容图的最大宽度(显示在商品页)(单位：Pixel像素)');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE' , '内容图高度(中)');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC' , '商品内容图的最大高度(显示在商品页)(单位：Pixel像素)');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE' , '弹出图的宽度(大)');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC' , '弹出窗口图片的最大宽度(点内容图后，弹出窗口的图)(单位：Pixel像素)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE' , '弹出窗口图的最大高度(大)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC' , '弹出窗口图片的最大高度(点内容图后，自动弹出窗口的图)(单位：Pixel像素)');

define('SMALL_IMAGE_WIDTH_TITLE' , '小图宽度');
define('SMALL_IMAGE_WIDTH_DESC' , '商品小图宽度');
define('SMALL_IMAGE_HEIGHT_TITLE' , '小图高度');
define('SMALL_IMAGE_HEIGHT_DESC' , '商品小图高度');

define('HEADING_IMAGE_WIDTH_TITLE' , '标题列图片宽度');
define('HEADING_IMAGE_WIDTH_DESC' , '标题列图片宽度设置');
define('HEADING_IMAGE_HEIGHT_TITLE' , '标题列图片高度');
define('HEADING_IMAGE_HEIGHT_DESC' , '标题列图片高度设置');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE' , '次分类目录图片宽度');
define('SUBCATEGORY_IMAGE_WIDTH_DESC' , '次分类目录图片宽度设置');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE' , '次分类目录图片高度');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC' , '次分类目录图片高度设置');

define('CONFIG_CALCULATE_IMAGE_SIZE_TITLE' , '计算图档');
define('CONFIG_CALCULATE_IMAGE_SIZE_DESC' , '是否计算图档大小？');

define('IMAGE_REQUIRED_TITLE' , '显示图片');
define('IMAGE_REQUIRED_DESC' , '可以显示失去连结的图片，以利除错');

define('MO_PICS_TITLE','商品图数量');
define('MO_PICS_DESC','设置值是 0 时是一张图，设置值是 1 时可以上传两张图....以此类推，可以显示多图');

//This is for the Images showing your products for preview. All the small stuff.

define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_TITLE' , '缩图(小)：斜角效果<br /><br /><img src="images/config_bevel.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_BEVEL_DESC' , '产生斜角效果的小图<br />预设值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部颜色,暗部颜色)');

define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_TITLE' , '缩图(小)：灰阶<br /><br /><img src="images/config_greyscale.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_GREYSCALE_DESC' , '小图的灰阶效果<br />预设值：(32,22,22)<br /><br />使用黑白灰阶产生缩图。灰阶用法：&nbsp;(红,绿,蓝)，不使用灰阶缩图请留空白');

define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_TITLE' , '缩图(小)：椭圆背景<br /><br /><img src="images/config_eclipse.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ELLIPSE_DESC' , '产生椭圆形的小图<br />预设值：(FFFFFF)<br /><br />椭圆背景遮罩的颜色。设置方法：&nbsp;(背景颜色)');

define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_TITLE' , '缩图(小)：圆角效果<br /><br /><img src="images/config_edge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES_DESC' , '产生圆角效果的小图<br />预设值：(5,FFFFFF,3)<br /><br />设置方法：&nbsp;(圆角半径,背景颜色,消除锯齿尺寸)');

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE' , '缩图(小)：加浮水印<br /><br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC' , '小图加上浮水印<br />预设值：(overlay.gif,10,-50,60,FF0000)<br /><br />设置方法：<br />(浮水印图档, x座标[正数:由左边算起;负数:由右边算起], y 座标[正数:由上面算起;负数:由下面算起], 容许度, 浮水印图片透明颜色)<br />浮水印图档位置(overlay.gif)在/images/');

define('PRODUCT_IMAGE_THUMBNAIL_FRAME_TITLE' , '缩图(小)：加外框<br /><br /><img src="images/config_frame.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_FRAME_DESC' , '小图加上边缘浮雕的外框效果<br />预设值： (FFFFFF,000000,3,EEEEEE)<br /><br />设置方法：&nbsp;(亮部颜色,暗部颜色,尺寸,外框颜色[选项])<br />※[选项说明]～如果不设置外框颜色，则预设为亮部颜色与暗部颜色之中间色');

define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADDOW_TITLE' , '缩图(小)：加阴影<br /><br /><img src="images/config_shadow.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_DROP_SHADDOW_DESC' , '小图加上阴影的效果<br />预设值： (3,333333,FFFFFF)<br /><br />设置方法：&nbsp;(阴影宽度, 阴影颜色, 阴影底色)');

define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_TITLE' , '缩图(小)：边缘残影效果<br /><br /><img src="images/config_motion.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR_DESC' , '小图加上边缘残影的效果<br />预设值： (4,FFFFFF)<br /><br />平行渐层的残影风动效果<br /><br />设置方法：&nbsp;(残影数目, 背景颜色)');

//And this is for the Images showing your products in single-view

define('PRODUCT_IMAGE_INFO_BEVEL_TITLE' , '内容图(中)：斜角效果');
define('PRODUCT_IMAGE_INFO_BEVEL_DESC' , '内容图产生斜角效果(中图，显示于商品说明页)<br />预设值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部颜色,暗部颜色)');

define('PRODUCT_IMAGE_INFO_GREYSCALE_TITLE' , '内容图(中)：灰阶');
define('PRODUCT_IMAGE_INFO_GREYSCALE_DESC' , '中图的灰阶效果<br />预设值：(32,22,22)<br /><br />使用黑白灰阶产生内容图。灰阶用法：&nbsp;(红,绿,蓝)，不使用灰阶缩图请留空白');

define('PRODUCT_IMAGE_INFO_ELLIPSE_TITLE' , '内容图(中)：椭圆形');
define('PRODUCT_IMAGE_INFO_ELLIPSE_DESC' , '输出椭圆形的内容图<br />预设值：(FFFFFF)<br /><br />椭圆背景遮罩的颜色。设置方法：&nbsp;(背景颜色)');

define('PRODUCT_IMAGE_INFO_ROUND_EDGES_TITLE' , '内容图(中)：圆角效果');
define('PRODUCT_IMAGE_INFO_ROUND_EDGES_DESC' , '内容图产生圆角效果<br />预设值：(5,FFFFFF,3)<br /><br />设置方法：&nbsp;(圆角半径,背景颜色,消除锯齿尺寸)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE' , '内容图(中)：加浮水印');
define('PRODUCT_IMAGE_INFO_MERGE_DESC' , '内容图加上浮水印(可避免盗拷)<br />预设值：(overlay.gif,10,-50,60,FF0000)<br /><br />设置方法：<br />(浮水印图档, x座标[正数:由左边算起;负数:由右边算起], y 座标[正数:由上面算起;负数:由下面算起], 容许度, 浮水印图片透明颜色)<br />浮水印图档位置(overlay.gif)在/images/');

define('PRODUCT_IMAGE_INFO_FRAME_TITLE' , '内容图(中)：加外框');
define('PRODUCT_IMAGE_INFO_FRAME_DESC' , '内容图加上边缘浮雕的外框<br />预设值： (FFFFFF,000000,3,EEEEEE)<br /><br />设置方法：&nbsp;(亮部颜色,暗部颜色,尺寸,外框颜色[选项])<br />※[选项说明]～如果不设置外框颜色，则预设为亮部颜色与暗部颜色之中间色');

define('PRODUCT_IMAGE_INFO_DROP_SHADDOW_TITLE' , '内容图(中)：加阴影');
define('PRODUCT_IMAGE_INFO_DROP_SHADDOW_DESC' , '内容图加上阴影的效果<br />预设值： (3,333333,FFFFFF)<br /><br />设置方法：&nbsp;(阴影宽度, 阴影颜色, 阴影底色)');

define('PRODUCT_IMAGE_INFO_MOTION_BLUR_TITLE' , '内容图(中)：边缘残影效果');
define('PRODUCT_IMAGE_INFO_MOTION_BLUR_DESC' , '内容图加上边缘残影的效果<br />预设值： (4,FFFFFF)<br /><br />平行渐层的残影风动效果<br /><br />设置方法：&nbsp;(残影数目, 背景颜色)');

//so this image is the biggest in the shop this

define('PRODUCT_IMAGE_POPUP_BEVEL_TITLE' , '弹出窗口图(大)：斜角效果');
define('PRODUCT_IMAGE_POPUP_BEVEL_DESC' , '弹出窗口图产生斜角效果(点内容图后，自动弹出窗口的大图)<br />预设值：(8,FFCCCC,330000)<br /><br />斜角用法：&nbsp;(斜角尺寸,亮部颜色,暗部颜色)');

define('PRODUCT_IMAGE_POPUP_GREYSCALE_TITLE' , '弹出窗口图(大)：灰阶');
define('PRODUCT_IMAGE_POPUP_GREYSCALE_DESC' , '弹出图的灰阶效果<br />预设值：(32,22,22)<br /><br />使用黑白灰阶产生内容图。灰阶用法：&nbsp;(红,绿,蓝)，不使用灰阶缩图请留空白');

define('PRODUCT_IMAGE_POPUP_ELLIPSE_TITLE' , '弹出窗口图(大)：椭圆形');
define('PRODUCT_IMAGE_POPUP_ELLIPSE_DESC' , '输出椭圆形的弹出窗口图<br />预设值：(FFFFFF)<br /><br />椭圆背景遮罩的颜色。设置方法：&nbsp;(背景颜色)');

define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_TITLE' , '弹出窗口图(大)：圆角效果');
define('PRODUCT_IMAGE_POPUP_ROUND_EDGES_DESC' , '弹出窗口图产生圆角效果<br />预设值：(5,FFFFFF,3)<br /><br />设置方法：&nbsp;(圆角半径,背景颜色,消除锯齿尺寸)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE' , '弹出窗口图(大)：加浮水印');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC' , '弹出窗口图加上浮水印(可避免盗拷)<br />预设值：(overlay.gif,10,-50,60,FF0000)<br /><br />设置方法：<br />(浮水印图档, x座标[正数:由左边算起;负数:由右边算起], y 座标[正数:由上面算起;负数:由下面算起], 容许度, 浮水印图片透明颜色)<br />浮水印图档位置(overlay.gif)在/images/');

define('PRODUCT_IMAGE_POPUP_FRAME_TITLE' , '弹出窗口图(大)：加外框');
define('PRODUCT_IMAGE_POPUP_FRAME_DESC' , '弹出窗口图加上边缘浮雕的外框<br />预设值： (FFFFFF,000000,3,EEEEEE)<br /><br />设置方法：&nbsp;(亮部颜色,暗部颜色,尺寸,外框颜色[选项])<br />※[选项说明]～如果不设置外框颜色，则预设为亮部颜色与暗部颜色之中间色');

define('PRODUCT_IMAGE_POPUP_DROP_SHADDOW_TITLE' , '弹出窗口图(大)：加阴影');
define('PRODUCT_IMAGE_POPUP_DROP_SHADDOW_DESC' , '弹出窗口图加上阴影的效果<br />预设值： (3,333333,FFFFFF)<br /><br />设置方法：&nbsp;(阴影宽度, 阴影颜色, 阴影底色)');

define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_TITLE' , '弹出窗口图(大)：边缘残影效果');
define('PRODUCT_IMAGE_POPUP_MOTION_BLUR_DESC' , '弹出窗口图加上边缘残影的效果<br />预设值： (4,FFFFFF)<br /><br />平行渐层的残影风动效果<br /><br />设置方法：&nbsp;(残影数目, 背景颜色)');

define('IMAGE_MANIPULATOR_TITLE','GDlib处理');
define('IMAGE_MANIPULATOR_DESC','服务器影像处理函数是 GD2 或 GD1');


define('ACCOUNT_GENDER_TITLE' , '性别');
define('ACCOUNT_GENDER_DESC' , '会员注册是否要显示「性别」选项？');
define('ACCOUNT_DOB_TITLE' , '生日');
define('ACCOUNT_DOB_DESC' , '会员注册是否要显示「生日」选项？');
define('ACCOUNT_COMPANY_TITLE' , '公司');
define('ACCOUNT_COMPANY_DESC' , '会员注册是否要显示「公司」选项？');
define('ACCOUNT_SUBURB_TITLE' , '里／邻');
define('ACCOUNT_SUBURB_DESC' , '会员注册是否需要填写「里/邻」文字框？');
define('ACCOUNT_STATE_TITLE' , '县／市');
define('ACCOUNT_STATE_DESC' , '会员注册是否需要填写「县/市」文字框？');

define('DEFAULT_CURRENCY_TITLE' , '预设货币');
define('DEFAULT_CURRENCY_DESC' , '预设货币');
define('DEFAULT_LANGUAGE_TITLE' , '预设语言');
define('DEFAULT_LANGUAGE_DESC' , '预设语言');
define('DEFAULT_ORDERS_STATUS_ID_TITLE' , '新到订单的预设状态');
define('DEFAULT_ORDERS_STATUS_ID_DESC' , '新到订单的预设状态.');

define('SHIPPING_ORIGIN_COUNTRY_TITLE' , '出货国家');
define('SHIPPING_ORIGIN_COUNTRY_DESC' , '出货单上商店的国家');
define('SHIPPING_ORIGIN_ZIP_TITLE' , '邮政编码');
define('SHIPPING_ORIGIN_ZIP_DESC' , '请输入出货单上商店所在地区的--邮政编码--');
define('SHIPPING_MAX_WEIGHT_TITLE' , '货运的重量限制');
define('SHIPPING_MAX_WEIGHT_DESC' , '请输入货运寄送时，单一包装的重量限制(便于在结帐时计算是否要外加费用「单位kg」，商品没设重量时不必填)');
define('SHIPPING_BOX_WEIGHT_TITLE' , '包装重量');
define('SHIPPING_BOX_WEIGHT_DESC' , '一般中小型包装时的大略重量是多少？(商品没设重量时不必填)');
define('SHIPPING_BOX_PADDING_TITLE' , '大包装--增值比率--');
define('SHIPPING_BOX_PADDING_DESC' , '输入 10 代表 10％，(此为超出一般包装时，加收运费的标准)');
define('SHOW_SHIPPING_DESC', '在商品信息中显示运费');
define('SHOW_SHIPPING_TITLE', '在商品信息中显示运费');
define('SHIPPING_INFOS_DESC', '运费内容的群组编号。');
define('SHIPPING_INFOS_TITLE', '群组编号');

define('PRODUCT_LIST_FILTER_TITLE' , '显示分类目录／厂商信息');
define('PRODUCT_LIST_FILTER_DESC' , '是否显示分类目录／厂商信息？ (0=关闭; 1=开启)');

define('STOCK_CHECK_TITLE' , '检查库存量');
define('STOCK_CHECK_DESC' , '是否需要检查商品库存量？');

define('ATTRIBUTE_STOCK_CHECK_TITLE' , '从商品属性检查库存量');
define('ATTRIBUTE_STOCK_CHECK_DESC' , '如果在设置商品属性时有设商品数量，是否以此为依据作库存量检查？');

define('STOCK_LIMITED_TITLE' , '自动扣除库存');
define('STOCK_LIMITED_DESC' , '从顾客订购中自动扣除商品的库存量');
define('STOCK_ALLOW_CHECKOUT_TITLE' , '允许结帐');
define('STOCK_ALLOW_CHECKOUT_DESC' , '库存量不足时，仍然可以让顾客结帐');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE' , '缺货标示');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC' , '缺货时会显示这个标示，让顾客知道哪一项商品已缺货');
define('STOCK_REORDER_LEVEL_TITLE' , '安全库存量');
define('STOCK_REORDER_LEVEL_DESC' , '低于安全库存量时提醒进货');

define('STORE_PAGE_PARSE_TIME_TITLE' , '存贮网页解析时间');
define('STORE_PAGE_PARSE_TIME_DESC' , '存贮网页解析时间');
define('STORE_PAGE_PARSE_TIME_LOG_TITLE' , '纪录档位置');
define('STORE_PAGE_PARSE_TIME_LOG_DESC' , '页面解析时间纪录档的资料夹与档名');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE' , '纪录档日期格式');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC' , '日期格式');

define('DISPLAY_PAGE_PARSE_TIME_TITLE' , '显示网页解析时间');
define('DISPLAY_PAGE_PARSE_TIME_DESC' , '是否显示网页解析时间？(必须要启动「存贮页解析时间」的设置)');

define('STORE_DB_TRANSACTIONS_TITLE' , '存贮资料库查询');
define('STORE_DB_TRANSACTIONS_DESC' , '存贮每页查询资料库的解析时间纪录(仅适用PHP4以上的版本)');

define('USE_CACHE_TITLE' , '快取');
define('USE_CACHE_DESC' , '使用快取？');

define('DB_CACHE_TITLE','资料库快取');
define('DB_CACHE_DESC','启用后会将资料库取出的信息做快取处理，加快读取速度');

define('DB_CACHE_EXPIRE_TITLE','资料库快取存活时间');
define('DB_CACHE_EXPIRE_DESC','选择希望快取资料的时间长短');

define('DIR_FS_CACHE_TITLE' , '快取目录');
define('DIR_FS_CACHE_DESC' , '快取文件存贮的目录');

define('ACCOUNT_OPTIONS_TITLE', '会员购物帐号选项');
define('ACCOUNT_OPTIONS_DESC', '会员购物帐号管理 <br />你可以选择需加入会员(customer)与非会员购物(guest)或是全选(all),当你开启非会员购物的"一次性订单"时,帐号仍会被建立,但不会通知顾客');

define('EMAIL_TRANSPORT_TITLE' , 'E-Mail 寄送方式');
define('EMAIL_TRANSPORT_DESC' , '经由Linux(Unix-like)服务器主机sendmail寄信或经由 SMTP 主机寄信(如果您的服务器主机是Windows NT、XP或是MacOS)，一般建议使用PHP');

define('EMAIL_LINEFEED_TITLE' , '电子邮件换行');
define('EMAIL_LINEFEED_DESC' , '定义电子邮件表头所使用的换行字元');
define('EMAIL_USE_HTML_TITLE' , '使用 MIME HTML 格式寄电子邮件');
define('EMAIL_USE_HTML_DESC' , '传送 HTML 格式的电子邮件');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE' , '利用 DNS 检查电子邮件地址');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC' , '利用 DNS 主机检查电子邮件地址');
define('SEND_EMAILS_TITLE' , '传送电子邮件');
define('SEND_EMAILS_DESC' , '寄出电子邮件');
define('SENDMAIL_PATH_TITLE' , 'sendmail 的路径');
define('SENDMAIL_PATH_DESC' , '如果您使用 sendmail 必须指定路径(Linux: /usr/bin/sendmail)，(FreeBSD:/usr/sbin/sendmail)');
define('SMTP_MAIN_SERVER_TITLE' , 'SMTP 服务器地址');
define('SMTP_MAIN_SERVER_DESC' , '输入SMTP 地址.');
define('SMTP_BACKUP_SERVER_TITLE' , '备用smtp服务器');
define('SMTP_BACKUP_SERVER_DESC' , '输入备用SMTP 地址.');
define('SMTP_USERNAME_TITLE' , 'SMTP 帐号');
define('SMTP_USERNAME_DESC' , '输入 SMTP 帐号.');
define('SMTP_PASSWORD_TITLE' , 'SMTP 密码');
define('SMTP_PASSWORD_DESC' , '输入  SMTP 密码.');
define('SMTP_AUTH_TITLE' , 'SMTP 安全确认');
define('SMTP_AUTH_DESC' , '你的 SMTP 服务器需要安全确认?');
define('SMTP_PORT_TITLE' , 'SMTP 连接埠');
define('SMTP_PORT_DESC' , '输入 SMTP 连接埠(一般: 25)');

//Constants for contact_us
define('CONTACT_US_EMAIL_ADDRESS_TITLE' , '「联络我们」E-mail地址');
define('CONTACT_US_EMAIL_ADDRESS_DESC' , '请输入客户使用「联络我们」功能时，店家收信的电子邮件');
define('CONTACT_US_NAME_TITLE' , '「联络我们」 - 寄件人设置');
define('CONTACT_US_NAME_DESC' , '请输入客户使用「联络我们」功能时，店家收信的电子邮件寄件人(也可说是信件标题，EX：XX商店客户联络信)');
define('CONTACT_US_FORWARDING_STRING_TITLE' , '「联络我们」 - 转寄电子邮件地址');
define('CONTACT_US_FORWARDING_STRING_DESC' , '请输入客户使用「联络我们」时，一并要转寄的电子邮件地址(请以 "," 逗号分隔)，也就是说一起寄到多个信箱，你可以设置多个信箱多人同时收信。');
define('CONTACT_US_REPLY_ADDRESS_TITLE' , '「联络我们」 - 回信的电子邮件地址');
define('CONTACT_US_REPLY_ADDRESS_DESC' , '请输入客户使用「联络我们」时，回信的电子邮件地址');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE' , '「联络我们」- 回信的收件人');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC' , '请输入客户使用「联络我们」时，回信的收件人');
define('CONTACT_US_EMAIL_SUBJECT_TITLE' , '「联络我们」 - 电子邮件标题');
define('CONTACT_US_EMAIL_SUBJECT_DESC' , '请输入客户使用「联络我们」时的电子邮件标题(内容主旨)');

//Constants for support system
define('EMAIL_SUPPORT_ADDRESS_TITLE' , '「技术支持」- 电子邮件地址');
define('EMAIL_SUPPORT_ADDRESS_DESC' , '请输入电子邮件地址 (新增帐号, 变更密码)');
define('EMAIL_SUPPORT_NAME_TITLE' , '「技术支持」- 电子邮件寄件人名称');
define('EMAIL_SUPPORT_NAME_DESC' , '请输入电子邮件寄件人名称 (新增帐号, 变更密码).');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE' , '「技术支持」- 转寄电子邮件地址');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC' , '请输入转寄电子邮件地址(请以 "," 逗号分隔)(新增帐号, 变更密码)');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE' , '「技术支持」- 回信的电子邮件地址');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC' , '请输入接收回信的电子邮件地址.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE' , '「技术支持」- 客户回信的收件人');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC' , '请输入客户回信时的邮件寄件人.');
define('EMAIL_SUPPORT_SUBJECT_TITLE' , '「技术支持」- 电子邮件标题');
define('EMAIL_SUPPORT_SUBJECT_DESC' , '请输入由商店寄给你的电子邮件标题(内容主旨)');

//Constants for Billing system
define('EMAIL_BILLING_ADDRESS_TITLE' , '「订单处理」- E-mail地址');
define('EMAIL_BILLING_ADDRESS_DESC' , '请输入客户订购之后经由<b>网站系统自动寄出</b>的发信E-mail地址');
define('EMAIL_BILLING_NAME_TITLE' , '「订单处理」- E-mail寄件人');
define('EMAIL_BILLING_NAME_DESC' , '请输入经由<b>网站系统自动寄出</b>的E-mail寄件人名称(EX：XXX商店通知)');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE' , '「订单处理」- 转寄E-mail');
define('EMAIL_BILLING_FORWARDING_STRING_DESC' , '请输入<b>网站系统寄E-mail</b>一并要转寄的电子邮件地址(以 ", " 区隔)，你可以设置多个信箱多人同时收信。');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE' , '「订单管理」- 回覆邮件的E-mail');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC' , '请输入订单管理中，回覆客户时经由<b>网站系统寄E-mail</b>时，店家或服务人员的电子邮件地址。');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE' , '「订单处理」- 回覆邮件的收件人');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC' , '请输入订单处理中，客户要回覆给网站系统的电子邮件时的店家或服务人员名称(EX：XXX商店)');
define('EMAIL_BILLING_SUBJECT_TITLE' , '「订单处理」- E-mail标题');
define('EMAIL_BILLING_SUBJECT_DESC' , '请输入--由店家通过网站系统寄给客户<b>订单处理</b>的电子邮件标题(EX：你的订单处理进度...)');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE','「订单通知」- 订单的E-mail标题');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC','请输入--客户订货后--经由网站系统寄出的「订单确认信」电子邮件标题(EX：<b>XXX商店订单通知 {$nr},{$date}</b>) 注:可以使用的变数,{$nr},{$date},{$firstname},{$lastname}');

define('DOWNLOAD_ENABLED_TITLE' , '启用下载');
define('DOWNLOAD_ENABLED_DESC' , '启用产品下载');
define('DOWNLOAD_BY_REDIRECT_TITLE' , '转址下载');
define('DOWNLOAD_BY_REDIRECT_DESC' , '使用浏览器转址下载，非 Unix 系统无法使用');
define('DOWNLOAD_MAX_DAYS_TITLE' , '到期日(天数)');
define('DOWNLOAD_MAX_DAYS_DESC' , '设置下载过期天数，输入 0 代表没有期限');
define('DOWNLOAD_MAX_COUNT_TITLE' , '最大下载数');
define('DOWNLOAD_MAX_COUNT_DESC' , '设置最大下载数，输入 0 代表不可下载');

define('GZIP_COMPRESSION_TITLE' , '使用 GZip 压缩');
define('GZIP_COMPRESSION_DESC' , '使用 HTTP GZip 压缩.');
define('GZIP_LEVEL_TITLE' , '压缩等级');
define('GZIP_LEVEL_DESC' , '使用的压缩等级 0-9 (0 = 最小, 9 = 最大)');

define('SESSION_WRITE_DIRECTORY_TITLE' , 'Session 存贮目录');
define('SESSION_WRITE_DIRECTORY_DESC' , '如果你的 session 是存贮于文件，则会放到此目录');
define('SESSION_FORCE_COOKIE_USE_TITLE' , '强迫使用 Cookie');
define('SESSION_FORCE_COOKIE_USE_DESC' , '当只有 cookie 启动时，强迫使用 session');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE' , '检查 SSL Session ID');
define('SESSION_CHECK_SSL_SESSION_ID_DESC' , '在每一个加密网页(https)确认 SSL_SESSION_ID');
define('SESSION_CHECK_USER_AGENT_TITLE' , '检查访客浏览器');
define('SESSION_CHECK_USER_AGENT_DESC' , '确认访客在每一个网页使用的浏览器种类');
define('SESSION_CHECK_IP_ADDRESS_TITLE' , '检查 IP 地址');
define('SESSION_CHECK_IP_ADDRESS_DESC' , '每一个网页检查访客的 IP 地址');
define('SESSION_RECREATE_TITLE' , '重新建立 Session');
define('SESSION_RECREATE_DESC' , '当使用者登入或新增帐号时，重建 session 及新增 session ID (PHP 版本必须为 4.1 以上)');

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE' , '显示购物条款');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC' , '结帐时显示购物条款(需勾选「同意」才能完成结帐程序)');

define('META_MIN_KEYWORD_LENGTH_TITLE' , 'meta-keyword 最小长度');
define('META_MIN_KEYWORD_LENGTH_DESC' , 'meta-keyword 单一关键字的最小长度(由商品说明产生)');
define('META_KEYWORDS_NUMBER_TITLE' , 'meta-keyword 数目');
define('META_KEYWORDS_NUMBER_DESC' , 'meta-keyword 数目');
define('META_AUTHOR_TITLE' , '网页META设置：author');
define('META_AUTHOR_DESC' , '请填入网页META的「作者」标示，(告诉搜寻引擎这个网站作者是谁？)');
define('META_PUBLISHER_TITLE' , '网页META设置：publisher');
define('META_PUBLISHER_DESC' , '请填入META的「发行者」标示，(告诉搜寻引擎这个网站发行者是谁？)');
define('META_COMPANY_TITLE' , '网页META设置：company');
define('META_COMPANY_DESC' , '请填入META的「公司」标示，(告诉搜寻引擎这个网站是哪家公司的？)');
define('META_TOPIC_TITLE' , '网页META设置：page-topic');
define('META_TOPIC_DESC' , '请填入META的「主题」标示');
define('META_REPLY_TO_TITLE' , '网页META设置：reply-to');
define('META_REPLY_TO_DESC' , '请填入META的<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE' , '网页META设置：revisit-after');
define('META_REVISIT_AFTER_DESC' , '告诉搜寻引擎几天之后再来这个网站要重新登录(EX：30days)');
define('META_ROBOTS_TITLE' , '网页META设置：robots');
define('META_ROBOTS_DESC' , '请填入加入搜寻引擎的范围，(EX：all)');
define('META_DESCRIPTION_TITLE' , '网页META设置：Description');
define('META_DESCRIPTION_DESC' , '请填入META的「网页内容摘要」(告诉搜寻引擎这个网站的内容摘要)');
define('META_KEYWORDS_TITLE' , '网页META设置：Keywords');
define('META_KEYWORDS_DESC' , '请填入网页的关键字标示，让搜寻引擎知道这个网站的一些重要关键字(请以逗号分隔，EX：关键字, 关键时刻, 关键报告)');

define('MODULE_PAYMENT_INSTALLED_TITLE' , '已启用付款模组');
define('MODULE_PAYMENT_INSTALLED_DESC' , '付款模组列表，每一个模组以分号隔开，系统会自动更新，不需手动修改 (例如: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE' , '已启用的订单总计模组');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC' , '订单总计模组列表，每一个模组以分号隔开，系统会自动更新，不需手动修改 (例如: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE' , '已启用的出货模组');
define('MODULE_SHIPPING_INSTALLED_DESC' , '运送模组列表，每一个模组以分号隔开，系统会自动更新，不需手动修改 (例如: ups.php;flat.php;item.php)');

define('CACHE_LIFETIME_TITLE','快取存活时间');
define('CACHE_LIFETIME_DESC','快取内容保存的秒数');
define('CACHE_CHECK_TITLE','快取内容变动检查');
define('CACHE_CHECK_DESC','如果启用快取, 那么将会以快取内容的方式来存贮最近所更动的网页表头信息，并以 HTTP 专用的表头信息的方式来送出，这个快取网页的方法可以让使用者在浏览网页时不用非得要系统重新下载所有的网页。');

define('PRODUCT_REVIEWS_VIEW_TITLE','商品反应');
define('PRODUCT_REVIEWS_VIEW_DESC','每页显示几篇商品反应');

define('DELETE_GUEST_ACCOUNT_TITLE','删除免会员购物者帐号');
define('DELETE_GUEST_ACCOUNT_DESC','免会员购物者的帐号在购物完成后是否删除？(订单信息仍会保留)');

define('USE_WYSIWYG_TITLE','启动联机编辑器');
define('USE_WYSIWYG_DESC','是否启动网页编辑器(内容管理及商品说明文字区块)？');

define ('PRICE_IS_BRUTTO_TITLE','小数点管理'); 
define('PRICE_IS_BRUTTO_DESC', '是否使用小数点管理？'); 

define('PRICE_PRECISION_TITLE','小点数'); 
define('PRICE_PRECISION_DESC', '依小数点位数(4舍5入计算)，计算价格及其显示位数'); 

define('SHOW_IP_LOG_TITLE','显示客户IP');
define('SHOW_IP_LOG_DESC','顾客结帐时是否要显示 「您目前的IP已经纪录」？');

define('ACTIVATE_GIFT_SYSTEM_TITLE','礼券系统');
define('ACTIVATE_GIFT_SYSTEM_DESC','是否启动礼券系统？');

define('ACTIVATE_SHIPPING_STATUS_TITLE','出货状态显示');
define('ACTIVATE_SHIPPING_STATUS_DESC','是否显示出货状态？(可以针对不同商品设置不同的出货时间，在新增商品时会显示<b>出货时间</b>供你选择)');

define('SECURITY_CODE_LENGTH_TITLE','礼券密码长度');
define('SECURITY_CODE_LENGTH_DESC','礼券的安全密码字数');

define('IMAGE_QUALITY_TITLE','图片压缩比例');
define('IMAGE_QUALITY_DESC','图片压缩品质(设置范围：0～100)(0=低品质；100=最高质量)');

define('GROUP_CHECK_TITLE','购物等级检查');
define('GROUP_CHECK_DESC','只有特定的会员等级才有权查看商品的权利(启动此功能后，会在建立分类目录与新增商品时，显示勾选的栏位)');

define('ACTIVATE_NAVIGATOR_TITLE','商品导览列设置');
define('ACTIVATE_NAVIGATOR_DESC','开启或是关闭商品列表的商品导览列？(若商品数量过多时可以设置为关闭，可获得较好的系统执行效能)');

define('QUICKLINK_ACTIVATED_TITLE','开启多重连结／商品复制');
define('QUICKLINK_ACTIVATED_DESC','是否开启开启多连结／复制商品？(商品上架时可以使用「复制商品」的动作，直接将商品复制到多个分类目录，而不必在重复上传商品。)');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', '反向相关贩售');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', '启用反向相关商品贩售？');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', '下载付款模组');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', '不允许被下载的付款模组(设置时以逗点分隔，例如 {banktransfer,cod,invoice,moneyorder})');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', '订单状态下限');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', '要下载文件，订单状态至少为何？');

// Vat Check
define('STORE_OWNER_VAT_ID_TITLE' , '商家 Vat-ID');
define('STORE_OWNER_VAT_ID_DESC' , '商店拥有者的 Vat-ID');
define('STORE_OWNER_VAT_ID_TITLE', '购物站税务编号(VAT ID)');
define('STORE_OWNER_VAT_ID_DESC', '购物站拥有者的 VAT-ID (欧盟税制，与中国的税务登记号码同义，但因验证机制的不同，建议略过)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE', '客户群组 - 校正 VAT ID(外国)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC', '校正客户群组的 VAT ID 归属，购物站与客户不同国家');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE', '验证VAT ID');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC', '验证VAT ID(检查语法)');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE', '启用联机验证VAT ID');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC', '启用联机验证VAT ID(如果你手边没有其它国家的检查机制)，将会通过德国政府的金融匣道来作验证');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE', '自动修正？');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC', '启用这个项目时，客户群组将会因校正 VAT ID 使用时而随之修正。');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE', '启用验证错误 Vat-ID？');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC', '启用这个项目时，只接受经过验证的 VAT IDs 。');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE', '客户群组 - 校正 VAT ID (购物站所在国家)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC', '校正客户群组的 VAT ID 归属，购物站与客户为同一国家');
// Google Conversion
define('GOOGLE_CONVERSION_TITLE','Google 广告追踪统计');
define('GOOGLE_CONVERSION_DESC','是否让Google搜寻引擎程序，有规律的追踪网站的关键字？');
define('GOOGLE_CONVERSION_ID_TITLE','连线ID');
define('GOOGLE_CONVERSION_ID_DESC','您在Google网站登记的ID');
define('GOOGLE_LANG_TITLE','Google语言');
define('GOOGLE_LANG_DESC','在Google搜寻引擎中要设置的语言［ISO编码］');
// Afterbuy
define('AFTERBUY_ACTIVATED_TITLE', '启用');
define('AFTERBUY_ACTIVATED_DESC', '启用交易信息(afterbuy)模组');
define('AFTERBUY_PARTNERID_TITLE', '管理 ID');
define('AFTERBUY_PARTNERID_DESC', '管理交易信息模组的 ID');
define('AFTERBUY_PARTNERPASS_TITLE', '管理密码');
define('AFTERBUY_PARTNERPASS_DESC', '管理交易信息模组的密码');
define('AFTERBUY_USERID_TITLE', '会员 ID');
define('AFTERBUY_USERID_DESC', '交易会员 ID');
define('AFTERBUY_ORDERSTATUS_TITLE', '订单状态');
define('AFTERBUY_ORDERSTATUS_DESC', '在已经导出订购商品资料中的所有订购细节');
define('AFTERBUY_URL', '你可以通过以下连结了解交易信息模组的使用细节: <a href="http://www.xt-commerce.com/modules/wfsection/dossier-65.html" target="new">http://www.xt-commerce.com/modules/wfsection/dossier-65.html</a>');

// Search-Options
define('SEARCH_IN_DESC_TITLE', '搜寻商品说明细节');
define('SEARCH_IN_DESC_DESC', '启用可以搜寻商品的说明细节');
define('SEARCH_IN_ATTR_TITLE', '搜寻商品属性');
define('SEARCH_IN_ATTR_DESC', '启用可以搜寻商品的属性');

// changes for 3.0.4 SP2
define('REVOCATION_ID_TITLE','撤销订单 ID');
define('REVOCATION_ID_DESC','撤销订单的内容 ID');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE','显示撤销订单的权利?');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC','在最后结帐确认动作时显示关于撤销订单的权利事项?');
?>