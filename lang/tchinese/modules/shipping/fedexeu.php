<?php
/* --------------------------------------------------------------
   $Id: fedexeu.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( fedexeu.php,v 1.01 2003/02/18 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (fedexeu.php,v 1.5 2003/08/1); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   fedex_europe_1.02        	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/



define('MODULE_SHIPPING_FEDEXEU_TEXT_TITLE', 'FedEx 歐洲快捷');
define('MODULE_SHIPPING_FEDEXEU_TEXT_DESCRIPTION', 'FedEx 歐洲快捷');
define('MODULE_SHIPPING_FEDEXEU_TEXT_WAY', '運送至');
define('MODULE_SHIPPING_FEDEXEU_TEXT_UNITS', '公斤(kg)');


define('MODULE_SHIPPING_FEDEXEU_STATUS_TITLE' , '啟用 FedEx 歐洲快捷運送機制');
define('MODULE_SHIPPING_FEDEXEU_STATUS_DESC' , '你同意要啟用 FedEx 歐洲快捷運送機制嗎?');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_TITLE' , '處理費');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_DESC' , '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_TITLE' , '運送區域(歐洲國家)(1)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_TITLE' , '區域(1) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_DESC' , '在區域(1)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_TITLE' , '區域(1) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_DESC' , '在區域(1)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_TITLE' , '運送區域(歐洲國家)(2)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_TITLE' , '區域(2) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_DESC' , '在區域(2)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_TITLE' , '區域(2) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_DESC' , '在區域(2)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_TITLE' , '運送區域(歐洲國家)(3)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_TITLE' , '區域(3) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_DESC' , '在區域(3)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_TITLE' , '區域(3) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_DESC' , '在區域(3)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_DESC' , '在歐洲每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_TITLE' , '運送區域(全球國家A)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_TITLE' , '區域(A) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_DESC' , '在區域(A)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_TITLE' , '區域(A) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_DESC' , '在區域(A)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_TITLE' , '運送區域(全球國家B)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_TITLE' , '區域(B) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_DESC' , '在區域(B)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_TITLE' , '區域(B) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_DESC' , '在區域(B)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_TITLE' , '運送區域(全球國家C)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_TITLE' , '區域(C) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_DESC' , '在區域(C)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_TITLE' , '區域(C) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_DESC' , '在區域(C)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_TITLE' , '運送區域(全球國家D)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_TITLE' , '區域(D) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_DESC' , '在區域(D)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_TITLE' , '區域(D) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_DESC' , '在區域(D)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_TITLE' , '高達 40 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_TITLE' , '高達 70 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_TITLE' , '運送區域(全球國家E)');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_TITLE' , '區域(E) PAK 的運送費率 2.5 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_DESC' , '在區域(E)的運送費率設定中，<b>\'PAK\'</b> 可運送 2.5 公斤(kg)內的貨物.');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_TITLE' , '區域(E) BOX 的運送費率 10 公斤(kg)內');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_DESC' , '在區域(E)的運送費率設定中，<b>\'BOX\'</b> 可運送達 10 公斤(kg)的貨物.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_TITLE' , '高達 20 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_TITLE' , '高達 30 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_TITLE' , '高達 50 公斤(kg)貨物的額外運送費率');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_DESC' , '每增加 0.5 公斤(kg)的額外運送費率');

define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_FEDEXEU_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_FEDEXEU_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_FEDEXEU_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_FEDEXEU_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>
