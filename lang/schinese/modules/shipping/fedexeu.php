<?php
/* -----------------------------------------------------------------------------------------
   $Id: fedexeu.php 899 2005-04-29 02:40:57Z hhgag $   

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
define('MODULE_SHIPPING_FEDEXEU_TEXT_TITLE', 'FedEx 欧洲快捷');
define('MODULE_SHIPPING_FEDEXEU_TEXT_DESCRIPTION', 'FedEx 欧洲快捷');
define('MODULE_SHIPPING_FEDEXEU_TEXT_WAY', '运送至');
define('MODULE_SHIPPING_FEDEXEU_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_FEDEXEU_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_FEDEXEU_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_FEDEXEU_STATUS_TITLE', '启用 FedEx 欧洲快捷运送机制');
define('MODULE_SHIPPING_FEDEXEU_STATUS_DESC', '你同意要启用 FedEx 欧洲快捷运送机制吗?');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_FEDEXEU_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_FEDEXEU_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_TITLE', '运送区域(欧洲国家)(1)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_TITLE', '区域(1) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_DESC', '在区域(1)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_TITLE', '区域(1) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_DESC', '在区域(1)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_TITLE', '运送区域(欧洲国家)(2)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_TITLE', '区域(2) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_DESC', '在区域(2)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_TITLE', '区域(2) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_DESC', '在区域(2)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_TITLE', '运送区域(欧洲国家)(3)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_TITLE', '区域(3) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_DESC', '在区域(3)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_TITLE', '区域(3) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_DESC', '在区域(3)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_DESC', '在欧洲每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_TITLE', '运送区域(全球国家A)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_TITLE', '区域(A) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_DESC', '在区域(A)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_TITLE', '区域(A) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_DESC', '在区域(A)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_TITLE', '运送区域(全球国家B)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_TITLE', '区域(B) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_DESC', '在区域(B)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_TITLE', '区域(B) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_DESC', '在区域(B)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_TITLE', '运送区域(全球国家C)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_TITLE', '区域(C) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_DESC', '在区域(C)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_TITLE', '区域(C) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_DESC', '在区域(C)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_TITLE', '运送区域(全球国家D)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_TITLE', '区域(D) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_DESC', '在区域(D)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_TITLE', '区域(D) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_DESC', '在区域(D)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_TITLE', '高达 40 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_TITLE', '高达 70 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_TITLE', '运送区域(全球国家E)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_TITLE', '区域(E) PAK 的运送费率 2.5 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_DESC', '在区域(E)的运送费率设置中，<b>\'PAK\'</b> 可运送 2.5 公斤(kg)内的货物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_TITLE', '区域(E) BOX 的运送费率 10 公斤(kg)内');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_DESC', '在区域(E)的运送费率设置中，<b>\'BOX\'</b> 可运送达 10 公斤(kg)的货物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_TITLE', '高达 20 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_TITLE', '高达 30 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_TITLE', '高达 50 公斤(kg)货物的额外运送费率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_DESC', '每增加 0.5 公斤(kg)的额外运送费率');
?>
