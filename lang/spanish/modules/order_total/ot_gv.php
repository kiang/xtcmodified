<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 1388 2010-09-29 16:50:24Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com
   (c) 2006 XT-Commerce (ot_gv.php 899 2005-04-29)

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
define('MODULE_ORDER_TOTAL_GV_TITLE', 'Vales de regalo');
define('MODULE_ORDER_TOTAL_GV_HEADER', 'Vales de regalo / cupones de descuento');
define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', 'Vales de regalo');
//BOF - DokuMan - 2010-08-31 - constants already defined in english.php
//define('SHIPPING_NOT_INCLUDED', ' [Shipping not included]');
//define('TAX_NOT_INCLUDED', ' [Tax not included]');
//EOF - DokuMan - 2010-08-31 - constants already defined in english.php
define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Marque el uso de vales de regalo saldo de la cuenta ->&nbsp;');
define('TEXT_ENTER_GV_CODE', 'Introduzca el código canjear&nbsp;&nbsp;');
define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Pantalla total');
define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', '¿Quieres mostrar el valor del cupón de regalo?');
define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Ordenar');
define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'Orden de visualización');
define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Cola de Compras');
define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', '¿Quieres cola de la compra del Bono Regalo?');
define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Incluyen el envío');
define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Incluir en el cálculo de envío');
define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'Incluyen impuestos');
define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'Incluir en el cálculo de impuestos.');
define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'Re-Cálculo de impuestos');
define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', 'Re-Cálculo de impuestos');
define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'Tipo de Impuesto');
define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'Utilice la siguiente clase de impuestos cuando se trata de cupón de regalo como Nota de Crédito.');
define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Crédito de Impuestos incluidos');
define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'Añadir impuesto a comprado cuando cupón de regalo de acreditación a la cuenta');
?>