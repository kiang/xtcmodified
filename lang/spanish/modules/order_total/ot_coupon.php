<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_coupon.php 1243 2010-08-31 15:27:48Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(t_coupon.php,v 1.1.2.2 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_coupon.php 899 2005-04-29)

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
define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Bonos de Descuento');
define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Vales de regalo / cupones de descuento');
define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Cupón de descuento');
define('SHIPPING_NOT_INCLUDED', ' [Gastos de envío no incluidos]');
define('TAX_NOT_INCLUDED', ' [Impuestos no incluidos]');
define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
define('ERROR_NO_INVALID_REDEEM_COUPON', 'Código de cupón no válido');
//BOF - DokuMan - 2010-08-31 - constants already defined in english.php
//define('ERROR_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
//define('ERROR_INVALID_FINISDATE_COUPON', 'This coupon has expired');
//define('ERROR_INVALID_USES_COUPON', 'This coupon could only be used ');
//define('TIMES', ' times.');
//define('ERROR_INVALID_USES_USER_COUPON', 'You have used the coupon the maximum number of times allowed per customer.');
//define('REDEEMED_COUPON', 'a coupon worth ');
//EOF - DokuMan - 2010-08-31 - constants already defined in english.php
define('REDEEMED_MIN_ORDER', 'en pedidos de más de ');
define('REDEEMED_RESTRICTIONS', ' [Categoría de productos se aplican restricciones]');
define('TEXT_ENTER_COUPON_CODE', 'Introduzca el código canjear&nbsp;&nbsp;');
define('MODULE_ORDER_TOTAL_COUPON_STATUS_TITLE', 'Pantalla total');
define('MODULE_ORDER_TOTAL_COUPON_STATUS_DESC', '¿Quieres mostrar el valor del cupón de descuento?');
define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_TITLE', 'Ordenar');
define('MODULE_ORDER_TOTAL_COUPON_SORT_ORDER_DESC', 'El orden de visualización.');
define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_TITLE', 'Incluyen el envío');
define('MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING_DESC', 'Incluir en el cálculo de envío');
define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_TITLE', 'Incluyen impuestos');
define('MODULE_ORDER_TOTAL_COUPON_INC_TAX_DESC', 'Incluir en el cálculo de impuestos.');
define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_TITLE', 'Re-Cálculo de impuestos');
define('MODULE_ORDER_TOTAL_COUPON_CALC_TAX_DESC', 'Re-Cálculo de impuestos');
define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_TITLE', 'Tipo de Impuesto');
define('MODULE_ORDER_TOTAL_COUPON_TAX_CLASS_DESC', 'Utilice la siguiente clase de impuestos cuando se trata de cupón de descuento como Nota de Crédito.');
//BOF - web28 - 2010-06-20 - no discount for special offers
define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_TITLE', 'Discount for special offers');
define('MODULE_ORDER_TOTAL_COUPON_SPECIAL_PRICES_DESC', 'Allowed discount for special offers');
//EOF - web28 - 2010-06-20 - no discount for special offers

?>