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

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', '通過Moneybookers安全付款');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Moneybookers<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">幫助/解釋</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', '您沒有安裝Moneybookers接受的貨幣！');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO', '');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=An error occurred during the payment through Moneybookers!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', '申請日期： ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', '付款錯誤!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', '感謝您的付款指令！');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', '您在Moneybookers的付款失敗了。請再次嘗試或選擇另外一種付款方式！');


define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100%安全</b> – 一切通過Moneybookers的交易都透過最先進的保安技術加密');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100%訊息保護</b> - 您的個人訊息將會被存儲在Moneybookers並且不會被轉發給在線商店');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>方便</b> – 一旦您擁有了一個Moneybookers帳戶您只需要電子郵件地址和密碼既可以進行一切未來交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>全球流通</b> – Moneybookers在超過2，500個在線商店中有效');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Moneybookers接受以下付款方式:');

define('MB_TEXT_MBDATE', '最後更新：');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', '狀態：');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', '訂單狀態 - 完成交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', '訂單狀態 - 處理中');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', '訂單狀態 - 取消交易');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Icons 圖示');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');


define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', '啟用Moneybookers');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', '您希望通過Moneybookers接受匯款嗎？<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">幫助/解釋</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'Moneybookers電子郵件地址');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', '您在Moneybookers註冊的電子郵件地址<br /><font color="ff0000">*必須提供</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Moneybookers保密詞');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', '該保密詞可以在您的Moneybookers帳戶信息中找到（這不是您的密碼！）');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', '商人帳號');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', '您在Moneybookers帳戶中的商人帳號<br /><font color="ff0000">*必須提供</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', '交易語言');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', '如果該用戶的語言不在Moneybookers支持範圍內，該語言將會被作為付款用語言');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', '交易貨幣');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', '如果用戶的貨幣不在Moneybookers支持的範圍之內，該貨幣將會被作為付款貨幣');

define('MODULE_PAYMENT_AMONEYBOOKERS_COST_TITLE',_MODULES_PAYMENT_FEE_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_COST_DESC',_MODULES_PAYMENT_FEE_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC' ,_MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
?>