<?php
/* -----------------------------------------------------------------------------------------
   $Id: cod.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.7 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (cod.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_TYPE_PERMISSION', 'Dinero en efectivo a la entrega');
define('MODULE_PAYMENT_COD_TEXT_TITLE', 'Dinero en efectivo a la entrega');
define('MODULE_PAYMENT_COD_TEXT_DESCRIPTION', 'Dinero en efectivo a la entrega');
define('MODULE_PAYMENT_COD_TEXT_INFO', '');
define('MODULE_PAYMENT_COD_ZONE_TITLE', 'Zona de pago');
define('MODULE_PAYMENT_COD_ZONE_DESC', 'Si una zona está seleccionada, sólo que este método de pago para esa zona.');
define('MODULE_PAYMENT_COD_ALLOWED_TITLE', 'Zonas de Permitido');
define('MODULE_PAYMENT_COD_ALLOWED_DESC', 'arrendamiento entrar en las zonas <b>por separado</b> que deben estar autorizados a utilizar este módulo (por ejemplo, AT, DE (dejar vacío si desea permitir que todas las zonas))');
define('MODULE_PAYMENT_COD_STATUS_TITLE', 'Activar el efectivo en entrega del módulo');
define('MODULE_PAYMENT_COD_STATUS_DESC', '¿Quieres aceptar en efectivo el Delevery pagos?');
define('MODULE_PAYMENT_COD_SORT_ORDER_TITLE', 'Orden de visualización');
define('MODULE_PAYMENT_COD_SORT_ORDER_DESC', 'Orden de visualización. Más bajo se muestra en primer lugar.');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_TITLE', 'Establecer el estado de sus pedidos');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_DESC', 'Establecer el estado de los pedidos realizados en este módulo de pago de este valor');
// BOF - Hendrik - 2010-07-15 - exlusion config for shipping modules
define('MODULE_PAYMENT_COD_NEG_SHIPPING_TITLE', 'Exclusion in case of shipping');
define('MODULE_PAYMENT_COD_NEG_SHIPPING_DESC', 'deactivate this payment if one of these shippingtypes are selected (list separated by commas)');
// EOF - Hendrik - 2010-07-15 - exlusion config for shipping modules

?>