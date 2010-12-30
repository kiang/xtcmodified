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
define('TEXT_EDIT_STATUS', '状态');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', '(分类 / 商品) 编辑区');
define('HEADING_TITLE_SEARCH', '搜寻：');
define('HEADING_TITLE_GOTO', '前往：');
define('TABLE_HEADING_ID', '编号');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '分类 / 商品');
define('TABLE_HEADING_ACTION', '动作');
define('TABLE_HEADING_STATUS', '状态');
define('TABLE_HEADING_STARTPAGE', '首页显示');
define('TABLE_HEADING_STOCK', '库存状态');
define('TABLE_HEADING_SORT', '排序');
define('TABLE_HEADING_EDIT', '选取');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL', 'Products Model');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model
// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE', 'Image');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TEXT_ACTIVE_ELEMENT', '启用元件');
define('TEXT_INFORMATIONS', '信息');
define('TEXT_MARKED_ELEMENTS', '勾选的元件');
define('TEXT_INSERT_ELEMENT', '新增元件');
define('TEXT_WARN_MAIN', '<font size="-1">缺货中</font>');
define('TEXT_NEW_PRODUCT', '新商品在 &quot;%s&quot;');
define('TEXT_CATEGORIES', '分类：');
define('TEXT_PRODUCTS', '商品：');
define('TEXT_PRODUCTS_PRICE_INFO', '价格：');
define('TEXT_PRODUCTS_TAX_CLASS', '税别：');
define('TEXT_PRODUCTS_AVERAGE_RATING', '平均评等：');
define('TEXT_PRODUCTS_QUANTITY_INFO', '数量：');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', '折扣设置：');
define('TEXT_DATE_ADDED', '新增日期：');
define('TEXT_DATE_AVAILABLE', '上架日期：');
define('TEXT_LAST_MODIFIED', '最后修改日期：');
define('TEXT_IMAGE_NONEXISTENT', '没有图片');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '请新增一个分类或商品 <br />&nbsp;<br /><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', '更多完整信息,请到商品 <a href="http://%s" target="blank"><u>网页</u></a>');
define('TEXT_PRODUCT_DATE_ADDED', '此商品加入分类日期： %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '此商品预定入库日期： %s.');
define('TEXT_EDIT_INTRO', '请做适当修改');
define('TEXT_EDIT_CATEGORIES_ID', '分类编号：');
define('TEXT_EDIT_CATEGORIES_NAME', '分类名称：');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', '摘要：');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', '分类说明：');
define('TEXT_EDIT_CATEGORIES_IMAGE', '分类图片：');
define('TEXT_EDIT_SORT_ORDER', '排序顺序：');
define('TEXT_INFO_COPY_TO_INTRO', '请选择一个你想将所指定的元件复制到的分类位置 ');
define('TEXT_INFO_CURRENT_CATEGORIES', '目前的分类：');
define('TEXT_INFO_HEADING_NEW_CATEGORY', '新增分类');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '编辑分类');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '删除分类');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '搬移分类');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '删除商品');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '新增商品');
define('TEXT_INFO_HEADING_COPY_TO', '复制到');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', '搬移元件');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', '删除元件');
define('TEXT_DELETE_CATEGORY_INTRO', '确定要删除这个分类？');
define('TEXT_DELETE_PRODUCT_INTRO', '确定要永久删除这个商品？');
define('TEXT_DELETE_WARNING_CHILDS', '<b>注意：</b> 这个分类内尚有 %s 个子分类！');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>注意：</b> 这个分类内尚有 %s 个商品！');
define('TEXT_MOVE_WARNING_CHILDS', '<b>请注意：</b> 目前仍有 %s 个「子分类」连结到此分类！');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>请注意：</b> 目前仍有 %s 个商品连结到此分类！');
define('TEXT_MOVE_PRODUCTS_INTRO', '请选择一个要放 <b>%s</b> 的商品分类');
define('TEXT_MOVE_CATEGORIES_INTRO', '请选择一个要放 <b>%s</b> 的商品分类');
define('TEXT_MOVE', '搬移<b>%s</b>到：');
define('TEXT_MOVE_ALL', '搬移全部资料至：');
define('TEXT_NEW_CATEGORY_INTRO', '<br />请填写下列新分类资料');
define('TEXT_CATEGORIES_NAME', '分类名称：');
define('TEXT_CATEGORIES_IMAGE', '分类图片：');
define('TEXT_META_TITLE', 'Meta 标头:');
define('TEXT_META_DESCRIPTION', 'Meta 说明:');
define('TEXT_META_KEYWORDS', 'Meta 关键字:');
define('TEXT_SORT_ORDER', '排序：');
define('TEXT_PRODUCTS_STATUS', '产品状态：');
define('TEXT_PRODUCTS_STARTPAGE', '显示在首页');
define('TEXT_PRODUCTS_STARTPAGE_YES', '是');
define('TEXT_PRODUCTS_STARTPAGE_NO', '否');
define('TEXT_PRODUCTS_STARTPAGE_SORT', '首页排序：');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '上架日期：');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', '上架');
define('TEXT_PRODUCT_NOT_AVAILABLE', '下架');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', '（请选择）商品厂商：');
define('TEXT_PRODUCTS_NAME', '品名：');
define('TEXT_PRODUCTS_DESCRIPTION', '商品说明：');
define('TEXT_PRODUCTS_QUANTITY', '商品存量：');
define('TEXT_PRODUCTS_MODEL', '商品型号：');
define('TEXT_PRODUCTS_IMAGE', '商品图片：');
define('TEXT_PRODUCTS_URL', '商品厂商网址：');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(without http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Products Price:');
define('TEXT_PRODUCTS_WEIGHT', 'Products Weight:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(不用打 http://)</small>');
define('TEXT_PRODUCTS_PRICE', '商品价格：');
define('TEXT_PRODUCTS_WEIGHT', '重量：');
define('TEXT_PRODUCTS_EAN', '条码/EAN');
define('TEXT_PRODUCT_LINKED_TO', '连结至:');
define('TEXT_DELETE', '删除');
define('EMPTY_CATEGORY', '目前的分类是空的');
define('TEXT_HOW_TO_COPY', '复制方式：');
define('TEXT_COPY_AS_LINK', '仅复制源元件的连结');
define('TEXT_COPY_AS_DUPLICATE', '复制成新的元件');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '错误：不能在同一个分类内作连结 ！');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '错误：分类图片资料夹无法写入（权限错误）：' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '错误：分类图片的资料夹不存在： ' . DIR_FS_CATALOG_IMAGES);
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED', '允许折扣：');
define('HEADING_PRICES_OPTIONS', '<b>价格设置</b>');
define('HEADING_PRODUCT_IMAGES', '<b>产品图片</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO', '<small>公斤(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION', '简短说明：');
define('TEXT_PRODUCTS_KEYWORDS', '搜寻使用的关键字:');
define('TXT_STK', '购买：');
define('TXT_PRICE', '每一个：');
define('TXT_NETTO', '网络售价：');
define('TXT_STAFFELPREIS', '分级价格');
define('HEADING_PRODUCTS_MEDIA', '<b>商品媒体</b>');
define('TABLE_HEADING_PRICE', '价格');
define('TEXT_FSK18', '未成年禁止购买：');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE', '分类列表样板');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING', '商品列表样板');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Sorting:');
define('TEXT_PRODUCTS_SORT', '排列顺序：');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER', '商品排序');
define('TXT_PRICES', '价格');
define('TXT_NAME', '品名');
define('TXT_ORDERED', '销售量');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT', 'Sorting');
define('TXT_SORT', '排序');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT', '重量');
define('TXT_QTY', '库存量');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE', 'Release date');
define('TXT_MODEL', 'Products Model');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TEXT_MULTICOPY', '多重复制');
define('TEXT_MULTICOPY_DESC', '复制 / 指定的元件至多个分类位置（如果有勾选核取方块，单一复制的设定将不予理会）');
define('TEXT_SINGLECOPY', '单一复制');
define('TEXT_SINGLECOPY_DESC', '复制 / 指定的元件至单一分类位置');
define('TEXT_SINGLECOPY_CATEGORY', '分类：');
define('TEXT_PRODUCTS_VPE', '(请选择)内含收费单位');
define('TEXT_PRODUCTS_VPE_VISIBLE', '显示内含收费');
define('TEXT_PRODUCTS_VPE_VALUE', ' 价格：');
define('CROSS_SELLING', '相关商品贩售');
define('CROSS_SELLING_SEARCH', '搜寻产品：');
define('BUTTON_EDIT_CROSS_SELLING', '相关贩售');
define('HEADING_DEL', '删除');
define('HEADING_ADD', '新增?');
define('HEADING_GROUP', '群组');
define('HEADING_SORTING', '排序');
define('HEADING_MODEL', '型号');
define('HEADING_NAME', '商品');
define('HEADING_CATEGORY', '类别');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_SORT_ASC', 'ascending');
define('TEXT_SORT_DESC', 'descending');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS', 'characters');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

?>