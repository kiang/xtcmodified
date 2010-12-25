<?php
/* --------------------------------------------------------------
   $Id: post.php 48 2007-01-03 10:42:30Z sun $

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


define('MODULE_SHIPPING_POST_TEXT_TITLE', '台灣郵政');
define('MODULE_SHIPPING_POST_TEXT_DESCRIPTION', '台灣郵政運送機制，依照商品重量或金額多寡按表收費');
define('MODULE_SHIPPING_POST_TEXT_WAY', '小計');
define('MODULE_SHIPPING_POST_TEXT_WEIGHT', '重量');
define('MODULE_SHIPPING_POST_TEXT_AMOUNT', '金額');
define('MODULE_SHIPPING_POST_STATUS_TITLE', '啟用台灣郵政');
define('MODULE_SHIPPING_POST_STATUS_DESC', '確定要啟用台灣郵政運送機制？');
define('MODULE_SHIPPING_POST_COST_TITLE', '台灣郵政費率表');
define('MODULE_SHIPPING_POST_COST_DESC', '依商品重量或金額設定收費表費率，例如： 1:60,2:80,3:100,5:120， 表示重量達 1公斤 時，收費 60， 1 到 2公斤，收費 80, 依此類推');
define('MODULE_SHIPPING_POST_MODE_TITLE', '台灣郵政計價方式');
define('MODULE_SHIPPING_POST_MODE_DESC', '台灣郵政運費會依訂單商品的重量或訂單總計金額，按表收取相對應之金額');
define('MODULE_SHIPPING_POST_HANDLING_TITLE', '處理費');
define('MODULE_SHIPPING_POST_HANDLING_DESC', '運送貨品時你可以自行設定是否需要處理費');
define('MODULE_SHIPPING_POST_TAX_CLASS_TITLE', '稅別');
define('MODULE_SHIPPING_POST_TAX_CLASS_DESC', '選擇要加計何項運送稅率');
define('MODULE_SHIPPING_POST_ZONE_TITLE', '運送特定區域');
define('MODULE_SHIPPING_POST_ZONE_DESC', '如果選擇地區，則只有該區域可以使用這個運送方式');
define('MODULE_SHIPPING_POST_SORT_ORDER_TITLE', '顯示順序');
define('MODULE_SHIPPING_POST_SORT_ORDER_DESC', '顯示順序，數字越小順序在前');
define('MODULE_SHIPPING_POST_ALLOWED_TITLE', '運送使用區域');
define('MODULE_SHIPPING_POST_ALLOWED_DESC', '輸入區域代碼，則只有列出區域可以使用這個運送方式 (例如 TW,CN (留白表示不設限))');

define('MODULE_SHIPPING_POST_TEXT_TIME0','白天送達');
define('MODULE_SHIPPING_POST_TEXT_TIME1','夜間送達');

?>