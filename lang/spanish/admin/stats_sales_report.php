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
define('REPORT_DATE_FORMAT', 'm/d/Y');
define('HEADING_TITLE', 'Informe de Ventas');
define('REPORT_TYPE_YEARLY', 'Anual');
define('REPORT_TYPE_MONTHLY', 'Mensual');
define('REPORT_TYPE_WEEKLY', 'Semanal');
define('REPORT_TYPE_DAILY', 'Diario');
define('REPORT_START_DATE', 'Fecha de inicio');
define('REPORT_END_DATE', 'Fecha de finalizacion (ambos inclusive)');
define('REPORT_DETAIL', 'Nivel de detalle');
define('REPORT_MAX', 'Max resultados');
define('REPORT_ALL', 'Todo');
define('REPORT_SORT', 'Clasificar los resultados por');
define('REPORT_EXP', 'Exponer');
define('REPORT_SEND', 'Correr');
define('EXP_NORMAL', 'Normal');
define('EXP_HTML', 'Formato de impresion');
define('EXP_CSV', 'CSV exportacion');
define('TABLE_HEADING_DATE', 'Fecha');
define('TABLE_HEADING_ORDERS', '# Pedidos');
define('TABLE_HEADING_ITEMS', '# Temas');
define('TABLE_HEADING_REVENUE', 'Revenue');
define('TABLE_HEADING_SHIPPING', 'Transporte');
define('DET_HEAD_ONLY', 'No hay datos');
define('DET_DETAIL', 'Mostrar productos');
define('DET_DETAIL_ONLY', 'Mostrar productos y precios');
define('SORT_VAL0', 'Predeterminado');
define('SORT_VAL1', 'Descripcion Z-A');
define('SORT_VAL2', 'Descripcion A-Z');
define('SORT_VAL3', '# Temas 1-9');
define('SORT_VAL4', '# Temas 9-1');
define('SORT_VAL5', 'Precio bajo-alto');
define('SORT_VAL6', 'Precio alto-bajo');
define('REPORT_STATUS_FILTER', 'El estado de sus pedidos');
define('REPORT_PAYMENT_FILTER', 'Metodo de pago');
define('SR_SEPARATOR1', ',');
define('SR_SEPARATOR2', ',');
define('SR_NEWLINE', "\n");
?>