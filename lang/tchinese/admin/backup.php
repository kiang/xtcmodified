<?php
/* --------------------------------------------------------------
   $Id: backup.php 30 2006-12-27 16:34:34Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   -------------------------------------------------------------- */

define('HEADING_TITLE', '資料備份總管');

define('TABLE_HEADING_TITLE', '備份檔名');
define('TABLE_HEADING_FILE_DATE', '日期');
define('TABLE_HEADING_FILE_SIZE', '大小');
define('TABLE_HEADING_ACTION', '動作');

define('TEXT_INFO_HEADING_NEW_BACKUP', '新增備份');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', '本地主機回復');
define('TEXT_INFO_NEW_BACKUP', '資料備份可能需要幾分鐘，請勿中斷');
define('TEXT_INFO_UNPACK', '<br /><br />(從壓縮檔解壓縮之後)');
define('TEXT_INFO_RESTORE', '資料庫回復時請勿中斷<br /><br />檔案越 大，則需要更多處理時間！<br /><br />如果可以，請使用 mysql client 指令<br /><br />例如：<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', '資料庫回復時請勿中斷<br /><br />備份的資料庫若越大，則需要更多處理時間！');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', '上傳的檔案必須為sql (text)的檔案格式');
define('TEXT_INFO_DATE', '日期：');
define('TEXT_INFO_SIZE', '大小：');
define('TEXT_INFO_COMPRESSION', '壓縮：');
define('TEXT_INFO_USE_GZIP', '使用GZIP');
define('TEXT_INFO_USE_ZIP', '使用ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', '不壓縮 (純SQL資料庫檔)');
define('TEXT_INFO_DOWNLOAD_ONLY', '只用下載 (不存放在 server 端)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', '最好經由 HTTPS 的連線方式');
define('TEXT_NO_EXTENSION', '無');
define('TEXT_BACKUP_DIRECTORY', '備份資料夾：');
define('TEXT_LAST_RESTORATION', '最後一次回復資料庫：');
define('TEXT_FORGET', '(<u>忽略</u>)');
define('TEXT_DELETE_INTRO', '確定要刪除這個備份？');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '錯誤：備份資料夾不存在，請檢查configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '錯誤：備份資料夾無寫入權限');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '錯誤：下載的連結錯誤');

define('SUCCESS_LAST_RESTORE_CLEARED', '完成：最後一次回復資料庫資料已經清除');
define('SUCCESS_DATABASE_SAVED', '完成：資料庫已經儲存');
define('SUCCESS_DATABASE_RESTORED', '完成：資料庫已經回復');
define('SUCCESS_BACKUP_DELETED', '完成：備份資料庫已經移除');
?>