<?php
/* --------------------------------------------------------------
   $Id: shipping_status.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '出貨狀態設定');
define('TABLE_HEADING_SHIPPING_STATUS', '包裝＆寄送所需的時間');
define('TABLE_HEADING_ACTION', '動作');
define('TEXT_INFO_EDIT_INTRO', '請依照你的需要做修改');
define('TEXT_INFO_SHIPPING_STATUS_NAME', '出貨時程:');
define('TEXT_INFO_INSERT_INTRO', '請輸入新的出貨時間');
define('TEXT_INFO_DELETE_INTRO', '確定刪除此出貨時間?');
define('TEXT_INFO_HEADING_NEW_SHIPPING_STATUS', '新的出貨時間');
define('TEXT_INFO_HEADING_EDIT_SHIPPING_STATUS', '編輯出貨時間');
define('TEXT_INFO_SHIPPING_STATUS_IMAGE', '圖片:');
define('TEXT_INFO_HEADING_DELETE_SHIPPING_STATUS', '刪除出貨時間');
define('ERROR_REMOVE_DEFAULT_SHIPPING_STATUS', '錯誤: 預設的出貨時間無法刪除，請設定另一出貨時間為預設後再試一次');
define('ERROR_STATUS_USED_IN_ORDERS', '錯誤: 這個出貨時間仍有商品在使用');
define('ERROR_STATUS_USED_IN_HISTORY', '錯誤: 這個出貨時間仍有商品紀錄使用中');
?>