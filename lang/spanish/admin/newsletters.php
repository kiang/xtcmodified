<?php
/* --------------------------------------------------------------
   $Id: newsletters.php,v 1.1 2003/12/19 13:19:08 oldpa   Exp $   

   TWE-Commerce - community made shopping
   http://www.oldpa.com.tw
   Copyright (c) 2003 TWE-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(newsletters.php,v 1.7 2002/03/11); www.oscommerce.com 
   (c) 2003	 nextcommerce (newsletters.php,v 1.5 2003/08/14); www.nextcommerce.org
   (c) 2003	 xt-commerce  www.xt-commerce.com
   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Newsletter Manager');

define('TABLE_HEADING_NEWSLETTERS', 'Newsletters');
define('TABLE_HEADING_SIZE', 'Tamaño');
define('TABLE_HEADING_MODULE', 'Módulo');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_NEWSLETTER_MODULE', 'Módulo:');
define('TEXT_NEWSLETTER_TITLE', 'Newsletter Título:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenido:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Fecha en que se agregó:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Fecha de envío:');

define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que deseas eliminar este boletín?');

define('TEXT_PLEASE_WAIT', 'Por favor, espere .. el envío de mensajes de correo electrónico ..<br><br>Por favor, no interrumpir este proceso!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Finalizado el envío de e-mails!');

define('ERROR_NEWSLETTER_TITLE', 'Error: Se requiere un título Newsletter');
define('ERROR_NEWSLETTER_MODULE', 'Error: Boletín modulo necesario');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de borrarlo.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de editarlo.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de enviarlo.');
define('TABLE_HEADING_NEWS_HIST_CS_VALUE','Cambiado');
define('TABLE_HEADING_NEWS_HIST_DATE_ADDED','Fecha');
define('TEXT_NO_NEWSLETTERS_CS_HISTORY','-sin cambios-');
?>
