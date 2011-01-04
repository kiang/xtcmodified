<?php
/*
  $Id: atm.php,v 1.1 2003/10/19 08:27:22 oldpa Exp $

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

  define('MODULE_PAYMENT_ATM_STATUS_TITLE', 'ATM 自動櫃員機轉帳');
  define('MODULE_PAYMENT_ATM_TEXT_TITLE', 'ATM 自動櫃員機轉帳');
  define('MODULE_PAYMENT_ATM_STATUS_DESCRIPTION', 'ATM 自動提款機轉帳');
  define('MODULE_PAYMENT_ATM_TEXT_DESCRIPTION', 'ATM 自動提款機轉帳');
  define('MODULE_PAYMENT_ATM_TEXT_DESCRIPTION1', '請就近至ATM 自動提款機轉帳，只要簡單輸入幾個數字及金額就可以輕鬆完成繳款:<br>1.輸入密碼<br>2.選擇其他交易或金額<br>3.選擇轉帳<br>4.如非'  . MODULE_PAYMENT_ATM_BANKNAME . ' 之提款機(ATM)，請選擇其他行庫<br>5.輸入銀行代號:' . MODULE_PAYMENT_ATM_BANKCODE . '<br>6.輸入帳號:' . MODULE_PAYMENT_ATM_ACCNUM . '<br>7.輸入轉帳金額<br><br>' . '注意：您所訂的商品，我們會在收到款項後立即寄出。<br>當您完成繳款手續時，請來信告知您的訂單序號，我們核對無誤後會立即將您的商品寄出，謝謝您的惠顧。');
  define('MODULE_PAYMENT_ATM_TEXT_EMAIL_FOOTER', "請就近至ATM 自動提款機轉帳，只要簡單輸入幾個數字及金額就可以輕鬆完成繳款:\n1.輸入密碼\n2.選擇其他交易或金額\n3.選擇轉帳\n4.如非" . MODULE_PAYMENT_ATM_BANKNAME . "之提款機(ATM)，請選擇其他行庫\n5.輸入銀行代號:" . MODULE_PAYMENT_ATM_BANKCODE. "\n6.輸入帳號:" . MODULE_PAYMENT_ATM_ACCNUM . "\n7.輸入轉帳金額\n\n當您完成繳款手續時，請來信告知您的訂單序號，\n我們核對無誤後會立即將您的商品寄出，謝謝您的惠顧。");
define('MODULE_PAYMENT_ATM_ALLOWED_TITLE','ATM 轉帳國家'); 
define('MODULE_PAYMENT_ATM_ALLOWED_DESC','輸入國家代碼，則只有列出國家可以使用這個運送方式 (例如 AT,DE (留白表示不設限))');  
 
define('MODULE_PAYMENT_ATM_STATUS_TITLE','啟動 ATM 自動櫃員機轉帳模組');
define('MODULE_PAYMENT_ATM_STATUS_DESC','確定要啟動 ATM 轉帳？');
define('MODULE_PAYMENT_ATM_BANKCODE_TITLE','銀行代號');
define('MODULE_PAYMENT_ATM_BANKCODE_DESC','請輸入你的銀行代號');
define('MODULE_PAYMENT_ATM_BANKNAME_TITLE','銀行名稱');
define('MODULE_PAYMENT_ATM_BANKNAME_DESC','請輸入你的銀行帳戶名稱');
define('MODULE_PAYMENT_ATM_ACCNUM_TITLE','帳戶號碼');
define('MODULE_PAYMENT_ATM_ACCNUM_DESC','請輸入你的銀行帳戶號碼');
define('MODULE_PAYMENT_ATM_SORT_ORDER_TITLE','顯示順序');
define('MODULE_PAYMENT_ATM_SORT_ORDER_DESC','顯示順序，數字越小順序在前');
define('MODULE_PAYMENT_ATM_ZONE_TITLE','ATM 轉帳地區');
define('MODULE_PAYMENT_ATM_ZONE_DESC','如果選擇地區，則只有該地區可以使用這個結帳模組');
define('MODULE_PAYMENT_ATM_ORDER_STATUS_ID_TITLE','ATM 轉帳的訂單狀態');
define('MODULE_PAYMENT_ATM_ORDER_STATUS_ID_DESC','設定使用貨到付款結帳模組的預設訂單狀態，如處理中、已處理或已出貨');
?>
