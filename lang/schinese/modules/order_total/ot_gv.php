<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 1388 2010-09-29 16:50:24Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_gv.php 899 2005-04-29)

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
define('MODULE_ORDER_TOTAL_GV_TITLE', '礼券');
define('MODULE_ORDER_TOTAL_GV_HEADER', '礼券/折价券');
define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', '礼券');
//BOF - DokuMan - 2010-08-31 - constants already defined in english.php
//define('SHIPPING_NOT_INCLUDED', ' [Shipping not included]');
//define('TAX_NOT_INCLUDED', ' [Tax not included]');
//EOF - DokuMan - 2010-08-31 - constants already defined in english.php
define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', '<strong>Tick to use Gift Voucher account balance</strong>');
define('TEXT_ENTER_GV_CODE', '输入兑换编号 &nbsp;&nbsp;');
define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', '启动礼券额度总计');
define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', '启动礼券额度总计?');
define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', '显示顺序');
define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', '显示时的顺序');
define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', '购买礼券序列');
define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', '排列购买礼券序列?');
define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', '包含运费');
define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', '计算时包含运费');
define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', '包含税金');
define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', '计算时包含税金.');
define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', '税金计算方式');
define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', '选择税金计算方式');
define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', '税别');
define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', '礼券使用税别');
define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', '新增帐号礼券包含税金');
define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', '当新增帐号时礼券包含税金');
?>