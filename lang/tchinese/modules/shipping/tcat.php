<?php
/* --------------------------------------------------------------
   $Id: tcat.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn


   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(information.php,v 1.6 2003/02/10); www.oscommerce.com 
   (c) 2003	 nextcommerce (content.php,v 1.2 2003/08/21); www.nextcommerce.org   
   
   Released under the GNU General Public License 
---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_TCAT_TEXT_TITLE', '宅急便');
define('MODULE_SHIPPING_TCAT_TEXT_DESCRIPTION', '所有訂單運費固定，單次僅限乙件，貨物包裝依宅急便規定計算。');
define('MODULE_SHIPPING_TCAT_TEXT_WAY', '最佳');

define('MODULE_SHIPPING_TCAT_STATUS_TITLE', '啟動宅急便模組');
define('MODULE_SHIPPING_TCAT_STATUS_DESC', '確定要啟動宅急便模組？');

define('MODULE_SHIPPING_TCAT_COST_TITLE', '運費');
define('MODULE_SHIPPING_TCAT_COST_DESC', '宅急便不分縣市每件統一收費');

define('MODULE_SHIPPING_TCAT_HANDLING_TITLE', '處理費');
define('MODULE_SHIPPING_TCAT_HANDLING_DESC', '宅急便每件處理費用');

define('MODULE_SHIPPING_TCAT_TAX_CLASS_TITLE', '稅別');
define('MODULE_SHIPPING_TCAT_TAX_CLASS_DESC', '選擇要加計何項運送稅率');

define('MODULE_SHIPPING_TCAT_ZONE_TITLE', '運送地區');
define('MODULE_SHIPPING_TCAT_ZONE_DESC', '如果選擇地區，則只有該地區可以使用這個運送模組');

define('MODULE_SHIPPING_TCAT_SORT_ORDER_TITLE', '顯示順序');
define('MODULE_SHIPPING_TCAT_SORT_ORDER_DESC', '顯示順序，數字越小順序在前');

define('MODULE_SHIPPING_TCAT_ALLOWED_TITLE', '運送區域');
define('MODULE_SHIPPING_TCAT_ALLOWED_DESC', '輸入區域代碼，則只有列出區域可以使用這個運送方式 (例如 TW,CN (留白表示不設限))<br />(宅急便目前只配送台灣及其離島，故建議僅要輸入TW)');

define('MODULE_SHIPPING_TCAT_TEXT_TIME0','上午送達 08:00-12:00');
define('MODULE_SHIPPING_TCAT_TEXT_TIME1','下午送達 12:00-17:00');
define('MODULE_SHIPPING_TCAT_TEXT_TIME2','夜間送達 17:00-20:00');
?>