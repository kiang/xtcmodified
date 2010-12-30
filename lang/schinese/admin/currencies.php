<?php
/* --------------------------------------------------------------
   $Id: currencies.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(currencies.php,v 1.15 2003/05/02); www.oscommerce.com 
   (c) 2003	 nextcommerce (currencies.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', '货币设置');
define('TABLE_HEADING_CURRENCY_NAME', '货币名称');
define('TABLE_HEADING_CURRENCY_CODES', '代码');
define('TABLE_HEADING_CURRENCY_VALUE', '汇率比值');
define('TABLE_HEADING_ACTION', '动作');
define('TEXT_INFO_EDIT_INTRO', '请做适当修改');
define('TEXT_INFO_CURRENCY_TITLE', '名称：');
define('TEXT_INFO_CURRENCY_CODE', '代码：');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', '左边符号：');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', '右边符号：');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', '小数点符号：');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', '千位符号：');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', '显示小数点后几位：');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '最后更新：');
define('TEXT_INFO_CURRENCY_VALUE', '汇率比值：');
define('TEXT_INFO_CURRENCY_EXAMPLE', '输出范例：');
define('TEXT_INFO_INSERT_INTRO', '请填入新货币的相关资料');
define('TEXT_INFO_DELETE_INTRO', '确定要删除这个货币？');
define('TEXT_INFO_HEADING_NEW_CURRENCY', '新增货币');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', '编辑货币');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', '删除货币');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (必须手动更新汇率表)');
define('TEXT_INFO_CURRENCY_UPDATED', '%s (%s) 汇率已更新完成');
define('ERROR_REMOVE_DEFAULT_CURRENCY', '错误：预设的货币不可删除，请先将预设值设置为其他货币，再删除。');
define('ERROR_CURRENCY_INVALID', '错误： %s (%s) 汇率无法由 %s更新，检查否为正确的货币代码?');
?>