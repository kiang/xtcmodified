<?php
/*------------------------------------------------------------------------------
  $Id: cc.php 1136 2005-08-07 13:19:54Z mz $

  XTC-CC - Contribution for XT-Commerce http://www.xt-commerce.com
  modified by http://www.netz-designer.de

  Copyright (c) 2003 netz-designer
  -----------------------------------------------------------------------------
  based on:
  $Id: cc.php 1136 2005-08-07 13:19:54Z mz $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_CC_TEXT_TITLE', '信用卡');
define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', '信用卡測試資訊：<br /><br />CC#: 4111111111111111<br />過期日：任意');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', '信用卡類型：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', '信用卡持有人：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', '信用卡號碼：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_START', '信用卡啟用日：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', '信用卡到期日：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_ISSUE', 'Issue Number(部分類型信用卡才需要)：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', '安全碼，三或四碼：');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* 持有人姓名至少要 ' . CC_OWNER_MIN_LENGTH . ' 個字數\n');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* 信用卡號碼至少要 ' . CC_NUMBER_MIN_LENGTH . ' 個字數\n');
define('MODULE_PAYMENT_CC_TEXT_ERROR', '信用卡錯誤！');
define('TEXT_CARD_NOT_ACZEPTED', '抱歉, 我們無法接受這張 <b>%s</b> 信用卡, 請使用其它信用卡類型!<br />我們接受以下信用卡: ');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '請務必填寫 CVV 信用卡安全驗證碼這個欄位.\n 否則訂單將無法處理.\n CVV 安全驗證碼是信用卡背面簽名處末端的 3 或 4 碼 (美國運通).');
define('MODULE_PAYMENT_CC_TEXT_CVV_LINK', '<u>[說明]</u>');
define('HEADING_CVV', '安全碼說明');
define('TEXT_CVV', '<table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="tableHeading"><b>Visa、Mastercard有提供三位數字卡號確認碼</b></span></td></tr><tr><td><span class="boxText">基於交易的安全，我們需要您輸入這個安全驗證碼，它通常是在信用卡簽名處右下角的最後三個號碼，與它並列的是信用卡的末四碼</span></td></tr><tr><td align="center"><IMG src="images/cv_card.gif"></td></tr></table><hr /><table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="main"><b>American Express 的安全驗證碼有四位數字</b> </span></td></tr><tr><td><span class="boxText">基於交易的安全，我們需要您輸入這個安全驗證碼，它通常是在信用卡簽名處右下角的最後四個號碼。</span></td></tr><tr><td align="center"><IMG src="images/cv_amex_card.gif"></td></tr></table>');
define('TEXT_CLOSE_WINDOW', '<u>關閉視窗</u> [x]');
define('MODULE_PAYMENT_CC_ACCEPTED_CARDS', '我們接受以下的信用卡:');
define('MODULE_PAYMENT_CC_TEXT_INFO', '使用信用卡輕鬆付款');
define('MODULE_PAYMENT_CC_STATUS_TITLE', '啟動信用卡模組');
define('MODULE_PAYMENT_CC_STATUS_DESC', '你要用這個付款機制嗎?');
define('MODULE_PAYMENT_CC_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_CC_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('CC_VAL_TITLE', '啟用信用卡驗證');
define('CC_VAL_DESC', '您確定要啟用信用卡驗證機制？');
define('CC_BLACK_TITLE', '啟用信用卡黑名單驗證');
define('CC_BLACK_DESC', '您確定要啟用信用卡黑名單驗證功能？');
define('CC_ENC_TITLE', '加密信用卡資訊');
define('CC_ENC_DESC', '您確定要加密信用卡資訊');
define('MODULE_PAYMENT_CC_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_CC_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_CC_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_CC_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
define('USE_CC_CVV_TITLE', '蒐集 CVV 編碼');
define('USE_CC_CVV_DESC', '確定要蒐集 CVV 編碼？');
define('USE_CC_ISS_TITLE', '蒐集 Issue Number');
define('USE_CC_ISS_DESC', '確定要蒐集Issue Number 編碼？');
define('USE_CC_START_TITLE', '蒐集啟用日期');
define('USE_CC_START_DESC', '確定要蒐集啟用日期？');
define('CC_CVV_MIN_LENGTH_TITLE', '安全碼長度');
define('CC_CVV_MIN_LENGTH_DESC', '定義安全碼長度，預設是三碼，如果您無法確認，建議您不要修改。');
define('MODULE_PAYMENT_CC_EMAIL_TITLE', '分割卡號收件信箱');
define('MODULE_PAYMENT_CC_EMAIL_DESC', '如果您輸入了一個 eMail ，信用卡號碼中間的部分會寄到這個住址(其他的部分會儲存在資料庫，藉此保護客戶的資訊');
define('TEXT_CCVAL_ERROR_INVALID_DATE', '信用卡有效日期不正確.<br />請改正這筆資料.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '你所輸入的信用卡卡號不正確.<br />請改正這筆資料.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '你所輸入的信用卡卡號前 4 碼是: %s<br />如果你確認所輸入的沒有錯, 代表我們的系統暫無法接受你的信用卡類型.<br />請改正這筆資料.');
define('MODULE_PAYMENT_CC_ACCEPT_DINERSCLUB_TITLE', '使用 DINERS CLUB 卡');
define('MODULE_PAYMENT_CC_ACCEPT_DINERSCLUB_DESC', '使用 DINERS CLUB 卡');
define('MODULE_PAYMENT_CC_ACCEPT_AMERICANEXPRESS_TITLE', '使用 AMERICAN EXPRESS 卡');
define('MODULE_PAYMENT_CC_ACCEPT_AMERICANEXPRESS_DESC', '使用 AMERICAN EXPRESS 卡');
define('MODULE_PAYMENT_CC_ACCEPT_CARTEBLANCHE_TITLE', '使用 CARTE BLANCHE 卡');
define('MODULE_PAYMENT_CC_ACCEPT_CARTEBLANCHE_DESC', '使用 CARTE BLANCHE 卡');
define('MODULE_PAYMENT_CC_ACCEPT_OZBANKCARD_TITLE', '使用 AUSTRALIAN BANKCARD 卡');
define('MODULE_PAYMENT_CC_ACCEPT_OZBANKCARD_DESC', '使用 AUSTRALIAN BANKCARD 卡');
define('MODULE_PAYMENT_CC_ACCEPT_DISCOVERNOVUS_TITLE', '使用 DISCOVER/NOVUS 卡');
define('MODULE_PAYMENT_CC_ACCEPT_DISCOVERNOVUS_DESC', '使用 DISCOVER/NOVUS 卡');
define('MODULE_PAYMENT_CC_ACCEPT_DELTA_TITLE', '使用 DELTA 卡');
define('MODULE_PAYMENT_CC_ACCEPT_DELTA_DESC', '使用 DELTA 卡');
define('MODULE_PAYMENT_CC_ACCEPT_ELECTRON_TITLE', '使用 ELECTRON 卡');
define('MODULE_PAYMENT_CC_ACCEPT_ELECTRON_DESC', '使用 ELECTRON 卡');
define('MODULE_PAYMENT_CC_ACCEPT_MASTERCARD_TITLE', '使用 MASTERCARD 卡');
define('MODULE_PAYMENT_CC_ACCEPT_MASTERCARD_DESC', '使用 MASTERCARD 卡');
define('MODULE_PAYMENT_CC_ACCEPT_SWITCH_TITLE', '使用 SWITCH 卡');
define('MODULE_PAYMENT_CC_ACCEPT_SWITCH_DESC', '使用 SWITCH 卡');
define('MODULE_PAYMENT_CC_ACCEPT_SOLO_TITLE', '使用 SOLO 卡');
define('MODULE_PAYMENT_CC_ACCEPT_SOLO_DESC', '使用 SOLO 卡');
define('MODULE_PAYMENT_CC_ACCEPT_JCB_TITLE', '使用 JCB 卡');
define('MODULE_PAYMENT_CC_ACCEPT_JCB_DESC', '使用 JCB 卡');
define('MODULE_PAYMENT_CC_ACCEPT_MAESTRO_TITLE', '使用 MAESTRO 卡');
define('MODULE_PAYMENT_CC_ACCEPT_MAESTRO_DESC', '使用 MAESTRO 卡');
define('MODULE_PAYMENT_CC_ACCEPT_VISA_TITLE', '使用 VISA 卡');
define('MODULE_PAYMENT_CC_ACCEPT_VISA_DESC', '使用 VISA 卡');
// BOF - Hendrik - 2010-08-09 - exlusion config for shipping modules
define('MODULE_PAYMENT_CC_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_CC_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by comma)');
// EOF - Hendrik - 2010-08-09 - exlusion config for shipping modules

?>