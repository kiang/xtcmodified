<?php
/* --------------------------------------------------------------
   $Id: shipping_status.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '出货状态设置');
define('TABLE_HEADING_SHIPPING_STATUS', '包装＆寄送所需的时间');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_INFO_EDIT_INTRO', '请依照你的需要做修改');
define('TEXT_INFO_SHIPPING_STATUS_NAME', '出货时程:');
define('TEXT_INFO_INSERT_INTRO', '请输入新的出货时间');
define('TEXT_INFO_DELETE_INTRO', '确定删除此出货时间?');
define('TEXT_INFO_HEADING_NEW_SHIPPING_STATUS', '新的出货时间');
define('TEXT_INFO_HEADING_EDIT_SHIPPING_STATUS', '编辑出货时间');
define('TEXT_INFO_SHIPPING_STATUS_IMAGE', '图片:');
define('TEXT_INFO_HEADING_DELETE_SHIPPING_STATUS', '删除出货时间');
define('ERROR_REMOVE_DEFAULT_SHIPPING_STATUS', '错误: 预设的出货时间无法删除，请设置另一出货时间为预设后再试一次');
define('ERROR_STATUS_USED_IN_ORDERS', '错误: 这个出货时间仍有商品在使用');
define('ERROR_STATUS_USED_IN_HISTORY', '错误: 这个出货时间仍有商品纪录使用中');
?>