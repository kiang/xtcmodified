<?php
/*
  $Id: NewebmPP.php

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
  Copyright (c) 2002 osCommerce
  Released under the GNU General Public License
*/

define('MODULE_PAYMENT_NEWEBMPP_TEXT_TITLE', '藍新MerchantPayPage線上刷卡機制');
define('MODULE_PAYMENT_NEWEBMPP_TEXT_DESCRIPTION', '藍新MerchantPayPage線上刷卡機制<br><a href=http://neweb.com.tw target=_blank>http://neweb.com.tw</a>');

define('MODULE_PAYMENT_NEWEBMPP_STATUS_TITLE','狀態');
define('MODULE_PAYMENT_NEWEBMPP_STATUS_DESC','付款模組是否啟用');

define('MODULE_PAYMENT_NEWEBMPP_MERCHANTNUMBER_TITLE','商家編號');
define('MODULE_PAYMENT_NEWEBMPP_MERCHANTNUMBER_DESC','請填入藍新提供之商家編號');

define('MODULE_PAYMENT_NEWEBMPP_CHECKSUM_TITLE','檢查碼');
define('MODULE_PAYMENT_NEWEBMPP_CHECKSUM_DESC','請填入藍新提供之檢查碼');

define('MODULE_PAYMENT_NEWEBMPP_DEPOSITFLAG_TITLE','自動請款指標');
define('MODULE_PAYMENT_NEWEBMPP_DEPOSITFLAG_DESC','請選擇是否自動請款');

define('MODULE_PAYMENT_NEWEBMPP_SORT_ORDER_TITLE','訂單排序');
define('MODULE_PAYMENT_NEWEBMPP_SORT_ORDER_DESC','');

define('MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID_TITLE','訂單狀態');
define('MODULE_PAYMENT_NEWEBMPP_ORDER_STATUS_ID_DESC','');

define('MODULE_PAYMENT_NEWEBMPP_TRANSURL_TITLE','交易網址');
define('MODULE_PAYMENT_NEWEBMPP_TRANSURL_DESC','請填入藍新提供的交易處理網址');

define('MODULE_PAYMENT_NEWEBMPP_RETURNURL_TITLE','交易回覆網址');
define('MODULE_PAYMENT_NEWEBMPP_RETURNURL_DESC','請填入交易完成後處理網址(商家自行決定)');

define('MODULE_PAYMENT_NEWEBMPP_ALLOWED_TITLE','是否可使用');
define('MODULE_PAYMENT_NEWEBMPP_ALLOWED_DESC','');

define('MODULE_PAYMENT_NEWEBMPP_VERIFYURL_TITLE','回覆驗證網址');
define('MODULE_PAYMENT_NEWEBMPP_VERIFYURL_DESC','在交易結果導回前會先通知商家一次交易結果，若通知失敗會取消該筆交易，以確保交易一致!<br>若不想使用此功能請將網址設為http://127.0.0.1即可。');

//define('MODULE_PAYMENT_NEWEBMPP_ZONE_TITLE','信用卡轉帳地區');
//define('MODULE_PAYMENT_NEWEBMPP_ZONE_DESC','如果選擇地區，則只有該地區可以使用這個結帳模組');


?>