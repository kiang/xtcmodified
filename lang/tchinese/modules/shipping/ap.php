<?php
/* --------------------------------------------------------------
   $Id: ap.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ap.php,v 1.02 2003/02/18); www.oscommerce.com 
   (c) 2003	 nextcommerce (ap.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   austrian_post_1.05       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   

define('MODULE_SHIPPING_AP_TEXT_TITLE', '奧地利郵政');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', '奧地利郵政 - 世界郵務運送');
define('MODULE_SHIPPING_AP_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_AP_TEXT_UNITS', '公斤(kg)');

define('MODULE_SHIPPING_AP_STATUS_TITLE' , '啟用運送機制');
define('MODULE_SHIPPING_AP_STATUS_DESC' , '你同意啟用奧地利郵政運送機制嗎?');
define('MODULE_SHIPPING_AP_HANDLING_TITLE' , '處理費');
define('MODULE_SHIPPING_AP_HANDLING_DESC' , '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_AP_COUNTRIES_1_TITLE' , '運送區域(1a)');
define('MODULE_SHIPPING_AP_COUNTRIES_1_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_AP_COST_1_TITLE' , '區域(1a)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_1_DESC' , '在(1a)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_2_TITLE' , '運送區域(1b)');
define('MODULE_SHIPPING_AP_COUNTRIES_2_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_AP_COST_2_TITLE' , '區域(1b)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_2_DESC' , '在(1b)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_3_TITLE' , '運送區域(2)');
define('MODULE_SHIPPING_AP_COUNTRIES_3_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_AP_COST_3_TITLE' , '區域(2)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_3_DESC' , '在(2)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_4_TITLE' , '運送區域(3)');
define('MODULE_SHIPPING_AP_COUNTRIES_4_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼..');
define('MODULE_SHIPPING_AP_COST_4_TITLE' , '區域(3)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_4_DESC' , '在(3)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_5_TITLE' , '運送區域(4)');
define('MODULE_SHIPPING_AP_COUNTRIES_5_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼..');
define('MODULE_SHIPPING_AP_COST_5_TITLE' , '區域(4)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_5_DESC' , '在(4)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_6_TITLE' , '運送區域(5)');
define('MODULE_SHIPPING_AP_COUNTRIES_6_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼..');
define('MODULE_SHIPPING_AP_COST_6_TITLE' , '區域(5)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_6_DESC' , '在(5)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_7_TITLE' , '運送區域(6)');
define('MODULE_SHIPPING_AP_COUNTRIES_7_DESC' , '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼..');
define('MODULE_SHIPPING_AP_COST_7_TITLE' , '區域(6)的運送費率表上限為 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_7_DESC' , '在(6)區域中，包裹重量上限為20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_8_TITLE' , '區域(國內)');
define('MODULE_SHIPPING_AP_COUNTRIES_8_DESC' , '國內地區');
define('MODULE_SHIPPING_AP_COST_8_TITLE' , '國內地區的運送費率表上限為 31.5 kg');
define('MODULE_SHIPPING_AP_COST_8_DESC' , '在國內地區的包裹重量上限可達 31.5 kg.');

define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_AP_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_AP_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_AP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>
