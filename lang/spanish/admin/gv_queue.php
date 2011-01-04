<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_queue.php 1502 2010-11-16 18:13:52Z dokuman $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_queue.php,v 1.2.2.1 2003/04/27); www.oscommerce.com

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
define('HEADING_TITLE', 'Bono Regalo liberación de colas');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDERS_ID', 'Orden-No.');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valor Bono');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de Compra');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Recientemente ha adquirido un certificado de regalo de nuestra tienda on-line.' . "\n"
                                          . 'Por razones de seguridad este no se hizo inmediatamente disponibles para usted.' . "\n"
                                          . 'Sin embargo, este importe ha sido puesto en libertad. Ahora puede visitar nuestra tienda' . "\n"
                                          . 'y enviar el valor a través del correo electrónico a otra persona' . "\n\n");
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', 'El cupón de regalo (s) que has comprado vale la pena %s' . "\n\n");
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_COUPON_SUBJECT', 'Compra de vales de regalo');
?>