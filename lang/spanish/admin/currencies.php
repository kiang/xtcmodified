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
define('HEADING_TITLE', 'Monedas');
define('TABLE_HEADING_CURRENCY_NAME', 'Monedas');
define('TABLE_HEADING_CURRENCY_CODES', 'Código');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valor');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_INFO_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_INFO_CURRENCY_TITLE', 'Título:');
define('TEXT_INFO_CURRENCY_CODE', 'Código:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Símbolo restante:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Símbolo de la derecha:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Punto decimal:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Miles de Centros:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimales:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Última Actualización:');
define('TEXT_INFO_CURRENCY_VALUE', 'Valor:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Ejemplo de salida:');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, introduzca la nueva moneda con sus datos');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que desea eliminar esta moneda?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nueva Moneda');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Editar Moneda');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Eliminar de divisas');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (requiere una actualización manual de valores de la moneda)');
define('TEXT_INFO_CURRENCY_UPDATED', 'El tipo de cambio de %s (%s) se ha actualizado con éxito');
define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Error: El valor por defecto la moneda no se puede quitar. Seleccione otra moneda como por defecto, y vuelve a intentarlo.');
define('ERROR_CURRENCY_INVALID', 'Error: El tipo de cambio para el servidor %s (%s) no se actualizó. ¿Es válido un código de moneda?');
?>