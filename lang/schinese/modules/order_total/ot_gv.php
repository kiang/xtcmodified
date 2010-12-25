<?php
/* --------------------------------------------------------------
   $Id: ot_gv.php 32 2006-12-28 13:15:17Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com

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
  define('SHIPPING_NOT_INCLUDED', ' [不包含运费]');
  define('TAX_NOT_INCLUDED', ' [不包含税金]');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', '使用礼券/折价券抵扣 ->&nbsp;');
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