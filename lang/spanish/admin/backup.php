<?php
/* --------------------------------------------------------------
   $Id: backup.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
define('HEADING_TITLE', 'Administrador de base de datos de copia de seguridad');
define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nuevo de copia de seguridad');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar local');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de copia de seguridad que podría tomar un par de minutos.');
define('TEXT_INFO_UNPACK', '<br><br>(Después de desempacar el archivo desde el archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de restauración.<br><br>Cuanto más grande sea la copia de seguridad, mas tardará este proceso!<br><br>Si es posible, utilizar el cliente mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de restauración.<br><br>Cuanto más grande sea la copia de seguridad, mas tardará este proceso!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo debe ser cargado una cruda sql (text) file.');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresión:');
define('TEXT_INFO_USE_GZIP', 'Utilice GZIP');
define('TEXT_INFO_USE_ZIP', 'Utilice ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'No compresión (Pure SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Descargar solamente (no tienda del lado del servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Mejor a través de una conexión HTTPS');
define('TEXT_DELETE_INTRO', '¿Estás seguro de que desea eliminar esta copia de seguridad?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Copia de seguridad de Directorio:');
define('TEXT_LAST_RESTORATION', 'Última restauración:');
define('TEXT_FORGET', '(<u>olvidar</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de copia de seguridad no existe. Por favor, este conjunto en configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: Copia de seguridad de directorio No se puede escribir.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: vínculo de descarga no es aceptable.');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Éxito: La última fecha de la restauración ha sido borrada.');
define('SUCCESS_DATABASE_SAVED', 'Éxito: La base de datos se ha guardado.');
define('SUCCESS_DATABASE_RESTORED', 'Éxito: La base de datos ha sido restaurada.');
define('SUCCESS_BACKUP_DELETED', 'Éxito: La copia de seguridad se ha eliminado.');
define('SUCCESS_BACKUP_UPLOAD', 'Success: The backup file has been uploaded.');
//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Complete 'INSERT's</b><br> - field names are entered into each row INSERT (increased backup)");
?>
