<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('HEADING_TITLE', 'Banner Manager');
define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Grupos');
define('TABLE_HEADING_STATISTICS', 'Muestra / Clics');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_BANNERS_TITLE', 'Banner Título:');
define('TEXT_BANNERS_URL', 'Banner URL:');
define('TEXT_BANNERS_GROUP', 'Banner Grupo:');
define('TEXT_BANNERS_NEW_GROUP', ', o introducir un nuevo grupo por debajo de bandera');
define('TEXT_BANNERS_IMAGE', 'Imagen:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o introduzca a continuación el archivo local');
define('TEXT_BANNERS_IMAGE_TARGET', 'Imagen Objetivo (Guardar en):');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Texto:');
define('TEXT_BANNERS_EXPIRES_ON', 'Expira el:');
define('TEXT_BANNERS_OR_AT', ', o en');
define('TEXT_BANNERS_IMPRESSIONS', 'impresiones / opiniones.');
define('TEXT_BANNERS_SCHEDULED_AT', 'En previsto:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner Notas:</b><ul><li>Utilice una imagen o texto HTML para el banner - no tanto.</li><li>Texto HTML tiene prioridad sobre una imagen</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Imagen Notas:</b><ul><li>Carga de los directorios deben tener buen usuario (escribir) los permisos de instalación!</li><li>No llene el \ 'Grabar en \' sobre el terreno si no se carga de una imagen a la web (es decir, que usted está utilizando un local (serverside) imagen).</li><li>El \ 'Grabar en \' campo debe ser un directorio existente que termina con una barra (por ejemplo, banners /).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Expiración Notas:</b><ul><li>Sólo uno de los dos campos debe ser presentado</li><li>Si la bandera no es expirará automáticamente y, a continuación, dejar estos campos en blanco</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Calendario de Notas:</b><ul><li>Si es un calendario establecido, la bandera se activará en esa fecha.</li><li>odos los banners programados se marcan como deactive hasta la fecha ha llegado, a la que será marcada activa.</li></ul>');
define('TEXT_BANNERS_DATE_ADDED', 'Fecha en que se agregó:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'En previsto: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'En Expira: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'En Expira: <b>%s</b> impresiones');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambio de estado: %s');
define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Últimos 3 Días');
define('TEXT_BANNERS_BANNER_VIEWS', 'Reproducciones Banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner Clics');
define('TEXT_INFO_DELETE_INTRO', '¿Estás seguro de que deseas eliminar este banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Eliminar banner imagen');
define('SUCCESS_BANNER_INSERTED', 'Éxito: El banner se ha insertado.');
define('SUCCESS_BANNER_UPDATED', 'Éxito: El banner se ha actualizado.');
define('SUCCESS_BANNER_REMOVED', 'Éxito: El banner se ha eliminado.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Exito: El estado del banner se ha actualizado.');
define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Se requiere un título Banner.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Banner grupo necesario.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio destino no existe: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio destino No se puede escribir: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: la imagen no existe.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: la imagen no se puede quitar.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Estado desconocido bandera.');
define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de gráficos no existe. Por favor, cree un \ 'graphs \' directorio dentro de \ 'images \'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de gráficos No se puede escribir.');
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT

?>