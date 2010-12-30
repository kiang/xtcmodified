<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
define('HEADING_TITLE', '會員群組設定');
define('ENTRY_CUSTOMERS_FSK18', '啟用未成年禁止購買機制?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', '顯示未成年禁止購買商品?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', '訂單總計顯示稅額');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', '訂單金額下限：');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', '訂單金額上限：');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', '經由銀行轉帳');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', '經由信用卡支付');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', '現金交易');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', '折扣');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', '輸入禁止使用之付款方式');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', '公開');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', '輸入禁止使用之出貨方式');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', '價格');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', '含稅價');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', '這個客戶群組可以撰寫商品評論？');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', '這個客戶群組可以閱讀商品評論？');
define('ENTRY_GRADUATED_PRICES', '累進價格');
define('ENTRY_NO', '否');
define('ENTRY_OT_XMEMBER', '購物總金額折扣 ? :');
define('ENTRY_YES', '是');
define('ERROR_REMOVE_DEFAULT_CUSTOMER_STATUS', '注意: 無法刪除系統預設會員群組. 請先設定其他會員群組為預設後再嘗試一次.');
define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', '注意! 無法刪除系統預設會員群組');
define('ERROR_STATUS_USED_IN_CUSTOMERS', '注意: 這個會員群組仍有會員使用.');
define('ERROR_STATUS_USED_IN_HISTORY', '注意: 這個會員群組仍有會員的歷史訂單紀錄.');
define('TABLE_HEADING_ACTION', '動作');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', '累進價格');
define('TABLE_HEADING_CUSTOMERS_STATUS', '會員群組');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', '禁止的付款方式');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', '禁止的出貨方式');
define('TABLE_HEADING_DISCOUNT', '折扣');
define('TABLE_HEADING_TAX_PRICE', '價格/稅');
define('TAX_NO', '未稅');
define('TAX_YES', '含稅');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', '目前的會員群組:');
define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<b>顯示未成年購買之商品</b>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<b>禁止未成年購買商品</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<b>如果價格含稅設定為"否"</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '定義訂單金額下限或是保留空白');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '定義訂單金額上限或是保留空白');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<b>是否要允許這個群組的客戶經由銀行轉帳？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<b>是否要允許這個群組的客戶經由信用卡付款？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<b>是否要允許這個群組的客戶現金交易？</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<b>套用商品屬性折扣:</b><br />(Max. % 單一商品折扣)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<b>購物總金額折扣:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', '設定折扣 (0 至 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<b>設定折扣:</b><br />在 0 與 100% 之間.這個折扣將套用在商品屬性');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<b>累進價格</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '會員群組圖片:');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<b>會員群組名稱:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<b>禁止使用的付款方式:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<b>公開顯示折扣?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<b>禁止使用的出貨方式:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<b>商店顯示商品價格:</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<b>顯示價格含稅?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<b>撰寫產品評論</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<b>閱讀產品評論</b>');
define('TEXT_INFO_DELETE_INTRO', '確定刪除此會員群組?');
define('TEXT_INFO_EDIT_INTRO', '請作適當修改');
define('TEXT_INFO_INSERT_INTRO', '新增一個會員群組並填入下列資訊.');
define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', '刪除會員群組');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', '編輯會員群組');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', '新增會員群組');
define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<b>會員群組的商品定價準則</b>');
define('ENTRY_CUSTOMERS_STATUS_BASE', '為新會員的群組標價方式選擇一個準則，注意!如果你選擇了 Admin 管理員群組就沒法適用定價準則了.');
?>