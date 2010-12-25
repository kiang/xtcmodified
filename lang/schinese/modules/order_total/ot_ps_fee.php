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
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Pl�nkers ; http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


  define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', '私人运送');
  define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', '计算私人运送收费');

  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE','私人运送');
  define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC','计算私人运送收费');

  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE','排序');
  define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC','显示顺序');

  define('MODULE_ORDER_TOTAL_PS_FEE_FLAT_TITLE','统一运费');
  define('MODULE_ORDER_TOTAL_PS_FEE_FLAT_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_ITEM_TITLE','每单位运费');
  define('MODULE_ORDER_TOTAL_PS_FEE_ITEM_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_TABLE_TITLE','级距运费表');
  define('MODULE_ORDER_TOTAL_PS_FEE_TABLE_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_ZONES_TITLE','区域运费');
  define('MODULE_ORDER_TOTAL_PS_FEE_ZONES_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_AP_TITLE','奥地利邮政');
  define('MODULE_ORDER_TOTAL_PS_FEE_AP_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_DP_TITLE','德国邮政');
  define('MODULE_ORDER_TOTAL_PS_FEE_DP_DESC','&lt;ISO2-编码&gt;:&lt;价格&gt;, ....<br />
  ISO2-编码00表示使用于所有未指定的国家，如果设置了00，该运费会放在合计的后端，如果没有设置 00:9.99 这个格式，运费将无法计算(视国家而定)。');

  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE','税别');
  define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC','选择税别');
?>
