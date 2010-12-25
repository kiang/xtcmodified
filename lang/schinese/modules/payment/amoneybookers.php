<?php

/* -----------------------------------------------------------------------------------------
   $Id: amoneybookers.php 2007-01-02 14:38:44Y SUN $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneybookers.php,v 1.01 2003/01/20); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   Moneybookers v1.0                       Autor:    Gabor Mate  <gabor(at)jamaga.hu>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', '通过Moneybookers安全付款');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Moneybookers<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">帮助/解释</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', '您没有安装Moneybookers接受的货币！');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO', '');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=An error occurred during the payment through Moneybookers!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', '申请日期： ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', '付款错误!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', '感谢您的付款指令！');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', '您在Moneybookers的付款失败了。请再次尝试或选择另外一种付款方式！');


define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100%安全</b>    一切通过Moneybookers的交易都通过最先进的保安技术加密');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100%信息保护</b> - 您的个人信息将会被存储在Moneybookers并且不会被转发给联机商店');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>方便</b>    一旦您拥有了一个Moneybookers账户您只需要电子邮件地址和密码既可以进行一切未来交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>全球流通</b>    Moneybookers在超过2，500个联机商店中有效');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Moneybookers接受以下付款方式:');

define('MB_TEXT_MBDATE', '最后更新：');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', '状态：');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', '订单状态 - 完成交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', '订单状态 - 处理中');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', '订单状态 - 取消交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Icons 图标');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');


define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', '启用Moneybookers');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', '您希望通过Moneybookers接受汇款吗？<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">帮助/解释</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'Moneybookers电子邮件地址');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', '您在Moneybookers注册的电子邮件地址<br /><font color="ff0000">*必须提供</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Moneybookers保密词');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', '该保密词可以在您的Moneybookers帐户信息中找到（这不是您的密码！）');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', '商人账号');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', '您在Moneybookers账户中的商人账号<br /><font color="ff0000">*必须提供</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', '交易语言');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', '如果该用户的语言不在Moneybookers支持范围内，该语言将会被作为付款用语言');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', '交易货币');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', '如果用户的货币不在Moneybookers支持的范围之内，该货币将会被作为付款货币');

define('MODULE_PAYMENT_AMONEYBOOKERS_COST_TITLE',_MODULES_PAYMENT_FEE_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_COST_DESC',_MODULES_PAYMENT_FEE_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC' ,_MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
?>