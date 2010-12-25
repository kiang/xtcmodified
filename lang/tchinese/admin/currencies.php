<?php
/* --------------------------------------------------------------
   $Id: currencies.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(currencies.php,v 1.15 2003/05/02); www.oscommerce.com 
   (c) 2003	 nextcommerce (currencies.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
define('HEADING_TITLE', '貨幣設定');

define('TABLE_HEADING_CURRENCY_NAME', '貨幣名稱');
define('TABLE_HEADING_CURRENCY_CODES', '代碼');
define('TABLE_HEADING_CURRENCY_VALUE', '匯率比值');
define('TABLE_HEADING_ACTION', '動作');

define('TEXT_INFO_EDIT_INTRO', '請做適當修改');
define('TEXT_INFO_CURRENCY_TITLE', '名稱：');
define('TEXT_INFO_CURRENCY_CODE', '代碼：');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', '左邊符號：');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', '右邊符號：');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', '小數點符號：');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', '千位符號：');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', '顯示小數點後幾位：');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '最後更新：');
define('TEXT_INFO_CURRENCY_VALUE', '匯率比值：');
define('TEXT_INFO_CURRENCY_EXAMPLE', '輸出範例：');
define('TEXT_INFO_INSERT_INTRO', '請填入新貨幣的相關資料');
define('TEXT_INFO_DELETE_INTRO', '確定要刪除這個貨幣？');
define('TEXT_INFO_HEADING_NEW_CURRENCY', '新增貨幣');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', '編輯貨幣');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', '刪除貨幣');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (必須手動更新匯率表)');
define('TEXT_INFO_CURRENCY_UPDATED', '%s (%s) 匯率已更新完成');

define('ERROR_REMOVE_DEFAULT_CURRENCY', '錯誤：預設的貨幣不可刪除，請先將預設值設定為其他貨幣，再刪除。');
define('ERROR_CURRENCY_INVALID', '錯誤： %s (%s) 匯率無法由 %s更新，檢查否為正確的貨幣代碼?');
?>