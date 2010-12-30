<?php
/* -----------------------------------------------------------------------------------------
   $Id: banktransfer.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banktransfer.php,v 1.9 2003/02/18 19:22:15); www.oscommerce.com 
   (c) 2003	 nextcommerce (banktransfer.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   OSC German Banktransfer v0.85a       	Autor:	Dominik Guder <osc@guder.org>
   
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_TYPE_PERMISSION', 'bt');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', '銀行轉帳');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', '銀行轉帳付款');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO', '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', '銀行轉帳');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', '注意： 您可以從連結下載我們的傳真確認表單 ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE . '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', '請注意，銀行轉帳只能用在同一個國家中！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', '戶名：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', '帳號尾5碼：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', '銀行代碼：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', '銀行名稱：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', '銀行轉帳與經由傳真的方式來確認付款');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', '<font color="#FF0000">FEHLER: </font>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', '帳號與銀行代碼不一致！<br />請重新輸入');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', '抱歉，我們無法驗證這個帳號！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', '帳號無法通過驗證！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', '帳號無法通過驗證！<br />請重新輸入');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', '銀行代碼不存在！<br />請重新輸入');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', '您的銀行代碼不符或是沒有輸入！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', '沒有輸入帳號！');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', '沒有該筆帳戶!');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', '注意：');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', '如果您不希望透過網路<br />傳送帳號資訊，您可以透過');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', '傳真表單');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', '提供給我們。');
define('JS_BANK_BLZ', '請輸入銀行代號或名稱！\n');
define('JS_BANK_NAME', '請輸入銀行名稱！\n');
define('JS_BANK_NUMBER', '請輸入您的帳號尾5碼！\n');
define('JS_BANK_OWNER', '請輸入戶名！\n');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', '使用資料庫查驗銀行代碼？');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', '您是否希望透過資料庫查驗銀行代碼？請確認資料表 banktransfer_blz 存在且設定完成！');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', '傳真檔案');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', '傳真確認表檔案應該要放在網站根目錄中');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', '使用傳真確認');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', '您是否要使用傳真確認');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', '啟動銀行轉帳付款');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', '你同意要啟用銀行轉帳付款？');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', '訂單金額下限');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', '要使用這種付款方式，單筆訂單金額的下限');
// BOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
define('MODULE_PAYMENT_BANKTRANSFER_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_BANKTRANSFER_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by comma)');
// EOF - Hendrik - 2010-08-09 - exlusion config for shipping modules

?>
