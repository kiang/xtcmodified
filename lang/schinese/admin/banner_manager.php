<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '广告总管');
define('TABLE_HEADING_BANNERS', '广告');
define('TABLE_HEADING_GROUPS', '群组');
define('TABLE_HEADING_STATISTICS', '浏览次数 / 点阅次数');
define('TABLE_HEADING_STATUS', '状态');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_BANNERS_TITLE', '广告名称：');
define('TEXT_BANNERS_URL', '广告连结：');
define('TEXT_BANNERS_GROUP', '广告群组：');
define('TEXT_BANNERS_NEW_GROUP', ', 或在下方输入一个新的群组');
define('TEXT_BANNERS_IMAGE', '图片：');
define('TEXT_BANNERS_IMAGE_LOCAL', ', 或在下方输入一个本机文件');
define('TEXT_BANNERS_IMAGE_TARGET', '图片目标 (存贮到)：');
define('TEXT_BANNERS_HTML_TEXT', 'HTML语法：');
define('TEXT_BANNERS_EXPIRES_ON', '过期日：');
define('TEXT_BANNERS_OR_AT', ', 或是经过');
define('TEXT_BANNERS_IMPRESSIONS', '浏览次数');
define('TEXT_BANNERS_SCHEDULED_AT', '预定日期：');
define('TEXT_BANNERS_BANNER_NOTE', '<b>广告提示：</b><ul><li>广告可以使用图片或HTML语法，但两者无法同时使用</li><li>HTML语法与图片同时存在时，HTML语法优先</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>图片提示：</b><ul><li>上传图片到资料夹，使用者必须有写入该资料夹的权限！</li><li>如果你不是要上传图片到 webserver 请不要填 \'存贮到\' 那一栏。(例如,你用的是本地(server端)的图片).</li><li> \'存贮到\' 栏位里所填的必须是一个已经存在的资料夹且结尾必须加反斜线(例, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>过期提示：</b><ul><li>两个栏位只能使用其中一个</li><li>如果不设置过期日，将该栏留白即可</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>预定日期提示：</b><ul><li>如果设置预定日期，广告会在到期日启动</li><li>所有预定日期的广告，一开始都会被设置为不启动，直到每一个广告的到期日再逐一启动</li></ul>');
define('TEXT_BANNERS_DATE_ADDED', '新增日期：');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', '预定日期： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', '过期日： <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', '过期在： <b>%s</b> 浏览次数');
define('TEXT_BANNERS_STATUS_CHANGE', '状态变更： %s');
define('TEXT_BANNERS_DATA', '资<br />料');
define('TEXT_BANNERS_LAST_3_DAYS', '过去三天');
define('TEXT_BANNERS_BANNER_VIEWS', '广告浏览数');
define('TEXT_BANNERS_BANNER_CLICKS', '广告击点数');
define('TEXT_INFO_DELETE_INTRO', '确定要删除这个广告？');
define('TEXT_INFO_DELETE_IMAGE', '删除广告图片');
define('SUCCESS_BANNER_INSERTED', '完成：广告已经加入');
define('SUCCESS_BANNER_UPDATED', '完成：广告已经更新');
define('SUCCESS_BANNER_REMOVED', '完成：广告已经移除');
define('SUCCESS_BANNER_STATUS_UPDATED', '完成：广告状态已经更新');
define('ERROR_BANNER_TITLE_REQUIRED', '错误：广告名称没有输入');
define('ERROR_BANNER_GROUP_REQUIRED', '错误：广告群组没有输入');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '错误：目标资料夹不存在');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '错误：目标资料夹无写入权限');
define('ERROR_IMAGE_DOES_NOT_EXIST', '错误：图片不存在');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '错误：图片无法移除');
define('ERROR_UNKNOWN_STATUS_FLAG', '错误：不明的状态旗标');
define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '错误：Graphs 资料夹不存在，请在\'images\' 底下新增 \'graphs\' 资料夹');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '错误：Graphs 资料夹无写入权限');
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT

?>