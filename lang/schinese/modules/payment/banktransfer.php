<?php
/* --------------------------------------------------------------
   $Id: banktransfer.php 42 2007-01-02 08:16:29Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banktransfer.php,v 1.9 2003/02/18 19:22:15); www.oscommerce.com 
   (c) 2003	 nextcommerce (banktransfer.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   OSC German Banktransfer v0.85a       	Autor:	Dominik Guder <osc@guder.org>
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
  define('MODULE_PAYMENT_TYPE_PERMISSION', 'bt');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', '银行转帐');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', '银行转帐付款');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO','');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', '银行转帐');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', '注意： 您可以从连结下载我们的传真确认表单 ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE . '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', '请注意，银行转帐只能用在同一个国家中！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', '户名：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', '帐号尾5码：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', '银行代码：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', '银行名称：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', '银行转帐与经由传真的方式来确认付款');

  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', '<font color="#FF0000">FEHLER: </font>');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', '帐号与银行代码不一致！<br />请重新输入');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', '抱歉，我们无法验证这个帐号！');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', '帐号无法通过验证！');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', '帐号无法通过验证！<br />请重新输入');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', '银行代码不存在！<br />请重新输入');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', '您的银行代码不符或是没有输入！');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', '没有输入帐号！');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', '没有该笔帐户!');

  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', '注意：');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', '如果您不希望通过网络<br />传送帐号信息，您可以通过');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', '传真表单');
  define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', '提供给我们。');

  define('JS_BANK_BLZ', '请输入银行代号或名称！\n');
  define('JS_BANK_NAME', '请输入银行名称！\n');
  define('JS_BANK_NUMBER', '请输入您的帐号尾5码！\n');
  define('JS_BANK_OWNER', '请输入户名！\n');


  define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', '使用资料库查验银行代码？');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', '您是否希望通过资料库查验银行代码？请确认资料表 banktransfer_blz 存在且设置完成！');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', '传真文件');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', '传真确认表文件应该要放在网站根目录中');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', '使用传真确认');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', '您是否要使用传真确认');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', '使用银行转帐付款');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', '您是否接受银行转帐付款？');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', '订单金额下限');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', '要使用这种付款方式，单笔订单金额的下限');

define('MODULE_PAYMENT_BANKTRANSFER_COST_TITLE',_MODULES_PAYMENT_FEE_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_COST_DESC',_MODULES_PAYMENT_FEE_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
?>
