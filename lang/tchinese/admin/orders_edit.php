<?php
/* --------------------------------------------------------------
   $Id: orders_edit.php 

   XT-Commerce - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders.php,v 1.27 2003/02/16); www.oscommerce.com 
   (c) 2003   nextcommerce (orders.php,v 1.7 2003/08/14); www.nextcommerce.org
   (c) 2006    xt:Commerce (orders_edit.php,v 1.0); www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
// Allgemeine Texte
define('TABLE_HEADING', '編輯訂單');
define('TABLE_HEADING_ORDER', '訂單編號:&nbsp;');
define('TEXT_SAVE_ORDER', 'Finish Editing and Recalculate Order');
define('TEXT_EDIT_ADDRESS', 'Edit Address');
define('TEXT_EDIT_PRODUCTS', 'Edit Products');
define('TEXT_EDIT_SHIPPING', 'Edit Shipping Information');
define('TEXT_EDIT_GIFT', 'Add or Edit Gift Vouchers or Discount');
define('TEXT_EDIT_ADDRESS_SUCCESS', 'Address Saved');
define('IMAGE_EDIT_ADDRESS', 'Edit Address');
define('IMAGE_EDIT_PRODUCTS', 'Edit Products');
define('IMAGE_EDIT_OTHER', 'Edit Shipping Costs, Payment Terms, Vouchers and more');
// Adressaenderung
define('TEXT_INVOICE_ADDRESS', 'Customer Address');
define('TEXT_SHIPPING_ADDRESS', 'Shipping Address');
define('TEXT_BILLING_ADDRESS', 'Billing Address');
define('TEXT_COMPANY', 'Company:');
define('TEXT_NAME', 'Name:');
define('TEXT_STREET', 'Street');
define('TEXT_ZIP', 'Postcode:');
define('TEXT_CITY', 'City:');
define('TEXT_COUNTRY', 'Country:');
define('TEXT_CUSTOMER_GROUP', 'Customer Group from Order');
define('TEXT_CUSTOMER_EMAIL', 'E-mail:');
define('TEXT_CUSTOMER_TELEPHONE', 'Phone:');
define('TEXT_CUSTOMER_UST', 'VAT Reg No:');
// Artikelbearbeitung
define('TEXT_SMALL_NETTO', '(net)');
define('TEXT_PRODUCT_ID', 'pID:');
define('TEXT_PRODUCTS_MODEL', 'Product #:');
define('TEXT_QUANTITY', 'Qty:');
define('TEXT_PRODUCT', 'Product:');
define('TEXT_TAX', 'Tax:');
define('TEXT_PRICE', 'Price:');
define('TEXT_FINAL', 'Total:');
define('TEXT_PRODUCT_SEARCH', 'Search Products:');
define('TEXT_PRODUCT_OPTION', 'Attributes:');
define('TEXT_PRODUCT_OPTION_VALUE', 'Option Value:');
define('TEXT_PRICE', 'Price:');
define('TEXT_PRICE_PREFIX', 'Price Prefix:');
define('TEXT_SAVE_ORDER', '完成與重新計算');define('TEXT_EDIT_ADDRESS', '編輯住址');
define('TEXT_EDIT_PRODUCTS', '編輯商品');
define('TEXT_EDIT_SHIPPING', '編輯收貨資訊');
define('TEXT_EDIT_GIFT', '編輯訂單內的折價券細節');
define('TEXT_EDIT_ADDRESS_SUCCESS', '剛剛編輯的地址已成功儲存.');
define('IMAGE_EDIT_ADDRESS', '編輯地址');
define('IMAGE_EDIT_PRODUCTS', '編輯商品');
define('IMAGE_EDIT_OTHER', '編輯訂單上其它的細項');
// Adressaenderung
define('TEXT_INVOICE_ADDRESS', '客戶地址');
define('TEXT_SHIPPING_ADDRESS', '送貨地址');
define('TEXT_BILLING_ADDRESS', '帳單地址');
define('TEXT_COMPANY', '公司:');
define('TEXT_NAME', '名稱:');
define('TEXT_STREET', '街道門牌號碼');
define('TEXT_ZIP', '郵遞區號:');
define('TEXT_CITY', '鄉鎮市區:');
define('TEXT_COUNTRY', '國家:');
define('TEXT_CUSTOMER_GROUP', '客戶群組');
define('TEXT_CUSTOMER_EMAIL', 'eMail:');
define('TEXT_CUSTOMER_TELEPHONE', '電話:');
define('TEXT_CUSTOMER_UST', 'Vat-ID:');
// Artikelbearbeitung
define('TEXT_SMALL_NETTO', '(Net)');
define('TEXT_PRODUCT_ID', '商品編號:');
define('TEXT_PRODUCTS_MODEL', '商品型號:');
define('TEXT_QUANTITY', '數量:');
define('TEXT_PRODUCT', '商品:');
define('TEXT_TAX', '稅金:');
define('TEXT_PRICE', 'Price:');
define('TEXT_FINAL', 'Total:');
define('TEXT_PRODUCT_SEARCH', 'Search Products:');
define('TEXT_PRODUCT_OPTION', 'Attributes:');
define('TEXT_PRODUCT_OPTION_VALUE', 'Option Value:');
define('TEXT_PRICE', 'Price:');
define('TEXT_PRICE_PREFIX', 'Price Prefix:');
define('TEXT_SAVE_ORDER', 'Finish and Recalculate');
define('TEXT_INS', 'Add:');
define('TEXT_SHIPPING', 'Shipping Costs');
define('TEXT_COD_COSTS', 'COD Costs');
define('TEXT_VALUE', 'Price');
define('TEXT_DESC', 'insert');
// Sonstiges
define('TEXT_PAYMENT', 'Payment:');
define('TEXT_SHIPPING', 'Shipping:');
define('TEXT_LANGUAGE', 'Language:');
define('TEXT_CURRENCIES', 'Currency:');
define('TEXT_ORDER_TOTAL', 'Total:');
define('TEXT_SAVE', 'Save');
define('TEXT_ACTUAL', 'actual:');
define('TEXT_NEW', 'new:');
define('TEXT_PRICE', '成本：');define('TEXT_FINAL', '合計:');
define('TEXT_PRODUCT_SEARCH', '搜尋商品:');
define('TEXT_PRODUCT_OPTION', '商品選項:');
define('TEXT_PRODUCT_OPTION_VALUE', '選項數值:');
define('TEXT_PRICE', 'Price:');
define('TEXT_PRICE_PREFIX', '價格前綴符號:');
define('TEXT_SAVE_ORDER', 'Finish and Recalculate');
define('TEXT_INS', '新增：');
define('TEXT_SHIPPING', 'Shipping Costs');
define('TEXT_COD_COSTS', 'COD Costs');
define('TEXT_VALUE', 'Price');
define('TEXT_DESC', 'insert');
// Sonstiges
define('TEXT_PAYMENT', 'Payment:');
define('TEXT_SHIPPING', '運費：');define('TEXT_COD_COSTS', '連繫成本');
define('TEXT_VALUE', '價格');
define('TEXT_DESC', '新增');
// Sonstiges
define('TEXT_PAYMENT', '付款：');
define('TEXT_SHIPPING', 'Shipping:');
define('TEXT_LANGUAGE', '語言：');
define('TEXT_CURRENCIES', '稅率：');
define('TEXT_ORDER_TOTAL', '總計：');
define('TEXT_SAVE', '儲存');
define('TEXT_ACTUAL', '實際：');
define('TEXT_NEW', '新增：');
define('TEXT_PRICE', 'Costs: ');
// web28 2010-12-07 add new define('s
define('TEXT_ADD_TAX', 'incl. ');
define('TEXT_NO_TAX', '外加');
define('TEXT_ORDERS_EDIT_INFO', '<b> Important Notes: </ b> <br>
Please check with the address/customer data, the right customer group choose <br>
When you change the customer group, all invoice items are newly save! <br>
Shippincosts must be changed manually! <br>
In this case, depending on the customer group the shippingcost entered gross or net! <br>
');
?>