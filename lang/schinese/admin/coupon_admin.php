<?php
/* --------------------------------------------------------------
   $Id: coupon_admin.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(coupon_admin.php,v 1.1.2.5 2003/05/13); www.oscommerce.com
   
   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('TOP_BAR_TITLE', '统计');
define('HEADING_TITLE', '折价券管理');
define('HEADING_TITLE_STATUS', '状态：');
define('TEXT_CUSTOMER', '客户：');
define('TEXT_COUPON', '折价券名称');
define('TEXT_COUPON_ALL', '全部折价券');
define('TEXT_COUPON_ACTIVE', '有效的折价券');
define('TEXT_COUPON_INACTIVE', '无效的折价券');
define('TEXT_SUBJECT', '主题：');
define('TEXT_FROM', '从：');
define('TEXT_FREE_SHIPPING', '免运费');
define('TEXT_MESSAGE', '信息：');
define('TEXT_SELECT_CUSTOMER', '选择客户');
define('TEXT_ALL_CUSTOMERS', '所有客户');
define('TEXT_NEWSLETTER_CUSTOMERS', '订阅电子报的客户');
define('TEXT_CONFIRM_DELETE', '您确定要删除这个折价券？');

define('TEXT_TO_REDEEM', '您可以在结帐时填入兑换码，按下「兑换钮」来兑换这个折价券');
define('TEXT_IN_CASE', ' 有任何疑问');
define('TEXT_VOUCHER_IS', '折价券兑换码是 ');
define('TEXT_REMEMBER', '请妥善保存折价券兑换码，如此才能享受折价券的优惠');
define('TEXT_VISIT', '当您莅临 ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' 输入折价券兑换码');

define('TABLE_HEADING_ACTION', '动作');

define('CUSTOMER_ID', '客户 ID');
define('CUSTOMER_NAME', '客户名称');
define('REDEEM_DATE', '兑换日期');
define('IP_ADDRESS', 'IP 地址');

define('TEXT_REDEMPTIONS', '兑换');
define('TEXT_REDEMPTIONS_TOTAL', '总计');
define('TEXT_REDEMPTIONS_CUSTOMER', '兑换客户');
define('TEXT_NO_FREE_SHIPPING', '没有免运费');

define('NOTICE_EMAIL_SENT_TO', '说明：寄送电子邮件给: %s');
define('ERROR_NO_CUSTOMER_SELECTED', '错误: 没有选择客户名称');
define('COUPON_NAME', '折价券名称');
//define('COUPON_VALUE', '折价券价值');
define('COUPON_AMOUNT', '折价券金额');
define('COUPON_CODE', '折价券码');
define('COUPON_STARTDATE', '开始日期');
define('COUPON_FINISHDATE', '结束日期');
define('COUPON_FREE_SHIP', '免运费');
define('COUPON_DESC', '折价券说明');
define('COUPON_MIN_ORDER', '使用折价券最低订购金额');
define('COUPON_USES_COUPON', '每一个折价券的使用次数');
define('COUPON_USES_USER', '每一个客户的使用折价券次数');
define('COUPON_PRODUCTS', '指定商品');
define('COUPON_CATEGORIES', '指定商品种类');
define('VOUCHER_NUMBER_USED', '使用次数');
define('DATE_CREATED', '建置日期');
define('DATE_MODIFIED', '修改日期');
define('TEXT_HEADING_NEW_COUPON', '新增折价券');
define('TEXT_NEW_INTRO', '请填入下列折价券信息<br />');


define('COUPON_NAME_HELP', '折价券名称');
define('COUPON_AMOUNT_HELP', '这个值是给此折价券的折扣，可以填入一个固定值，或是直接输入折扣数，例如：<b>20%</b>.');
define('COUPON_CODE_HELP', '你可以自建一个兑换码或是留空白，系统会自动产生一组兑换码');
define('COUPON_STARTDATE_HELP', '起始日期');
define('COUPON_FINISHDATE_HELP', '结束日期');
define('COUPON_FREE_SHIP_HELP', '折价券订单免运费（提示：这个数值会凌驾于「折价券总计模组」之上 但仍受限于「最低购物金额」）');
define('COUPON_DESC_HELP', '给消费者关于这个折价券的说明');
define('COUPON_MIN_ORDER_HELP', '能够使用折价券之最低购物金额');
define('COUPON_USES_COUPON_HELP', '折价券最多使用次数留空白表示没限制');
define('COUPON_USES_USER_HELP', '每一个使用者可以使用此折价券的次数，留空白表示没限制');
define('COUPON_PRODUCTS_HELP', '多项商品共用此一折价卷时，使用逗号分开每一个商品 ID，留空白表示没限制');
define('COUPON_CATEGORIES_HELP', '多个种类共用此一折价卷时，使用逗号分开每一个商品目录 ID，留空白表示没限制');
?>