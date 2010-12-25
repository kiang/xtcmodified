<?php
/* --------------------------------------------------------------
   $Id: ot_cod_fee.php 51 2007-01-03 16:47:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas  http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', '貨到付款費用');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', '貨到付款費用計算方式');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE', '貨到付款費用');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC', '貨到付款費用計算方式');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE', '排序');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC', '顯示順序');

  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_TITLE', '統一運費');
  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_TITLE', '每單位運費');
  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_TITLE', '級距運費表');
  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_TITLE', '區域運費');
  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_AP_TITLE', '奧地利郵政');
  define('MODULE_ORDER_TOTAL_COD_FEE_AP_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_TITLE', '瑞士郵政');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_TITLE', '法國國際郵政快遞');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_TITLE', 'DHL 奧地利');
  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_DP_TITLE', '德國郵政總局');
  define('MODULE_ORDER_TOTAL_COD_FEE_DP_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_TITLE','UPS 國際包裹(標準)');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_TITLE','UPS 國際包裹(快捷)');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_TITLE', '免運費(訂單總計模組)');
  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_DESC', '&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
  
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_TITLE','免運費(出貨模組-免運費)');
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE', '稅別');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC', '選擇稅別');
  
  // Taiwan
  
  define('MODULE_ORDER_TOTAL_COD_FEE_POST_TITLE','台灣郵政');
  define('MODULE_ORDER_TOTAL_COD_FEE_POST_DESC' ,'&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_ECAN_TITLE','宅配通');
  define('MODULE_ORDER_TOTAL_COD_FEE_ECAN_DESC' ,'&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_TCAT_TITLE','宅急便');
  define('MODULE_ORDER_TOTAL_COD_FEE_TCAT_DESC' ,'&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');
?>