<?php
/* -----------------------------------------------------------------------------------------
   $Id: coupon_admin.php 1502 2010-11-16 18:13:52Z dokuman $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(coupon_admin.php,v 1.1.2.5 2003/05/13); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('TOP_BAR_TITLE', 'Estadísticas');
define('HEADING_TITLE', 'Bonos de Descuento');
define('HEADING_TITLE_STATUS', 'Estado: ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre de Bonos');
define('TEXT_COUPON_ALL', 'Todos los cupones');
define('TEXT_COUPON_ACTIVE', 'Bonos de activos');
define('TEXT_COUPON_INACTIVE', 'Bonos de inactivos');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Envío gratuito');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SELECT_CUSTOMER', 'Seleccione Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Boletín a todos los suscriptores');
define('TEXT_CONFIRM_DELETE', '¿Estás seguro de que deseas eliminar este cupón?');
define('TEXT_TO_REDEEM', 'Usted puede redimir este cupón en la caja. Sólo tienes que introducir el código en la casilla correspondiente, y haga clic en el botón de canjear.');
define('TEXT_IN_CASE', ' en caso de que tenga algún problema. ');
define('TEXT_VOUCHER_IS', 'El código de cupón es ');
define('TEXT_REMEMBER', 'No pierda el código de cupón, asegúrese de mantener el código de seguridad para que pueda beneficiarse de esta oferta especial.');
define('TEXT_VISIT', 'cuando usted visita ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' e introduzca el código ');
define('TABLE_HEADING_ACTION', 'Acción');
define('CUSTOMER_ID', 'ID de cliente');
define('CUSTOMER_NAME', 'Nombre del cliente');
define('REDEEM_DATE', 'Fecha de Redimidos');
define('IP_ADDRESS', 'Dirección IP');
define('TEXT_REDEMPTIONS', 'Amortizaciones');
define('TEXT_REDEMPTIONS_TOTAL', 'En total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Para este cliente');
define('TEXT_NO_FREE_SHIPPING', 'No Envío gratuito');
define('NOTICE_EMAIL_SENT_TO', 'Aviso: E-Mail enviar a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No hay cliente que se ha seleccionado.');
define('COUPON_NAME', 'Nombre de Bonos');
define('COUPON_AMOUNT', 'Cupón Monto');
define('COUPON_CODE', 'Código de cupón');
define('COUPON_STARTDATE', 'Fecha de inicio');
define('COUPON_FINISHDATE', 'Fecha de término');
define('COUPON_FREE_SHIP', 'Envío gratuito');
define('COUPON_DESC', 'Descripción del cupón');
define('COUPON_MIN_ORDER', 'Cupón orden mínima');
define('COUPON_USES_COUPON', 'Utilización por cupón');
define('COUPON_USES_USER', 'Utilización por los clientes');
define('COUPON_PRODUCTS', 'Válido lista de productos');
define('COUPON_CATEGORIES', 'Válido lista de categorías');
define('VOUCHER_NUMBER_USED', 'Número Usado');
define('DATE_CREATED', 'Fecha de creación');
define('DATE_MODIFIED', 'Fecha en que se modificó');
define('TEXT_HEADING_NEW_COUPON', 'Crear un nuevo cupón');
define('TEXT_NEW_INTRO', 'or favor, rellene los siguientes datos para el nuevo cupón.<br>');
define('COUPON_NAME_HELP', 'Un nombre corto para el cupón');
define('COUPON_AMOUNT_HELP', 'El valor del descuento para el cupón, ya sea fijo o añadir un % en el extremo de un porcentaje de descuento.');
define('COUPON_CODE_HELP', 'Puede introducir su propio código aquí, o dejar en blanco para un auto generado uno.');
define('COUPON_STARTDATE_HELP', 'La fecha en que el cupón será válido a partir de');
define('COUPON_FINISHDATE_HELP', 'La fecha expira el cupón');
define('COUPON_FREE_SHIP_HELP', 'El cupón da la libre navegación en un orden. Nota. Esto anula la coupon_amount cifra, pero respeta el valor mínimo del pedido');
define('COUPON_DESC_HELP', 'Una descripción de la cupón para el cliente');
define('COUPON_MIN_ORDER_HELP', 'El valor mínimo del pedido antes de que el cupón es válido');
define('COUPON_USES_COUPON_HELP', 'El número máximo de veces que el cupón se puede utilizar, dejar en blanco si no desea limitar.');
define('COUPON_USES_USER_HELP', 'Número de veces que un usuario puede utilizar el cupón, para dejar en blanco sin límite.');
define('COUPON_PRODUCTS_HELP', 'Una lista separada por comas de product_ids que este código de cupón se puede utilizar con. Dejar en blanco para ninguna restricción.');
define('COUPON_CATEGORIES_HELP', 'Una lista separada por comas de cpaths que este código de cupón puede ser utilizado con, dejar en blanco sin restricciones.');
define('COUPON_ID', 'cID');
define('BUTTON_DELETE_NO_CONFIRM', 'Delete without confirmation');
define('TEXT_NONE', 'no restrictions');
define('TEXT_COUPON_DELETE', 'Delete');
define('TEXT_COUPON_STATUS', 'Status');
define('TEXT_COUPON_DETAILS', 'Coupon details');
define('TEXT_COUPON_EMAIL', 'send email');
define('TEXT_COUPON_OVERVIEW', 'Overview');
define('TEXT_COUPON_EMAIL_PREVIEW', 'Confirmation');
define('TEXT_COUPON_MINORDER', 'min. Order Value');
define('TEXT_VIEW', 'List view');
define('TEXT_VIEW_SHORT', 'Show');
?>