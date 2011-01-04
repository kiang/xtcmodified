<?php
/* --------------------------------------------------------------
   $Id: categories.php 1249 2005-09-27 12:06:40Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_EDIT_STATUS', 'Status');
define('TEXT_EDIT_STATUS', 'Estatus');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', 'Categorías / Productos');
define('HEADING_TITLE_SEARCH', 'Buscar: ');
define('HEADING_TITLE_GOTO', 'Ir a:');
define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorías / Productos');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_STATUS', 'Estatus');
define('TABLE_HEADING_STARTPAGE', 'TOP');
define('TABLE_HEADING_STOCK', '	Advertencia stock');
define('TABLE_HEADING_SORT', 'Sort');
define('TABLE_HEADING_EDIT', 'Edit');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL', 'Products Model');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model
// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE', 'Image');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TEXT_ACTIVE_ELEMENT', 'Active Element');
define('TEXT_INFORMATIONS', 'Informations');
define('TEXT_MARKED_ELEMENTS', 'Marked Elements');
define('TEXT_INSERT_ELEMENT', 'New Element');
define('TEXT_WARN_MAIN', 'Principal');
define('TEXT_NEW_PRODUCT', 'Nuevos Productos en &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Categorías:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Precio:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Tipo de Impuesto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Calificación promedio:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Cantidad:');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', 'Max. permite Descuento:');
define('TEXT_DATE_ADDED', 'Fecha en que se agregó:');
define('TEXT_DATE_AVAILABLE', 'Fecha de disponibilidad:');
define('TEXT_LAST_MODIFIED', 'Ultima Modificación:');
define('TEXT_IMAGE_NONEXISTENT', 'Imagen no existe');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor, introduzca una nueva categoría de producto o en <br>&nbsp;<br><b>%s</b>');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Para obtener más información, por favor, visite estos productos <a href="http://%s" target="blank"><u>página web</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este producto esta en nuestro catálogo desde %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este producto estará disponible el %s.');
define('TEXT_EDIT_INTRO', 'Haga los cambios necesarios');
define('TEXT_EDIT_CATEGORIES_ID', 'Categoría ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nombre de la categoría:');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', 'Categoría Denominación:');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Categoría Descripción:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Categoría Imagen:');
define('TEXT_EDIT_SORT_ORDER', 'Ordenar:');
define('TEXT_INFO_COPY_TO_INTRO', 'Por favor, elija una nueva categoría que desea copiar este producto a');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Actualidad Categorías:');
define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nueva categoría');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar Categoría');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Suprimir Categoría');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categoría');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Eliminar Producto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover producto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar a');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', 'Move Elements');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Delete Elements');
define('TEXT_DELETE_CATEGORY_INTRO', '¿Estás seguro de que desea eliminar esta categoría?');
define('TEXT_DELETE_PRODUCT_INTRO', '¿Estás seguro de que desea suprimir permanentemente este producto?');
define('TEXT_DELETE_WARNING_CHILDS', '<b>ADVERTENCIA:</b> No se %s (child-)Categorías todavía ligada a esta categoría!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<bADVERTENCIA:</b> Hay %s productos siguen vinculados a esta categoría!');
define('TEXT_MOVE_WARNING_CHILDS', '<b>Info:</b> There are %s (Child-)Categories still linked to this category!');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>Info:</b> There are %s products still linked to this category!');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor, seleccione la categoría que usted desea <b>%s</b> a residir en');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor, seleccione la categoría que usted desea <b>%s</b> a residir en');
define('TEXT_MOVE', 'Mover a <b>%s</b>:');
define('TEXT_MOVE_ALL', 'Move all to:');
define('TEXT_NEW_CATEGORY_INTRO', 'Por favor, rellene los siguientes datos para la nueva categoría.');
define('TEXT_CATEGORIES_NAME', 'Nombre de la categoría:');
define('TEXT_CATEGORIES_IMAGE', 'Categoría Imagen:');
define('TEXT_META_TITLE', 'Meta Título:');
define('TEXT_META_DESCRIPTION', 'Meta Descripción:');
define('TEXT_META_KEYWORDS', 'Meta Palabras clave:');
define('TEXT_SORT_ORDER', 'Ordenar:');
define('TEXT_PRODUCTS_STATUS', 'Productos Estado:');
define('TEXT_PRODUCTS_STARTPAGE', 'Show on startpage:');
define('TEXT_PRODUCTS_STARTPAGE_YES', 'Yes');
define('TEXT_PRODUCTS_STARTPAGE_NO', 'No');
define('TEXT_PRODUCTS_STARTPAGE_SORT', 'Sort order (startpage):');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de disponibilidad:');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Agotado');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante del producto:');
define('TEXT_PRODUCTS_NAME', 'Nombre de productos:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Productos Descripción:');
define('TEXT_PRODUCTS_QUANTITY', 'Productos Cantidad:');
define('TEXT_PRODUCTS_MODEL', 'Productos Modelo:');
define('TEXT_PRODUCTS_IMAGE', 'Productos de Imagen:');
define('TEXT_PRODUCTS_URL', 'Productos URL:');
define('TEXT_PRODUCTS_PRICE', 'Products Price:');
define('TEXT_PRODUCTS_WEIGHT', 'Products Weight:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(without leading http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Precio de los Productos:');
define('TEXT_PRODUCTS_WEIGHT', 'Productos Peso:');define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(without http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Product price:');
define('TEXT_PRODUCTS_WEIGHT', 'Product weight:');
define('TEXT_PRODUCTS_EAN', 'Barcode/EAN');
define('TEXT_PRODUCT_LINKED_TO', 'Linked to:');
define('TEXT_DELETE', 'Delete');
define('EMPTY_CATEGORY', 'Categoría vacía');
define('TEXT_HOW_TO_COPY', 'Copiar Método:');
define('TEXT_COPY_AS_LINK', 'Enlace de productos');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar producto');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No se puede vincular productos en el mismo directorio.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: directorio de imagenes del catálogo No se puede escribir: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: directorio de imagenes del catálogo no existe: ' . DIR_FS_CATALOG_IMAGES);
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED', 'Descuento permite:');
define('HEADING_PRICES_OPTIONS', '<b>Precio opciones</b>');
define('HEADING_PRODUCT_IMAGES', '<b>Products Images</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO', '<small>(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION', 'Breve descripción:');
define('TEXT_PRODUCTS_KEYWORDS', 'Extra words for Search:');
define('TXT_STK', 'Stk: ');
define('TXT_PRICE', 'a :');
define('TXT_NETTO', 'Precio neto: ');
define('TXT_STAFFELPREIS', 'Graduado Precio');
define('HEADING_PRODUCTS_MEDIA', '<b>Productos de Media</b>');
define('TABLE_HEADING_PRICE', 'Precio');
define('TEXT_FSK18', 'FSK 18:');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE', 'Plantilla para la categoría listado');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING', 'De plantilla para el listado de productos');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Sorting:');
define('TEXT_PRODUCTS_SORT', 'Clasificación:');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER', 'Clasificación de Producto');
define('TXT_PRICES', 'Precio');
define('TXT_NAME', 'Nombre del producto');
define('TXT_ORDERED', 'Productos solicitados');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT', 'Sorting');
define('TXT_SORT', 'Clasificación');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT', 'Peso');
define('TXT_QTY', 'En stock');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE', 'Release date');
define('TXT_MODEL', 'Products Model');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TEXT_MULTICOPY', 'Múltiples');
define('TEXT_MULTICOPY_DESC', 'Copiar / producto en vínculo siguientes categorías (si 1 seleccionada, la configuración única se ignoran)');
define('TEXT_SINGLECOPY', 'Individual');
define('TEXT_SINGLECOPY_DESC', 'Copiar / producto en vínculo siguientes categorías');
define('TEXT_SINGLECOPY_CATEGORY', 'Category:');
define('TEXT_PRODUCTS_VPE', 'Unit');
define('TEXT_PRODUCTS_VPE_VISIBLE', 'Show Unit Price:');
define('TEXT_PRODUCTS_VPE_VALUE', ' Value:');
define('CROSS_SELLING', 'Cross selling for article');
define('CROSS_SELLING_SEARCH', 'Search product:<br/><small><i>enter productnr.</i></small>');
define('BUTTON_EDIT_CROSS_SELLING', 'Cross selling');
define('HEADING_DEL', 'delete');
define('HEADING_ADD', 'Add?');
define('HEADING_GROUP', 'Group');
define('HEADING_SORTING', 'sorting');
define('HEADING_MODEL', 'model');
define('HEADING_NAME', 'article');
define('HEADING_CATEGORY', 'category');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_SORT_ASC', 'ascending');
define('TEXT_SORT_DESC', 'descending');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS', 'characters');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

?>