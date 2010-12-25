<?php
/* --------------------------------------------------------------
   $Id: freeamount.php 48 2007-01-03 10:42:30Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.tw   
   http://www.xt-commerce.cn


   Copyright (c) 2007 xt:Commerce Shopsoftware
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( freeamount.php,v 1.01 2002/01/24 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (freeamount.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   freeamountv2-p1         	Autor:	dwk

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', '免運費');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', '免運費訂單金額下限');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', '免運費訂單金額下限： %s');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER', '排序');

define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE', '啟用訂單金額下限免運費功能');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC', '您確定要提供免運費功能？');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE', '啟用顯示');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC', '在還沒達到訂單金額下限時是否要提示客戶？');
define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_TITLE', '最低金額');
define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_DESC', '在達到免運費條件之前的訂單金額下限？');

define('MODULE_SHIPPING_FREEAMOUNT_TAX_CLASS_TITLE' , _MODULES_TAX_ZONE_TITLE);
define('MODULE_SHIPPING_FREEAMOUNT_TAX_CLASS_DESC' ,_MODULES_TAX_ZONE_DESC);
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , _MODULES_ZONE_TITLE);
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , _MODULES_ZONE_DESC);
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , _MODULES_SORT_ORDER_TITLE);
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , _MODULES_SORT_ORDER_DESC);
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , _MODULES_ZONE_ALLOWED_TITLE);
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , _MODULES_ZONE_ALLOWED_DESC);
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', _MODULE_INVALID_SHIPPING_ZONE);
define('MODULE_SHIPPING_FREEAMOUNT_UNDEFINED_RATE', _MODULE_UNDEFINED_SHIPPING_RATE);
?>