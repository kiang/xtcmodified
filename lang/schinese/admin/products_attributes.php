<?php
/* --------------------------------------------------------------
   $Id: products_attributes.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(products_attributes.php,v 1.9 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (products_attributes.php,v 1.4 2003/08/1); www.nextcommerce.org

   Released under the GNU General Public License
   -------------------------------------------------------------- */

define('HEADING_TITLE_OPT', '选项标题（规格主分类）');
define('HEADING_TITLE_VAL', '选项细分值（规格内容）');
define('HEADING_TITLE_ATRIB', '商品属性');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '品名');
define('TABLE_HEADING_OPT_NAME', '选项规格标题');
define('TABLE_HEADING_OPT_VALUE', '选项内容');
define('TABLE_HEADING_OPT_PRICE', '金额');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '选项价格调整 (+/-)');
define('TABLE_HEADING_ACTION', '动作');
define('TABLE_HEADING_DOWNLOAD', '下载商品：');
define('TABLE_TEXT_FILENAME', '档名：');
define('TABLE_TEXT_MAX_DAYS', '到期日：');
define('TABLE_TEXT_MAX_COUNT', '最大下载数：');

define('MAX_ROW_LISTS_OPTIONS', 10);

define('TEXT_WARNING_OF_DELETE', '这个规格属性目前还有商品在使用中，无法删除！....请先到「商品属性管理」区，移除属性后才能删除！');
define('TEXT_OK_TO_DELETE', '这个规格属性没有商品在使用中可以完全删除了！确定要删除？');
define('TEXT_SEARCH','搜寻:');
define('TEXT_OPTION_ID', 'ID 排列');
define('TEXT_OPTION_NAME', '名称排列');

// SP2.2
define('TABLE_HEADING_OPT_IMAGE','图档');
define('TABLE_HEADING_OPT_DESC','内容');
define('TABLE_TEXT_DELETE','删除图档');
define('TEXT_OPTIONS_IMAGE','选择图档')
?>