<?php
/* --------------------------------------------------------------
   $Id: stats_sales_report.php 36 2006-12-28 13:19:07Z sun $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com
   http://www.xt-commerce.cn

   Copyright (c) 2007 xt:Commerce Shopsoftware
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(stats_sales_report.php,v 1.6 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (stats_sales_report.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   -------------------------------------------------------------- */

define('REPORT_DATE_FORMAT', 'Y. m. d');

define('HEADING_TITLE', '销售统计报表');

define('REPORT_TYPE_YEARLY', '年');
define('REPORT_TYPE_MONTHLY', '月');
define('REPORT_TYPE_WEEKLY', '星期');
define('REPORT_TYPE_DAILY', '日');
define('REPORT_START_DATE', '开始日期');
define('REPORT_END_DATE', '截止日期');
define('REPORT_DETAIL', '细节');
define('REPORT_MAX', '顶端');
define('REPORT_ALL', '全部');
define('REPORT_SORT', '排序');
define('REPORT_EXP', '输出');
define('REPORT_SEND', '传送');
define('EXP_NORMAL', '一般格式');
define('EXP_HTML', '使用HTML格式');
define('EXP_CSV', 'CSV格式');

define('TABLE_HEADING_DATE', '日期');
define('TABLE_HEADING_ORDERS', '# 订单序号');
define('TABLE_HEADING_ITEMS', '# 商品');
define('TABLE_HEADING_REVENUE', '收入');
define('TABLE_HEADING_SHIPPING', '运费');

define('DET_HEAD_ONLY', '不显示细节');
define('DET_DETAIL', '显示细节');
define('DET_DETAIL_ONLY', '金额细节');

define('SORT_VAL0', '标准');
define('SORT_VAL1', '说明');
define('SORT_VAL2', '说明');
define('SORT_VAL3', '# 产品');
define('SORT_VAL4', '#项目说明');
define('SORT_VAL5', '收入');
define('SORT_VAL6', '收入说明');

define('REPORT_STATUS_FILTER', '状态');
define('REPORT_PAYMENT_FILTER', '付款方式');

define('SR_SEPARATOR1', ';');
define('SR_SEPARATOR2', ';');
define('SR_NEWLINE', '<br />');
?>
