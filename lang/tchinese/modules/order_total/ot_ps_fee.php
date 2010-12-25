<?php
/* --------------------------------------------------------------
   $Id: ot_ps_fee.php 32 2006-12-28 13:15:17Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plnkers ; http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


  define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', '私人運送');
  define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', '計算私人運送收費');

  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE','私人運送');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC','計算私人運送收費');

  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE','排序');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC','顯示順序');

  define('MODULE_ORDER_TOTAL_PS_FEE_FLAT_TITLE','統一運費');
  define('MODULE_ORDER_TOTAL_PS_FEE_FLAT_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_ITEM_TITLE','每單位運費');
  define('MODULE_ORDER_TOTAL_PS_FEE_ITEM_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_TABLE_TITLE','級距運費表');
  define('MODULE_ORDER_TOTAL_PS_FEE_TABLE_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_ZONES_TITLE','區域運費');
  define('MODULE_ORDER_TOTAL_PS_FEE_ZONES_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_AP_TITLE','奧地利郵政');
  define('MODULE_ORDER_TOTAL_PS_FEE_AP_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_DP_TITLE','德國郵政');
  define('MODULE_ORDER_TOTAL_PS_FEE_DP_DESC','&lt;ISO2-編碼&gt;:&lt;價格&gt;, ....<br />
  ISO2-編碼00表示使用於所有未指定的國家，如果設定了00，該運費會放在合計的後端，如果沒有設定 00:9.99 這個格式，運費將無法計算(視國家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE','稅別');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC','選擇稅別');
?>
