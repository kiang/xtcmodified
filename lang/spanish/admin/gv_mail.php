<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_mail.php 1502 2010-11-16 18:13:52Z dokuman $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_mail.php,v 1.5.2.2 2003/04/27); www.oscommerce.com

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
define('HEADING_TITLE', 'Enviar cupón de regalo a los clientes');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_TO', 'correo electrónico a:');
define('TEXT_AMOUNT', 'Cantidad');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Use este para el envío de mensajes de correo electrónico único, de lo contrario, el uso desplegable arriba</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleccione Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Boletín a todos los suscriptores');
define('NOTICE_EMAIL_SENT_TO', 'Aviso: E-mail enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No hay cliente que se ha seleccionado.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No importe que se ha seleccionado.');
define('TEXT_GV_WORTH', 'El cupón de regalo vale la pena');
define('TEXT_TO_REDEEM', 'Para redimir este cupón de regalo, por favor haga clic en el enlace de abajo. Favor escribir también el código de la redención');
define('TEXT_WHICH_IS', ' que es');
define('TEXT_IN_CASE', ' en caso de que tenga cualquier problema.');
define('TEXT_OR_VISIT', 'o visite ');
define('TEXT_ENTER_CODE', ' e introduzca el código durante el proceso de compra');
define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Recientemente purchasd un certificado de regalo de nuestro sitio, por razones de seguridad, el importe del Bono Regalo no se acreditan de inmediato a usted. La tienda propietario ha lanzado ahora esta cantidad.');
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor del cupón de regalo fue de %s');
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ahora puede visitar nuestro sitio web, de acceso y enviar el cupón de regalo importe a nadie que desee.');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
?>