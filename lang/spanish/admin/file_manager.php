<?php
/* --------------------------------------------------------------
   $Id: file_manager.php,v 1.1 2003/12/19 13:19:08 fanta2k Exp $   

   TWE-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 TWE-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(file_manager.php,v 1.17 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (file_manager.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Administrador de Archivos');

define('TABLE_HEADING_FILENAME', 'Nombre');
define('TABLE_HEADING_SIZE', 'Tamaño');
define('TABLE_HEADING_PERMISSIONS', 'Permisos');
define('TABLE_HEADING_USER', 'Usuario');
define('TABLE_HEADING_GROUP', 'Grupo');
define('TABLE_HEADING_LAST_MODIFIED', 'Última modificación');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_UPLOAD', 'Subir');
define('TEXT_FILE_NAME', 'Nombre del fichero:');
define('TEXT_FILE_SIZE', 'Tamaño:');
define('TEXT_FILE_CONTENTS', 'Sumario:');
define('TEXT_LAST_MODIFIED', 'Ultima Modificación:');
define('TEXT_NEW_FOLDER', 'Nueva carpeta');
define('TEXT_NEW_FOLDER_INTRO', 'Introduzca el nombre de la nueva carpeta:');
define('TEXT_DELETE_INTRO', '¿Estás seguro de que desea eliminar este archivo?');
define('TEXT_UPLOAD_INTRO', 'Por favor, seleccione los archivos a cargar.');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Error: No puedo escribir en este directorio. Por favor corriga los permisos de: %s');
define('ERROR_FILE_NOT_WRITEABLE', 'Error: No puedo escribir en este archivo. Por favor corriga los permisos de: %s');
define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Error: No puedo eliminar este directorio. Por favor corriga los permisos de: %s');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puedo eliminar este archivo. Por favor corriga los permisos de: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio no existe: %s');
?>
