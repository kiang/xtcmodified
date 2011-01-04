<?php
/* --------------------------------------------------------------
   $Id: orders.php,v 1.2 2004/04/01 14:19:25 oldpa   Exp $   

   TWE-Commerce - community made shopping
   http://www.oldpa.com.tw
   Copyright (c) 2003 TWE-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders.php,v 1.27 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders.php,v 1.7 2003/08/14); www.nextcommerce.org
   (c) 2003	 xt-commerce  www.xt-commerce.com
   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('TEXT_BANK', 'Coleccion Banco');
define('TEXT_BANK_OWNER', 'Titular de la cuenta:');
define('TEXT_BANK_NUMBER', 'Numero de cuenta:');
define('TEXT_BANK_BLZ', 'Codigo del Banco:');
define('TEXT_BANK_NAME', 'Banco:');
define('TEXT_BANK_FAX', 'Recoger la autorizacion sera aprobado a traves de Fax');
define('TEXT_BANK_STATUS', 'Verificar Estado:');
define('TEXT_BANK_PRZ', 'Metodo de Verify:');

define('TEXT_BANK_ERROR_1', 'Accountnumber Codigo de Banco y no son compatibles!<br>Por favor, intentalo de nuevo!');
define('TEXT_BANK_ERROR_2', 'Lo sentimos, pero no a la prueba de este numero de cuenta!');
define('TEXT_BANK_ERROR_3', 'Numero de cuenta no proofable! Metodo de Verificar que no se han aplicado');
define('TEXT_BANK_ERROR_4', 'Numero de cuenta no aprobados tecnicamente<br>Por favor, intentalo de nuevo!');
define('TEXT_BANK_ERROR_5', 'Codigo del Banco no se encuentra!<br>Por favor, intentalo de nuevo.!');
define('TEXT_BANK_ERROR_8', 'No coinciden con los de tu Codigo Banco Codigo del Banco o no se!');
define('TEXT_BANK_ERROR_9', 'No determinado número de cuenta!');
define('TEXT_BANK_ERRORCODE', 'Código de error:');

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'Orden ID:');
define('HEADING_TITLE_STATUS', 'Estado:');

define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Total del pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de Compra');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuestos');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (excluir)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (incluir)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (excluir)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total');

define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Notificado al Cliente');
define('TABLE_HEADING_DATE_ADDED', 'Fecha en que se agregó');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_STREET_ADDRESS', 'Dirección:');
define('ENTRY_SUBURB', 'Suburbio:');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_POST_CODE', 'Código postal:');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_TELEPHONE', 'Teléfono:');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_DELIVERY_TO', 'Para la entrega:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Dirección de envío:');
define('ENTRY_BILLING_ADDRESS', 'Dirección de facturación:');
define('ENTRY_PAYMENT_METHOD', 'Método de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta de crédito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular de la Tarjeta:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Número de tarjeta de crédito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Tarjeta de crédito expira:');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Impuestos:');
define('ENTRY_SHIPPING', 'Envío:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'Fecha de la última actualización:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar al cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Anexar Comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar Orden');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que desea eliminar esta orden?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Cantidad de reposición de producto');
define('TEXT_DATE_ORDER_CREATED', 'Fecha de creación:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Ultima Modificación:');
define('TEXT_INFO_PAYMENT_METHOD', 'Método de pago:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'Fin de la historia no disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualización de la Orden');
define('EMAIL_TEXT_ORDER_NUMBER', 'Número de orden:');
define('EMAIL_TEXT_INVOICE_URL', 'Factura detallada:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha solicitada:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido ha sido actualizado a la siguiente situación.' . "\n\n" . 'Nueva condición: %s' . "\n\n" . 'Por favor, responda a este mensaje de correo electrónico si usted tiene alguna pregunta.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Las observaciones de su pedido se' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: la Orden no existe.');
define('SUCCESS_ORDER_UPDATED', 'Éxito: la Orden se ha actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No hay nada que cambiar. El orden no se ha actualizado.');

define('TABLE_HEADING_DISCOUNT','Descuento');
define('ENTRY_CUSTOMERS_GROUP','Grupo de clientes::');
?>