<?php
/* --------------------------------------------------------------
   $Id: dp.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_DP_TEXT_TITLE', '德国邮政');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', '德国邮政 - 全球运送机制');
define('MODULE_SHIPPING_DP_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_DP_TEXT_UNITS', '公斤(kg)');


define('MODULE_SHIPPING_DP_STATUS_TITLE' , '启用运送机制');
define('MODULE_SHIPPING_DP_STATUS_DESC' , '你同意启用德国邮政运送机制吗?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , '处理费');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_DP_COUNTRIES_1_TITLE' , '运送区域(国家)(1)');
define('MODULE_SHIPPING_DP_COUNTRIES_1_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_1_TITLE' , '区域(1)的运送费率表');
define('MODULE_SHIPPING_DP_COST_1_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');
define('MODULE_SHIPPING_DP_COUNTRIES_2_TITLE' , '运送区域(国家)(2)');
define('MODULE_SHIPPING_DP_COUNTRIES_2_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_2_TITLE' , '区域(2)的运送费率表');
define('MODULE_SHIPPING_DP_COST_2_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');
define('MODULE_SHIPPING_DP_COUNTRIES_3_TITLE' , '运送区域(国家)(3)');
define('MODULE_SHIPPING_DP_COUNTRIES_3_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_3_TITLE' , '区域(3)的运送费率表');
define('MODULE_SHIPPING_DP_COST_3_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');
define('MODULE_SHIPPING_DP_COUNTRIES_4_TITLE' , '运送区域(国家)(4)');
define('MODULE_SHIPPING_DP_COUNTRIES_4_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_4_TITLE' , '区域(4)的运送费率表');
define('MODULE_SHIPPING_DP_COST_4_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');
define('MODULE_SHIPPING_DP_COUNTRIES_5_TITLE' , '运送区域(国家)(5)');
define('MODULE_SHIPPING_DP_COUNTRIES_5_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_5_TITLE' , '区域(5)的运送费率表');
define('MODULE_SHIPPING_DP_COST_5_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');
define('MODULE_SHIPPING_DP_COUNTRIES_6_TITLE' , '运送区域(国家)(6)');
define('MODULE_SHIPPING_DP_COUNTRIES_6_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码..');
define('MODULE_SHIPPING_DP_COST_6_TITLE' , '区域(6)的运送费率表');
define('MODULE_SHIPPING_DP_COST_6_DESC' , 'DP对于寄到目的地的费率表(依重量计算)，例如： 0-3:8.50,3-7:10.50,... 当货物重量大于 0 且小于 3 公斤时收费 8.50 元.');

define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_DP_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_DP_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_DP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>
