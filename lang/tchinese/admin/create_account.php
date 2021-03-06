<?php
/* --------------------------------------------------------------
   $Id: create_account.php 985 2005-06-17 22:35:22Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(create_account.php,v 1.13 2003/05/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (create_account.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('NAVBAR_TITLE', '新增帳號');
define('HEADING_TITLE', '新增帳號管理');
define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>提示:</b></font></small> 如果你已經註冊為會員請按 <a href="%s"><u>這裡</u></a>.');
define('EMAIL_SUBJECT', '歡迎來到 ' . STORE_NAME);
define('EMAIL_GREET_MR', '親愛的 ' . stripslashes($_POST['lastname']) . ' 先生,' . "\n\n");
define('EMAIL_GREET_MS', '親愛的 ' . stripslashes($_POST['lastname']) . ' 小姐,' . "\n\n");
define('EMAIL_GREET_NONE', '親愛的 ' . stripslashes($_POST['lastname']) . ' ,' . "\n\n");
define('EMAIL_WELCOME', '歡迎加入 <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'You can now take part in the <b>various services</b> we have to offer you. Some of these services include:' . "\n\n" . '<li><b>Permanent Cart</b> - Any products added to your online cart remain there until you remove them, or check them out.' . "\n" . '<li><b>Address Book</b> - We can now deliver your products to another address other than yours! This is perfect to send birthday gifts direct to the birthday persons themselves.' . "\n" . '<li><b>Order History</b> - View your history of purchases that you have made with us.' . "\n" . '<li><b>Products Reviews</b> - Share your opinions on products with our other customers.' . "\n\n");
define('EMAIL_CONTACT', 'For help with any of our online services, please E-Mail the store-owner: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>注意：</b> 這個信箱是我們的客戶所提供，如果您並未註冊過網站的會員，請將這個問題反應到 ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('ENTRY_PAYMENT_UNALLOWED', '不能使用的付款模組：');
define('ENTRY_SHIPPING_UNALLOWED', '不能使用的運送模組：');
?>