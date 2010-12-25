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


  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', '货到付款费用');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', '货到付款费用计算方式');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE', '货到付款费用');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC', '货到付款费用计算方式');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE', '排序');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC', '显示顺序');

  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_TITLE', '统一运费');
  define('MODULE_ORDER_TOTAL_COD_FEE_FLAT_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_TITLE', '每单位运费');
  define('MODULE_ORDER_TOTAL_COD_FEE_ITEM_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_TITLE', '级距运费表');
  define('MODULE_ORDER_TOTAL_COD_FEE_TABLE_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_TITLE', '区域运费');
  define('MODULE_ORDER_TOTAL_COD_FEE_ZONES_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_AP_TITLE', '奥地利邮政');
  define('MODULE_ORDER_TOTAL_COD_FEE_AP_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_TITLE', '瑞士邮政');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHP_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_TITLE', '法国国际邮政快递');
  define('MODULE_ORDER_TOTAL_COD_FEE_CHRONOPOST_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_TITLE', 'DHL 奥地利');
  define('MODULE_ORDER_TOTAL_COD_FEE_DHL_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_DP_TITLE', '德国邮政总局');
  define('MODULE_ORDER_TOTAL_COD_FEE_DP_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_TITLE','UPS 国际包裹(标准)');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPS_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_TITLE','UPS 国际包裹(快捷)');
  define('MODULE_ORDER_TOTAL_COD_FEE_UPSE_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_TITLE', '免运费(订单总计模组)');
  define('MODULE_ORDER_TOTAL_COD_FEE_FREE_DESC', '&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
  
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_TITLE','免运费(出货模组-免运费)');
  define('MODULE_ORDER_TOTAL_FREEAMOUNT_FREE_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE', '税别');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC', '选择税别');
  
  // Taiwan
  
  define('MODULE_ORDER_TOTAL_COD_FEE_POST_TITLE','台湾邮政');
  define('MODULE_ORDER_TOTAL_COD_FEE_POST_DESC' ,'&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_ECAN_TITLE','宅配通');
  define('MODULE_ORDER_TOTAL_COD_FEE_ECAN_DESC' ,'&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
  
  define('MODULE_ORDER_TOTAL_COD_FEE_TCAT_TITLE','宅急便');
  define('MODULE_ORDER_TOTAL_COD_FEE_TCAT_DESC' ,'&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');
?>