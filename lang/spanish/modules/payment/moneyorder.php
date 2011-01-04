<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneyorder.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Compruebe / Money Order');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Hacer pagadero a:&nbsp;' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br>Enviar a:<br><br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Su pedido no buque hasta que recibamos el pago!');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Hacer pagadero a: ". MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n	Enviar a:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Su pedido no buque hasta que recibamos el pago');
define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE', 'Habilitar el check / Money Order módulo');
define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', '¿Quieres aceptar Ver / Money Order pagos?');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', 'Permitido zonas');
define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', 'Por favor, introduzca las zonas <b>por separado</b>que deben estar autorizados a utilizar este módulo (por ejemplo, AT, DE (dejar vacío si desea permitir que todas las zonas))');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', 'Hacer pagadero a:');
define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', '¿Quién debe ser pagos realizados a pagar?');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', 'Orden de visualización.');
define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', 'Orden de visualización. Más bajo se muestra en primer lugar.');
define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', 'Si una zona está seleccionada, sólo que este método de pago para esa zona.');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', 'Establecer el estado de sus pedidos');
define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', 'Establecer el estado de los pedidos realizados en este módulo de pago de este valor');
// BOF - Hendrik - 2010-07-15 - exlusion config for shipping modules
define('MODULE_PAYMENT_MONEYORDER_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_MONEYORDER_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by commas)');
// EOF - Hendrik - 2010-07-15 - exlusion config for shipping modules

?>