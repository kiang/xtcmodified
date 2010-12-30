<?php
/* --------------------------------------------------------------
   $Id: backup.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
define('HEADING_TITLE', '资料备份总管');
define('TABLE_HEADING_TITLE', '备份档名');
define('TABLE_HEADING_FILE_DATE', '日期');
define('TABLE_HEADING_FILE_SIZE', '大小');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_INFO_HEADING_NEW_BACKUP', '新增备份');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', '本地主机回复');
define('TEXT_INFO_NEW_BACKUP', '资料备份可能需要几分钟，请勿中断');
define('TEXT_INFO_UNPACK', '<br /><br />(从压缩档解压缩之后)');
define('TEXT_INFO_RESTORE', '资料库回复时请勿中断<br /><br />文件越 大，则需要更多处理时间！<br /><br />如果可以，请使用 mysql client 指令<br /><br />例如：<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', '资料库回复时请勿中断<br /><br />备份的资料库若越大，则需要更多处理时间！');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', '上传的文件必须为sql (text)的文件格式');
define('TEXT_INFO_DATE', '日期：');
define('TEXT_INFO_SIZE', '大小：');
define('TEXT_INFO_COMPRESSION', '压缩：');
define('TEXT_INFO_USE_GZIP', '使用GZIP');
define('TEXT_INFO_USE_ZIP', '使用ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', '不压缩 (纯SQL资料库档)');
define('TEXT_INFO_DOWNLOAD_ONLY', '只用下载 (不存放在 server 端)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', '最好经由 HTTPS 的连线方式');
define('TEXT_DELETE_INTRO', '确定要删除这个备份？');
define('TEXT_NO_EXTENSION', '无');
define('TEXT_BACKUP_DIRECTORY', '备份资料夹：');
define('TEXT_LAST_RESTORATION', '最后一次回复资料库：');
define('TEXT_FORGET', '(<u>忽略</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', '错误：备份资料夹不存在，请检查configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', '错误：备份资料夹无写入权限');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', '错误：下载的连结错误');
define('SUCCESS_LAST_RESTORE_CLEARED', '完成：最后一次回复资料库资料已经清除');
define('SUCCESS_DATABASE_SAVED', '完成：资料库已经存贮');
define('SUCCESS_DATABASE_RESTORED', '完成：资料库已经回复');
define('SUCCESS_BACKUP_DELETED', '完成：备份资料库已经移除');
define('SUCCESS_BACKUP_UPLOAD', 'Success: The backup file has been uploaded.');
//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Complete 'INSERT's</b><br> - field names are entered into each row INSERT (increased backup)");
?>
