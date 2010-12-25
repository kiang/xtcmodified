<?php
/* --------------------------------------------------------------
   $Id: manufacturers.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(manufacturers.php,v 1.14 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (manufacturers.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   -------------------------------------------------------------- */

define('HEADING_TITLE', '製造廠商');

define('TABLE_HEADING_MANUFACTURERS', '製造廠商');
define('TABLE_HEADING_ACTION', '動作');

define('TEXT_HEADING_NEW_MANUFACTURER', '新增製造廠商');
define('TEXT_HEADING_EDIT_MANUFACTURER', '編輯製造廠商');
define('TEXT_HEADING_DELETE_MANUFACTURER', '刪除製造廠商');

define('TEXT_MANUFACTURERS', '製造廠商：');
define('TEXT_DATE_ADDED', '新增日期：');
define('TEXT_LAST_MODIFIED', '最後修改日期：');
define('TEXT_PRODUCTS', '商品：');
define('TEXT_IMAGE_NONEXISTENT', '圖片不存在');

define('TEXT_NEW_INTRO', '請填入新製造廠商的相關資料');
define('TEXT_EDIT_INTRO', '請做適當修改');

define('TEXT_MANUFACTURERS_NAME', '製造廠商名稱：');
define('TEXT_MANUFACTURERS_IMAGE', '製造廠商圖片：');
define('TEXT_MANUFACTURERS_URL', '製造廠商網頁：');

define('TEXT_DELETE_INTRO', '確定要刪除這個製造廠商？');
define('TEXT_DELETE_IMAGE', '刪除製造廠商圖片？');
define('TEXT_DELETE_PRODUCTS', '從這個製造廠商內刪除商品？(包含商品評論、商品特價、即將上市商品)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>警告：</b> 還有 %s 商品仍然連結到這個製造廠商！');

define('ERROR_DIRECTORY_NOT_WRITEABLE', '錯誤：資料夾無法寫入，請設定正確的使用者權限給： %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', '錯誤： 資料夾不存在: %s');
?>