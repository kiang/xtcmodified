<?php
/* -----------------------------------------------------------------------------------------
   $Id: dhl.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dhl.php,v 1.02 2003/02/18 03:37:00); www.oscommerce.com
   (c) 2003	 nextcommerce (dhl.php,v 1.4 2003/08/13); www.nextcommerce.org 

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   dhl_austria_1.02       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_SHIPPING_DHL_TEXT_TITLE', 'DHL 奧地利');
define('MODULE_SHIPPING_DHL_TEXT_DESCRIPTION', 'DHL 全球快捷(奧地利)');
define('MODULE_SHIPPING_DHL_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_DHL_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_DHL_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_DHL_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_DHL_STATUS_TITLE', '啟用 DHL 全球快捷(奧地利)');
define('MODULE_SHIPPING_DHL_STATUS_DESC', '你同意啟用 DHL 全球快捷(奧地利)運送機制嗎?');
define('MODULE_SHIPPING_DHL_HANDLING_TITLE', '處理費');
define('MODULE_SHIPPING_DHL_HANDLING_DESC', '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_DHL_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_DHL_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_DHL_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_DHL_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_DHL_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_DHL_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_DHL_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_DHL_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_DHL_COUNTRIES_1_TITLE', '運送區域(0)');
define('MODULE_SHIPPING_DHL_COUNTRIES_1_DESC', '國內地區');
define('MODULE_SHIPPING_DHL_COST_ECX_1_TITLE', '區域(0)的 ECX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_ECX_1_DESC', '在區域(0)的運送費率設定中，<b>\'ECX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_MDX_1_TITLE', '區域(0)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_1_DESC', '在區域(0)的運送費率設定中，<b>\'MDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_SDX_1_TITLE', '區域(0)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_1_DESC', '在區域(0)的運送費率設定中，<b>\'SDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_1_TITLE', '高達 20 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_1_TITLE', '高達 30 公斤(kg)貨物的額外運送費率  ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_1_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_1_TITLE', '從 50 公斤起算的貨物額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_1_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_1_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_1_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_1_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_1_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_1_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_1_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_1_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_1_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_2_TITLE', '運送區域(國家)(1)');
define('MODULE_SHIPPING_DHL_COUNTRIES_2_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_ECX_2_TITLE', '區域(1)的 ECX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_ECX_2_DESC', '在區域(1)的運送費率設定中，<b>\'ECX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_MDX_2_TITLE', '區域(1)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_2_DESC', '在區域(1)的運送費率設定中，<b>\'MDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_SDX_2_TITLE', '區域(1)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_2_DESC', '在區域(1)的運送費率設定中，<b>\'SDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_2_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_2_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_2_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_2_TITLE', '從 50 公斤起算的貨物額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_2_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_2_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_2_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_2_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_2_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_2_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_2_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_2_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_2_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_3_TITLE', '運送區域(國家)(2)');
define('MODULE_SHIPPING_DHL_COUNTRIES_3_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_ECX_3_TITLE', '區域(2)的 ECX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_ECX_3_DESC', '在區域(2)的運送費率設定中，<b>\'ECX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_MDX_3_TITLE', '區域(2)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_3_DESC', '在區域(2)的運送費率設定中，<b>\'MDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_SDX_3_TITLE', '區域(2)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_3_DESC', '在區域(2)的運送費率設定中，<b>\'SDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_3_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_20_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_3_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_30_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_3_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_50_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_3_TITLE', '從 50 公斤起算的貨物額外運送費率 ECX');
define('MODULE_SHIPPING_DHL_STEP_ECX_51_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_3_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_3_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_3_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_3_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_3_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_3_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_3_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_3_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_3_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_4_TITLE', '運送區域(國家)(3)');
define('MODULE_SHIPPING_DHL_COUNTRIES_4_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_4_TITLE', '區域(3)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_4_DESC', '在區域(3)的運送費率設定中，<b>\'DOX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_WPX_4_TITLE', '區域(3)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_4_DESC', '在區域(3)的運送費率設定中，<b>\'WPX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_MDX_4_TITLE', '區域(3)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_4_DESC', '在區域(3)的運送費率設定中，<b>\'MDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_SDX_4_TITLE', '區域(3)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_4_DESC', '在區域(3)的運送費率設定中，<b>\'SDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_4_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_4_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_4_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_4_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_4_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_4_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_4_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_4_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_4_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_4_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_4_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_4_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_4_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_4_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_4_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_4_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_4_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_5_TITLE', '運送區域(國家)(4)');
define('MODULE_SHIPPING_DHL_COUNTRIES_5_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_5_TITLE', '區域(4)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_5_DESC', '在區域(4)的運送費率設定中，<b>\'DOX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_WPX_5_TITLE', '區域(4)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_5_DESC', '在區域(4)的運送費率設定中，<b>\'WPX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_MDX_5_TITLE', '區域(4)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_5_DESC', '在區域(4)的運送費率設定中，<b>\'MDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_COST_SDX_5_TITLE', '區域(4)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_5_DESC', '在區域(4)的運送費率設定中，<b>\'SDX\'</b> 可運送 0-10 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_5_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_5_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_5_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_5_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_5_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_5_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_5_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_5_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_5_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_5_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_5_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_5_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_5_TITLE', '高達 20 公斤(kg)的貨物額外運送費率  SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_5_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_5_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_5_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_5_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_6_TITLE', '運送區域(國家)(5)');
define('MODULE_SHIPPING_DHL_COUNTRIES_6_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_6_TITLE', '區域(5)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_6_DESC', '在區域(5)的 DOX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_WPX_6_TITLE', '區域(5)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_6_DESC', '在區域(5)的 WPX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_6_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_6_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_6_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_6_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_6_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_6_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_6_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_6_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_6_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_7_TITLE', '運送區域(國家)(6)');
define('MODULE_SHIPPING_DHL_COUNTRIES_7_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_7_TITLE', '區域(6)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_7_DESC', '在區域(6)的 DOX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_WPX_7_TITLE', '區域(6)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_7_DESC', '在區域(6)的 WPX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_7_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_7_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_7_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_7_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_7_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_7_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_7_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_7_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_7_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_8_TITLE', '運送區域(國家)(7)');
define('MODULE_SHIPPING_DHL_COUNTRIES_8_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_8_TITLE', '區域(7)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_8_DESC', '在區域(7)的 DOX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_WPX_8_TITLE', '區域(7)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_8_DESC', '在區域(7)的 WPX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_MDX_8_TITLE', '區域(7)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_8_DESC', '在區域(7)的 MDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_SDX_8_TITLE', '區域(7)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_8_DESC', '在區域(7)的 SDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_8_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_8_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_8_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_8_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_8_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_8_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_8_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_8_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_8_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_8_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_8_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_8_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_8_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_8_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_8_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_8_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_8_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_9_TITLE', '運送區域(國家)(8)');
define('MODULE_SHIPPING_DHL_COUNTRIES_9_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_9_TITLE', '區域(8)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_9_DESC', '在區域(8)的 DOX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_WPX_9_TITLE', '區域(8)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_9_DESC', '在區域(8)的 WPX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_MDX_9_TITLE', '區域(8)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_9_DESC', '在區域(8)的 MDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_SDX_9_TITLE', '區域(8)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_9_DESC', '在區域(8)的 SDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_9_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_9_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_9_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_9_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_9_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_9_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_9_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_9_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_9_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_9_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_9_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_9_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_9_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_9_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_9_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_9_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_9_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_COUNTRIES_10_TITLE', '運送區域(國家)(9)');
define('MODULE_SHIPPING_DHL_COUNTRIES_10_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_DHL_COST_DOX_10_TITLE', '區域(9)的 DOX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_DOX_10_DESC', '在區域(9)的 DOX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_WPX_10_TITLE', '區域(9)的 WPX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_WPX_10_DESC', '在區域(9)的 WPX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_MDX_10_TITLE', '區域(9)的 MDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_MDX_10_DESC', '在區域(9)的 MDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_COST_SDX_10_TITLE', '區域(9)的 SDX 運送費率 0-10 公斤(kg)');
define('MODULE_SHIPPING_DHL_COST_SDX_10_DESC', '在區域(9)的 SDX 運送費率 0-10 公斤(kg).');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_10_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_20_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_10_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_30_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_10_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_50_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_10_TITLE', '從 50 公斤起算的貨物額外運送費率 DOX');
define('MODULE_SHIPPING_DHL_STEP_DOX_51_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_10_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_20_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_10_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_30_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_10_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_50_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_10_TITLE', '從 50 公斤起算的貨物額外運送費率 WPX');
define('MODULE_SHIPPING_DHL_STEP_WPX_51_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_10_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_20_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_10_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_30_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_10_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_50_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_10_TITLE', '從 50 公斤起算的貨物額外運送費率 MDX');
define('MODULE_SHIPPING_DHL_STEP_MDX_51_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_10_TITLE', '高達 20 公斤(kg)的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_20_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_10_TITLE', '高達 30 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_30_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_10_TITLE', '高達 50 公斤(kg)貨物的額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_50_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_10_TITLE', '從 50 公斤起算的貨物額外運送費率 SDX');
define('MODULE_SHIPPING_DHL_STEP_SDX_51_10_DESC', '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
?>