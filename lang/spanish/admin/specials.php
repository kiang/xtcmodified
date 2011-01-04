<?php
/* --------------------------------------------------------------
   $Id: specials.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(specials.php,v 1.10 2002/01/31); www.oscommerce.com 
   (c) 2003	 nextcommerce (specials.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', 'Especiales');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio de los Productos');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_SPECIALS_PRODUCT', 'Producto:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Precio Especial:');
define('TEXT_SPECIALS_SPECIAL_QUANTITY', 'Quantity:');
// BOF - Tomcraft - 2009-11-06 - Use "iso 8601" for the date format
//define('TEXT_SPECIALS_EXPIRES_DATE', 'G&uuml;ltig bis:<br /><small>(dd.mm.yyyy)</small>'
define('TEXT_SPECIALS_EXPIRES_DATE', 'Fecha de caducidad:');
// EOF - Tomcraft - 2009-11-06 - Use "iso 8601" for the date format
// BOF - Tomcraft - 2009-11-06 - extended description
//define('TEXT_SPECIALS_PRICE_TIP', '<b>Specials Notes:</b><ul><li>You can enter a percentage to deduct in the Specials Price field, for example: <b>20%</b></li><li>If you enter a new price, the decimal separator must be a \'.\' (decimal-point), example: <b>49.99</b></li><li>Leave the expiry date empty for no expiration</li></ul>');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notas Especiales:</b><ul><li>Puede introducir un porcentaje de deducción en el campo Precio especiales, por ejemplo: <b>20%</b></li><li>Si introduce un nuevo precio, el separador decimal debe ser una \'.\' (punto decimal), por ejemplo: <b>49.99</b></li><li>Salga de la fecha de caducidad de vacío sin caducidad</li></ul>');
// EOF - Tomcraft - 2009-11-06 - extended description
define('TEXT_INFO_DATE_ADDED', 'Fecha en que se agregó:');
define('TEXT_INFO_LAST_MODIFIED', 'Ultima Modificación:');
define('TEXT_INFO_NEW_PRICE', 'Nuevo Precio:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Precio original:');
define('TEXT_INFO_PERCENTAGE', 'Porcentaje:');
define('TEXT_INFO_EXPIRES_DATE', 'En Expira:');
define('TEXT_INFO_STATUS_CHANGE', 'Cambio de estado:');
define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Eliminar Especial');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que desea eliminar el precio de los productos especiales?');
define('TEXT_IMAGE_NONEXISTENT', 'No hay imagen Disponible!');
?>