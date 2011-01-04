<?php
/* --------------------------------------------------------------
   $Id: english.php 1231 2005-09-21 13:05:36Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.99 2003/05/28); www.oscommerce.com 
   (c) 2003	 nextcommerce (german.php,v 1.24 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contributions:
   Customers Status v3.x (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_GB@euro', 'en_GB', 'en-GB', 'en', 'en_GB.ISO_8859-1', 'English', 'en_GB.ISO_8859-15');
define('DATE_FORMAT_SHORT', '%m/%d/%Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
    if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
    }
}
// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="utf-8"');
// page title
define('TITLE', 'TWE-Commerce');
// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administración');
define('HEADER_TITLE_SUPPORT_SITE', 'Apoyo del sitio');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Catalog');
define('HEADER_TITLE_ADMINISTRATION', 'Administración');
// text for gender
define('MALE', 'Macho');
define('FEMALE', 'Hembra');
// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');
// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuración');
define('BOX_HEADING_MODULES', 'Módulos');
define('BOX_HEADING_ZONE', 'Zona / Impuestos');
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_HEADING_PRODUCTS', 'Catálogo');
define('BOX_HEADING_STATISTICS', 'Estadísticas');
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_HEADING_LOCALIZATION', 'Idiomas / Monedas');
define('BOX_HEADING_TEMPLATES', 'Plantillas');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Ubicación / Impuestos');
define('BOX_HEADING_CATALOG', 'Catálogo');
define('BOX_CONTENT', 'Content Manager');
define('TEXT_ALLOWED', 'Permiso');
define('TEXT_ACCESS', 'Superficie útil');
define('BOX_CONFIGURATION', 'Opciones generales');
define('BOX_CONFIGURATION_1', 'Mi tienda');
define('BOX_CONFIGURATION_2', 'Valores mínimos');
define('BOX_CONFIGURATION_3', 'Valores máximos');
define('BOX_CONFIGURATION_4', 'Opciones de imagen');
define('BOX_CONFIGURATION_5', 'Detalles del cliente');
define('BOX_CONFIGURATION_6', 'Módulo de Opciones');
define('BOX_CONFIGURATION_7', 'Opciones de envío');
define('BOX_CONFIGURATION_8', 'Lista de productos opciones');
define('BOX_CONFIGURATION_9', 'Stock Options');
define('BOX_CONFIGURATION_10', 'Opciones de registro');
define('BOX_CONFIGURATION_11', 'Opciones de caché');
define('BOX_CONFIGURATION_12', 'Opciones de correo electrónico');
define('BOX_CONFIGURATION_13', 'Opciones de descarga');
define('BOX_CONFIGURATION_14', 'Compresión gzip');
define('BOX_CONFIGURATION_15', 'Sesiones');
define('BOX_CONFIGURATION_16', 'Meta-Tags/Search motores');
define('BOX_CONFIGURATION_17', 'Módulos especiales');
define('BOX_CONFIGURATION_18', 'VAT Reg No');
define('BOX_CONFIGURATION_19', 'xt:C Partner');
define('BOX_CONFIGURATION_22', 'Search-Options');
define('BOX_MODULES', 'Pago-/Transporte marítimo-/-Módulos de facturación');
define('BOX_PAYMENT', 'Sistemas de Pago');
define('BOX_SHIPPING', 'Métodos de envío');
define('BOX_ORDER_TOTAL', 'Total del pedido');
define('BOX_CATEGORIES', 'Categorías / Productos');
define('BOX_PRODUCTS_ATTRIBUTES', 'Opción-Grupos');
define('BOX_MANUFACTURERS', 'Fabricantes');
define('BOX_REVIEWS', 'Reseñas de productos');
define('BOX_CAMPAIGNS', 'Campaigns');
define('BOX_XSELL_PRODUCTS', 'Cruz Marketing');
define('BOX_SPECIALS', 'Precios especiales');
define('BOX_PRODUCTS_EXPECTED', 'Ofertas de espera');
define('BOX_CUSTOMERS', 'Clientes');
define('BOX_ACCOUNTING', 'Con permisos de administrador');
define('BOX_CUSTOMERS_STATUS', 'Grupos de clientes');
define('BOX_ORDERS', 'Pedidos');
define('BOX_COUNTRIES', 'Países');
define('BOX_ZONES', 'Zonas');
define('BOX_GEO_ZONES', 'Zonas de Impuestos');
define('BOX_TAX_CLASSES', 'Tipos de Impuestos');
define('BOX_TAX_RATES', 'Los tipos impositivos');
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_PRODUCTS_VIEWED', 'Visto Productos');
define('BOX_STOCK_WARNING', 'Información Stock');
define('BOX_PRODUCTS_PURCHASED', 'Productos vendidos');
define('BOX_STATS_CUSTOMERS', 'Estadísticas de Compras');
define('BOX_BACKUP', 'Administrador de Base de Datos');
define('BOX_BANNER_MANAGER', 'Banner Manager');
define('BOX_CACHE', 'De control de caché');
define('BOX_DEFINE_LANGUAGE', 'Idioma Definiciones');
define('BOX_FILE_MANAGER', 'Administrador de Archivos');
define('BOX_MAIL', 'Centro de eMail');
define('BOX_NEWSLETTERS', 'Notificación Manager');
define('BOX_SERVER_INFO', 'Servidor de Información');
define('BOX_WHOS_ONLINE', '¿Quién está en línea');
define('BOX_TPL_BOXES', 'Ordenar cajas');
define('BOX_CURRENCIES', 'Monedas');
define('BOX_LANGUAGES', 'Idiomas');
define('BOX_ORDERS_STATUS', 'Situación pedidos');
define('BOX_ATTRIBUTES_MANAGER', 'Atributo Manager');
define('BOX_MODULE_NEWSLETTER', 'Newsletter');
define('BOX_SHIPPING_STATUS', 'El estado del envío');
define('BOX_SALES_REPORT', 'Informe de Ventas');
define('BOX_MODULE_EXPORT', 'Otros módulos');
define('BOX_HEADING_GV_ADMIN', 'Los vales / cupones');
define('BOX_GV_ADMIN_QUEUE', 'Bono Regalo cola');
define('BOX_GV_ADMIN_MAIL', 'Mail de certificados de regalo');
define('BOX_GV_ADMIN_SENT', 'Vales de regalo enviado');
define('BOX_COUPON_ADMIN', 'Cupón Admin');
define('BOX_TOOLS_BLACKLIST', 'CC-Lista negra');
define('BOX_IMPORT', 'Import/Export');
define('BOX_PRODUCTS_VPE', 'Packing unit');
define('BOX_CAMPAIGNS_REPORT', 'Campaign report');
define('BOX_ORDERS_XSELL_GROUP', 'Cross-sell groups');
define('TXT_GROUPS', '<b>Grupos</b>:');
define('TXT_SYSTEM', 'Sistema de');
define('TXT_CUSTOMERS', 'Clientes / Pedidos');
define('TXT_PRODUCTS', 'Productos / Categorías');
define('TXT_STATISTICS', 'Estadísticas');
define('TXT_TOOLS', 'Herramientas');
define('TEXT_ACCOUNTING', 'Administrador de acceso para:');
// javascript messages
define('JS_ERROR', 'Error have occured during the process of your form!\nPlease make the following corrections:\n\n');
define('JS_OPTIONS_VALUE_PRICE', '* The new product attribute needs a price value\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* The new product attribute needs a price prefix (+/-)\n');
define('JS_PRODUCTS_NAME', '* The new product needs a name\n');
define('JS_PRODUCTS_DESCRIPTION', '* The new product needs a description\n');
define('JS_PRODUCTS_PRICE', '* The new product needs a price value\n');
define('JS_PRODUCTS_WEIGHT', '* The new product needs a weight value\n');
define('JS_PRODUCTS_QUANTITY', '* The new product needs a quantity value\n');
define('JS_PRODUCTS_MODEL', '* The new product needs a model value\n');
define('JS_PRODUCTS_IMAGE', '* The new product needs an image value\n');
define('JS_SPECIALS_PRODUCTS_PRICE', '* A new price for this product needs to be set\n');
define('JS_GENDER', '* The \'Gender\' value must be chosen.\n');
define('JS_FIRST_NAME', '* The \'First Name\' entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_LAST_NAME', '* The \'Last Name\' entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_DOB', '* The \'Date of Birth\' entry must be in the format: xx/xx/xxxx (month/date/year).\n');
define('JS_EMAIL_ADDRESS', '* The \'eMail-Adress\' entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_ADDRESS', '* The \'Street Adress\' entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_POST_CODE', '* The \'Post Code\' entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n');
define('JS_CITY', '* The \'City\' entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n');
define('JS_STATE', '* The \'State\' entry must be selected.\n');
define('JS_STATE_SELECT', '-- Select above --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
define('JS_PASSWORD', '* The \'Password\' and \'Confirmation\' entries must match and have at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.\n');
define('JS_ORDER_DOES_NOT_EXIST', 'Número de orden %s no existe!');
define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Dirección');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Compañía');
define('CATEGORY_OPTIONS', 'Más opciones');
define('ENTRY_GENDER', 'Género:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requerido</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', 'Apellido:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(e.g. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">mínimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">De correo electrónico no válida-Adress!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Este mensaje de correo electrónico-Adress ya existe!</span>');
define('ENTRY_COMPANY', 'El nombre de la empresa:');
define('ENTRY_STREET_ADDRESS', 'Dirección:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Suburbio:');
define('ENTRY_POST_CODE', 'Código postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Opción-Grupos');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requerido</font></small>');
define('ENTRY_COUNTRY', 'Provincia:');
define('ENTRY_TELEPHONE_NUMBER', 'Teléfono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Número de fax:');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_CUSTOMERS_STATUS', 'La condición de clientes:');
define('ENTRY_NEWSLETTER_YES', 'Suscripciones');
define('ENTRY_NEWSLETTER_NO', 'No suscrito');
define('ENTRY_MAIL_ERROR', '&nbsp;<span class="errorText">Por favor, elija una opción</span>');
define('ENTRY_PASSWORD', 'Contraseña (generado)');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_MAIL_COMMENTS', 'eMailtext adicionales:');
define('ENTRY_MAIL', 'Enviar e-mail con la contraseña de cliente?');
define('YES', 'sí');
define('NO', 'no');
define('SAVE_ENTRY', 'Guardar cambios?');
define('TEXT_CHOOSE_INFO_TEMPLATE', 'Plantilla de los detalles del producto');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', 'Plantilla para las opciones de los productos');
define('TEXT_SELECT', '-- Seleccione--');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT', 'marked');
define('ICON_BIG_WARNING', 'Attention!');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_EDIT', 'Edit');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Cerrado');
define('ICON_POPUP', 'Banner Preview');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Vista previa');
define('ICON_STATISTICS', 'Estadísticas');
define('ICON_SUCCESS', 'Éxito');
define('ICON_TICK', 'VERDADERO');
define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Advertencia');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Página %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> países)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de monedas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> Fabricantes )');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de Newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Viendo del <b>%d</b> al <b>%d</b> (Órdenes de <b>%d</b> de Situación)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Cross-sell groups)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Packing Units)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de estado del envío)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Viendo del <b>%d</b>al <b>%d</b> (de <b>%d</b> de Productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Viendo del <b>%d</b> al <b>%d</b> (<b>%d</b> productos de espera)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos especiales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Viendo del <b>%d</b> al <b>%d</b> (Impuesto de <b>%d</b> clases)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> Zonas de Impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Viendo del <b>%d</b> al <b>%d</b> (Impuesto de <b>%d</b> de Precios)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Viendo del<b>%d</b> al <b>%d</b> (de <b>%d</b> zonas)');
define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');
define('TEXT_DEFAULT', 'Predeterminado');
define('TEXT_SET_DEFAULT', 'Establecer como defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requerido</span>');
define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: En la actualidad no hay moneda establecido por defecto. Por favor establezca una en: Herramientas de Administracion -> Localización -> Monedas');
define('TEXT_CACHE_CATEGORIES', 'Categorias');
define('TEXT_CACHE_MANUFACTURERS', 'Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'Módulo, también han comprado');
define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Superior');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destino no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destino No se puede escribir.');
define('ERROR_FILE_NOT_SAVED', 'Error: El archivo subido no se ha guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: tipo de subida de archivos no permitidos.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Exito: Fichero guardado con éxito.');
define('WARNING_NO_FILE_UPLOADED', 'Warnung: No archivo cargado.');
define('DELETE_ENTRY', 'Suprimir el epígrafe?');
define('TEXT_PAYMENT_ERROR', '<b>ADVERTENCIA:</b><br>Por favor, active un módulo de pago!');
define('TEXT_SHIPPING_ERROR', '<b>ADVERTENCIA:</b><br>Por favor, active un módulo de envío!');
define('TEXT_NETTO', 'no fiscales: ');
define('ENTRY_CID', 'Los clientes ID:');
define('IP', 'Orden IP:');
define('CUSTOMERS_MEMO', 'Memos:');
define('DISPLAY_MEMOS', 'Mostrar / Escribir');
define('TITLE_MEMO', 'NOTA clientes');
define('ENTRY_LANGUAGE', 'Idioma:');
define('CATEGORIE_NOT_FOUND', 'Categoria no se encuentra!');
// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', 'Canjear cupón de regalo');
define('IMAGE_ICON_STATUS_GREEN_STOCK', 'in stock');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Ajuste activo');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Establecer inactivo');
define('IMAGE_ICON_INFO', 'Info');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');
// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'To unsubscribe from a newsletter, click here:');
define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de certificados de regalo)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Viendo del <b>%d</b> al <b>%d</b> (de <b>%d</b> de cupones)');
define('TEXT_VALID_PRODUCTS_LIST', 'Listado de Productos');
define('TEXT_VALID_PRODUCTS_ID', 'Productos ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre de productos');
define('TEXT_VALID_PRODUCTS_MODEL', 'Productos Modelo');
define('TEXT_VALID_CATEGORIES_LIST', 'Lista de categorías');
define('TEXT_VALID_CATEGORIES_ID', 'Categoría ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Nombre de la categoría');
define('SECURITY_CODE_LENGTH_TITLE', 'Longitud de código de cupón de regalo');
define('SECURITY_CODE_LENGTH_DESC', 'Pulse aquí la longitud del cupón de regalo Código (máximo 16 caracteres)');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Bienvenido cantidad de vales de regalo');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Bienvenido Monto de vales de regalo: Si usted no desea enviar un cupón de regalo en crear su cuenta de correo electrónico, poner 0 para ninguna cantidad, más la cantidad lugar aquí, es decir, 10,00 o 50,00, sin signos de moneda');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Bienvenido código de cupón de descuento');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Bienvenido Descuento código de cupón: si usted no desea enviar un cupón de descuento en crear su cuenta de correo electrónico, deje este campo en blanco, el otro lugar aquí el código de cupón que desee utilizar');
define('TXT_ALL', 'Todo');
// UST ID
define('HEADING_TITLE_VAT', 'Vat-ID');
define('ENTRY_VAT_ID', 'Vat-ID');
define('ENTRY_CUSTOMERS_VAT_ID', 'Vat-ID:');
define('TEXT_VAT_FALSE', '<font color="#ff0000">Checked/False!</font>');
define('TEXT_VAT_TRUE', '<font color="#ff0000">Checked/True!</font>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<font color="#ff0000">Not Checked/Unknown Country!</font>');
define('TEXT_VAT_UNKNOWN_ALGORITHM', '<font color="#ff0000">Not Checked/No Check available!</font>');
define('ENTRY_VAT_ID_ERROR', '<font color="#ff0000">* Your Vat ID is False!</font>');
define('ERROR_GIF_MERGE', 'Missing GDlib Gif-Support, merge failed');
define('ERROR_GIF_UPLOAD', 'Missing GDlib Gif-Support, processing of Gif image failed');
define('TEXT_REFERER', 'Referer: ');
// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
// EOF - Tomcraft - 2009-06-17 Google Sitemap
// BOF - web28 - 2010-05-07 - PayPal API Modul
define('BOX_PAYPAL', 'PayPal');
// EOF  - web28 - 2010-05-07 - PayPal API Modul
// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE', 'Moneybookers email address');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC', 'Email address you have registered with Moneybookers.<br />If not having a Moneybookers account you may get one for free at <a href="https://www.moneybookers.com/app/register.pl" target="_blank">Moneybookers.com</a>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE', 'Merchant ID');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC', 'Your Moneybookers Merchant ID');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE', 'Moneybookers Secret Word');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC', 'The secret word can be found in your Moneybookers profile (this is not your password!). It must be lower-case characters and numbers only.<br />To activate the processing at Moneybookers: Send an email including your Moneybookers email address and shopsystems domain name<br />To: <a href="mailto:ecommerce@moneybookers.com?subject=XTCOMMERCE: Activation of Moneybookers Quick Checkout">ecommerce@moneybookers.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE', 'order status - temporary order');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC', 'A temporary order is created after submitting "send order" during order process. If problems occur you find an order with this status.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'order status - payment OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC', 'If everything is fine and transaction confirmed by Moneybookers.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'order status - payment on hold');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC', 'If someone does not have balance at his Moneybookers account. The payment is pending until moneybookers receive settlement.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'order status - payment cancelled');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC', 'If a (credit card) payment is rejected.');
define('MB_TEXT_MBDATE', 'last update:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Status:');
define('MB_ERROR_NO_MERCHANT', 'There is no Moneybookers account associated with this email address.');
define('MB_MERCHANT_OK', 'Moneybookers account OK, merchant ID %s received and saved.');
define('MB_INFO', '<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />xt:Commerce-user may accept credit cards, debit notes, DIRECTebanking.com, Giropay and other major local payment payments after one single activation. You do not need the hassle of contracts with every payment processor if going with Moneybookers. All is done with <a href="https://www.moneybookers.com/app/register.pl" target="_blank"><b>free Moneybookers account</b></a>. Additional payment options are free of charge, and there are <b>no monthy fees or activation costs</b>.<br /><br /><b>Your advantage:</b><br />- more sales by accepting all major payments<br />- reduced costs and effort - just one contract<br />- easy processing for your customer - direct payment without need to create an extra account<br />- one click activation and integration<br />- good <a href="http://www.moneybookers.com/app/help.pl?s=m_fees" target="_blank"><b>conditions</b></a><br />- instant payment notification and proof of customer details<br />- no extra costs, even abroad<br />- 11 mio. customers worldwide');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP', 'CG-authorizations');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Home');
define('BOX_HEADING_CONFIGURATION2', 'Advanced Configuration');
// EOF - Tomcraft - 2009-11-02 - New admin top menu
// BOF - Tomcraft - 2009-11-28 - Included xs:booster
define('BOX_HEADING_XSBOOSTER', 'xs:booster');
define('BOX_XSBOOSTER_LISTAUCTIONS', 'List Auctions');
define('BOX_XSBOOSTER_ADDAUCTIONS', 'Add Auctions');
define('BOX_XSBOOSTER_CONFIG', 'Base Configuration');
// EOF - Tomcraft - 2009-11-28 - Included xs:booster
//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER', 'Customer: ');
define('ASB_QUICK_SEARCH_ORDER_ID', 'Order: ');
define('ASB_QUICK_SEARCH_ARTICLE', 'Product: ');
define('ASB_QUICK_SEARCH_EMAIL', 'E-Mail Address:');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET', 'Check All');
define('BUTTON_UNSET', 'Uncheck All');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes
//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS', 'Row');
define('TABLE_HEADING_RESET', 'Reset statistics');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW', 'Close Window');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW

?>