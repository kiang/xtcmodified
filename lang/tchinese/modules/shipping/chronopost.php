<?php
/* --------------------------------------------------------------
   $Id: chronopost.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chronopost.php,v 1.0 2002/04/01 07:07:45); www.oscommerce.com 
   (c) 2003	 nextcommerce (chronopost.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions: 
   chronopost-1.0.1       	Autor:	devteam@e-network.fr | www.oscommerce-fr.info

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   


define('MODULE_SHIPPING_CHRONOPOST_TEXT_TITLE', 'Chronopost 區域費率');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_DESCRIPTION', 'Chronopost 法國國際郵政快遞區域基本費率');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_UNITS', '公斤 (Kg)');


define('MODULE_SHIPPING_CHRONOPOST_STATUS_TITLE' , '啟用運送機制');
define('MODULE_SHIPPING_CHRONOPOST_STATUS_DESC' , '你同意啟用 Chronopost 運送機制嗎? (0=否, 1=是)');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_TITLE' , '處理費');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_DESC' , '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_TITLE' , '運送區域(國家)(1)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_TITLE' , '運送費率 (1)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_DESC' , 'chronopost對於寄到區域(1)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_TITLE' , '運送區域(國家)(2)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_TITLE' , '運送費率 (2)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_DESC' , 'chronopost對於寄到區域(2)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_TITLE' , '運送區域(國家)(3)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_TITLE' , '運送費率 (3)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_DESC' , 'chronopost對於寄到區域(3)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_TITLE' , '運送區域(國家)(4)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_TITLE' , '運送費率 (4)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_DESC' , 'chronopost對於寄到區域(4)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_TITLE' , '運送區域(國家)(5)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_TITLE' , '運送費率 (5)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_DESC' , 'chronopost對於寄到區域(5)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_TITLE' , '運送區域(國家)(6)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_TITLE' , '運送費率 (6)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_DESC' , 'chronopost對於寄到區域(6)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_TITLE' , '運送區域(國家)(7)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_TITLE' , '運送費率 (7)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_DESC' , 'chronopost對於寄到區域(7)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_TITLE' , '運送區域(國家)(8)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_TITLE' , '運送費率 (8)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_DESC' , 'chronopost對於寄到區域(8)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_TITLE' , '運送區域(國家)(9)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_TITLE' , '運送費率 (9)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_DESC' , 'chronopost對於寄到區域(9)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_TITLE' , '運送區域(國家)(10)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_TITLE' , '運送費率 (10)(重量/費率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_DESC' , 'chronopost對於寄到區域(10)的費率表(依重量比率計算) ，原理: 重量範圍(公克):運費(歐元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 當貨品重量少於2公斤時寄到目的地的運送費率就是 28,71 歐元(TTC)');

define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_CHRONOPOST_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_CHRONOPOST_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_CHRONOPOST_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_CHRONOPOST_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>
