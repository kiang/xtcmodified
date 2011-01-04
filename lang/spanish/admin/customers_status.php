<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
define('HEADING_TITLE', 'Grupos de clientes');
define('ENTRY_CUSTOMERS_FSK18', 'Bloqueo de la función de compra de productos para FSK18?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', 'Mostrar FSK18 productos?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', 'Mostrar fiscal con el fin total');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', 'Minimum order value:');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', 'Maximum order value:');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', 'A través de la Recolección del Banco de');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', 'A través de tarjeta de crédito');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', 'A través de la entrega de efectivo');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', 'Descuento');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', 'Escriba no permitidas Métodos de pago');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', 'Pública');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', 'No pueden entrar en los módulos de envío');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', 'Precio');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', 'Los precios incluyen impuestos');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', 'Customer group is allowed to write reviews?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', 'Customer group is allowed to read reviews?');
define('ENTRY_GRADUATED_PRICES', 'Graduado Precios');
define('ENTRY_NO', 'No');
define('ENTRY_OT_XMEMBER', 'Descuento cliente en el orden total? :');
define('ENTRY_YES', 'Sí');
define('ERROR_REMOVE_DEFAULT_CUSTOMER_STATUS', 'Error: No se puede eliminar por defecto el grupo de clientes. Por favor, defina a otro grupo por defecto grupo de clientes y vuelve a intentarlo.');
define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', 'ERROR! No puede eliminar un grupo estándar');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Error: Este grupo de clientes está en uso.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Este grupo de clientes se está utilizando para fin de la historia.');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', 'Graduado Precio');
define('TABLE_HEADING_CUSTOMERS_STATUS', 'Grupo de Clientes');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', 'no permitido de pago');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', 'Envíos no admitidos');
define('TABLE_HEADING_DISCOUNT', 'Descuento');
define('TABLE_HEADING_TAX_PRICE', 'Precio / Impuestos');
define('TAX_NO', 'excluir');
define('TAX_YES', 'incluir');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Grupos de clientes existentes:');
define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<b>FSK18 Productos</b>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<b>Bloquear FSK18</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<b>Si los precios incluyen IVA = ajustado a "No"</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '<strong>Define a minimum order value or leave the field empty.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '<strong>Define a maximum order value or leave the field empty.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<b>Vamos a permitir que los clientes de este grupo a pagar a través de banco colección?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<b>Vamos a permitir que los clientes de este grupo para pagar con tarjetas de crédito?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<b>Vamos a permitir que los clientes de este grupo a pagar contra reembolso?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<b>De descuento en atributos del producto</b><br>(Máximo % de descuento sobre el único producto)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<b>De descuento sobre el total de orden</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Descuento (0 a 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', 'Por favor, definir un descuento de entre el 0 y el 100% que se utiliza en cada muestra de productos.');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<b>Graduado Precios</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', 'Los clientes del Grupo Imagen:');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<b>Nombre del grupo</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<b>no pueden Métodos de pago</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<b>Mostrar Pública?</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<b>no pueden Módulos de envío</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<b>Mostrar precios en tienda</b>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '¿Quieres mostrar los precios incluyente o excluyente de impuestos?');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<strong>Productsreview write</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Productsreview read</strong>');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que desea eliminar este grupo de clientes?');
define('TEXT_INFO_EDIT_INTRO', 'Por favor, hacer todas las modificaciones necesarias');
define('TEXT_INFO_INSERT_INTRO', 'Por favor, cree un nuevo grupo de clientes dentro de todos los valores necesarios.');
define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Eliminar grupo de clientes');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', 'Editar Grupo de datos');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nuevo grupo de clientes');
define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Basis Kundengruppe für Artikelpreise</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'wird als Grundlage für die Preise der neuen Kundengruppe gewählt. Wenn Auswahl = Admin werden keine Preise für die neue Kundengruppe angelegt.');
?>