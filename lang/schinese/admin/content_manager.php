<?php
/* --------------------------------------------------------------
   $Id: content_manager.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2003	 nextcommerce (content_manager.php,v 1.8 2003/08/25); www.nextcommerce.org
   
   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '内容管理');
define('HEADING_CONTENT', '网站消息内容管理');
define('HEADING_PRODUCTS_CONTENT', '商品内容');
define('TABLE_HEADING_CONTENT_ID', '连结 ID');
define('TABLE_HEADING_CONTENT_TITLE', '标题');
define('TABLE_HEADING_CONTENT_FILE', '文件');
define('TABLE_HEADING_CONTENT_STATUS', '区块状态');
define('TABLE_HEADING_CONTENT_BOX', '区块');
define('TABLE_HEADING_PRODUCTS_ID', 'ID');
define('TABLE_HEADING_PRODUCTS', '商品介绍');
define('TABLE_HEADING_PRODUCTS_CONTENT_ID', 'ID');
define('TABLE_HEADING_LANGUAGE', '语言');
define('TABLE_HEADING_CONTENT_NAME', '名称/文件名称');
define('TABLE_HEADING_CONTENT_LINK', '连结');
define('TABLE_HEADING_CONTENT_HITS', '查看');
define('TABLE_HEADING_CONTENT_GROUP', '组别');
define('TABLE_HEADING_CONTENT_SORT', '排序');
define('TEXT_YES', '是');
define('TEXT_NO', '否');
define('TABLE_HEADING_CONTENT_ACTION', '动作');
define('TEXT_DELETE', '删除');
define('TEXT_EDIT', '编辑');
define('TEXT_PREVIEW', '预览');
define('CONFIRM_DELETE', '删除内容 ?');
define('CONTENT_NOTE', '<font color="ff0000">*</font> 表示为系统必须文件,无法删除!');
// edit
define('TEXT_LANGUAGE', '语言:');
define('TEXT_STATUS', '显示:');
define('TEXT_STATUS_DESCRIPTION', '如果勾选, 在区块中将会出现连结');
define('TEXT_TITLE', '连结标题:');
define('TEXT_TITLE_FILE', '标题/档名:');
define('TEXT_SELECT', '-请选择-');
define('TEXT_HEADING', '内容标题:');
define('TEXT_CONTENT', '内容:');
define('TEXT_UPLOAD_FILE', '上传文件:');
define('TEXT_UPLOAD_FILE_LOCAL', '(由本机电脑)');
define('TEXT_CHOOSE_FILE', '选择文件:');
define('TEXT_CHOOSE_FILE_DESC', '你可以选择一个已经存在的文件.');
define('TEXT_NO_FILE', '删除选择');
define('TEXT_CHOOSE_FILE_SERVER', '(如果你已经由FTP上传文件至<i>(media/content)</i>, 你可以用下拉菜单选择文件.');
define('TEXT_CURRENT_FILE', '目前文件：');
define('TEXT_FILE_DESCRIPTION', '<b>提示:</b><br />你也可以上传 <b>.html</b> 或 <b>.htm</b> 取代内容.<br />如果你选择使用上传之文件, 则下方内容将会被忽略.<br /><br />');
define('ERROR_FILE', '错误的文件格式 (只能是 .html 或 .htm)');
define('ERROR_TITLE', '请输入标题');
define('ERROR_COMMENT', '请输入文件说明!');
define('TEXT_FILE_FLAG', '区块:');
define('TEXT_PARENT', '主要说明:');
define('TEXT_PARENT_DESCRIPTION', '指向至这篇文件');
define('TEXT_PRODUCT', '商品:');
define('TEXT_LINK', '连结:');
define('TEXT_SORT_ORDER', '排序:');
define('TEXT_GROUP', '语言组别:');
define('TEXT_GROUP_DESC', '用这个组别ID可以从不同的语系一起连结至类似的项目.');
define('TEXT_CONTENT_DESCRIPTION', '用这个内容管理可以位商品增加商品说明 , 例如教学, 商品细节说明, 这内容会显示在商品简介的页面.<br /><br />');
define('TEXT_FILENAME', '使用中的文件:');
define('TEXT_FILE_DESC', '说明内容:');
define('USED_SPACE', '文件使用空间:');
define('TABLE_HEADING_CONTENT_FILESIZE', '文件大小');
?>