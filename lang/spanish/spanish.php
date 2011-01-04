<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 1570 2010-12-10 12:26:55Z dokuman $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com
   (c) 2003 nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
/*
 *
 *  DATE / TIME
 *
*/
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Inicio');
define('HEADER_TITLE_CATALOG', 'Catálogo');
define('HTML_PARAMS', 'dir="LTR" lang="es"');
@setlocale(LC_TIME, 'en_GB@euro', 'en_GB', 'en-GB', 'en', 'en_GB.ISO_8859-1', 'English', 'en_GB.ISO_8859-15');
//BOF - Dokuman - 2009-06-03 - correct english date format
define('DATE_FORMAT_SHORT', '%d.%m.%Y'); // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'dd.mm.jjjj');
function xtc_date_raw($date, $reverse = false) {
    if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
    }
}
//EOF - Dokuman - 2009-06-03 - correct english date format
// BOF - vr - 2009-12-11 - Added language dependent currency code
// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language,
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY', 'USD');
// EOF - vr - 2009-12-11 - Added language dependent currency code
define('MALE', 'Sr.');
define('FEMALE', 'Sra.');
/*
 *
 *  BOXES
 *
*/
// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT', 'Canjear cupón de regalo!');
define('BOX_TITLE_STATISTICS', 'Estadística:');
define('BOX_ENTRY_CUSTOMERS', 'Clientes');
define('BOX_ENTRY_PRODUCTS', 'Productos');
define('BOX_ENTRY_REVIEWS', 'Comentarios');
define('TEXT_VALIDATING', 'Not validated');
// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s inicio');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Más Productos'); //changed by electronica 2009-09-06
define('BOX_HEADING_ADD_PRODUCT_ID', 'Añadir al carrito de compras!'); //changed by electronica 2009-09-06
define('BOX_LOGINBOX_STATUS', 'Grupo de clientes:');
define('BOX_LOGINBOX_DISCOUNT', 'Producto de descuento');
define('BOX_LOGINBOX_DISCOUNT_TEXT', 'Descuento');
define('BOX_LOGINBOX_DISCOUNT_OT', '');
// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', 'Examen este producto!');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '% s de 5 estrellas!');
// pull down default text
define('PULL_DOWN_DEFAULT', 'Elija por favor');
// javascript messages
define('JS_ERROR', 'Falta la información necesaria!\nPor favor, rellene correctamente.\n\n');
define('JS_REVIEW_TEXT', '* El texto debe consistir, como mínimo, de ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres alfabéticos ..\n'); //changed by electronica 2009-09-06
define('JS_REVIEW_RATING', '* Introduzca su revisión.\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor, elija un método de pago para su pedido.\n');
define('JS_ERROR_SUBMITTED', 'Esta página ya ha sido confirmado. Por favor, haga clic bien y esperar hasta que el proceso ha terminado.'); //changed by electronica 2009-09-06
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor, elija un método de pago para su pedido.');
/*
 *
 * ACCOUNT FORMS
 *
*/
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Por favor, seleccione su sexo.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Su nombre debe constar de al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Su apellido debe constar de al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'La fecha de nacimiento tiene que ser en el siguiente formulario DD.MM.AAAA (por ejemplo, 21.05.1970) '); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_DATE_OF_BIRTH_TEXT', '* '); //Dokuman - 2009-06-03 - correct english date format
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su e-mail debe constar de al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'El e-mail de su entrada es incorrecto, por favor, compruebe que'); //changed by electronica 2009-09-06
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Your entered e-mail addresses do not match.'); // Hetfield - 2009-08-15 - confirm e-mail at registration
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'El e-mail que has introducido ya existe en nuestra datebase - por favor conéctese con su cuenta existente o crear una cuenta nueva con un nuevo e-mail.'); //changed by electronica 2009-09-06
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'Su Calle / n º debe constar de al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.'); //changed by electronica 2009-09-06
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Su código postal debe constar de al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'Su ciudad debe constar de al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Su provincia debe consistir de al menos ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor seleccione su provincia de la lista.'); //changed by electronica 2009-09-06
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Por favor seleccione su país de la lista.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su número de teléfono debe constar de al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'Su contraseña debe constar de al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Las contraseñas no coinciden.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Su contraseña debe constar de al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Su nueva contraseña debe constar de un mínimo de' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Las contraseñas no coinciden.');
/*
 *
 *  RESULT PAGES
 *
*/
define('TEXT_RESULT_PAGE', 'Seiten:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrar <b>%d</b> to <b>%d</b> (de un total de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrar <b>%d</b> to <b>%d</b> (de un total de <b>%d</b> orden)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrar <b>%d</b> to <b>%d</b> (de un total de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrar <b>%d</b> to <b>%d</b> (de un total de <b>%d</b> nuevos productos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrar <b>%d</b> to <b>%d</b> (de un total de <b>%d</b> ofertas especiales)');
/*
 *
 * SITE NAVIGATION
 *
*/
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'página anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'página siguiente');
define('PREVNEXT_TITLE_PAGE_NO', 'página %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'primera %d página');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'páginas %d siguientes');
/*
 *
 * PRODUCT NAVIGATION
 *
*/
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;anterior]');
define('PREVNEXT_BUTTON_NEXT', '[siguiente&nbsp;&gt;&gt;]');
/*
 *
 * IMAGE BUTTONS
 *
*/
define('IMAGE_BUTTON_ADD_ADDRESS', 'Nueva dirección');
define('IMAGE_BUTTON_BACK', 'Anterior');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cambio de dirección');
define('IMAGE_BUTTON_CHECKOUT', 'Compra');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Confirmar orden');
define('IMAGE_BUTTON_CONTINUE', 'Continúe');
define('IMAGE_BUTTON_DELETE', 'Borrar');
define('IMAGE_BUTTON_LOGIN', 'Login');
define('IMAGE_BUTTON_IN_CART', 'En el carrito'); //changed by electronica 2009-09-06
define('IMAGE_BUTTON_SEARCH', 'Búsqueda');
define('IMAGE_BUTTON_UPDATE', 'Actualización');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar carrito de la compra');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Escribir Evaluación'); //changed by electronica 2009-09-06
define('IMAGE_BUTTON_ADMIN', 'Admin');
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Edit product');
// BOF - vr - 2010-02-20 removed double definition
// define('IMAGE_BUTTON_LOGIN', 'Login');
// EOF - vr - 2010-02-20 removed double definition
define('IMAGE_BUTTON_SEND', 'Send'); //DokuMan - 2010-03-15 - Added button description for contact form
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continuar la compra'); //Hendrik - 2010-11-12 - used in template xtc5...shopping_cart.html
define('SMALL_IMAGE_BUTTON_DELETE', 'Eliminar');
define('SMALL_IMAGE_BUTTON_EDIT', 'Editar');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');
define('ICON_ARROW_RIGHT', 'Mostrar más');
define('ICON_CART', 'En el carrito'); //changed by electronica 2009-09-06
define('ICON_SUCCESS', 'Éxito');
define('ICON_WARNING', 'Advertencia');
define('ICON_ERROR', 'Error');
define('TEXT_PRINT', 'print'); //DokuMan - 2009-05-26 - Added description for 'account_history_info.php'
/*
 *
 *  GREETINGS
 *
*/
define('TEXT_GREETING_PERSONAL', 'Encantado de verte de nuevo <span class="greetUser">%s!</span> ¿Le gustaría visitar nuestros <a href="%s"><u>nuevos productos</u></a> ');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si no está %s , por favor <a href="%s"><u>conéctese</u></a> con su cuenta.</small>');
define('TEXT_GREETING_GUEST', 'Cordialmente la bienvenida  <span class="greetUser">¡Visitante! </span> ¿Le gustaría <a href="%s"><u>login</u></a>? ¿O te gustaría regist <a href="%s"><u>cuenta nueva</u></a> ?');
define('TEXT_SORT_PRODUCTS', 'Clasificación de los temas es ');
define('TEXT_DESCENDINGLY', 'descendente');
define('TEXT_ASCENDINGLY', 'ascendente');
define('TEXT_BY', ' después ');
define('TEXT_OF_5_STARS', '%s of 5 Stars!');
define('TEXT_REVIEW_BY', 'desde %s');
define('TEXT_REVIEW_WORD_COUNT', '%s palabras');
define('TEXT_REVIEW_RATING', 'Revisión: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Fecha de inclusión: %s');
define('TEXT_NO_REVIEWS', 'No hay todavía ningún examen');
define('TEXT_NO_NEW_PRODUCTS', 'No hay nuevos productos en el momento.'); // Tomcraft - 2009-08-11 - changed text for new products_new function
define('TEXT_UNKNOWN_TAX_RATE', 'Desconocida tipo impositivo');
/*
 *
 * WARNINGS
 *
*/
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia: El directorio de instalación que está disponible en: ' . DIR_FS_DOCUMENT_ROOT . 'twe_installer. Por favor, elimine este directorio en el caso de la seguridad!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: TWE-Comercio es capaz de escribir en el directorio de configuración: ' .DIR_FS_DOCUMENT_ROOT . 'includes/configure.php. Que representa un posible peligro para la seguridad - por favor corregir el acceso de los usuarios los derechos de este directorio!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio de sesssions no existe: ' . twe_session_save_path() . '. Las sesiones no funcionarán hasta que este directorio se ha creado!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Advertencia: TWE-Comercio no es capaz de escribir en el período de sesiones de directorio: ' . twe_session_save_path() . '. ¡Las sesiones no funcionarán hasta que el usuario derecho de acceso a este directorio han sido cambiados!');
define('WARNING_SESSION_AUTO_START', 'Advertencia: session.auto_start está activado (habilitado) - Por favor, desactivar (con discapacidad), esta característica de PHP en php.ini y reiniciar su servidor web!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para descargar el artículo doesnt existe: '. DIR_FS_DOWNLOAD.'. Esta característica no funcionará hasta que este directorio se ha creado!');
define('SUCCESS_ACCOUNT_UPDATED', 'Su cuenta se ha actualizado con éxito.');
define('SUCCESS_PASSWORD_UPDATED', 'Su contraseña se ha cambiado con éxito!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'La contraseña no coincide con la almacenada dentro de la contraseña. Por favor, inténtalo de nuevo.');
define('TEXT_MAXIMUM_ENTRIES', '<font color="#ff0000"><b>Reference:</b></font> Usted es capaz de restaurar %s entradas en su libreta de direcciones!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'Tentrada seleccionada que se haya extinguido con éxito.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Su libreta de direcciones se ha actualizado con éxito!');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'La norma dirección postal no se puede borrar. Por favor, seleccione otra norma dirección postal y, a continuación, la entrada se puede borrar.'); //changed by electronica 2009-09-06
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Esta libreta de direcciones de entrada no está disponible.');
define('ERROR_ADDRESS_BOOK_FULL', 'Su libreta de direcciones no puede incluir más direcciones postales. Por favor, borrar una dirección que ya no es utilizado. entonces una nueva entrada se puede hacer.'); //changed by electronica 2009-09-06
//  conditions check
define('ERROR_CONDITIONS_NOT_ACCEPTED', '¡Si no acepta nuestras condiciones comerciales generales, no somos capaces de aceptar su pedido!');
define('SUB_TITLE_OT_DISCOUNT', 'Descuento:');
define('TAX_ADD_TAX', 'incluyen impuestos ');
define('TAX_NO_TAX', 'excluir de impuestos ');
define('TAX_SHORT_DISPLAY', ' VAT '); //DokuMan - 2010-09-28 - display VAT description multilingually
define('NOT_ALLOWED_TO_SEE_PRICES', 'No tienes permiso para ver los precios ');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT', 'No tienes permiso para ver los precios, por favor, regist una cuenta.');
define('TEXT_DOWNLOAD', 'Descargar');
define('TEXT_VIEW', 'Ver');
define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' orden');
define('TEXT_GUEST', 'Visitante');
/*
 *
 * ADVANCED SEARCH
 *
*/
define('TEXT_ALL_CATEGORIES', 'Todas las categorías');
define('TEXT_ALL_MANUFACTURERS', 'Todos los fabricantes');
define('JS_AT_LEAST_ONE_INPUT', '* Uno de los siguientes campos deben ser llenados:\n    Palabras clave\n    Fecha de\n    Fecha añadida en el\n    Precio más\n    Precio hasta\n'); //changed by electronica 2009-09-06
define('AT_LEAST_ONE_INPUT', 'One of the following fields must be filled out:<br />keywords consisting at least 3 characters<br />Price over<br />Price up to<br />'); //changed by electronica 2009-09-06
define('JS_INVALID_FROM_DATE', '* No válido a partir de la fecha\n');
define('JS_INVALID_TO_DATE', '* No válida al día\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* El a partir de la fecha debe ser mayor o igual que hasta ahora\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* Precio más, debe ser un número\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* Precio hasta, debe ser un número\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Precio hasta debe ser mayor o igual al Precio más.\n');
define('JS_INVALID_KEYWORDS', '* La clave de búsqueda no válido\n');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>ERROR:</b></font> El entró \'e-mail\' y / o el \'contraseña\' no coinciden.'); //changed by electronica 2009-09-06
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>WARNING:</b></font> El entró E-Mail no está registrado. Por favor, inténtalo de nuevo.'); //changed by electronica 2009-09-06
define('TEXT_PASSWORD_SENT', 'Una nueva contraseña ha sido enviado por E-Mail.');
define('TEXT_PRODUCT_NOT_FOUND', 'No encontrado!');
define('TEXT_MORE_INFORMATION', 'Para más información, por favor, visite la <a href="%s" target="_blank"><u>inicio</u></a> to this product.');
define('TEXT_DATE_ADDED', 'Este Producto fue añadido a nuestro catálogo en %s.');
define('TEXT_DATE_AVAILABLE', '<font color="#ff0000">Este producto es que se espera en las existencias de nuevo en %s wieder vorr&auml;tig sein.</font>');
define('SUB_TITLE_SUB_TOTAL', 'Subtotal:');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' , no están en stock entró con su importe.<br>Por favor, reducir su orden de compra la cantidad de los productos marcados. Gracias'); //changed by electronica 2009-09-06
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' , no están en stock entró con su importe.<br>El entró importe se presenta en un corto período de tiempo por nosotros. Previa solicitud, que también sería capaz de hacer entrega de una parte.'); //changed by electronica 2009-09-06
define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'You need to reach the minimum order value of: '); //changed by electronica 2009-09-06
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' <br />Please increase order value by at least: '); //changed by electronica 2009-09-06
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'You ordered more than the allowed amount of: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', '<br /> Please decrease your order by at least: '); //changed by electronica 2009-09-06
define('ERROR_INVALID_PRODUCT', 'El producto elegido por usted no se ha encontrado!');
/*
 *
 * NAVBAR TITLE
 *
*/
define('NAVBAR_TITLE_ACCOUNT', 'Su cuenta');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Cambiar sus datos de carácter personal');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Su hacer pedidos');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Hecho órdenes');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Número de orden %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Su cuenta');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Cambiar la contraseña');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Su cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Libreta de direcciones');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Su cuenta');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Libreta de direcciones');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nueva entrada');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Cambio entrada');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Eliminar entrada');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Búsqueda avanzada');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Búsqueda avanzada');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Resultados de la búsqueda');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Compra');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Confirmación');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Compra');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Método de pago');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Compra');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Cambiar la dirección de facturación');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Compra');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Envío de información');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Compra');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Cambiar la dirección de envío');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Compra');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Éxito');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Crear una cuenta');
if (isset($navigation) && $navigation->snapshot['page'] == FILENAME_CHECKOUT_SHIPPING) {
    define('NAVBAR_TITLE_LOGIN', 'Order');
} else {
    define('NAVBAR_TITLE_LOGIN', 'Login');
}
define('NAVBAR_TITLE_LOGOFF', 'Adiós');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nuevos productos');
define('NAVBAR_TITLE_SHOPPING_CART', 'Carrito de la compra');
define('NAVBAR_TITLE_SPECIALS', 'Ofertas especiales');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Uso de Cookies');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Comentarios');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Opiniones');
define('NAVBAR_TITLE_REVIEWS', 'Comentarios');
define('NAVBAR_TITLE_SSL_CHECK', 'Nota sobre la seguridad');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT', 'Crear una cuenta');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT', 'Password forgotten?');
define('NAVBAR_TITLE_NEWSLETTER', 'Newsletter');
define('NAVBAR_GV_REDEEM', 'Canjear Bono');
define('NAVBAR_GV_SEND', 'Enviar Voucher');
/*
 *
 *  MISC
 *
*/
define('TEXT_NEWSLETTER', 'You want to stay up to date?<br />No problem, receive our newsletter for the latest updates.'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_INPUT', 'Your e-mail adress has been registered in our system.<br />An e-mail with a confirmation link has been send out. Click the link in order to complete registration!'); //changed by electronica 2009-09-06
define('TEXT_WRONG_CODE', '<font color="#ff0000">The security code you entered was not correct. Please try again. <br />The form is not case sensitive.</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER', '<font color="#ff0000">This e-mail address is registered but not yet activated!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_EXIST_NEWSLETTER', '<font color="#ff0000">This e-mail address is already registered for the newsletter!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_NOT_EXIST', '<font color="#ff0000">This e-mail address is not registered for newsletters!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_DEL', 'Your e-mail address was deleted successfully from our newsletter-database.'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_DEL_ERROR', '<font color="#ff0000">An Error occured, your e-mail address has not been removed from our database!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ACTIVE', '<font color="#ff0000">Your e-mail address has successfully been registered for the newsletter!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ACTIVE_ERROR', '<font color="#ff0000">An error occured, your e-mail address has not been registered for the newsletter!</font>'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_SUBJECT', 'Your newsletter account'); //changed by electronica 2009-09-06
define('TEXT_CUSTOMER_GUEST', 'Guest');
define('TEXT_LINK_MAIL_SENDED', 'Your new password request must be confirmed.<br />An e-mail with a confirmation link has been send out. Click the link in order to complete recieve a new password!'); //changed by electronica 2009-09-06
define('TEXT_PASSWORD_MAIL_SENDED', 'You will receive an e-mail with your new password within minutes.<br />Please change your password after your first login.'); //changed by electronica 2009-09-06
define('TEXT_CODE_ERROR', 'The security code you entered was not correct. Please try again. <br />The form is not case sensitive.'); //changed by electronica 2009-09-06
define('TEXT_EMAIL_ERROR', 'The security code you entered was not correct. Please try again. <br />The form is not case sensitive.'); //changed by electronica 2009-09-06
define('TEXT_NO_ACCOUNT', 'Your request for a new password is either invalid or timed out.<br />Please try again.'); //changed by electronica 2009-09-06
define('HEADING_PASSWORD_FORGOTTEN', 'Password renewal?');
define('TEXT_PASSWORD_FORGOTTEN', 'Change your password in three easy steps.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN', 'Confirmation mail for password renewal');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD', 'Your new password');
define('ERROR_MAIL', 'Por favor, compruebe los datos introducidos en la forma');
define('CATEGORIE_NOT_FOUND', 'Categoría no fue encontrada'); //changed by electronica 2009-09-06
define('GV_FAQ', 'Vale de Regalo FAQ'); //changed by electronica 2009-09-06
define('ERROR_NO_REDEEM_CODE', 'No ha introducido un código de redimir.');
define('ERROR_NO_INVALID_REDEEM_GV', 'No válido el código del cupón de regalo'); //changed by electronica 2009-09-06
define('TABLE_HEADING_CREDIT', 'Créditos disponibles'); //changed by electronica 2009-09-06
define('EMAIL_GV_TEXT_SUBJECT', 'Un regalo de %s');
define('MAIN_MESSAGE', 'Usted ha decidido enviar un certificado de regalo por valor de %s en %s, la dirección de correo electrónico está %s<br><br>El texto acompañar a la dirección de correo electrónico se lee<br><br>Estimado %s<br><br>
                        Te han enviado un certificado de regalo por valor de %s %s'); //changed by electronica 2009-09-06
define('REDEEMED_AMOUNT', 'Your gift voucher was successfully added to your account. Gift voucher amount:'); //changed by electronica 2009-09-06
define('REDEEMED_COUPON', 'Your voucher has been successfully credited to your account and will be cashed automatically on your next purchase.'); //changed by electronica 2009-09-06
define('ERROR_INVALID_USES_USER_COUPON', 'This voucher can only be redeemed '); //changed by electronica 2009-09-06
define('ERROR_INVALID_USES_COUPON', 'This coucher can only be redeemed '); //changed by electronica 2009-09-06
define('TIMES', ' times.');
define('ERROR_INVALID_STARTDATE_COUPON', 'Your coupon is not available yet.'); //changed by electronica 2009-09-06
define('ERROR_INVALID_FINISDATE_COUPON', 'Your voucher is already expired.'); //changed by electronica 2009-09-06
define('PERSONAL_MESSAGE', '%s dice:'); //changed by electronica 2009-09-06
//Popup Window
// BOF - DokuMan - 2010-02-25 removed double definition
//define('TEXT_CLOSE_WINDOW', 'Close window.'); //changed by electronica 2009-09-06
// EOF - DokuMan - 2010-02-25 removed double definition
/*
 *
 * CUOPON POPUP
 *
*/
define('TEXT_CLOSE_WINDOW', 'Close window [x]'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_HEADER', 'Your voucher has been successfully redeemed.'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_NAME', '<br /><br />Voucher name : %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_FIXED', '<br /><br />This voucher is worth %s off your next order'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />You need to spend at least %s to be able to use the voucher.'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />This voucher gives you free shipping on your order'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_DESC', '<br /><br />Voucher description : %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_DATE', '<br /><br />This voucher is valid from: %s to %s'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Product / Category Restrictions'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_CATEGORIES', 'Category'); //changed by electronica 2009-09-06
define('TEXT_COUPON_HELP_PRODUCTS', 'Product'); //changed by electronica 2009-09-06
//BOF - DokuMan - 2010-10-28 - Added text-constant for emailing voucher
define('ERROR_ENTRY_AMOUNT_CHECK', 'Invalid amount');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Invalid e-mail address');
//EOF - DokuMan - 2010-10-28 - Added text-constant for emailing voucher
// VAT Reg No
define('ENTRY_VAT_TEXT', '* for EU-Countries only'); //changed by electronica 2009-09-06 anmerkung: besser wenn laden im EU ausland ist
define('ENTRY_VAT_ERROR', 'The chosen VAT Reg No is not valid or cannot be verified at the moment! Please enter a valid VAT Reg No or leave this field empty.'); //changed by electronica 2009-09-06
define('MSRP', 'MSRP');
define('YOUR_PRICE', 'your price ');
// BOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('UNIT_PRICE', 'unit price ');
// EOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('ONLY', ' only ');
define('FROM', 'from ');
define('YOU_SAVE', 'you save ');
define('INSTEAD', 'instead of ');
define('TXT_PER', ' per ');
define('TAX_INFO_INCL', '%s VAT incl.');
define('TAX_INFO_EXCL', '%s VAT excl.');
define('TAX_INFO_ADD', '%s VAT plus.');
define('SHIPPING_EXCL', 'excl.');
define('SHIPPING_COSTS', 'Shipping costs');
// changes 3.0.4 SP2
define('SHIPPING_TIME', 'Shipping time: ');
define('MORE_INFO', '[More]');
// changes 3.0.4 SP2.2
define('ENTRY_PRIVACY_ERROR', 'Please accept our privacy policy!');
define('TEXT_PAYMENT_FEE', 'Paymentfee');
define('_MODULE_INVALID_SHIPPING_ZONE', 'Unfortunately we do not deliver to the chosen country.'); //changed by electronica 2009-09-06
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Shipping costs cannot be calculated at the moment, please contact us.'); //changed by electronica 2009-09-06
//Dokuman - 2009-08-21 - Added 'delete account' functionality for customers
define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Your account');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Delete account');
//contact-form messages
define('ERROR_EMAIL', '<p><b>Your e-mail address:</b> None or invalid input!</p>');
define('ERROR_VVCODE', '<p><b>Security code:</b> No match, please enter your security code again!</p>');
define('ERROR_MSG_BODY', '<p><b>Your message:</b> No input!</p>');
// BOF - DokuMan - 2010-09-06 - combined contact form messages in one language file
define('EMAIL_COMPANY', 'Company: ');
define('EMAIL_STREET', 'Street: ');
define('EMAIL_POSTCODE', 'Postcode: ');
define('EMAIL_CITY', 'City: ');
define('EMAIL_PHONE', 'Telephone: ');
define('EMAIL_FAX', 'Fax: ');
define('EMAIL_SENT_BY', 'Sent by %s %s at %s to %s clock');
define('EMAIL_NOTIFY', 'Attention, this e-mail can NOT be answered with -ANSWER THE SENDER-!');
define('EMAIL_NAME', 'Name: ');
define('EMAIL_EMAIL', 'E-mail: ');
define('EMAIL_MESSAGE', 'Message: ');
// EOF - DokuMan - 2010-09-06 - combined contact form messages in one language file
// BOF - DokuMan - 2010-09-06 - combined checkout_confirmation messages in one language file
//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Number');
define('HEADER_ARTICLE', 'Item');
define('HEADER_SINGLE', 'Singleprice');
define('HEADER_TOTAL', 'Total');
// EOF - DokuMan - 2010-09-06 - combined checkout_confirmation messages in one language file
// BOF - web28 - 2010-05-07 - PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT', 'PayPal-Checkout');
define('PAYPAL_ERROR', 'PayPal abort');
define('PAYPAL_NOT_AVIABLE', 'PayPal Express is not available.<br />Please select another method of payment<br />or try again later.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'We are not able to accept your order if you do not accept your address!');
define('PAYPAL_FEHLER', 'PayPal announced an error to the completion..<br />Your order is stored, is however not implemented.<br />Please enter a new order.<br />Thanks for your understanding.<br />');
define('PAYPAL_WARTEN', 'PayPal announced an error to the completion.<br />You must pay again to PayPal around the order.<br />Down you see the stored order.<br /> Thanks for it pressing to understanding request you again the button PayPal express.<br />');
define('PAYPAL_NEUBUTTON', 'Press please again around the order to pay.<br />Every other key leads to the abort of the order.');
define('PAYPAL_GS', 'Coupon');
define('PAYPAL_TAX', 'Tax');
define('PAYPAL_EXP_WARN', 'Note! Possibly resulting forwarding expenses are only computed in the shop finally.');
define('PAYPAL_EXP_VORL', 'Provisional forwarding expenses');
define('PAYPAL_EXP_VERS', '12.90');
// EOF - web28 - 2010-05-07 - PayPal API Modul
define('BASICPRICE_VPE_TEXT', 'in this volume only '); // Hetfield - 2009-11-26 - Added language definition for vpe at graduated prices
//web - 2010-07-11 - Preisanzeige bei Staffelpreisen (größte Staffel)
define('GRADUATED_PRICE_MAX_VALUE', 'from');
?>