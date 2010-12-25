<?php
/* --------------------------------------------------------------
   $Id: products_attributes.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(products_attributes.php,v 1.9 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (products_attributes.php,v 1.4 2003/08/1); www.nextcommerce.org

   Released under the GNU General Public License
   -------------------------------------------------------------- */

define('HEADING_TITLE_OPT', '選項標題（規格主分類）');
define('HEADING_TITLE_VAL', '選項細分值（規格內容）');
define('HEADING_TITLE_ATRIB', '商品屬性');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '品名');
define('TABLE_HEADING_OPT_NAME', '選項規格標題');
define('TABLE_HEADING_OPT_VALUE', '選項內容');
define('TABLE_HEADING_OPT_PRICE', '金額');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '選項價格調整 (+/-)');
define('TABLE_HEADING_ACTION', '動作');
define('TABLE_HEADING_DOWNLOAD', '下載商品：');
define('TABLE_TEXT_FILENAME', '檔名：');
define('TABLE_TEXT_MAX_DAYS', '到期日：');
define('TABLE_TEXT_MAX_COUNT', '最大下載數：');

define('MAX_ROW_LISTS_OPTIONS', 10);

define('TEXT_WARNING_OF_DELETE', '這個規格屬性目前還有商品在使用中，無法刪除！....請先到「商品屬性管理」區，移除屬性後才能刪除！');
define('TEXT_OK_TO_DELETE', '這個規格屬性沒有商品在使用中可以完全刪除了！確定要刪除？');
define('TEXT_SEARCH','搜尋:');
define('TEXT_OPTION_ID', 'ID 排列');
define('TEXT_OPTION_NAME', '名稱排列');

// SP2.2
define('TABLE_HEADING_OPT_IMAGE','圖檔');
define('TABLE_HEADING_OPT_DESC','內容');
define('TABLE_TEXT_DELETE','刪除圖檔');
define('TEXT_OPTIONS_IMAGE','選擇圖檔')
?>