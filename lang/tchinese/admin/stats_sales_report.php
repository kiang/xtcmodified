<?php
/* --------------------------------------------------------------
   $Id: stats_sales_report.php 1311 2005-10-18 12:30:40Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(stats_sales_report.php,v 1.6 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (stats_sales_report.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('REPORT_DATE_FORMAT', 'Y. m. d');
define('HEADING_TITLE', '銷售統計報表');
define('REPORT_TYPE_YEARLY', '年');
define('REPORT_TYPE_MONTHLY', '月');
define('REPORT_TYPE_WEEKLY', '星期');
define('REPORT_TYPE_DAILY', '日');
define('REPORT_START_DATE', '開始日期');
define('REPORT_END_DATE', '截止日期');
define('REPORT_DETAIL', '細節');
define('REPORT_MAX', '頂端');
define('REPORT_ALL', '全部');
define('REPORT_SORT', '排序');
define('REPORT_EXP', '輸出');
define('REPORT_SEND', '傳送');
define('EXP_NORMAL', '一般格式');
define('EXP_HTML', '使用HTML格式');
define('EXP_CSV', 'CSV格式');
define('TABLE_HEADING_DATE', '日期');
define('TABLE_HEADING_ORDERS', '# 訂單序號');
define('TABLE_HEADING_ITEMS', '# 商品');
define('TABLE_HEADING_REVENUE', '收入');
define('TABLE_HEADING_SHIPPING', '運費');
define('DET_HEAD_ONLY', '不顯示細節');
define('DET_DETAIL', '顯示細節');
define('DET_DETAIL_ONLY', '金額細節');
define('SORT_VAL0', '標準');
define('SORT_VAL1', '說明');
define('SORT_VAL2', '說明');
define('SORT_VAL3', '# 產品');
define('SORT_VAL4', '#項目說明');
define('SORT_VAL5', '收入');
define('SORT_VAL6', '收入說明');
define('REPORT_STATUS_FILTER', '狀態');
define('REPORT_PAYMENT_FILTER', '付款方式');
define('SR_SEPARATOR1', ';');
define('SR_SEPARATOR2', ';');
define('SR_NEWLINE', '<br />');
?>