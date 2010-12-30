<?php
/* --------------------------------------------------------------
   $Id: specials.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(specials.php,v 1.10 2002/01/31); www.oscommerce.com 
   (c) 2003	 nextcommerce (specials.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '特价商品');
define('TABLE_HEADING_PRODUCTS', '商品');
define('TABLE_HEADING_PRODUCTS_PRICE', '商品价格');
define('TABLE_HEADING_STATUS', '状态');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_SPECIALS_PRODUCT', '商品：');
define('TEXT_SPECIALS_SPECIAL_PRICE', '特价：');
define('TEXT_SPECIALS_SPECIAL_QUANTITY', '数量：');
// BOF - Tomcraft - 2009-11-06 - Use "iso 8601" for the date format
//define('TEXT_SPECIALS_EXPIRES_DATE', '特价结束日：');
// EOF - Tomcraft - 2009-11-06 - Use "iso 8601" for the date format
// BOF - Tomcraft - 2009-11-06 - extended description
//define('TEXT_SPECIALS_PRICE_TIP', '<b>Specials Notes:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>');
define('TEXT_SPECIALS_PRICE_TIP', '<b>提示：</b><ul><li>你可以在特价栏内直接输入折扣百分比，例如：<b>20%</b></li><li>也可以直接输入特价金额， 例如：<b>49.99</b></li><li>「特价结束日期」若为空白，表示特价没有结束日期，一直特价到将该特价商品删除为止。</li></ul>');
// EOF - Tomcraft - 2009-11-06 - extended description
define('TEXT_INFO_DATE_ADDED', '新增日期：');
define('TEXT_INFO_LAST_MODIFIED', '最后修改日期：');
define('TEXT_INFO_NEW_PRICE', '新价格：');
define('TEXT_INFO_ORIGINAL_PRICE', '原价格：');
define('TEXT_INFO_PERCENTAGE', '折扣：');
define('TEXT_INFO_EXPIRES_DATE', '特价结束日期：');
define('TEXT_INFO_STATUS_CHANGE', '状态变更：');
define('TEXT_INFO_HEADING_DELETE_SPECIALS', '删除特价商品');
define('TEXT_INFO_DELETE_INTRO', '确定要删除这个特价商品？');
define('TEXT_IMAGE_NONEXISTENT', '没有图片!');
?>