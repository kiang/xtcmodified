<?php
/* -----------------------------------------------------------------------------------------
   $Id: UPS.php,v 1.1 2003/09/06 21:54:34 fanta2k Exp $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( fedexeu.php,v 1.01 2003/02/18 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (fedexeu.php,v 1.5 2003/08/1); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   fedex_europe_1.02        	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_SHIPPING_UPSE_TEXT_TITLE', 'UPS 国际包裹(快捷)');
define('MODULE_SHIPPING_UPSE_TEXT_DESCRIPTION', 'UPS 国际包裹(快捷) - 运送机制');
define('MODULE_SHIPPING_UPSE_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_UPSE_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_UPSE_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_UPSE_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_UPSE_STATUS_TITLE', '启用 UPS 快捷');
define('MODULE_SHIPPING_UPSE_STATUS_DESC', '你同意启用 UPS 国际包裹(快捷)吗?');
define('MODULE_SHIPPING_UPSE_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_UPSE_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_UPSE_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_UPSE_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_UPSE_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_UPSE_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_UPSE_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_UPSE_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_UPSE_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_UPSE_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
/* UPS Express

*/
define('MODULE_SHIPPING_UPSE_COUNTRIES_1_TITLE', 'UPS快捷区域(国家)(1)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_1_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_1_TITLE', '在区域(1)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_1_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_2_TITLE', 'UPS快捷区域(国家)(2)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_2_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_2_TITLE', '在区域(2)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_2_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_3_TITLE', 'UPS快捷区域(国家)(3)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_3_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_3_TITLE', '在区域(3)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_3_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_4_TITLE', 'UPS快捷区域(国家)(4)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_4_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_4_TITLE', '在区域(4)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_4_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_5_TITLE', 'UPS快捷区域(国家)(5)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_5_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_5_TITLE', '在区域(5)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_5_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_6_TITLE', 'UPS快捷区域(国家)(6)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_6_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_6_TITLE', '在区域(6)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_6_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_7_TITLE', 'UPS快捷区域(国家)(7)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_7_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_7_TITLE', '在区域(7)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_7_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_8_TITLE', 'UPS快捷区域(国家)(8)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_8_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_8_TITLE', '在区域(8)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_8_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_9_TITLE', 'UPS快捷区域(国家)(9)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_9_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_9_TITLE', '在区域(9)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_9_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_10_TITLE', 'UPS快捷区域(国家)(10)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_10_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_10_TITLE', '在区域(10)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_10_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_11_TITLE', 'UPS快捷区域(国家)(11)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_11_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_11_TITLE', '在区域(11)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_11_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_12_TITLE', 'UPS快捷区域(国家)(12)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_12_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_12_TITLE', '在区域(12)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_12_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_13_TITLE', 'UPS快捷区域(国家)(13)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_13_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_13_TITLE', '在区域(13)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_13_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
define('MODULE_SHIPPING_UPSE_COUNTRIES_14_TITLE', 'UPS快捷区域(国家)(14)');
define('MODULE_SHIPPING_UPSE_COUNTRIES_14_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码:');
define('MODULE_SHIPPING_UPSE_COST_14_TITLE', '在区域(14)的 UPS 快捷运送费率');
define('MODULE_SHIPPING_UPSE_COST_14_DESC', '对于寄到目的地的费率表(依重量计算)，例如: 0-3:8.50,3-7:10.50,... 运送 0-3 公斤范围内的货品需要 8.50 元.');
?>