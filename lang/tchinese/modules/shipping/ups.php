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


define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'UPS 國際包裹(標準)');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'UPS 國際包裹(標準) - 運送機制');
define('MODULE_SHIPPING_UPS_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_UPS_TEXT_FREE', '訂單金額達 ' . MODULE_SHIPPING_UPS_FREEAMOUNT . ' 我們將優惠免除您這筆訂單的運送費用!');
define('MODULE_SHIPPING_UPS_TEXT_LOW', '訂單金額達 ' . MODULE_SHIPPING_UPS_FREEAMOUNT . ' 我們將幫您部份負擔這筆訂單的運送費用!');


define('MODULE_SHIPPING_UPS_STATUS_TITLE' , '啟用 UPS 國際包裹(標準)');
define('MODULE_SHIPPING_UPS_STATUS_DESC' , '你同意要啟用 UPS 國際包裹(標準)運送機制嗎?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE' , '處理費');
define('MODULE_SHIPPING_UPS_HANDLING_DESC' , '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE' , '購物滿額免運費或折扣');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC' , '當訂單的金額達到一定的額度，就給予免運費或運費折扣優惠。');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE' , '運送區域(國家)(1)');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_1_TITLE' , '在區域(1)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_1_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE' , '在區域(3)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_2_TITLE' , '在區域(3)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_2_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE' , '在區域(31)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_3_TITLE' , '在區域(31)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_3_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE' , '在區域(4)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_4_TITLE' , '在區域(4)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_4_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE' , '在區域(41)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_5_TITLE' , '在區域(41)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_5_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE' , '在區域(5)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_6_TITLE' , '在區域(5)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_6_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE' , '在區域(6)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼:');
define('MODULE_SHIPPING_UPS_COST_7_TITLE' , '在區域(6)的 UPS 運送費率');
define('MODULE_SHIPPING_UPS_COST_7_DESC' , '對於寄到目的地的費率表(依重量計算)，例如: 運送 0-4 公斤(kg) 的貨品需要 5,15 歐元運費 = 4:5.15,...');

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
