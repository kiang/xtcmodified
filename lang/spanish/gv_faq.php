<?php
/*
  $Id: gv_faq.php,v 1.1.1.1.2.2 2003/05/04 12:24:25 wilt Exp $

  The Exchange Project - Community Made Shopping!
  http://www.theexchangeproject.org

  Gift Voucher System v1.0
  Copyright (c) 2001,2002 Ian C Wilson
  http://www.phesis.org

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Vale de Regalo FAQ');
define('HEADING_TITLE', 'Vale de Regalo FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.tep_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Compra del Vale de Regalo</a><br>
  <a href="'.tep_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">¿Cómo enviar los vales del Regalo</a><br>
  <a href="'.tep_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Compra con los vales del Regalo</a><br>
  <a href="'.tep_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Canjear Vales de regalo</a><br>
  <a href="'.tep_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Cuando se producen problemas</a><br>
');
switch ($HTTP_GET_VARS['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Compra del Vale de Regalo.');
define('SUB_HEADING_TEXT','Vales de regalo son comprados como cualquier otro tema en nuestra tienda. Puede
   pagar por ellos utilizando el estándar de las tiendas de pago (s).
   Una vez adquirido el valor del Bono Regalo se sumará a su propio personal
   Cuenta de Cupón de Regalo. Si usted tiene fondos en su Cuenta de Cupón de Regalo, usted
   Observe que la cantidad ahora se muestra en el cuadro de la cesta, y también proporciona una
   enlace a una página donde usted puede enviar el cupón de regalo a algunos a través de un mensaje de correo electrónico.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Cómo enviar Vales de regalo?');
define('SUB_HEADING_TEXT','Para enviar un Vale de Regalo usted necesita ir a nuestra Enviar cupón de regalo Page. Puede
   encontrar el enlace a esta página en el carrito de la compra en la casilla de la columna derecha del
   cada página.
   Cuando se envía un cupón de regalo, usted necesita sepcify los siguientes.
   El nombre de la persona que está enviando el cupón de regalo también.
   La dirección de correo electrónico de la persona que está enviando el cupón de regalo también.
   La cantidad que desea enviar. (Nota usted no tiene que enviar el importe total que
   está en su Cuenta de Cupón de Regalo.)
   Un mensaje corto que aparecer en el correo electrónico.
   Por favor, asegúrese de que ha introducido toda la información correctamente, aunque
   se le dará la oportunidad de cambiar esta situación tanto como usted desea antes de
   la dirección de correo electrónico es enviado.');  
  break;
  case '3':
  define('SUB_HEADING_TITLE','Las compras con vales de regalo.');
  define('SUB_HEADING_TEXT','Si usted tiene fondos en su Cuenta de Cupón de Regalo, puede utilizar esos fondos para
   compra en otros artículos de la tienda. En la etapa de compra, una caja extra
   aparecen. Marcando esta casilla se aplicará esos fondos en su Cuenta de Cupón de Regalo.
   Por favor tenga en cuenta, de todas maneras tendrá que seleccionar otro método de pago si existe
   no es suficiente en su Cuenta de Cupón de Regalo para cubrir el costo de su compra.
   Si tiene más fondos en su Cuenta de Cupón de Regalo que el costo total de
   de su compra, el saldo de la izquierda en BEL cupón de regalo que usted cuenta para la
   futuro.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Redimir certificados de regalo.');
  define('SUB_HEADING_TEXT','Si usted recibe un certificado de regalo por correo electrónico que contendrá información sobre la persona que envió
   que el cupón de regalo, junto con un mensaje corto de ellos. La dirección de correo electrónico
   también contendrá el número de vale de regalo. Es probablemente una buena idea imprimir
   a cabo este mensaje de correo electrónico para referencia futura. Ahora puede canjear el cupón de regalo en
   dos maneras.<br>
  1. Al hacer clic en el enlace containe dentro de la dirección de correo electrónico para este propósito.
   Esto le llevará a la tienda \'s Canjear cupón de la página. usted se la pidió
   para crear una cuenta, antes de que el cupón de regalo es validado y se coloca en su
   Cuenta de Cupón de Regalo listo para pasar sobre lo que quieras.<br>
  2. Durante la caja procces, en la misma página que usted seleccione un método de pago
habrá una casilla para introducir un Canjear código. Introduzca el código aquí, y haga clic en el botón de canjear. El código será
validado y agregado a su cuenta de vales de regalo. A continuación, puede utilizar la cantidad para comprar cualquier artículo de nuestra tienda');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Cuando se producen problemas.');
  define('SUB_HEADING_TEXT','Para cualquier consulta en relación con el sistema de vales de regalo, póngase en contacto con la tienda
   por correo electrónico a la dirección '. STORE_OWNER_EMAIL_ADDRESS .'. Por favor, asegúrate de dar
   tanta información como sea posible en la dirección de correo electrónico. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Por favor, elija de una de las preguntas anteriores.');

  }
?>
