<?php
/* --------------------------------------------------------------
   $Id: shipping_status.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', 'Estado del Envío');
define('TABLE_HEADING_SHIPPING_STATUS', 'Estado del Envío');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_SHIPPING_STATUS_NAME', 'Estado del Envío:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca el nuevo estado del envío con sus correspondientes datos');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que desea eliminar esta condición de envío?');
define('TEXT_INFO_HEADING_NEW_SHIPPING_STATUS', 'Nuevo el estado del envío');
define('TEXT_INFO_HEADING_EDIT_SHIPPING_STATUS', 'Modificar el estado del envío');
define('TEXT_INFO_SHIPPING_STATUS_IMAGE', 'Imagen:');
define('TEXT_INFO_HEADING_DELETE_SHIPPING_STATUS', 'Suprimir el estado del envío');
define('ERROR_REMOVE_DEFAULT_SHIPPING_STATUS', 'Error: El valor por defecto el estado del envío no se pueden quitar. Por favor, defina el estado del envío otro por defecto, y vuelve a intentarlo.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Error: Este es el estado del envío que actualmente se utilizan en los productos.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este es el estado del envío que actualmente se utilizan en los productos.');
?>