<?php
/* --------------------------------------------------------------
   $Id: ecan.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn


   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ECAN_TEXT_TITLE', '宅配通');
define('MODULE_SHIPPING_ECAN_TEXT_DESCRIPTION', '所有訂單運費固定，單次僅限乙件，貨物包裝依宅急便規定計算');
define('MODULE_SHIPPING_ECAN_TEXT_WAY', '最佳');

define('MODULE_SHIPPING_ECAN_STATUS_TITLE', '啟動宅配通模組？');
define('MODULE_SHIPPING_ECAN_STATUS_DESC', '確定要啟動宅配通模組？');
define('MODULE_SHIPPING_ECAN_COST_TITLE', '運費');
define('MODULE_SHIPPING_ECAN_COST_DESC', '宅配通不分縣市每件統一收費');
define('MODULE_SHIPPING_ECAN_HANDLING_TITLE', '處理費');
define('MODULE_SHIPPING_ECAN_HANDLING_DESC', '宅配通每件處理費用');
define('MODULE_SHIPPING_ECAN_TAX_CLASS_TITLE', '稅別');
define('MODULE_SHIPPING_ECAN_TAX_CLASS_DESC', '選擇要加計何項運送稅率');
define('MODULE_SHIPPING_ECAN_ZONE_TITLE', '運送地區');
define('MODULE_SHIPPING_ECAN_ZONE_DESC', '如果選擇地區，則只有該地區可以使用這個運送模組');
define('MODULE_SHIPPING_ECAN_SORT_ORDER_TITLE', '顯示順序');
define('MODULE_SHIPPING_ECAN_SORT_ORDER_DESC', '顯示順序，數字越小順序在前');
define('MODULE_SHIPPING_ECAN_ALLOWED_TITLE', '宅配通運送國家');
define('MODULE_SHIPPING_ECAN_ALLOWED_DESC', '輸入國家代碼，則只有列出國家可以使用這個運送方式 (例如 AT,DE (留白表示不設限))');

define('MODULE_SHIPPING_ECAN_TEXT_TIME0','上午送達 08:00-12:00');
define('MODULE_SHIPPING_ECAN_TEXT_TIME1','下午送達 12:00-17:00');
define('MODULE_SHIPPING_ECAN_TEXT_TIME2','夜間送達 17:00-20:00');

?>