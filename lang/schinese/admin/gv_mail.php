<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_mail.php 1502 2010-11-16 18:13:52Z dokuman $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_mail.php,v 1.5.2.2 2003/04/27); www.oscommerce.com

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
define('HEADING_TITLE', '邮寄礼券给客户');
define('TEXT_CUSTOMER', '客户：');
define('TEXT_SUBJECT', '摘要：');
define('TEXT_FROM', '从：');
define('TEXT_TO', '邮寄给：');
define('TEXT_AMOUNT', '礼券面额');
define('TEXT_MESSAGE', '信息：');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">使用此栏位寄给单一特定客户，否则请使用上方下拉式菜单选择邮寄对象</span>');
define('TEXT_SELECT_CUSTOMER', '选择客户');
define('TEXT_ALL_CUSTOMERS', '所有客户');
define('TEXT_NEWSLETTER_CUSTOMERS', '所有订阅电子报客户');
define('NOTICE_EMAIL_SENT_TO', '备注：电子邮件寄给： %s');
define('ERROR_NO_CUSTOMER_SELECTED', '错误：没有选择客户');
define('ERROR_NO_AMOUNT_SELECTED', '错误: 礼券面额栏位未填');
define('TEXT_GV_WORTH', '礼券面额价值');
define('TEXT_TO_REDEEM', '兑换此礼券-请按下连结--输入正确的兑换码--');
define('TEXT_WHICH_IS', ' 哪一些是');
define('TEXT_IN_CASE', ' 有任何疑问');
define('TEXT_OR_VISIT', '或莅临');
define('TEXT_ENTER_CODE', ' 结帐时输入正确的兑换码');
define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', '您最近有从我们的联机商店购买一份礼券，为了安全起见没有立即帮您建立这份礼券，商店目前已经释出这份礼券。');
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . '礼券的价值是 %s');
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . '您现在可以莅临我们的商店，可以在登入后将此礼券寄给您的亲友。');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
?>