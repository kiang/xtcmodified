<?php
/* -----------------------------------------------------------------------------------------
   $Id: xtc_image_button.inc.php 1298 2010-09-10 09:09:39Z gtb-modified $   

   xtcModified - community made shopping
   http://www.xtc-modified.org

   Copyright (c) 2010 xtcModified
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(html_output.php,v 1.52 2003/03/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (xtc_image_button.inc.php,v 1.3 2003/08/13); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
// Output a function button in the selected language
function xtc_image_button($image, $alt = '', $parameters = '') {
    return xtc_image('templates/' . CURRENT_TEMPLATE . '/buttons/' . $_SESSION['language'] . '/' . $image, $alt, '', '', $parameters);
}
?>