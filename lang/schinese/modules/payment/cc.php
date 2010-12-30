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
define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', '信用卡测试信息：<br /><br />CC#: 4111111111111111<br />过期日：任意');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', '信用卡类型：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', '信用卡持有人：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', '信用卡号码：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_START', '信用卡启用日：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', '信用卡到期日：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_ISSUE', 'Issue Number(部分类型信用卡才需要)：');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', '安全码，三或四码：');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* 持有人姓名至少要 ' . CC_OWNER_MIN_LENGTH . ' 个字数\n');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* 信用卡号码至少要 ' . CC_NUMBER_MIN_LENGTH . ' 个字数\n');
define('MODULE_PAYMENT_CC_TEXT_ERROR', '信用卡错误！');
define('TEXT_CARD_NOT_ACZEPTED', '抱歉, 我们无法接受这张 <b>%s</b> 信用卡, 请使用其它信用卡类型!<br />我们接受以下信用卡: ');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '请务必填写 CVV 信用卡安全验证码这个栏位.\n 否则订单将无法处理.\n CVV 安全验证码是信用卡背面签名处末端的 3 或 4 码 (美国运通).');
define('MODULE_PAYMENT_CC_TEXT_CVV_LINK', '<u>[说明]</u>');
define('HEADING_CVV', '安全码说明');
define('TEXT_CVV', '<table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="tableHeading"><b>Visa、Mastercard有提供三位数字卡号确认码</b></span></td></tr><tr><td><span class="boxText">基于交易的安全，我们需要您输入这个安全验证码，它通常是在信用卡签名处右下角的最后三个号码，与它并列的是信用卡的末四码</span></td></tr><tr><td align="center"><IMG src="images/cv_card.gif"></td></tr></table><hr /><table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="main"><b>American Express 的安全验证码有四位数字</b> </span></td></tr><tr><td><span class="boxText">基于交易的安全，我们需要您输入这个安全验证码，它通常是在信用卡签名处右下角的最后四个号码。</span></td></tr><tr><td align="center"><IMG src="images/cv_amex_card.gif"></td></tr></table>');
define('TEXT_CLOSE_WINDOW', '<u>关闭窗口</u> [x]');
define('MODULE_PAYMENT_CC_ACCEPTED_CARDS', '我们接受以下的信用卡:');
define('MODULE_PAYMENT_CC_TEXT_INFO', '使用信用卡轻松付款');
define('MODULE_PAYMENT_CC_STATUS_TITLE', '启动信用卡模组');
define('MODULE_PAYMENT_CC_STATUS_DESC', '你要用这个付款机制吗?');
define('MODULE_PAYMENT_CC_ALLOWED_TITLE', _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_PAYMENT_CC_ALLOWED_DESC', _MODULES_ZONE_ALLOWED_DESC);
define('CC_VAL_TITLE', '启用信用卡验证');
define('CC_VAL_DESC', '您确定要启用信用卡验证机制？');
define('CC_BLACK_TITLE', '启用信用卡黑名单验证');
define('CC_BLACK_DESC', '您确定要启用信用卡黑名单验证功能？');
define('CC_ENC_TITLE', '加密信用卡信息');
define('CC_ENC_DESC', '您确定要加密信用卡信息');
define('MODULE_PAYMENT_CC_SORT_ORDER_TITLE', _MODULES_SORT_ORDER_TITLE);
define('MODULE_PAYMENT_CC_SORT_ORDER_DESC', _MODULES_SORT_ORDER_DESC);
define('MODULE_PAYMENT_CC_ZONE_TITLE', _MODULES_ZONE_TITLE);
define('MODULE_PAYMENT_CC_ZONE_DESC', _MODULES_ZONE_DESC);
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_TITLE', _MODULES_SET_ORDER_STATUS_TITLE);
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_DESC', _MODULES_SET_ORDER_STATUS_DESC);
define('USE_CC_CVV_TITLE', '搜集 CVV 编码');
define('USE_CC_CVV_DESC', '确定要搜集 CVV 编码？');
define('USE_CC_ISS_TITLE', '搜集 Issue Number');
define('USE_CC_ISS_DESC', '确定要搜集Issue Number 编码？');
define('USE_CC_START_TITLE', '搜集启用日期');
define('USE_CC_START_DESC', '确定要搜集启用日期？');
define('CC_CVV_MIN_LENGTH_TITLE', '安全码长度');
define('CC_CVV_MIN_LENGTH_DESC', '定义安全码长度，预设是三码，如果您无法确认，建议您不要修改。');
define('MODULE_PAYMENT_CC_EMAIL_TITLE', '分割卡号收件信箱');
define('MODULE_PAYMENT_CC_EMAIL_DESC', '如果您输入了一个 eMail ，信用卡号码中间的部分会寄到这个住址(其他的部分会存贮在资料库，藉此保护客户的信息');
define('TEXT_CCVAL_ERROR_INVALID_DATE', '信用卡有效日期不正确.<br />请改正这笔资料.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '你所输入的信用卡卡号不正确.<br />请改正这笔资料.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '你所输入的信用卡卡号前 4 码是: %s<br />如果你确认所输入的没有错, 代表我们的系统暂无法接受你的信用卡类型.<br />请改正这笔资料.');
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