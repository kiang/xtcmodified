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
define('MODULE_SHIPPING_CHP_TEXT_TITLE', '瑞士郵政');
define('MODULE_SHIPPING_CHP_TEXT_DESCRIPTION', '瑞士郵政-運送機制');
define('MODULE_SHIPPING_CHP_TEXT_WAY', '運送到');
define('MODULE_SHIPPING_CHP_TEXT_UNITS', '公斤(kg)');
define('MODULE_SHIPPING_CHP_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_CHP_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
define('MODULE_SHIPPING_CHP_COST_PRI_5_TITLE', '區域(4)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_5_DESC', '在(4)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_ECO_5_TITLE', '區域(4)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_5_DESC', '在(4)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_TITLE', '運送區域(4)');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_COST_ECO_4_TITLE', '區域(3)的ECO運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_4_DESC', '在(3)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_4_TITLE', '區域(3)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_4_DESC', '在(3)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_4_TITLE', '區域(3)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_4_DESC', '在(3)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_3_TITLE', '區域(2)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_3_DESC', '在(2)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_TITLE', '運送區域(3)');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_STATUS_TITLE', '瑞士郵政局');
define('MODULE_SHIPPING_CHP_STATUS_DESC', '你同意使用瑞士郵政局運送商品嗎?');
define('MODULE_SHIPPING_CHP_HANDLING_TITLE', '處理費');
define('MODULE_SHIPPING_CHP_HANDLING_DESC', '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_CHP_TAX_CLASS_TITLE', _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_CHP_TAX_CLASS_DESC', _MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_CHP_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_CHP_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_CHP_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_CHP_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_CHP_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_CHP_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_CHP_COUNTRIES_1_TITLE', '運送區域(0)');
define('MODULE_SHIPPING_CHP_COUNTRIES_1_DESC', '國內地區');
define('MODULE_SHIPPING_CHP_COST_ECO_1_TITLE', '區域(0)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_1_DESC', '在(0)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_1_TITLE', '區域(0)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_1_DESC', '在(0)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_TITLE', '運送區域(1)');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_COST_ECO_2_TITLE', '區域(1)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_2_DESC', '在(1)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_2_TITLE', '區域(1)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_2_DESC', '在(1)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_2_TITLE', '區域(1)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_2_DESC', '在(1)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_TITLE', '運送區域(2)');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_COST_ECO_3_TITLE', '區域(2)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_3_DESC', '在(2)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_3_TITLE', '區域(2)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_3_DESC', '在(2)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_5_TITLE', '區域(4)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_5_DESC', '在(4)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_TITLE', '運送區域(5)');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_COST_ECO_6_TITLE', '區域(5)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_6_DESC', '在(5)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_6_TITLE', '區域(5)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_6_DESC', '在(5)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_6_TITLE', '區域(5)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_6_DESC', '在(5)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_TITLE', '運送區域(6)');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_DESC', '輸入區域代碼，可利用逗號(,)分隔兩個區域的ISO代碼.');
define('MODULE_SHIPPING_CHP_COST_ECO_7_TITLE', '區域(6)的 ECO 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_ECO_7_DESC', '在(6)區域的運送費率設定中，<b>\'ECO\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_PRI_7_TITLE', '區域(6)的 PRI 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_PRI_7_DESC', '在(6)區域的運送費率設定中，<b>\'PRI\'</b> 最高可運送 30 公斤(kg) 的貨物.');
define('MODULE_SHIPPING_CHP_COST_URG_7_TITLE', '區域(6)的 URG 運送費率表上限為 30 公斤(kg)');
define('MODULE_SHIPPING_CHP_COST_URG_7_DESC', '在(6)區域的運送費率設定中，<b>\'URG\'</b> 最高可運送 30 公斤(kg) 的貨物.');
?>