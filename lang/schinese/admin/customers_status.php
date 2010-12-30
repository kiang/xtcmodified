<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
define('HEADING_TITLE', '会员群组设置');
define('ENTRY_CUSTOMERS_FSK18', '启用未成年禁止购买机制?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', '显示未成年禁止购买商品?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', '订单总计显示税额');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', '订单金额下限：');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', '订单金额上限：');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', '经由银行转帐');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', '经由信用卡支付');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', '现金交易');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', '折扣');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', '输入禁止使用之付款方式');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', '公开');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', '输入禁止使用之出货方式');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', '价格');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', '含税价');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', '这个客户群组可以撰写商品评论？');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', '这个客户群组可以阅读商品评论？');
define('ENTRY_GRADUATED_PRICES', '累进价格');
define('ENTRY_NO', '否');
define('ENTRY_OT_XMEMBER', '购物总金额折扣 ? :');
define('ENTRY_YES', '是');
define('ERROR_REMOVE_DEFAULT_CUSTOMER_STATUS', '注意: 无法删除系统预设会员群组. 请先设置其他会员群组为预设后再尝试一次.');
define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', '注意! 无法删除系统预设会员群组');
define('ERROR_STATUS_USED_IN_CUSTOMERS', '注意: 这个会员群组仍有会员使用.');
define('ERROR_STATUS_USED_IN_HISTORY', '注意: 这个会员群组仍有会员的历史订单纪录.');
define('TABLE_HEADING_ACTION', '动作');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', '累进价格');
define('TABLE_HEADING_CUSTOMERS_STATUS', '会员群组');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', '禁止的付款方式');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', '禁止的出货方式');
define('TABLE_HEADING_DISCOUNT', '折扣');
define('TABLE_HEADING_TAX_PRICE', '价格/税');
define('TAX_NO', '未税');
define('TAX_YES', '含税');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', '目前的会员群组:');
define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<b>显示未成年购买之商品</b>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<b>禁止未成年购买商品</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<b>如果价格含税设置为"否"</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '定义订单金额下限或是保留空白');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '定义订单金额上限或是保留空白');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<b>是否要允许这个群组的客户经由银行转帐？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<b>是否要允许这个群组的客户经由信用卡付款？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<b>是否要允许这个群组的客户现金交易？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<b>套用商品属性折扣:</b><br />(Max. % 单一商品折扣)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<b>购物总金额折扣:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', '设置折扣 (0 至 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<b>设置折扣:</b><br />在 0 与 100% 之间.这个折扣将套用在商品属性');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<b>累进价格</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '会员群组图片:');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<b>会员群组名称:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<b>禁止使用的付款方式:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<b>公开显示折扣?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<b>禁止使用的出货方式:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<b>商店显示商品价格:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<b>显示价格含税?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<b>撰写产品评论</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<b>阅读产品评论</b>');
define('TEXT_INFO_DELETE_INTRO', '确定删除此会员群组?');
define('TEXT_INFO_EDIT_INTRO', '请作适当修改');
define('TEXT_INFO_INSERT_INTRO', '新增一个会员群组并填入下列信息.');
define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', '删除会员群组');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', '编辑会员群组');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', '新增会员群组');
define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<b>会员群组的商品定价准则</b>');
define('ENTRY_CUSTOMERS_STATUS_BASE', '为新会员的群组标价方式选择一个准则，注意!如果你选择了 Admin 管理员群组就没法适用定价准则了.');
?>