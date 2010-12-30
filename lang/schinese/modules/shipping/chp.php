<?php
/* -----------------------------------------------------------------------------------------
   $Id: chp.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chp.php,v 1.01 2003/02/18 03:30:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (chp.php,v 1.4 2003/08/1); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   swiss_post_1.02       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_SHIPPING_CHP_TEXT_TITLE', '瑞士邮政');
define('MODULE_SHIPPING_CHP_TEXT_DESCRIPTION', '瑞士邮政-运送机制');
define('MODULE_SHIPPING_CHP_TEXT_WAY', '运送到');
define('MODULE_SHIPPING_CHP_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_CHP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_CHP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_CHP_COST_PRI_5_TITLE', '区域(4)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_5_DESC', '在(4)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_ECO_5_TITLE', '区域(4)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_5_DESC', '在(4)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_TITLE', '运送区域(4)');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_COST_ECO_4_TITLE', '区域(3)的ECO运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_4_DESC', '在(3)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_4_TITLE', '区域(3)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_4_DESC', '在(3)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_4_TITLE', '区域(3)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_4_DESC', '在(3)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_3_TITLE', '区域(2)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_3_DESC', '在(2)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_TITLE', '运送区域(3)');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_STATUS_TITLE', '启用运送机制');
define('MODULE_SHIPPING_CHP_STATUS_DESC', '你同意启用瑞士邮政运送机制吗?');
define('MODULE_SHIPPING_CHP_HANDLING_TITLE', '处理费');
define('MODULE_SHIPPING_CHP_HANDLING_DESC', '运送货品时你可以自行设置是否需要处理费');
define('MODULE_SHIPPING_CHP_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_CHP_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_CHP_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_CHP_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_CHP_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_CHP_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_CHP_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_CHP_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_CHP_COUNTRIES_1_TITLE', '运送区域(0)');
define('MODULE_SHIPPING_CHP_COUNTRIES_1_DESC', '国内地区');
define('MODULE_SHIPPING_CHP_COST_ECO_1_TITLE', '区域(0)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_1_DESC', '在(0)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_1_TITLE', '区域(0)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_1_DESC', '在(0)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_TITLE', '运送区域(1)');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_COST_ECO_2_TITLE', '区域(1)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_2_DESC', '在(1)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_2_TITLE', '区域(1)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_2_DESC', '在(1)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_2_TITLE', '区域(1)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_2_DESC', '在(1)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_TITLE', '运送区域(2)');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_COST_ECO_3_TITLE', '区域(2)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_3_DESC', '在(2)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_3_TITLE', '区域(2)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_3_DESC', '在(2)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_5_TITLE', '区域(4)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_5_DESC', '在(4)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_TITLE', '运送区域(5)');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_COST_ECO_6_TITLE', '区域(5)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_6_DESC', '在(5)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_6_TITLE', '区域(5)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_6_DESC', '在(5)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_6_TITLE', '区域(5)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_6_DESC', '在(5)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_TITLE', '运送区域(6)');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_DESC', '输入区域代码，可利用逗号(,)分隔两个区域的ISO代码.');
define('MODULE_SHIPPING_CHP_COST_ECO_7_TITLE', '区域(6)的 ECO 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_7_DESC', '在(6)区域的运送费率设置中，<b>\'ECO\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_PRI_7_TITLE', '区域(6)的 PRI 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_7_DESC', '在(6)区域的运送费率设置中，<b>\'PRI\'</b> 最高可运送 30 公斤(kg) 的货物.');
define('MODULE_SHIPPING_CHP_COST_URG_7_TITLE', '区域(6)的 URG 运送费率表上限为 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_7_DESC', '在(6)区域的运送费率设置中，<b>\'URG\'</b> 最高可运送 30 公斤(kg) 的货物.');
?>