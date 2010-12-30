<?php
/* -----------------------------------------------------------------------------------------
   $Id: ap.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ap.php,v 1.02 2003/02/18); www.oscommerce.com 
   (c) 2003	 nextcommerce (ap.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   austrian_post_1.05       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_SHIPPING_AP_TEXT_TITLE', '奥地利邮政');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', '奥地利邮政 - 世界邮务运送');
define('MODULE_SHIPPING_AP_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_AP_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_AP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_AP_STATUS_TITLE', '启用运送机制');
define('MODULE_SHIPPING_AP_STATUS_DESC', '你同意启用奥地利邮政运送机制吗?');
define('MODULE_SHIPPING_AP_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_AP_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_AP_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_AP_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_AP_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_AP_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_AP_COUNTRIES_1_TITLE', '运送区域(1a)');
define('MODULE_SHIPPING_AP_COUNTRIES_1_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_AP_COST_1_TITLE', '区域(1a)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_1_DESC', '在(1a)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_2_TITLE', '运送区域(1b)');
define('MODULE_SHIPPING_AP_COUNTRIES_2_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_AP_COST_2_TITLE', '区域(1b)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_2_DESC', '在(1b)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_3_TITLE', '运送区域(2)');
define('MODULE_SHIPPING_AP_COUNTRIES_3_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_AP_COST_3_TITLE', '区域(2)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_3_DESC', '在(2)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_4_TITLE', '运送区域(3)');
define('MODULE_SHIPPING_AP_COUNTRIES_4_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_AP_COST_4_TITLE', '区域(3)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_4_DESC', '在(3)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_5_TITLE', '运送区域(4)');
define('MODULE_SHIPPING_AP_COUNTRIES_5_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_AP_COST_5_TITLE', '区域(4)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_5_DESC', '在(4)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_6_TITLE', '运送区域(5)');
define('MODULE_SHIPPING_AP_COUNTRIES_6_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_AP_COST_6_TITLE', '区域(5)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_6_DESC', '在(5)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_7_TITLE', '运送区域(6)');
define('MODULE_SHIPPING_AP_COUNTRIES_7_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_AP_COST_7_TITLE', '区域(6)的运送费率表上限为 20 公斤(kg)');
define('MODULE_SHIPPING_AP_COST_7_DESC', '在(6)区域中，包裹重量上限为20公斤(kg).');
define('MODULE_SHIPPING_AP_COUNTRIES_8_TITLE', '区域(国内)');
define('MODULE_SHIPPING_AP_COUNTRIES_8_DESC', '国内地区');
define('MODULE_SHIPPING_AP_COST_8_TITLE', '国内地区的运送费率表上限为 31.5 kg');
define('MODULE_SHIPPING_AP_COST_8_DESC', '在国内地区的包裹重量上限可达 31.5 kg.');
?>