<?php
/* --------------------------------------------------------------
   $Id: ot_shipping.php 32 2006-12-28 13:15:17Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_shipping.php,v 1.4 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (ot_shipping.php,v 1.4 2003/08/13); www.nextcommerce.org

   
   Released under the GNU General Public License     
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_SHIPPING_TITLE', '运送');
  define('MODULE_ORDER_TOTAL_SHIPPING_DESCRIPTION', '订单运费');

  define('FREE_SHIPPING_TITLE', '免运费');
  define('FREE_SHIPPING_DESCRIPTION', '订单超过 %s 金额，免运费');

  define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_TITLE','订单总计模组显示运费');
  define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_DESC','要显示订单运费?');

  define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_TITLE','订单总计模组运费显示顺序');
  define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_DESC', '显示时的顺序');

  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_TITLE','订单总计模组启用免运费');
  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_DESC','要启动免运费设置?');

  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_TITLE','订单总计模组，当订单金额大于');
  define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_DESC','设置免运费金额');

  define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_TITLE','免运费设置');
  define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_DESC','设置提供免运费的地区');

  define('MODULE_ORDER_TOTAL_SHIPPING_TAX_CLASS_TITLE','税别');
  define('MODULE_ORDER_TOTAL_SHIPPING_TAX_CLASS_DESC','选择税别(限订单编辑)');
?>