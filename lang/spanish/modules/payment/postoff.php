<?php
/*
  $Id: postoff.php,v 1.1 2004/08/19 08:27:22 oldpa Exp $

  TWE-Commerce - community made shopping   
   http://www.oldpa.com.tw
   Copyright (c) 2003 TWE-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org
   (c) 2003	 xtcommerce  www.xt-commerce.com   
   Released under the GNU General Public License 
*/

  define('MODULE_PAYMENT_POSTOFF_TEXT_TITLE', '郵政劃撥');
  define('MODULE_PAYMENT_POSTOFF_TEXT_DESCRIPTION', '郵政劃撥');
  define('MODULE_PAYMENT_POSTOFF_TEXT_DESCRIPTION1', '請到郵局劃撥款項<br>戶名：' . MODULE_PAYMENT_POSTOFF_ACCNAME . '<br>劃撥帳號：' . MODULE_PAYMENT_POSTOFF_ACCNUM . '<br>');
  define('MODULE_PAYMENT_POSTOFF_TEXT_EMAIL_FOOTER', "請到郵局劃撥款項\n戶名：" . MODULE_PAYMENT_POSTOFF_ACCNAME . "\n劃撥帳號：" . MODULE_PAYMENT_POSTOFF_ACCNUM);
  
define('MODULE_PAYMENT_POSTOFF_STATUS_TITLE', '啟動郵政劃撥模組');
define('MODULE_PAYMENT_POSTOFF_STATUS_DESC', '確定要啟動郵政劃撥模組？');
define('MODULE_PAYMENT_POSTOFF_ACCNAME_TITLE', '戶名：');
define('MODULE_PAYMENT_POSTOFF_ACCNAME_DESC', '請輸入你的戶名');
define('MODULE_PAYMENT_POSTOFF_ACCNUM_TITLE', '劃撥帳號：');
define('MODULE_PAYMENT_POSTOFF_ACCNUM_DESC', '請輸入你的劃撥帳號');
define('MODULE_PAYMENT_POSTOFF_SORT_ORDER_TITLE','顯示順序');
define('MODULE_PAYMENT_POSTOFF_SORT_ORDER_DESC', '顯示順序，數字越小順序在前');
define('MODULE_PAYMENT_POSTOFF_ZONE_TITLE','郵政劃撥地區');
define('MODULE_PAYMENT_POSTOFF_ZONE_DESC', '如果選擇地區，則只有該地區可以使用這個結帳模組');
define('MODULE_PAYMENT_POSTOFF_ORDER_STATUS_ID_TITLE','郵政劃撥的訂單狀態');
define('MODULE_PAYMENT_POSTOFF_ORDER_STATUS_ID_DESC', '設定使用貨到付款結帳模組的預設訂單狀態，如處理中、已處理或已出貨');
define('MODULE_PAYMENT_POSTOFF_ALLOWED_TITLE' , '郵政劃撥國家');
define('MODULE_PAYMENT_POSTOFF_ALLOWED_DESC' , '輸入國家代碼，則只有列出國家可以使用這個運送方式 (例如 AT,DE (留白表示不設限))');
?>
