<?php
/* --------------------------------------------------------------
   $Id: orders.php 1573 2010-12-10 20:18:27Z web28 $   

   XT-Commerce - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce; www.oscommerce.com 
   (c) 2003      nextcommerce; www.nextcommerce.org
   (c) 2006      xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('TEXT_BANK', '银行列表');
define('TEXT_BANK_OWNER', '银行帐户：');
define('TEXT_BANK_NUMBER', '银行帐号：');
define('TEXT_BANK_BLZ', '银行代码：');
define('TEXT_BANK_NAME', '银行名称：');
define('TEXT_BANK_FAX', '传真银行授权');
define('TEXT_BANK_STATUS', '确认状态：');
define('TEXT_BANK_PRZ', '认证方式：');
define('TEXT_BANK_ERROR_1', '帐号与银行代码不符合！<br />再试试！');
define('TEXT_BANK_ERROR_2', '对不起, 我们无法验证您的帐号！');
define('TEXT_BANK_ERROR_3', '帐号没有验证! 验证方式没有生效');
define('TEXT_BANK_ERROR_4', '帐号无法通过验证!<br />再试试！');
define('TEXT_BANK_ERROR_5', '银行代码错误!<br />再试试！');
define('TEXT_BANK_ERROR_8', '银行代码不符合或是银行尚未授权！');
define('TEXT_BANK_ERROR_9', '没有授权帐号！');
define('TEXT_BANK_ERRORCODE', '错误码：');
define('HEADING_TITLE', '订单');
define('HEADING_TITLE_SEARCH', '订单序号：');
define('HEADING_TITLE_STATUS', '状态：');
define('TABLE_HEADING_COMMENTS', '意见栏');
define('TABLE_HEADING_CUSTOMERS', '客户');
define('TABLE_HEADING_ORDER_TOTAL', '订单总计');
define('TABLE_HEADING_DATE_PURCHASED', '购买日期');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '动作');
define('TABLE_HEADING_QUANTITY', '数量');
define('TABLE_HEADING_PRODUCTS_MODEL', '型号');
define('TABLE_HEADING_PRODUCTS', '品名');
define('TABLE_HEADING_TAX', '税');
define('TABLE_HEADING_TOTAL', '总计');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '价格（未税）');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '价格（含税）');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '总计（未税）');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '总计（含税）');
define('TABLE_HEADING_AFTERBUY', '交易信息(AFTER BUY)');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', '通知客户');
define('TABLE_HEADING_DATE_ADDED', '新增日期');
define('ENTRY_CUSTOMER', '客户：');
define('ENTRY_SOLD_TO', '卖给：');
define('ENTRY_TELEPHONE', '电话：');
define('ENTRY_DELIVERY_TO', '邮寄给：');
define('ENTRY_SHIP_TO', '运送给：');
define('ENTRY_SHIPPING_ADDRESS', '出货地址:');
define('ENTRY_BILLING_ADDRESS', '帐单地址:');
define('ENTRY_PAYMENT_METHOD', '付款方式：');
define('ENTRY_CREDIT_CARD_TYPE', '信用卡别：');
define('ENTRY_CREDIT_CARD_OWNER', '持卡人：');
define('ENTRY_CREDIT_CARD_NUMBER', '卡号：');
define('ENTRY_CREDIT_CARD_CVV', '安全码 (CVV))：');
define('ENTRY_CREDIT_CARD_EXPIRES', '信用卡过期：');
define('ENTRY_SUB_TOTAL', '小计:');
define('ENTRY_TAX', '税：');
define('ENTRY_SHIPPING', '购物：');
define('ENTRY_TOTAL', '总计：');
define('ENTRY_DATE_PURCHASED', '购买日期：');
define('ENTRY_STATUS', '状态：');
define('ENTRY_DATE_LAST_UPDATED', '上次更新日期：');
define('ENTRY_NOTIFY_CUSTOMER', '通知客户：');
define('ENTRY_NOTIFY_COMMENTS', '信件内含意见栏：');
define('ENTRY_PRINTABLE', '打印发票');
define('TEXT_INFO_HEADING_DELETE_ORDER', '删除订单');
define('TEXT_INFO_DELETE_INTRO', '确定要删除这笔订单？');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '回补售出之商品数量');
define('TEXT_DATE_ORDER_CREATED', '新增日期：');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '上次修改：');
define('TEXT_INFO_PAYMENT_METHOD', '付款方式：');
define('TEXT_ALL_ORDERS', '所有订单');
define('TEXT_NO_ORDER_HISTORY', '无订单纪录');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', ' 订单状态更新');
define('EMAIL_TEXT_ORDER_NUMBER', '订单编号：');
define('EMAIL_TEXT_INVOICE_URL', '发票内容：');
define('EMAIL_TEXT_DATE_ORDERED', '订单日期：');
define('EMAIL_TEXT_STATUS_UPDATE', '您的订单已更新为下列状态' . "\n\n" . '新状态是： %s' . "\n\n" . '如有任何疑问，请直接回信告诉我们' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', '您的意见如下：' . "\n\n%s\n\n");
define('ERROR_ORDER_DOES_NOT_EXIST', '错误：订单不存在');
define('SUCCESS_ORDER_UPDATED', '完成：订单已更新完成');
define('WARNING_ORDER_NOT_UPDATED', '注意： 此笔订单状态没有改变，无法更新');
define('TABLE_HEADING_DISCOUNT', '折扣');
define('ENTRY_CUSTOMERS_GROUP', '客户群组:');
define('TEXT_VALIDATING', '尚未生效');
// BOF - Tomcraft - 2010-04-22 - Added a missing language definition
define('TEXT_PRODUCTS', 'Products');
// EOF - Tomcraft - 2010-04-22 - Added a missing language definition
//BOF - web28 - 2010-03-20 - Send Order by Admin
define('COMMENT_SEND_ORDER_BY_ADMIN', 'Order confirmation is sent'); //ACHTUNG hier  keine HTML-Entities verwenden
define('BUTTON_ORDER_CONFIRMATION', 'Send confirmation');
define('SUCCESS_ORDER_SEND', 'Order confirmation sent successfully');
//EOF - web28 - 2010-03-20 - Send Order by Admin
// web28 2010-12-07 add new defines
define('ENTRY_CUSTOMERS_ADDRESS', 'Customers Address:');
define('TEXT_ORDER', 'Order:');
define('TEXT_ORDER_HISTORY', 'Order History:');
define('TEXT_ORDER_STATUS', 'Order Status:');
?>