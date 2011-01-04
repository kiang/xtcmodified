<?php
/* --------------------------------------------------------------
   $Id: create_account.php 985 2005-06-17 22:35:22Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(create_account.php,v 1.13 2003/05/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (create_account.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('NAVBAR_TITLE', 'Crear una cuenta');
define('HEADING_TITLE', 'Administrador de la cuenta del cliente');
define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTA:</b></font></small> Si ya tienes una cuenta con nosotros, por favor entre en la <a href="%s"><u>página de acceso</u></a>.');
define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado señor ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Estimada señora ' . stripslashes($HTTP_POST_VARS['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Querido ' . stripslashes($HTTP_POST_VARS['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Le damos la bienvenida a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Ahora puede tomar parte en <b>diversos servicios</b> nos gustaría ofrecerle. Algunos de estos servicios incluyen:' . "\n\n" . '<li><b>Carrito Permanente</b> - Cualquier producto que se añade en su carrito de compras en línea se mantendrá allí hasta que los elimine, o comprobar a cabo.' . "\n" . '<li><b>Libreta de direcciones</b> - Podemos entregar su pedido a otra dirección distinta de la suya! Esto es perfecto para enviar regalos de cumpleaños directamente a las propias personas de cumpleaños.' . "\n" . '<li><b>Historial de pedidos</b> - Ver su historial de compras que ha realizado con nosotros.' . "\n" . '<li><b>Reseñas de productos</b> - Comparte tus opiniones sobre los productos con nuestros otros clientes.' . "\n\n");
define('EMAIL_CONTACT', 'Para cualquier pregunta con nuestro servicio en línea, por favor E-mail nosotros en cualquier momento: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Nota:</b> Esta dirección de correo electrónico fue dada a nosotros por uno de nuestros clientes. Si no se registro para ser miembro, por favor, envíe un mensaje de correo electrónico a ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('ENTRY_PAYMENT_UNALLOWED', 'Unallowed paymentmodules:');
define('ENTRY_SHIPPING_UNALLOWED', 'Unallowed shippingmodules:');
?>