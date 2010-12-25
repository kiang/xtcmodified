<?php
/* --------------------------------------------------------------
   $Id: orders_status.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   -------------------------------------------------------------- */
   
define('HEADING_TITLE', '订单状态');

define('TABLE_HEADING_ORDERS_STATUS', '订单状态');
define('TABLE_HEADING_ACTION', '动作');

define('TEXT_INFO_EDIT_INTRO', '请做适当修改');
define('TEXT_INFO_ORDERS_STATUS_NAME', '订单状态：');
define('TEXT_INFO_INSERT_INTRO', '请填入新订单状态的相关资料');
define('TEXT_INFO_DELETE_INTRO', '确定要删除这个订单状态？');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', '新增订单状态');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', '编辑订单状态');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', '删除订单状态');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', '错误：预设的订单状态不可删除，请先将预设值设为其他订单状态后再试试');
define('ERROR_STATUS_USED_IN_ORDERS', '错误：这个订单目前正在使用');
define('ERROR_STATUS_USED_IN_HISTORY', '错误：这个订单记录正在使用');
?>