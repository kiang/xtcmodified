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
   


define('MODULE_SHIPPING_CHRONOPOST_TEXT_TITLE', 'Chronopost 区域费率');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_DESCRIPTION', 'Chronopost 法国国际邮政快递区域基本费率');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_UNITS', '公斤 (Kg)');


define('MODULE_SHIPPING_CHRONOPOST_STATUS_TITLE' , '启用运送机制');
define('MODULE_SHIPPING_CHRONOPOST_STATUS_DESC' , '你同意启用 Chronopost 运送机制吗? (0=否, 1=是)');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_TITLE' , '处理费');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_DESC' , '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_TITLE' , '运送区域(国家)(1)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_TITLE' , '运送费率 (1)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_DESC' , 'chronopost对于寄到区域(1)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_TITLE' , '运送区域(国家)(2)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_TITLE' , '运送费率 (2)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_DESC' , 'chronopost对于寄到区域(2)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_TITLE' , '运送区域(国家)(3)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_TITLE' , '运送费率 (3)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_DESC' , 'chronopost对于寄到区域(3)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_TITLE' , '运送区域(国家)(4)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_TITLE' , '运送费率 (4)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_DESC' , 'chronopost对于寄到区域(4)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_TITLE' , '运送区域(国家)(5)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_TITLE' , '运送费率 (5)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_DESC' , 'chronopost对于寄到区域(5)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_TITLE' , '运送区域(国家)(6)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_TITLE' , '运送费率 (6)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_DESC' , 'chronopost对于寄到区域(6)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_TITLE' , '运送区域(国家)(7)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_TITLE' , '运送费率 (7)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_DESC' , 'chronopost对于寄到区域(7)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_TITLE' , '运送区域(国家)(8)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_TITLE' , '运送费率 (8)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_DESC' , 'chronopost对于寄到区域(8)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_TITLE' , '运送区域(国家)(9)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_TITLE' , '运送费率 (9)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_DESC' , 'chronopost对于寄到区域(9)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_TITLE' , '运送区域(国家)(10)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_DESC' , '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_TITLE' , '运送费率 (10)(重量/费率)');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_DESC' , 'chronopost对于寄到区域(10)的费率表(依重量比率计算) ，原理: 重量范围(公克):运费(欧元 TTC)，例如： 0-2000:28.71,2000-5000:34.38,... 当货品重量少于2公斤时寄到目的地的运送费率就是 28,71 欧元(TTC)');

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
