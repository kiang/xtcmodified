<?php
/* -----------------------------------------------------------------------------------------
   $Id: general.css.php 1304 2010-09-14 13:48:41Z gtb-modified $

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

   // Put CSS-Definitions here, these CSS-files will be loaded at the TOP of every page
?>
<?php 
/*
//BOF - GTB - 2010-08-03 - Security Fix - Base
<link rel="stylesheet" href="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/css/thickbox.css" type="text/css" media="screen" />
*/ ?>
<link rel="stylesheet" href="<?php echo DIR_WS_BASE.'templates/'.CURRENT_TEMPLATE; ?>/stylesheet.css" type="text/css" />
<link rel="stylesheet" href="<?php echo DIR_WS_BASE.'templates/'.CURRENT_TEMPLATE; ?>/css/thickbox.css" type="text/css" media="screen" />
<?php 
//EOF - GTB - 2010-08-03 - Security Fix - Base
?>
<?php 
// BOF - web28 - 2010-07-09 - TABS/ACCORDION in product_info
if (strstr($PHP_SELF, FILENAME_PRODUCT_INFO )) {
//BOF - GTB - 2010-08-03 - Security Fix - Base ?>
<link rel="stylesheet" href="<?php echo DIR_WS_BASE.'templates/'.CURRENT_TEMPLATE; ?>/css/jquery-ui.css" type="text/css" media="screen" />
<?php
/* <link rel="stylesheet" href="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/css/jquery-ui.css" type="text/css" media="screen" />
//EOF - GTB - 2010-08-03 - Security Fix - Base */
}
// EOF - web28 - 2010-07-09 - TABS/ACCORDION in product_info
?>