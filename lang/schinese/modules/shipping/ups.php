<?php
/* --------------------------------------------------------------
   $Id: ups.php 49 2007-01-03 15:28:31Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(UPS.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (UPS.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'UPS 国际包裹(标准)');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'UPS 国际包裹(标准) - 运送机制');
define('MODULE_SHIPPING_UPS_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_UPS_TEXT_FREE', '订单金额达 ' . MODULE_SHIPPING_UPS_FREEAMOUNT . ' 我们将优惠免除您这笔订单的运送费用!');
define('MODULE_SHIPPING_UPS_TEXT_LOW', '订单金额达 ' . MODULE_SHIPPING_UPS_FREEAMOUNT . ' 我们将帮您部份负担这笔订单的运送费用!');


define('MODULE_SHIPPING_UPS_STATUS_TITLE' , '启用 UPS 国际包裹(标准)');
define('MODULE_SHIPPING_UPS_STATUS_DESC' , '你同意要启用 UPS 国际包裹(标准)运送机制吗?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE' , '处理费');
define('MODULE_SHIPPING_UPS_HANDLING_DESC' , '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE' , '购物满额免运费或折扣');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC' , '当订单的金额达到一定的额度，就给予免运费或运费折扣优惠。');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE' , '运送区域(国家)(1)');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_1_TITLE' , '在区域(1)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_1_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE' , '在区域(3)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_2_TITLE' , '在区域(3)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_2_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE' , '在区域(31)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_3_TITLE' , '在区域(31)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_3_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE' , '在区域(4)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_4_TITLE' , '在区域(4)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_4_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE' , '在区域(41)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_5_TITLE' , '在区域(41)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_5_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE' , '在区域(5)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_6_TITLE' , '在区域(5)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_6_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE' , '在区域(6)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPS_COST_7_TITLE' , '在区域(6)的 UPS 运送费率');
define('MODULE_SHIPPING_UPS_COST_7_DESC' , '对于寄到目的地的费率表(依重量计算)，例如: 运送 0-4 公斤(kg) 的货品需要 5,15 欧元运费 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_UPS_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_UPS_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_UPS_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_UPS_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>
