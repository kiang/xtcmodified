# -----------------------------------------------------------------------------------------
#  $Id: xtcommerce.sql 1592 2010-12-24 23:45:43Z franky-n-xtcm $
#
#  xtc-Modified
#  http://www.xtc-modified.org
#
#  Copyright (c) 2010 xtc-Modified
#  -----------------------------------------------------------------------------------------
#  Third Party Contributions:
#  Customers status v3.x (c) 2002-2003 Elari elari@free.fr
#  Download area : www.unlockgsm.com/dload-osc/
#  CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist
#  BMC 2003 for the CC CVV Module
#  --------------------------------------------------------------
#  based on:
#  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
#  (c) 2002-2003 osCommerce (oscommerce.sql,v 1.83); www.oscommerce.com
#  (c) 2003 nextcommerce (nextcommerce.sql,v 1.76 2003/08/25); www.nextcommerce.org
#  (c) 2006 xtCommerce (xtcommerce.sql,v 1.62 2004/06/06); www.xt-commerce.com
#
#  Released under the GNU General Public License
#
#  --------------------------------------------------------------
#  NOTE: * Please make any modifications to this file by hand!
#   * DO NOT use a mysqldump created file for new changes!
#   * Please take note of the table structure, and use this
#   structure as a standard for future modifications!
#   * To see the 'diff'erence between MySQL databases, use
#   the mysqldiff perl script located in the extras
#   directory of the 'catalog' module.
#   * Comments should be like these, full line comments.
#   (don't use inline comments)
#  --------------------------------------------------------------

DROP TABLE IF EXISTS address_book;
CREATE TABLE address_book (
  address_book_id INT NOT NULL AUTO_INCREMENT,
  customers_id INT NOT NULL,
  entry_gender CHAR(1) NOT NULL,
  entry_company VARCHAR(32),
  entry_firstname VARCHAR(32) NOT NULL,
  entry_lastname VARCHAR(32) NOT NULL,
  entry_street_address VARCHAR(64) NOT NULL,
  entry_suburb VARCHAR(32),
  entry_postcode VARCHAR(10) NOT NULL,
  entry_city VARCHAR(32) NOT NULL,
  entry_state VARCHAR(32),
  entry_country_id INT DEFAULT 0 NOT NULL,
  entry_zone_id INT DEFAULT 0 NOT NULL,
  address_date_added DATETIME DEFAULT '0000-00-00 00:00:00',
  address_last_modified DATETIME DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (address_book_id),
  KEY idx_address_book_customers_id (customers_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_memo;
CREATE TABLE customers_memo (
  memo_id INT(11) NOT NULL AUTO_INCREMENT,
  customers_id INT(11) NOT NULL DEFAULT 0,
  memo_date DATE NOT NULL DEFAULT '0000-00-00',
  memo_title TEXT NOT NULL,
  memo_text TEXT NOT NULL,
  poster_id INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (memo_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_xsell;
CREATE TABLE products_xsell (
  id INT(10) NOT NULL AUTO_INCREMENT,
  products_id INT(10) UNSIGNED NOT NULL DEFAULT 1,
  products_xsell_grp_name_id INT(10) UNSIGNED NOT NULL DEFAULT 1,
  xsell_id INT(10) UNSIGNED NOT NULL DEFAULT 1,
  sort_order INT(10) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_xsell_grp_name;
CREATE TABLE products_xsell_grp_name (
  products_xsell_grp_name_id INT(10) NOT NULL,
  xsell_sort_order INT(10) NOT NULL DEFAULT 0,
  language_id SMALLINT(6) NOT NULL DEFAULT 0,
  groupname VARCHAR(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS campaigns;
CREATE TABLE campaigns (
  campaigns_id INT(11) NOT NULL AUTO_INCREMENT,
  campaigns_name VARCHAR(32) NOT NULL DEFAULT '',
  campaigns_refid VARCHAR(64) DEFAULT NULL,
  campaigns_leads INT(11) NOT NULL DEFAULT 0,
  date_added DATETIME DEFAULT NULL,
  last_modified DATETIME DEFAULT NULL,
  PRIMARY KEY (campaigns_id),
  KEY idx_campaigns_name (campaigns_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS campaigns_ip;
CREATE TABLE campaigns_ip (
  user_ip VARCHAR(15) NOT NULL,
  TIME DATETIME NOT NULL,
  campaign VARCHAR(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS address_format;
CREATE TABLE address_format (
  address_format_id INT NOT NULL AUTO_INCREMENT,
  address_format VARCHAR(128) NOT NULL,
  address_summary VARCHAR(48) NOT NULL,
  PRIMARY KEY (address_format_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS database_version;
CREATE TABLE database_version (
  version VARCHAR(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Tomcraft - 2009-11-02 - set global customers-group-permissions (customers_group)
# web28 - 2010-07-07 - set shop_offline parameter
# Web28 - 2010-11-13 - add missing listproducts
DROP TABLE IF EXISTS admin_access;
CREATE TABLE admin_access (
  customers_id VARCHAR(32) NOT NULL DEFAULT '0',
  configuration INT(1) NOT NULL DEFAULT 0,
  modules INT(1) NOT NULL DEFAULT 0,
  countries INT(1) NOT NULL DEFAULT 0,
  currencies INT(1) NOT NULL DEFAULT 0,
  zones INT(1) NOT NULL DEFAULT 0,
  geo_zones INT(1) NOT NULL DEFAULT 0,
  tax_classes INT(1) NOT NULL DEFAULT 0,
  tax_rates INT(1) NOT NULL DEFAULT 0,
  accounting INT(1) NOT NULL DEFAULT 0,
  backup INT(1) NOT NULL DEFAULT 0,
  cache INT(1) NOT NULL DEFAULT 0,
  server_info INT(1) NOT NULL DEFAULT 0,
  whos_online INT(1) NOT NULL DEFAULT 0,
  languages INT(1) NOT NULL DEFAULT 0,
  define_language INT(1) NOT NULL DEFAULT 0,
  orders_status INT(1) NOT NULL DEFAULT 0,
  shipping_status INT(1) NOT NULL DEFAULT 0,
  module_export INT(1) NOT NULL DEFAULT 0,

  customers INT(1) NOT NULL DEFAULT 0,
  create_account INT(1) NOT NULL DEFAULT 0,
  customers_status INT(1) NOT NULL DEFAULT 0,
  customers_group INT(1) NOT NULL DEFAULT 0,
  orders INT(1) NOT NULL DEFAULT 0,
  campaigns INT(1) NOT NULL DEFAULT 0,
  print_packingslip INT(1) NOT NULL DEFAULT 0,
  print_order INT(1) NOT NULL DEFAULT 0,
  popup_memo INT(1) NOT NULL DEFAULT 0,
  coupon_admin INT(1) NOT NULL DEFAULT 0,
  listproducts INT(1) NOT NULL DEFAULT 0,
  listcategories INT(1) NOT NULL DEFAULT 0,
  gv_queue INT(1) NOT NULL DEFAULT 0,
  gv_mail INT(1) NOT NULL DEFAULT 0,
  gv_sent INT(1) NOT NULL DEFAULT 0,
  validproducts INT(1) NOT NULL DEFAULT 0,
  validcategories INT(1) NOT NULL DEFAULT 0,
  mail INT(1) NOT NULL DEFAULT 0,

  categories INT(1) NOT NULL DEFAULT 0,
  new_attributes INT(1) NOT NULL DEFAULT 0,
  products_attributes INT(1) NOT NULL DEFAULT 0,
  manufacturers INT(1) NOT NULL DEFAULT 0,
  reviews INT(1) NOT NULL DEFAULT 0,
  specials INT(1) NOT NULL DEFAULT 0,
  products_expected INT(1) NOT NULL DEFAULT 0,

  stats_products_expected INT(1) NOT NULL DEFAULT 0,
  stats_products_viewed INT(1) NOT NULL DEFAULT 0,
  stats_products_purchased INT(1) NOT NULL DEFAULT 0,
  stats_customers INT(1) NOT NULL DEFAULT 0,
  stats_sales_report INT(1) NOT NULL DEFAULT 0,
  stats_campaigns INT(1) NOT NULL DEFAULT 0,

  banner_manager INT(1) NOT NULL DEFAULT 0,
  banner_statistics INT(1) NOT NULL DEFAULT 0,

  module_newsletter INT(1) NOT NULL DEFAULT 0,
  start INT(1) NOT NULL DEFAULT 0,

  content_manager INT(1) NOT NULL DEFAULT 0,
  content_preview INT(1) NOT NULL DEFAULT 0,
  credits INT(1) NOT NULL DEFAULT 0,
  blacklist INT(1) NOT NULL DEFAULT 0,

  orders_edit INT(1) NOT NULL DEFAULT 0,
  popup_image INT(1) NOT NULL DEFAULT 0,
  csv_backend INT(1) NOT NULL DEFAULT 0,
  products_vpe INT(1) NOT NULL DEFAULT 0,
  cross_sell_groups INT(1) NOT NULL DEFAULT 0,

  fck_wrapper INT(1) NOT NULL DEFAULT 0,
  econda INT(1) NOT NULL DEFAULT 0,
  cleverreach INT(1) NOT NULL DEFAULT 0,
  sofortueberweisung_install INT(1) NOT NULL DEFAULT 0,
  shop_offline INT(1) NOT NULL DEFAULT 0,
  xajax INT(1) NOT NULL DEFAULT 1,

  PRIMARY KEY (customers_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS banktransfer;
CREATE TABLE banktransfer (
  orders_id INT(11) NOT NULL DEFAULT 0,
  banktransfer_owner VARCHAR(64) DEFAULT NULL,
  banktransfer_number VARCHAR(24) DEFAULT NULL,
  banktransfer_bankname VARCHAR(255) DEFAULT NULL,
  banktransfer_blz VARCHAR(8) DEFAULT NULL,
  banktransfer_status INT(11) DEFAULT NULL,
  banktransfer_prz CHAR(2) DEFAULT NULL,
  banktransfer_fax CHAR(2) DEFAULT NULL,
  KEY orders_id (orders_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS banners;
CREATE TABLE banners (
  banners_id INT NOT NULL AUTO_INCREMENT,
  banners_title VARCHAR(64) NOT NULL,
  banners_url VARCHAR(255) NOT NULL,
  banners_image VARCHAR(64) NOT NULL,
  banners_group VARCHAR(10) NOT NULL,
  banners_html_text TEXT,
  expires_impressions INT(7) DEFAULT 0,
  expires_date DATETIME DEFAULT NULL,
  date_scheduled DATETIME DEFAULT NULL,
  date_added DATETIME NOT NULL,
  date_status_change DATETIME DEFAULT NULL,
  status INT(1) DEFAULT 1 NOT NULL,
  PRIMARY KEY (banners_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS banners_history;
CREATE TABLE banners_history (
  banners_history_id INT NOT NULL AUTO_INCREMENT,
  banners_id INT NOT NULL,
  banners_shown INT(5) NOT NULL DEFAULT 0,
  banners_clicked INT(5) NOT NULL DEFAULT 0,
  banners_history_date DATETIME NOT NULL,
  PRIMARY KEY (banners_history_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS categories;
CREATE TABLE categories (
  categories_id INT NOT NULL AUTO_INCREMENT,
  categories_image VARCHAR(64),
  parent_id INT DEFAULT 0 NOT NULL,
  categories_status TINYINT (1) UNSIGNED DEFAULT 1 NOT NULL,
  categories_template VARCHAR(64),
  group_permission_0 TINYINT(1) NOT NULL,
  group_permission_1 TINYINT(1) NOT NULL,
  group_permission_2 TINYINT(1) NOT NULL,
  group_permission_3 TINYINT(1) NOT NULL,
  listing_template VARCHAR(64) NOT NULL DEFAULT '',
  sort_order INT(3) DEFAULT 0 NOT NULL,
  products_sorting VARCHAR(32),
  products_sorting2 VARCHAR(32),
  date_added DATETIME,
  last_modified DATETIME,
  PRIMARY KEY (categories_id),
  KEY idx_categories_parent_id (parent_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS categories_description;
CREATE TABLE categories_description (
  categories_id INT DEFAULT 0 NOT NULL,
  language_id INT DEFAULT 1 NOT NULL,
  categories_name VARCHAR(32) NOT NULL,
  categories_heading_title VARCHAR(255) NOT NULL,
  categories_description text NOT NULL,
  categories_meta_title VARCHAR(100) NOT NULL,
  categories_meta_description VARCHAR(255) NOT NULL,
  categories_meta_keywords VARCHAR(255) NOT NULL,
  PRIMARY KEY (categories_id, language_id),
  KEY idx_categories_name (categories_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS configuration;
CREATE TABLE configuration (
  configuration_id INT NOT NULL AUTO_INCREMENT,
  configuration_key VARCHAR(64) NOT NULL,
  configuration_value VARCHAR(255) NOT NULL,
  configuration_group_id INT NOT NULL,
  sort_order INT(5) NULL,
  last_modified DATETIME NULL,
  date_added DATETIME NOT NULL,
  use_function VARCHAR(255) NULL,
  set_function VARCHAR(255) NULL,
  PRIMARY KEY (configuration_id),
  KEY idx_configuration_group_id (configuration_group_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS configuration_group;
CREATE TABLE configuration_group (
  configuration_group_id INT NOT NULL AUTO_INCREMENT,
  configuration_group_title VARCHAR(64) NOT NULL,
  configuration_group_description VARCHAR(255) NOT NULL,
  sort_order INT(5) NULL,
  visible INT(1) DEFAULT 1 NULL,
  PRIMARY KEY (configuration_group_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS counter;
CREATE TABLE counter (
  startdate CHAR(8),
  counter INT(12)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS counter_history;
CREATE TABLE counter_history (
  month CHAR(8),
  counter INT(12)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS countries;
CREATE TABLE countries (
  countries_id INT NOT NULL AUTO_INCREMENT,
  countries_name VARCHAR(64) NOT NULL,
  countries_iso_code_2 CHAR(2) NOT NULL,
  countries_iso_code_3 CHAR(3) NOT NULL,
  address_format_id INT NOT NULL,
  status INT(1) DEFAULT 1 NULL,
  PRIMARY KEY (countries_id),
  KEY IDX_COUNTRIES_NAME (countries_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS currencies;
CREATE TABLE currencies (
  currencies_id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(32) NOT NULL,
  code CHAR(3) NOT NULL,
  symbol_left VARCHAR(12),
  symbol_right VARCHAR(12),
  decimal_point CHAR(1),
  thousands_point CHAR(1),
  decimal_places CHAR(1),
  value FLOAT(13,8),
  last_updated DATETIME NULL,
  PRIMARY KEY (currencies_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
  customers_id INT NOT NULL AUTO_INCREMENT,
  customers_cid VARCHAR(32),
  customers_vat_id VARCHAR(20),
  customers_vat_id_status INT(2) DEFAULT 0 NOT NULL,
  customers_warning VARCHAR(32),
  customers_status INT(5) DEFAULT 1 NOT NULL,
  customers_gender CHAR(1) NOT NULL,
  customers_firstname VARCHAR(32) NOT NULL,
  customers_lastname VARCHAR(32) NOT NULL,
  customers_dob DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
  customers_email_address VARCHAR(96) NOT NULL,
  customers_default_address_id INT NOT NULL,
  customers_telephone VARCHAR(32) NOT NULL,
  customers_fax VARCHAR(32),
  customers_password VARCHAR(40) NOT NULL,
  customers_newsletter CHAR(1),
  customers_newsletter_mode CHAR(1) DEFAULT '0' NOT NULL,
  member_flag CHAR(1) DEFAULT '0' NOT NULL,
  delete_user CHAR(1) DEFAULT '1' NOT NULL,
  account_type INT(1) NOT NULL DEFAULT 0,
  password_request_key VARCHAR(32) NOT NULL,
  payment_unallowed VARCHAR(255) NOT NULL,
  shipping_unallowed VARCHAR(255) NOT NULL,
  refferers_id VARCHAR(32) DEFAULT '0' NOT NULL,
  customers_date_added DATETIME DEFAULT '0000-00-00 00:00:00',
  customers_last_modified DATETIME DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (customers_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_basket;
CREATE TABLE customers_basket (
  customers_basket_id INT NOT NULL AUTO_INCREMENT,
  customers_id INT NOT NULL,
  products_id TINYTEXT NOT NULL,
  customers_basket_quantity INT(2) NOT NULL,
  final_price DECIMAL(15,4) NOT NULL,
  customers_basket_date_added CHAR(8),
  PRIMARY KEY (customers_basket_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_basket_attributes;
CREATE TABLE customers_basket_attributes (
  customers_basket_attributes_id INT NOT NULL AUTO_INCREMENT,
  customers_id INT NOT NULL,
  products_id TINYTEXT NOT NULL,
  products_options_id INT NOT NULL,
  products_options_value_id INT NOT NULL,
  PRIMARY KEY (customers_basket_attributes_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_info;
CREATE TABLE customers_info (
  customers_info_id INT NOT NULL,
  customers_info_date_of_last_logon DATETIME,
  customers_info_number_of_logons INT(5),
  customers_info_date_account_created DATETIME,
  customers_info_date_account_last_modified DATETIME,
  global_product_notifications INT(1) DEFAULT 0,
  PRIMARY KEY (customers_info_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_ip;
CREATE TABLE customers_ip (
  customers_ip_id INT(11) NOT NULL AUTO_INCREMENT,
  customers_id INT(11) NOT NULL DEFAULT 0,
  customers_ip VARCHAR(15) NOT NULL DEFAULT '',
  customers_ip_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  customers_host VARCHAR(255) NOT NULL DEFAULT '',
  customers_advertiser VARCHAR(30) DEFAULT NULL,
  customers_referer_url VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (customers_ip_id),
  KEY customers_id (customers_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_status;
CREATE TABLE customers_status (
  customers_status_id INT(11) NOT NULL DEFAULT 0,
  language_id INT(11) NOT NULL DEFAULT 1,
  customers_status_name VARCHAR(32) NOT NULL DEFAULT '',
  customers_status_public INT(1) NOT NULL DEFAULT 1,
  customers_status_min_order INT(7) DEFAULT NULL,
  customers_status_max_order INT(7) DEFAULT NULL,
  customers_status_image VARCHAR(64) DEFAULT NULL,
  customers_status_discount DECIMAL(4,2) DEFAULT 0.00,
  customers_status_ot_discount_flag CHAR(1) NOT NULL DEFAULT '0',
  customers_status_ot_discount DECIMAL(4,2) DEFAULT 0.00,
  customers_status_graduated_prices VARCHAR(1) NOT NULL DEFAULT '0',
  customers_status_show_price INT(1) NOT NULL DEFAULT 1,
  customers_status_show_price_tax INT(1) NOT NULL DEFAULT 1,
  customers_status_add_tax_ot INT(1) NOT NULL DEFAULT 0,
  customers_status_payment_unallowed VARCHAR(255) NOT NULL,
  customers_status_shipping_unallowed VARCHAR(255) NOT NULL,
  customers_status_discount_attributes INT(1) NOT NULL DEFAULT 0,
  customers_fsk18 INT(1) NOT NULL DEFAULT 1,
  customers_fsk18_display INT(1) NOT NULL DEFAULT 1,
  customers_status_write_reviews INT(1) NOT NULL DEFAULT 1,
  customers_status_read_reviews INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (customers_status_id,language_id),
  KEY idx_orders_status_name (customers_status_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS customers_status_history;
CREATE TABLE customers_status_history (
  customers_status_history_id INT(11) NOT NULL AUTO_INCREMENT,
  customers_id INT(11) NOT NULL DEFAULT 0,
  new_value INT(5) NOT NULL DEFAULT 0,
  old_value INT(5) DEFAULT NULL,
  date_added DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  customer_notified INT(1) DEFAULT 0,
  PRIMARY KEY (customers_status_history_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Tomcraft - 2009-11-08 - Added option to deactivate languages (status)
DROP TABLE IF EXISTS languages;
CREATE TABLE languages (
  languages_id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(32) NOT NULL,
  code CHAR(2) NOT NULL,
  image VARCHAR(64),
  directory VARCHAR(32),
  sort_order INT(3),
  language_charset text NOT NULL,
  status INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (languages_id),
  KEY idx_languages_name (name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS manufacturers;
CREATE TABLE manufacturers (
  manufacturers_id INT NOT NULL AUTO_INCREMENT,
  manufacturers_name VARCHAR(64) NOT NULL,
  manufacturers_image VARCHAR(64),
  date_added DATETIME NULL,
  last_modified DATETIME NULL,
  PRIMARY KEY (manufacturers_id),
  KEY idx_manufacturers_name (manufacturers_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS manufacturers_info;
CREATE TABLE manufacturers_info (
  manufacturers_id INT NOT NULL,
  languages_id INT NOT NULL,
  manufacturers_meta_title VARCHAR(100) NOT NULL,
  manufacturers_meta_description VARCHAR(255) NOT NULL,
  manufacturers_meta_keywords VARCHAR(255) NOT NULL,
  manufacturers_url VARCHAR(255) NOT NULL,
  url_clicked INT(5) NOT NULL DEFAULT 0,
  date_last_click DATETIME NULL,
  PRIMARY KEY (manufacturers_id, languages_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS newsletters;
CREATE TABLE newsletters (
  newsletters_id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  content text NOT NULL,
  module VARCHAR(255) NOT NULL,
  date_added DATETIME NOT NULL,
  date_sent DATETIME,
  status INT(1),
  locked INT(1) DEFAULT 0,
  PRIMARY KEY (newsletters_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS newsletter_recipients;
CREATE TABLE newsletter_recipients (
  mail_id INT(11) NOT NULL AUTO_INCREMENT,
  customers_email_address VARCHAR(96) NOT NULL DEFAULT '',
  customers_id INT(11) NOT NULL DEFAULT 0,
  customers_status INT(5) NOT NULL DEFAULT 0,
  customers_firstname VARCHAR(32) NOT NULL DEFAULT '',
  customers_lastname VARCHAR(32) NOT NULL DEFAULT '',
  mail_status INT(1) NOT NULL DEFAULT 0,
  mail_key VARCHAR(32) NOT NULL DEFAULT '',
  date_added DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (mail_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS newsletters_history;
CREATE TABLE newsletters_history (
  news_hist_id INT(11) NOT NULL DEFAULT 0,
  news_hist_cs INT(11) NOT NULL DEFAULT 0,
  news_hist_cs_date_sent date DEFAULT NULL,
  PRIMARY KEY (news_hist_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
  orders_id INT NOT NULL AUTO_INCREMENT,
  customers_id INT NOT NULL,
  customers_cid VARCHAR(32),
  customers_vat_id VARCHAR(20),
  customers_status INT(11),
  customers_status_name VARCHAR(32) NOT NULL,
  customers_status_image VARCHAR(64),
  customers_status_discount DECIMAL(4,2),
  customers_name VARCHAR(64) NOT NULL,
  customers_firstname VARCHAR(64) NOT NULL,
  customers_lastname VARCHAR(64) NOT NULL,
  customers_company VARCHAR(32),
  customers_street_address VARCHAR(64) NOT NULL,
  customers_suburb VARCHAR(32),
  customers_city VARCHAR(32) NOT NULL,
  customers_postcode VARCHAR(10) NOT NULL,
  customers_state VARCHAR(32),
  customers_country VARCHAR(32) NOT NULL,
  customers_telephone VARCHAR(32) NOT NULL,
  customers_email_address VARCHAR(96) NOT NULL,
  customers_address_format_id INT(5) NOT NULL,
  delivery_name VARCHAR(64) NOT NULL,
  delivery_firstname VARCHAR(64) NOT NULL,
  delivery_lastname VARCHAR(64) NOT NULL,
  delivery_company VARCHAR(32),
  delivery_street_address VARCHAR(64) NOT NULL,
  delivery_suburb VARCHAR(32),
  delivery_city VARCHAR(32) NOT NULL,
  delivery_postcode VARCHAR(10) NOT NULL,
  delivery_state VARCHAR(32),
  delivery_country VARCHAR(32) NOT NULL,
  delivery_country_iso_code_2 CHAR(2) NOT NULL,
  delivery_address_format_id INT(5) NOT NULL,
  billing_name VARCHAR(64) NOT NULL,
  billing_firstname VARCHAR(64) NOT NULL,
  billing_lastname VARCHAR(64) NOT NULL,
  billing_company VARCHAR(32),
  billing_street_address VARCHAR(64) NOT NULL,
  billing_suburb VARCHAR(32),
  billing_city VARCHAR(32) NOT NULL,
  billing_postcode VARCHAR(10) NOT NULL,
  billing_state VARCHAR(32),
  billing_country VARCHAR(32) NOT NULL,
  billing_country_iso_code_2 CHAR(2) NOT NULL,
  billing_address_format_id INT(5) NOT NULL,
  payment_method VARCHAR(32) NOT NULL,
  cc_type VARCHAR(20),
  cc_owner VARCHAR(64),
  cc_number VARCHAR(64),
  cc_expires VARCHAR(4),
  cc_start VARCHAR(4) DEFAULT NULL,
  cc_issue VARCHAR(3) DEFAULT NULL,
  cc_cvv VARCHAR(4) DEFAULT NULL,
  comments text,
  last_modified DATETIME,
  date_purchased DATETIME,
  orders_status INT(5) NOT NULL,
  orders_date_finished DATETIME,
  currency CHAR(3),
  currency_value DECIMAL(14,6),
  account_type INT(1) DEFAULT 0 NOT NULL,
  payment_class VARCHAR(32) NOT NULL,
  shipping_method VARCHAR(32) NOT NULL,
  shipping_class VARCHAR(32) NOT NULL,
  customers_ip VARCHAR(32) NOT NULL,
  language VARCHAR(32) NOT NULL,
  afterbuy_success INT(1) DEFAULT 0 NOT NULL,
  afterbuy_id INT(32) DEFAULT 0 NOT NULL,
  refferers_id VARCHAR(32) NOT NULL,
  conversion_type INT(1) DEFAULT 0 NOT NULL,
  orders_ident_key VARCHAR(128),
  PRIMARY KEY (orders_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS card_blacklist;
CREATE TABLE card_blacklist (
  blacklist_id INT(5) NOT NULL AUTO_INCREMENT,
  blacklist_card_number VARCHAR(20) NOT NULL DEFAULT '',
  date_added DATETIME DEFAULT NULL,
  last_modified DATETIME DEFAULT NULL,
  PRIMARY KEY blacklist_id (blacklist_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# vr - 2010-04-21 add indices idx_orders_id, idx_products_id
DROP TABLE IF EXISTS orders_products;
CREATE TABLE orders_products (
  orders_products_id INT NOT NULL AUTO_INCREMENT,
  orders_id INT NOT NULL,
  products_id INT NOT NULL,
  products_model VARCHAR(64),
  products_name VARCHAR(64) NOT NULL,
  products_price DECIMAL(15,4) NOT NULL,
  products_discount_made DECIMAL(4,2) DEFAULT NULL,
  products_shipping_time VARCHAR(255) DEFAULT NULL,
  final_price DECIMAL(15,4) NOT NULL,
  products_tax DECIMAL(7,4) NOT NULL,
  products_quantity INT(2) NOT NULL,
  allow_tax INT(1) NOT NULL,
  PRIMARY KEY (orders_products_id),
  KEY idx_orders_id (orders_id),
  KEY idx_products_id (products_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_status;
CREATE TABLE orders_status (
  orders_status_id INT DEFAULT 0 NOT NULL,
  language_id INT DEFAULT 1 NOT NULL,
  orders_status_name VARCHAR(32) NOT NULL,
  PRIMARY KEY (orders_status_id, language_id),
  KEY idx_orders_status_name (orders_status_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS shipping_status;
CREATE TABLE shipping_status (
  shipping_status_id INT DEFAULT 0 NOT NULL,
  language_id INT DEFAULT 1 NOT NULL,
  shipping_status_name VARCHAR(32) NOT NULL,
  shipping_status_image VARCHAR(32) NOT NULL,
  PRIMARY KEY (shipping_status_id, language_id),
  KEY idx_shipping_status_name (shipping_status_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_status_history;
CREATE TABLE orders_status_history (
  orders_status_history_id INT NOT NULL AUTO_INCREMENT,
  orders_id INT NOT NULL,
  orders_status_id INT(5) NOT NULL,
  date_added DATETIME NOT NULL,
  customer_notified INT(1) DEFAULT 0,
  comments text,
  PRIMARY KEY (orders_status_history_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_products_attributes;
CREATE TABLE orders_products_attributes (
  orders_products_attributes_id INT NOT NULL AUTO_INCREMENT,
  orders_id INT NOT NULL,
  orders_products_id INT NOT NULL,
  products_options VARCHAR(32) NOT NULL,
  products_options_values VARCHAR(64) NOT NULL,
  options_values_price DECIMAL(15,4) NOT NULL,
  price_prefix CHAR(1) NOT NULL,
  PRIMARY KEY (orders_products_attributes_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_products_download;
CREATE TABLE orders_products_download (
  orders_products_download_id INT NOT NULL AUTO_INCREMENT,
  orders_id INT NOT NULL DEFAULT 0,
  orders_products_id INT NOT NULL DEFAULT 0,
  orders_products_filename VARCHAR(255) NOT NULL DEFAULT '',
  download_maxdays INT(2) NOT NULL DEFAULT 0,
  download_count INT(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (orders_products_download_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_total;
CREATE TABLE orders_total (
  orders_total_id INT unsigned NOT NULL AUTO_INCREMENT,
  orders_id INT NOT NULL,
  title VARCHAR(255) NOT NULL,
  text VARCHAR(255) NOT NULL,
  value DECIMAL(15,4) NOT NULL,
  class VARCHAR(32) NOT NULL,
  sort_order INT NOT NULL,
  PRIMARY KEY (orders_total_id),
  KEY idx_orders_total_orders_id (orders_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS orders_recalculate;
CREATE TABLE orders_recalculate (
  orders_recalculate_id INT(11) NOT NULL AUTO_INCREMENT,
  orders_id INT(11) NOT NULL DEFAULT 0,
  n_price DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
  b_price DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
  tax DECIMAL(15,4) NOT NULL DEFAULT '0.0000',
  tax_rate DECIMAL(7,4) NOT NULL DEFAULT '0.0000',
  class VARCHAR(32) NOT NULL DEFAULT '',
  PRIMARY KEY (orders_recalculate_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products;
CREATE TABLE products (
  products_id INT NOT NULL AUTO_INCREMENT,
  products_ean VARCHAR(128),
  products_quantity INT(4) NOT NULL,
  products_shippingtime INT(4) NOT NULL,
  products_model VARCHAR(64),
  group_permission_0 TINYINT(1) NOT NULL,
  group_permission_1 TINYINT(1) NOT NULL,
  group_permission_2 TINYINT(1) NOT NULL,
  group_permission_3 TINYINT(1) NOT NULL,
  products_sort INT(4) NOT NULL DEFAULT 0,
  products_image VARCHAR(64),
  products_price DECIMAL(15,4) NOT NULL,
  products_discount_allowed DECIMAL(4,2) DEFAULT 0.00 NOT NULL,
  products_date_added DATETIME NOT NULL,
  products_last_modified DATETIME,
  products_date_available DATETIME,
  products_weight DECIMAL(5,2) NOT NULL,
  products_status TINYINT(1) NOT NULL,
  products_tax_class_id INT NOT NULL,
  product_template VARCHAR(64),
  options_template VARCHAR(64),
  manufacturers_id INT NULL,
  products_ordered INT NOT NULL DEFAULT 0,
  products_fsk18 INT(1) NOT NULL DEFAULT 0,
  products_vpe INT(11) NOT NULL,
  products_vpe_status INT(1) NOT NULL DEFAULT 0,
  products_vpe_value DECIMAL(15,4) NOT NULL,
  products_startpage INT(1) NOT NULL DEFAULT 0,
  products_startpage_sort INT(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (products_id),
  KEY idx_products_date_added (products_date_added)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_attributes;
CREATE TABLE products_attributes (
  products_attributes_id INT NOT NULL AUTO_INCREMENT,
  products_id INT NOT NULL,
  options_id INT NOT NULL,
  options_values_id INT NOT NULL,
  options_values_price DECIMAL(15,4) NOT NULL,
  price_prefix CHAR(1) NOT NULL,
  attributes_model VARCHAR(64) NULL,
  attributes_stock INT(4) NULL,
  options_values_weight DECIMAL(15,4) NOT NULL,
  weight_prefix CHAR(1) NOT NULL,
  sortorder INT(11) NULL,
  PRIMARY KEY (products_attributes_id),
  KEY idx_products_id (products_id),
  KEY idx_options (options_id, options_values_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_attributes_download;
CREATE TABLE products_attributes_download (
  products_attributes_id INT NOT NULL,
  products_attributes_filename VARCHAR(255) NOT NULL DEFAULT '',
  products_attributes_maxdays INT(2) DEFAULT 0,
  products_attributes_maxcount INT(2) DEFAULT 0,
  PRIMARY KEY (products_attributes_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_description;
CREATE TABLE products_description (
  products_id INT NOT NULL AUTO_INCREMENT,
  language_id INT NOT NULL DEFAULT 1,
  products_name VARCHAR(64) NOT NULL DEFAULT '',
  products_description text,
  products_short_description text,
  products_keywords VARCHAR(255) DEFAULT NULL,
  products_meta_title text NOT NULL,
  products_meta_description text NOT NULL,
  products_meta_keywords text NOT NULL,
  products_url VARCHAR(255) DEFAULT NULL,
  products_viewed INT(5) DEFAULT 0,
  PRIMARY KEY (products_id,language_id),
  KEY products_name (products_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_images;
CREATE TABLE products_images (
  image_id INT NOT NULL AUTO_INCREMENT,
  products_id INT NOT NULL,
  image_nr SMALLINT NOT NULL,
  image_name VARCHAR(254) NOT NULL,
  PRIMARY KEY (image_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_notifications;
CREATE TABLE products_notifications (
  products_id INT NOT NULL,
  customers_id INT NOT NULL,
  date_added DATETIME NOT NULL,
  PRIMARY KEY (products_id, customers_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# Tomcraft - 2009-11-07 - Added sortorder to products_options
DROP TABLE IF EXISTS products_options;
CREATE TABLE products_options (
  products_options_id INT NOT NULL DEFAULT 0,
  language_id INT NOT NULL DEFAULT 1,
  products_options_name VARCHAR(32) NOT NULL DEFAULT '',
  products_options_sortorder INT(11) NOT NULL,
  PRIMARY KEY (products_options_id,language_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_options_values;
CREATE TABLE products_options_values (
  products_options_values_id INT NOT NULL DEFAULT 0,
  language_id INT NOT NULL DEFAULT 1,
  products_options_values_name VARCHAR(64) NOT NULL DEFAULT '',
  PRIMARY KEY (products_options_values_id,language_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_options_values_to_products_options;
CREATE TABLE products_options_values_to_products_options (
  products_options_values_to_products_options_id INT NOT NULL AUTO_INCREMENT,
  products_options_id INT NOT NULL,
  products_options_values_id INT NOT NULL,
  PRIMARY KEY (products_options_values_to_products_options_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_graduated_prices;
CREATE TABLE products_graduated_prices (
  products_id INT(11) NOT NULL DEFAULT 0,
  quantity INT(11) NOT NULL DEFAULT 0,
  unitprice DECIMAL(15,4) NOT NULL DEFAULT 0.0000,
  KEY products_id (products_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# DokuMan - 2010-10-13 add index idx_categories_id
DROP TABLE IF EXISTS products_to_categories;
CREATE TABLE products_to_categories (
  products_id INT NOT NULL,
  categories_id INT NOT NULL,
  PRIMARY KEY (products_id,categories_id),
  KEY idx_categories_id (categories_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_vpe;
CREATE TABLE products_vpe (
  products_vpe_id INT(11) NOT NULL DEFAULT 0,
  language_id INT(11) NOT NULL DEFAULT 0,
  products_vpe_name VARCHAR(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews (
  reviews_id INT NOT NULL AUTO_INCREMENT,
  products_id INT NOT NULL,
  customers_id int,
  customers_name VARCHAR(64) NOT NULL,
  reviews_rating INT(1),
  date_added DATETIME,
  last_modified DATETIME,
  reviews_read INT(5) NOT NULL DEFAULT 0,
  PRIMARY KEY (reviews_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS reviews_description;
CREATE TABLE reviews_description (
  reviews_id INT NOT NULL,
  languages_id INT NOT NULL,
  reviews_text text NOT NULL,
  PRIMARY KEY (reviews_id, languages_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS sessions;
CREATE TABLE sessions (
  sesskey VARCHAR(32) NOT NULL,
  expiry INT(11) unsigned NOT NULL,
  value text NOT NULL,
  PRIMARY KEY (sesskey)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

# BOF - web28 - 2010-07-07 - set shop offline
DROP TABLE IF EXISTS shop_configuration;
CREATE TABLE shop_configuration (
  configuration_id INT(11) NOT NULL AUTO_INCREMENT,
  configuration_key VARCHAR(255) NOT NULL DEFAULT '',
  configuration_value TEXT NOT NULL,
  PRIMARY KEY (configuration_id),
  KEY configuration_key (configuration_key)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO shop_configuration (configuration_id, configuration_key, configuration_value) VALUES(NULL, 'SHOP_OFFLINE', '');
INSERT INTO shop_configuration (configuration_id, configuration_key, configuration_value) VALUES(NULL, 'SHOP_OFFLINE_MSG', '<p style="text-align: center;"><span style="font-size: large;"><font face="Arial">Unser Shop ist aufgrund von Wartungsarbeiten im Moment nicht erreichbar.<br /></font><font face="Arial">Bitte besuchen Sie uns zu einem sp&auml;teren Zeitpunkt noch einmal.<br /><br /><br /><br /></font></span><font><font><a href="login_admin.php"><font color="#808080">Login</font></a></font></font><span style="font-size: large;"><font face="Arial"><br /></font></span></p>');
# EOF - web28 - 2010-07-07 - set shop offline

DROP TABLE IF EXISTS specials;
CREATE TABLE specials (
  specials_id INT NOT NULL AUTO_INCREMENT,
  products_id INT NOT NULL,
  specials_quantity INT(4) NOT NULL,
  specials_new_products_price DECIMAL(15,4) NOT NULL,
  specials_date_added DATETIME,
  specials_last_modified DATETIME,
  expires_date DATETIME,
  date_status_change DATETIME,
  status INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (specials_id),
  KEY idx_specials_products_id (products_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS tax_class;
CREATE TABLE tax_class (
  tax_class_id INT NOT NULL AUTO_INCREMENT,
  tax_class_title VARCHAR(32) NOT NULL,
  tax_class_description VARCHAR(255) NOT NULL,
  last_modified DATETIME NULL,
  date_added DATETIME NOT NULL,
  PRIMARY KEY (tax_class_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS tax_rates;
CREATE TABLE tax_rates (
  tax_rates_id INT NOT NULL AUTO_INCREMENT,
  tax_zone_id INT NOT NULL,
  tax_class_id INT NOT NULL,
  tax_priority INT(5) DEFAULT 1,
  tax_rate DECIMAL(7,4) NOT NULL,
  tax_description VARCHAR(255) NOT NULL,
  last_modified DATETIME NULL,
  date_added DATETIME NOT NULL,
  PRIMARY KEY (tax_rates_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS geo_zones;
CREATE TABLE geo_zones (
  geo_zone_id INT NOT NULL AUTO_INCREMENT,
  geo_zone_name VARCHAR(32) NOT NULL,
  geo_zone_description VARCHAR(255) NOT NULL,
  last_modified DATETIME NULL,
  date_added DATETIME NOT NULL,
  PRIMARY KEY (geo_zone_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS whos_online;
CREATE TABLE whos_online (
  customer_id INT(11) DEFAULT NULL,
  full_name VARCHAR(64) NOT NULL,
  session_id VARCHAR(32) NOT NULL,
  ip_address VARCHAR(15) NOT NULL,
  time_entry VARCHAR(14) NOT NULL,
  time_last_click VARCHAR(14) NOT NULL,
  last_page_url VARCHAR(255) NOT NULL,
  http_referer VARCHAR(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS zones;
CREATE TABLE zones (
  zone_id INT NOT NULL AUTO_INCREMENT,
  zone_country_id INT NOT NULL,
  zone_code VARCHAR(32) NOT NULL,
  zone_name VARCHAR(32) NOT NULL,
  PRIMARY KEY (zone_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS zones_to_geo_zones;
CREATE TABLE zones_to_geo_zones (
 association_id INT NOT NULL AUTO_INCREMENT,
 zone_country_id INT NOT NULL,
 zone_id INT NULL,
 geo_zone_id INT NULL,
 last_modified DATETIME NULL,
 date_added DATETIME NOT NULL,
 PRIMARY KEY (association_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS content_manager;
CREATE TABLE content_manager (
  content_id INT(11) NOT NULL AUTO_INCREMENT,
  categories_id INT(11) NOT NULL DEFAULT 0,
  parent_id INT(11) NOT NULL DEFAULT 0,
  group_ids TEXT,
  languages_id INT(11) NOT NULL DEFAULT 0,
  content_title TEXT NOT NULL,
  content_heading TEXT NOT NULL,
  content_text TEXT NOT NULL,
  sort_order INT(4) NOT NULL DEFAULT 0,
  file_flag INT(1) NOT NULL DEFAULT 0,
  content_file VARCHAR(64) NOT NULL DEFAULT '',
  content_status INT(1) NOT NULL DEFAULT 0,
  content_group INT(11) NOT NULL,
  content_delete INT(1) NOT NULL DEFAULT 1,
  content_meta_title TEXT,
  content_meta_description TEXT,
  content_meta_keywords TEXT,
  PRIMARY KEY (content_id),
  FULLTEXT (content_meta_title,content_meta_description,content_meta_keywords)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS media_content;
CREATE TABLE media_content (
  file_id INT(11) NOT NULL AUTO_INCREMENT,
  old_filename TEXT NOT NULL,
  new_filename TEXT NOT NULL,
  file_comment TEXT NOT NULL,
  PRIMARY KEY (file_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS products_content;
CREATE TABLE products_content (
  content_id INT(11) NOT NULL AUTO_INCREMENT,
  products_id INT(11) NOT NULL DEFAULT 0,
  group_ids TEXT,
  content_name VARCHAR(32) NOT NULL DEFAULT '',
  content_file VARCHAR(64) NOT NULL,
  content_link TEXT NOT NULL,
  languages_id INT(11) NOT NULL DEFAULT 0,
  content_read INT(11) NOT NULL DEFAULT 0,
  file_comment TEXT NOT NULL,
  PRIMARY KEY (content_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS module_newsletter;
CREATE TABLE module_newsletter (
  newsletter_id INT(11) NOT NULL AUTO_INCREMENT,
  title TEXT NOT NULL,
  bc TEXT NOT NULL,
  cc TEXT NOT NULL,
  DATE DATETIME DEFAULT NULL,
  status INT(1) NOT NULL DEFAULT 0,
  body TEXT NOT NULL,
  PRIMARY KEY (newsletter_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS cm_file_flags;
CREATE TABLE cm_file_flags (
  file_flag INT(11) NOT NULL,
  file_flag_name VARCHAR(32) NOT NULL,
  PRIMARY KEY (file_flag)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS payment_moneybookers_currencies;
CREATE TABLE payment_moneybookers_currencies (
  mb_currID CHAR(3) NOT NULL DEFAULT '',
  mb_currName VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY (mb_currID)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS payment_moneybookers;
CREATE TABLE payment_moneybookers (
  mb_TRID VARCHAR(255) NOT NULL DEFAULT '',
  mb_ERRNO SMALLINT(3) unsigned NOT NULL DEFAULT 0,
  mb_ERRTXT VARCHAR(255) NOT NULL DEFAULT '',
  mb_DATE DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  mb_MBTID BIGINT(18) unsigned NOT NULL DEFAULT 0,
  mb_STATUS TINYINT(1) NOT NULL DEFAULT 0,
  mb_ORDERID INT(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (mb_TRID)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS payment_moneybookers_countries;
CREATE TABLE payment_moneybookers_countries (
  osc_cID INT(11) NOT NULL DEFAULT 0,
  mb_cID CHAR(3) NOT NULL DEFAULT '',
  PRIMARY KEY (osc_cID)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupon_email_track;
CREATE TABLE coupon_email_track (
  unique_id INT(11) NOT NULL AUTO_INCREMENT,
  coupon_id INT(11) NOT NULL DEFAULT 0,
  customer_id_sent INT(11) NOT NULL DEFAULT 0,
  sent_firstname VARCHAR(32) DEFAULT NULL,
  sent_lastname VARCHAR(32) DEFAULT NULL,
  emailed_to VARCHAR(32) DEFAULT NULL,
  date_sent DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (unique_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupon_gv_customer;
CREATE TABLE coupon_gv_customer (
  customer_id INT(5) NOT NULL DEFAULT 0,
  amount DECIMAL(8,4) NOT NULL DEFAULT 0.0000,
  PRIMARY KEY (customer_id),
  KEY customer_id (customer_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupon_gv_queue;
CREATE TABLE coupon_gv_queue (
  unique_id INT(5) NOT NULL AUTO_INCREMENT,
  customer_id INT(5) NOT NULL DEFAULT 0,
  order_id INT(5) NOT NULL DEFAULT 0,
  amount DECIMAL(8,4) NOT NULL DEFAULT '0.0000',
  date_created DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  ipaddr VARCHAR(32) NOT NULL DEFAULT '',
  release_flag CHAR(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (unique_id),
  KEY uid (unique_id,customer_id,order_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupon_redeem_track;
CREATE TABLE coupon_redeem_track (
  unique_id INT(11) NOT NULL AUTO_INCREMENT,
  coupon_id INT(11) NOT NULL DEFAULT 0,
  customer_id INT(11) NOT NULL DEFAULT 0,
  redeem_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  redeem_ip VARCHAR(32) NOT NULL DEFAULT '',
  order_id INT(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (unique_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupons;
CREATE TABLE coupons (
  coupon_id INT(11) NOT NULL AUTO_INCREMENT,
  coupon_type CHAR(1) NOT NULL DEFAULT 'F',
  coupon_code VARCHAR(32) NOT NULL DEFAULT '',
  coupon_amount DECIMAL(8,4) NOT NULL DEFAULT 0.0000,
  coupon_minimum_order DECIMAL(8,4) NOT NULL DEFAULT 0.0000,
  coupon_start_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  coupon_expire_date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  uses_per_coupon INT(5) NOT NULL DEFAULT 1,
  uses_per_user INT(5) NOT NULL DEFAULT 0,
  restrict_to_products VARCHAR(255) DEFAULT NULL,
  restrict_to_categories VARCHAR(255) DEFAULT NULL,
  restrict_to_customers TEXT,
  coupon_active CHAR(1) NOT NULL DEFAULT 'Y',
  date_created DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  date_modified DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (coupon_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS coupons_description;
CREATE TABLE coupons_description (
  coupon_id INT(11) NOT NULL DEFAULT 0,
  language_id INT(11) NOT NULL DEFAULT 0,
  coupon_name VARCHAR(32) NOT NULL DEFAULT '',
  coupon_description text,
  KEY coupon_id (coupon_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS personal_offers_by_customers_status_0;
DROP TABLE IF EXISTS personal_offers_by_customers_status_1;
DROP TABLE IF EXISTS personal_offers_by_customers_status_2;
DROP TABLE IF EXISTS personal_offers_by_customers_status_3;

#database Version
INSERT INTO database_version(version) VALUES ('xtcM_1.0.6.0');

INSERT INTO cm_file_flags (file_flag, file_flag_name) VALUES ('0', 'information');
INSERT INTO cm_file_flags (file_flag, file_flag_name) VALUES ('1', 'content');

INSERT INTO shipping_status VALUES (1, 1, '3-4 Days', '');
INSERT INTO shipping_status VALUES (1, 2, '3-4 Tage', '');
INSERT INTO shipping_status VALUES (2, 1, '1 Week', '');
INSERT INTO shipping_status VALUES (2, 2, '1 Woche', '');
INSERT INTO shipping_status VALUES (3, 1, '2 Weeks', '');
INSERT INTO shipping_status VALUES (3, 2, '2 Wochen', '');
INSERT INTO shipping_status VALUES (1, 3, '3-4 天', '');
INSERT INTO shipping_status VALUES (1, 4, '3-4 天', '');
INSERT INTO shipping_status VALUES (2, 3, '1 週', '');
INSERT INTO shipping_status VALUES (2, 4, '1 周', '');
INSERT INTO shipping_status VALUES (3, 3, '2 週', '');
INSERT INTO shipping_status VALUES (3, 4, '2 周', '');

# data
INSERT INTO content_manager VALUES (1, 0, 0, '', 1, 'Shipping &amp; Returns', 'Shipping &amp; Returns', 'Put here your Shipping &amp; Returns information.', 0, 1, '', 1, 1, 0, '', '', '');
INSERT INTO content_manager VALUES (2, 0, 0, '', 1, 'Privacy Notice', 'Privacy Notice', 'Put here your Privacy Notice information.', 0, 1, '', 1, 2, 0, '', '', '');
INSERT INTO content_manager VALUES (3, 0, 0, '', 1, 'Conditions of Use', 'Conditions of Use', 'Conditions of Use<br />Put here your Conditions of Use information.<br /><br /><ol><li>Geltungsbereich</li><li>Vertragspartner</li><li>Angebot und Vertragsschluss</li><li>Widerrufsrecht, Widerrufsbelehrung, Widerrufsfolgen</li><li>Preise und Versandkosten</li><li>Lieferung</li><li>Zahlung</li><li>Eigentumsvorbehalt</li><li>Gew&auml;hrleistung</li></ol>Weitere Informationen', 0, 1, '', 1, 3, 0, '', '', '');
INSERT INTO content_manager VALUES (4, 0, 0, '', 1, 'Imprint', 'Imprint', 'Put here your Company information.<br /><br />DemoShop GmbH<br />Gesch&auml;ftsf&uuml;hrer: Max Muster und Fritz Beispiel<br /><br />Max Muster Stra&szlig;e 21-23<br />D-0815 Musterhausen<br />E-Mail: max.muster@muster.de<br /><br />HRB 123456<br />Amtsgericht Musterhausen<br />UStid-Nr. DE 000 111 222', 0, 1, '', 1, 4, 0, '', '', '');
INSERT INTO content_manager VALUES (5, 0, 0, '', 1, 'Index', 'Welcome', '{$greeting}<br /><br />Dies ist die Standardinstallation von xtcModified. Alle dargestellten Produkte dienen zur Demonstration der Funktionsweise. Wenn Sie Produkte bestellen, so werden diese weder ausgeliefert, noch in Rechnung gestellt. <br /><br />Sollten Sie daran interessiert sein das Programm, welches die Grundlage f&uuml;r diesen Shop bildet, einzusetzen, so besuchen Sie bitte die Webseite von xtcModified.org.<br /><br />Der hier dargestellte Text kann im Adminbereich unter <b>Content Manager</b> - Eintrag Index bearbeitet werden.', 0, 1, '', 0, 5, 0, '', '', '');
INSERT INTO content_manager VALUES (6, 0, 0, '', 2, 'Liefer- und Versandkosten', 'Liefer- und Versandkosten', 'F&uuml;gen Sie hier Ihre Informationen &uuml;ber Liefer- und Versandkosten ein.', 0, 1, '', 1, 1, 0, '', '', '');
INSERT INTO content_manager VALUES (7, 0, 0, '', 2, 'Privatsph&auml;re und Datenschutz', 'Privatsph&auml;re und Datenschutz', 'F&uuml;gen Sie hier Ihre Informationen &uuml;ber Privatsph&auml;re und Datenschutz ein.', 0, 1, '', 1, 2, 0, '', '', '');
INSERT INTO content_manager VALUES (8, 0, 0, '', 2, 'Unsere AGB', 'Allgemeine Gesch&auml;ftsbedingungen', '<strong>Allgemeine Gesch&auml;ftsbedingungen<br /></strong><br />F&uuml;gen Sie hier Ihre allgemeinen Gesch&auml;ftsbedingungen ein.<br /><br /><ol><li>Geltungsbereich</li><li>Vertragspartner</li><li>Angebot und Vertragsschluss</li><li>Widerrufsrecht, Widerrufsbelehrung, Widerrufsfolgen</li><li>Preise und Versandkosten</li><li>Lieferung</li><li>Zahlung</li><li>Eigentumsvorbehalt</li><li>Gew&auml;hrleistung</li></ol>Weitere Informationen', 0, 1, '', 1, 3, 0, '', '', '');
INSERT INTO content_manager VALUES (9, 0, 0, '', 2, 'Impressum', 'Impressum', 'F&uuml;gen Sie hier Ihr Impressum ein.<br /><br />DemoShop GmbH<br />Gesch&auml;ftsf&uuml;hrer: Max Muster und Fritz Beispiel<br /><br />Max Muster Stra&szlig;e 21-23<br />D-0815 Musterhausen<br />E-Mail: max.muster@muster.de<br /><br />HRB 123456<br />Amtsgericht Musterhausen<br />UStid-Nr. DE 000 111 222', 0, 1, '', 1, 4, 0, '', '', '');
INSERT INTO content_manager VALUES (10, 0, 0, '', 2, 'Index', 'Willkommen', '{$greeting}<br /><br />Dies ist die Standardinstallation von xtcModified. Alle dargestellten Produkte dienen zur Demonstration der Funktionsweise. Wenn Sie Produkte bestellen, so werden diese weder ausgeliefert, noch in Rechnung gestellt. <br /><br />Sollten Sie daran interessiert sein das Programm, welches die Grundlage f&uuml;r diesen Shop bildet, einzusetzen, so besuchen Sie bitte die Webseite von xtcModified.org.<br /><br />Der hier dargestellte Text kann im Adminbereich unter <b>Content Manager</b> - Eintrag Index bearbeitet werden.', 0, 1, '', 0, 5, 0, '', '', '');
INSERT INTO content_manager VALUES (11, 0, 0, '', 1, 'Coupons', 'Coupons FAQ', '<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Buy Gift Vouchers/Coupons </strong></td></tr>\r\n<tr>\r\n<td class="main">If the shop provided gift vouchers or coupons, You can buy them alike all other products. As soon as You have bought and payed the coupon, the shop system will activate Your coupon. You will then see the coupon amount in Your shopping cart. Then You can send the coupon via e-mail by clicking the link "Send Coupon". </td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>How to dispatch Coupons </strong></td></tr>\r\n<tr>\r\n<td class="main">To dispatch a coupon, please click the link "Send Coupon" in Your shopping cart. To send the coupon to the correct person, we need the following details: Surname and realname of the recipient and a valid e-mail adress of the recipient, and the desired coupon amount (You can also use only parts of Your balance). Please provide also a short message for the recipient. Please check those information again before You click the "Send Coupon" button. You can change all information at any time before clicking the "Send Coupon" button. </td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>How to use Coupons to buy products. </strong></td></tr>\r\n<tr>\r\n<td class="main">As soon as You have a balance, You can use it to pay for Your orders. During the checkout process, You can redeem Your coupon. In case Your balance is less than the value of goods You ordered, You would have to choose Your preferred method of payment for the difference amount. In case Your balance is more than the value of goods You ordered, the remaining amount of Your balance will be saved for Your next order. </td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>How to redeem Coupons. </strong></td></tr>\r\n<tr>\r\n<td class="main">In case You have received a coupun via e-mail, You can: <br />1. Click on the link provided in the e-mail. If You do not have an account in this shop already, please create a personal account. <br />2. After having added a product to Your shopping cart, You can enter Your coupon code.</td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Problems?</strong></td></tr>\r\n<tr>\r\n<td class="main">If You have trouble or problems in using Your coupons, please check back with us via our e-mail: you@yourdomain.com. Please describe the encountered problem as detailed as possible! We need the following information to process Your request quickly: Your user id, the coupon code, error messages the shop system returned to You, and the name of the web browser You are using (e.g. "Internet Explorer 6" or "Firefox 1.5"). </td></tr></tbody></table>', 0, 1, '', 0, 6, 1, '', '', '');
INSERT INTO content_manager VALUES (12, 0, 0, '', 2, 'Gutscheine', 'Gutscheine - Fragen und Antworten', '<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Gutscheine kaufen </strong></td></tr>\r\n<tr>\r\n<td class="main">Gutscheine k&ouml;nnen, falls sie im Shop angeboten werden, wie normale Artikel gekauft werden. Sobald Sie einen Gutschein gekauft haben und dieser nach erfolgreicher Zahlung freigeschaltet wurde, erscheint der Betrag unter Ihrem Warenkorb. Nun können Sie über den Link " Gutschein versenden " den gewünschten Betrag per E-Mail versenden.</td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Wie man Gutscheine versendet</strong></td></tr>\r\n<tr>\r\n<td class="main">Um einen Gutschein zu versenden, klicken Sie bitte auf den Link "Gutschein versenden" in Ihrem Einkaufskorb. Um einen Gutschein zu versenden, benötigen wir folgende Angaben von Ihnen: Vor- und Nachname des Empfängers. Eine gültige E-Mail Adresse des Empfängers. Den gewünschten Betrag (Sie können auch Teilbeträge Ihres Guthabens versenden). Eine kurze Nachricht an den Empfänger. Bitte überprüfen Sie Ihre Angaben noch einmal vor dem Versenden. Sie haben vor dem Versenden jederzeit die Möglichkeit Ihre Angaben zu korrigieren.</td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Mit Gutscheinen einkaufen.</strong></td></tr>\r\n<tr>\r\n<td class="main">Sobald Sie über ein Guthaben verfügen, können Sie dieses zum Bezahlen Ihrer Bestellung verwenden. Während des Bestellvorganges haben Sie die Möglichkeit Ihr Guthaben einzulösen. Falls das Guthaben unter dem Warenwert liegt müssen Sie Ihre bevorzugte Zahlungsweise für den Differenzbetrag wählen. Übersteigt Ihr Guthaben den Warenwert, steht Ihnen das Restguthaben selbstverständlich für Ihre nächste Bestellung zur Verfügung.</td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Gutscheine verbuchen. </strong></td></tr>\r\n<tr>\r\n<td class="main">Wenn Sie einen Gutschein per E-Mail erhalten haben, können Sie den Betrag wie folgt verbuchen: <br />1. Klicken Sie auf den in der E-Mail angegebenen Link. Falls Sie noch nicht über ein persönliches Kundenkonto verfügen, haben Sie die Möglichkeit ein Konto zu eröffnen. <br />2. Nachdem Sie ein Produkt in den Warenkorb gelegt haben, können Sie dort Ihren Gutscheincode eingeben.</td></tr></tbody></table>\r\n<table cellSpacing="0" cellPadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="main"><strong>Falls es zu Problemen kommen sollte:</strong></td></tr>\r\n<tr>\r\n<td class="main">Falls es wider Erwarten zu Problemen mit einem Gutschein kommen sollte, kontaktieren Sie uns bitte per E-Mail: you@yourdomain.com. Bitte beschreiben Sie möglichst genau das Problem, wichtige Angaben sind unter anderem: Ihre Kundennummer, der Gutscheincode, Fehlermeldungen des Systems sowie der von Ihnen benutzte Browser (z.B. "Internet Explorer 6" oder "Firefox 1.5"). </td></tr></tbody></table>', 0, 1, '', 0, 6, 1, '', '', '');
INSERT INTO content_manager VALUES (13, 0, 0, '', 2, 'Kontakt', 'Kontakt', 'Ihre Kontaktinformationen', 0, 1, '', 1, 7, 0, '', '', '');
INSERT INTO content_manager VALUES (14, 0, 0, '', 1, 'Contact', 'Contact', 'Please enter your contact information.', 0, 1, '', 1, 7, 0, '', '', '');
INSERT INTO content_manager VALUES (15, 0, 0, '', 1, 'Sitemap', '', '', 0, 0, 'sitemap.php', 1, 8, 0, '', '', '');
INSERT INTO content_manager VALUES (16, 0, 0, '', 2, 'Sitemap', '', '', 0, 0, 'sitemap.php', 1, 8, 0, '', '', '');
# BOF - Tomcraft - 2010-06-09 - Added right of revocation
INSERT INTO content_manager VALUES (17, 0, 0, '', 1, 'Right of revocation', 'Right of revocation', '<p><strong>Right of revocation<br /></strong><br />Add your right of revocation here.</p>', 0, 1, '', 1, 9, 0, '', '', '');
INSERT INTO content_manager VALUES (18, 0, 0, '', 2, 'Widerrufsrecht', 'Widerrufsrecht', '<p><strong>Widerrufsrecht<br /></strong><br />F&uuml;gen Sie hier das Widerrufsrecht ein.</p>', 0, 1, '', 1, 9, 0, '', '', '');
# EOF - Tomcraft - 2010-06-09 - Added right of revocation
INSERT INTO content_manager (categories_id, parent_id, group_ids, languages_id, content_title, content_heading, content_text, sort_order, file_flag, content_file, content_status, content_group, content_delete, content_meta_title, content_meta_description, content_meta_keywords) VALUES
(0, 0, '', 3, '購物說明', '購物說明', '請填寫購物及運費相關說明～', 0, 1, '', 3, 1, 0, '', '', ''),
(0, 0, '', 3, '店面介紹', '店面介紹', '請填寫公司或店面的相關介紹～', 0, 1, '', 1, 2, 0, '', '', ''),
(0, 0, '', 3, '購物條款', '購物條款', '請填寫或修改下方購物條款～ <br />1. 本站保留接受訂單與否的權利。<br />2. 訪客進出狀況與IP位址均在程式記錄中，請勿隨意搗亂或是胡亂訂購商品，本站將保留法律訴訟權利！<br />3. 本站商品販賣價格遵守公平交易原則。<br />4. 本站注重消費者權益，並且遵守相關法律...<br />5. 購買訪客均願意遵守本站相關購物規則、運費收取機制...', 0, 1, '', 1, 3, 0, '', '', ''),
(0, 0, '', 3, '退換貨說明', '退換貨說明', '\r\n請填寫或修改下方退換貨說明～<br />\r\n<b>接受換貨的原則：</b><br /><ul>\r\n<li>送達之商品與訂購商品不符。</li>\r\n<li>收到商品七天以內。</li>\r\n<li>商品已拆封但沒有任何已使用的痕跡。</li>\r\n<li>收到商品有瑕疵時，請於收貨品當天立即告知店長，本店始可接受換貨。</li></ul><p>\r\n<b>不接受換貨的原則：<b><br /><ul>\r\n<li>經原廠檢測，是人為因素所造成，恕不接受退、換貨並以維修品處理。</li>\r\n<li>超過七天鑑賞期。</li>\r\n<li>特價出清瑕疵品或特價品（會在產品頁面上做說明）。</li></ul><p>\r\n<b>換貨處理程序：</b><br /><ul>\r\n<li>請在收到商品七天內，得退貨時請先電洽本公司或是利用電子郵件。</li>\r\n<li>商品包裝必須完整，所以商品上的標籤、吊牌不可拆掉(包含商品、配件、說明書、保證書、包裝盒及出貨單等）寄回給本網站，請注意單據並以寄達時商品包裝完整原樣退回。</li>\r\n<li>請將商品無損及完整包裝，連同配件、贈品、勿缺件、外盒勿損毀，請以廠商寄送時的包裝再原封備妥，若紙箱已遺失，請於商品外盒上再包裝，勿直接讓商品原廠外盒粘貼宅配單或書寫文字，原廠外盒損毀或是商品缺件，將無法受理退貨（到貨七天期限內申請，逾期未辦理將無法銷退）。</li>\r\n<li>請先將訂貨人姓名、電話、地址、換貨相關事宜、收據...等資料傳真至本公司或直接Email通知。</li>\r\n<li>可直接至店面換貨（請攜帶寄貨隨附發票）。</li>\r\n<li>本公司有保留接受訂購單與否的權利。</li>\r\n</ul><p>\r\n<b>退款方式：</b><br /><ul>\r\n<li><b>信用卡退款：</b>若您使用「信用卡付款」，本公司在確認商品驗退無誤後，將採用退刷方式直接將款項退回您信用卡帳上。</li>\r\n<li><b>ATM轉帳/貨到付款退款：</b>若您以ATM轉帳或是貨到付款，請您在來電申請退貨的同時，留下您個人帳戶資料，本公司在確認商品驗退無誤後，我們將採用轉帳方式直接將款項退回您的帳戶裡</li>\r\n</ul>\r\n', 0, 1, '', 1, 4, 0, '', '', ''),
(0, 0, '', 3, '首頁中央區塊', '關於我們', '\r\n{$greeting}', 0, 1, '', 0, 5, 0, '', '', ''),
(0, 0, '', 3, '買賣問答', '你可在此輸入編排買賣時常見的問題與答覆', '\r\n{$greeting}', 0, 1, '', 0, 6, 0, '', '', ''),
(0, 0, '', 3, '聯絡我們', '聯絡我們', '請輸入你的聯絡內容！', 0, 1, '', 1, 7, 0, '', '', ''),
(0, 0, '', 3, '網站導覽', '', '', 0, 0, 'sitemap.php', 1, 8, 0, '', '', ''),
(0, 0, '', 4, '购物说明', '购物说明', '请填写购物及运费相关说明～', 0, 1, '', 1, 1, 0, '', '', ''),
(0, 0, '', 4, '店面介绍', '店面介绍', '请填写公司或店面的相关介绍～', 0, 1, '', 1, 2, 0, '', '', ''),
(0, 0, '', 4, '购物条款', '购物条款', '请填写或修改下方购物条款～ <br />1. 本站保留接受订单与否的权利。<br />2. 访客进出状况与IP位址均在程式记录中，请勿随意捣乱或是胡乱订购商品，本站将保留法律诉讼权利！<br />3. 本站商品贩卖价格遵守公平交易原则。<br />4. 本站注重消费者权益，并且遵守相关法律...<br />5. 购买访客均愿意遵守本站相关购物规则、运费收取机制...', 0, 1, '', 1, 3, 0, '', '', ''),
(0, 0, '', 4, '退换货说明', '退换货说明', '\r\n请填写或修改下方退换货说明～<br />\r\n<b>接受换货的原则：</b><br /><ul>\r\n<li>送达之商品与订购商品不符。</li>\r\n<li>收到商品七天以内。</li>\r\n<li>商品已拆封但没有任何已使用的痕迹。</li>\r\n<li>收到商品有瑕疵时，请于收货品当天立即告知店长，本店始可接受换货。</li></ul><p>\r\n<b>不接受换货的原则：<b><br /><ul>\r\n<li>经原厂检测，是人为因素所造成，恕不接受退、换货并以维修品处理。</li>\r\n<li>超过七天鉴赏期。</li>\r\n<li>特价出清瑕疵品或特价品（会在产品页面上做说明）。</li></ul><p>\r\n<b>换货处理程序：</b><br /><ul>\r\n<li>请在收到商品七天内，得退货时请先电洽本公司或是利用电子邮件。</li>\r\n<li>商品包装必须完整，所以商品上的标签、吊牌不可拆掉(包含商品、配件、说明书、保证书、包装盒及出货单等）寄回给本网站，请注意单据并以寄达时商品包装完整原样退回。</li>\r\n<li>请将商品无损及完整包装，连同配件、赠品、勿缺件、外盒勿损毁，请以厂商寄送时的包装再原封备妥，若纸箱已遗失，请于商品外盒上再包装，勿直接让商品原厂外盒粘贴宅配单或书写文字，原厂外盒损毁或是商品缺件，将无法受理退货（到货七天期限内申请，逾期未办理将无法销退）。</li>\r\n<li>请先将订货人姓名、电话、地址、换货相关事宜、收据...等资料传真至本公司或直接Email通知。</li>\r\n<li>可直接至店面换货（请携带寄货随附发票）。</li>\r\n<li>本公司有保留接受订购单与否的权利。</li>\r\n</ul><p>\r\n<b>退款方式：</b><br /><ul>\r\n<li><b>信用卡退款：</b>若您使用「信用卡付款」，本公司在确认商品验退无误后，将采用退刷方式直接将款项退回您信用卡帐上。</li>\r\n<li><b>ATM转帐/货到付款退款：</b>若您以ATM转帐或是货到付款，请您在来电申请退货的同时，留下您个人帐户资料，本公司在确认商品验退无误后，我们将采用转帐方式直接将款项退回您的帐户里</li>\r\n</ul>\r\n', 0, 1, '', 1, 4, 0, '', '', ''),
(0, 0, '', 4, '首页中央区块', '关于我们', '\r\n{$greeting}', 0, 1, '', 0, 5, 0, '', '', ''),
(0, 0, '', 4, '买卖问答', '你可在此输入编排买卖时常见的问题与答覆', '\r\n{$greeting}', 0, 1, '', 0, 6, 0, '', '', ''),
(0, 0, '', 4, '联络我们', '联络我们', '请输入你的联络内容！', 0, 1, '', 1, 7, 0, '', '', ''),
(0, 0, '', 4, '网站导览', '', '', 0, 0, 'sitemap.php', 1, 8, 0, '', '', '');

# 1 - Default, 2 - USA, 3 - Spain, 4 - Singapore, 5 - Germany , 6 - Taiwan , 7 - China
INSERT INTO address_format VALUES (1, '$firstname $lastname$cr$streets$cr$city, $postcode$cr$statecomma$country','$city / $country');
INSERT INTO address_format VALUES (2, '$firstname $lastname$cr$streets$cr$city, $state    $postcode$cr$country','$city, $state / $country');
INSERT INTO address_format VALUES (3, '$firstname $lastname$cr$streets$cr$city$cr$postcode - $statecomma$country','$state / $country');
INSERT INTO address_format VALUES (4, '$firstname $lastname$cr$streets$cr$city ($postcode)$cr$country', '$postcode / $country');
INSERT INTO address_format VALUES (5, '$firstname $lastname$cr$streets$cr$postcode $city$cr$country','$city / $country');
# BOF - DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format
INSERT INTO address_format VALUES (6, '$firstname$lastname$cr$country$cr$postcode$city$cr$streets ','$country / $city');
INSERT INTO address_format VALUES (7, '$firstname$lastname$cr$country$cr$postcode$city$cr$streets ','$country / $city');
# EOF - DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format

# Web28 - 2010-11-13 - add entry for listproducts
INSERT INTO admin_access VALUES ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO admin_access VALUES ( 'groups', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 2, 4, 2, 2, 2, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1);

# configuration_group_id 1
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_NAME', 'xtc:Modified', 1, 1, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_OWNER', 'xtc:Modified', 1, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_OWNER_EMAIL_ADDRESS', 'owner@your-shop.com', 1, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_FROM', 'xtc:Modified owner@your-shop.com', 1, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_COUNTRY', '81', 1, 6, '', NOW(), 'xtc_get_country_name', 'xtc_cfg_pull_down_country_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_ZONE', '', 1, 7, '', NOW(), 'xtc_cfg_get_zone_name', 'xtc_cfg_pull_down_zone_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EXPECTED_PRODUCTS_SORT', 'desc', 1, 8, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'asc\', \'desc\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EXPECTED_PRODUCTS_FIELD', 'date_expected', 1, 9, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'products_name\', \'date_expected\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_DEFAULT_LANGUAGE_CURRENCY', 'false', 1, 10, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SEARCH_ENGINE_FRIENDLY_URLS', 'false', 16, 12, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DISPLAY_CART', 'true', 1, 13, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ADVANCED_SEARCH_DEFAULT_OPERATOR', 'and', 1, 15, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'and\', \'or\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_NAME_ADDRESS', 'Store Name\nAddress\nCountry\nPhone', 1, 16, '', NOW(), NULL, 'xtc_cfg_textarea(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHOW_COUNTS', 'false', 1, 17, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CUSTOMERS_STATUS_ID_ADMIN', '0', 1, 20, '', NOW(), 'xtc_get_customers_status_name', 'xtc_cfg_pull_down_customers_status_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CUSTOMERS_STATUS_ID_GUEST', '1', 1, 21, '', NOW(), 'xtc_get_customers_status_name', 'xtc_cfg_pull_down_customers_status_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CUSTOMERS_STATUS_ID', '2', 1, 23, '', NOW(), 'xtc_get_customers_status_name', 'xtc_cfg_pull_down_customers_status_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ALLOW_ADD_TO_CART', 'false', 1, 24, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CURRENT_TEMPLATE', 'xtc5', 1, 26, '', NOW(), NULL, 'xtc_cfg_pull_down_template_sets(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRICE_IS_BRUTTO', 'false', 1, 27, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRICE_PRECISION', '4', 1, 28, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CC_KEYCHAIN', 'changeme', 1, 29, '', NOW(), NULL, NULL);
# BOF - Tomcraft - 2009-11-02 - New admin top menu
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_ADMIN_TOP_MENU', 'true', 1, 30, '', NOW() , NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# EOF - Tomcraft - 2009-11-02 - New admin top menu
# BOF - Tomcraft - 2009-11-02 - Admin language tabs
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_ADMIN_LANG_TABS', 'true', 1, 31, '', NOW() , NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# EOF - Tomcraft - 2009-11-02 - Admin language tabs

# BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_ADMIN_THUMBS_IN_LIST', 'true', 1, 32, '', NOW() , NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

# configuration_group_id 2
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_FIRST_NAME_MIN_LENGTH', '2', 2, 1, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_LAST_NAME_MIN_LENGTH', '2', 2, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_DOB_MIN_LENGTH', '10', 2, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_EMAIL_ADDRESS_MIN_LENGTH', '6', 2, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_STREET_ADDRESS_MIN_LENGTH', '5', 2, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_COMPANY_MIN_LENGTH', '2', 2, 6, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_POSTCODE_MIN_LENGTH', '4', 2, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_CITY_MIN_LENGTH', '3', 2, 8, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_STATE_MIN_LENGTH', '2', 2, 9, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_TELEPHONE_MIN_LENGTH', '3', 2, 10, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_PASSWORD_MIN_LENGTH', '5', 2, 11, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CC_OWNER_MIN_LENGTH', '3', 2, 12, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CC_NUMBER_MIN_LENGTH', '10', 2, 13, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'REVIEW_TEXT_MIN_LENGTH', '50', 2, 14, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MIN_DISPLAY_BESTSELLERS', '1', 2, 15, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MIN_DISPLAY_ALSO_PURCHASED', '1', 2, 16, '', NOW(), NULL, NULL);

# configuration_group_id 3
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_ADDRESS_BOOK_ENTRIES', '5', 3, 1, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_SEARCH_RESULTS', '20', 3, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_PAGE_LINKS', '5', 3, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_SPECIAL_PRODUCTS', '9', 3, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_NEW_PRODUCTS', '9', 3, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_UPCOMING_PRODUCTS', '10', 3, 6, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_MANUFACTURERS_IN_A_LIST', '0', 3, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_MANUFACTURERS_LIST', '1', 3, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_MANUFACTURER_NAME_LEN', '15', 3, 8, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_NEW_REVIEWS', '6', 3, 9, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_RANDOM_SELECT_REVIEWS', '10', 3, 10, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_RANDOM_SELECT_NEW', '10', 3, 11, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_RANDOM_SELECT_SPECIALS', '10', 3, 12, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_CATEGORIES_PER_ROW', '3', 3, 13, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_PRODUCTS_NEW', '10', 3, 14, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_BESTSELLERS', '10', 3, 15, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_ALSO_PURCHASED', '6', 3, 16, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX', '6', 3, 17, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_ORDER_HISTORY', '10', 3, 18, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_REVIEWS_VIEW', '5', 3, 19, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_PRODUCTS_QTY', '1000', 3, 21, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MAX_DISPLAY_NEW_PRODUCTS_DAYS', '30', 3, 22, '', NOW(), NULL, NULL);

# configuration_group_id 4
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONFIG_CALCULATE_IMAGE_SIZE', 'true', 4, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'IMAGE_QUALITY', '80', 4, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_WIDTH', '120', 4, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_HEIGHT', '80', 4, 8, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_WIDTH', '200', 4, 9, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_HEIGHT', '160', 4, 10, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_WIDTH', '300', 4, 11, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_HEIGHT', '240', 4, 12, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_BEVEL', '', 4, 13, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_GREYSCALE', '', 4, 14, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_ELLIPSE', '', 4, 15, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_ROUND_EDGES', '', 4, 16, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_MERGE', '', 4, 17, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_FRAME', '', 4, 18, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_DROP_SHADOW', '', 4, 19, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_THUMBNAIL_MOTION_BLUR', '', 4, 20, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_BEVEL', '', 4, 21, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_GREYSCALE', '', 4, 22, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_ELLIPSE', '', 4, 23, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_ROUND_EDGES', '', 4, 24, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_MERGE', '', 4, 25, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_FRAME', '', 4, 26, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_DROP_SHADOW', '', 4, 27, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_INFO_MOTION_BLUR', '', 4, 28, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_BEVEL', '', 4, 29, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_GREYSCALE', '', 4, 30, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_ELLIPSE', '', 4, 31, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_ROUND_EDGES', '', 4, 32, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_MERGE', '', 4, 33, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_FRAME', '', 4, 34, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_DROP_SHADOW', '', 4, 35, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_IMAGE_POPUP_MOTION_BLUR', '', 4, 36, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MO_PICS', '0', '4', '3', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'IMAGE_MANIPULATOR', 'image_manipulator_GD2.php', '4', '3', NULL, NOW(), NULL, 'xtc_cfg_select_option(array(\'image_manipulator_GD2.php\', \'image_manipulator_GD1.php\'),');

# DokuMan - 2010-10-29 - added missing HEADING_IMAGE_ definitions in Admin
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('','HEADING_IMAGE_WIDTH', '57', '4', '4', '', NOW() , NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'HEADING_IMAGE_HEIGHT', '40', '4', '4', '', NOW() , NULL, NULL);

# configuration_group_id 5
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_GENDER', 'true', 5, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_DOB', 'true', 5, 2, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_COMPANY', 'true', 5, 3, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_SUBURB', 'true', 5, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_STATE', 'true', 5, 5, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_OPTIONS', 'account', 5, 6, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'account\', \'guest\', \'both\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DELETE_GUEST_ACCOUNT', 'true', 5, 7, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

# configuration_group_id 6
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_PAYMENT_INSTALLED', '', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_INSTALLED', 'ot_subtotal.php;ot_shipping.php;ot_tax.php;ot_total.php', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_SHIPPING_INSTALLED', '', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CURRENCY', 'EUR', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_LANGUAGE', 'de', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_ORDERS_STATUS_ID', '1', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_PRODUCTS_VPE_ID', '', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_SHIPPING_STATUS_ID', '1', 6, 0, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SHIPPING_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER', '30', 6, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING', 'false', 6, 3, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER', '50', 6, 4, '', NOW(), 'currencies->format', NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SHIPPING_DESTINATION', 'national', 6, 5, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'national\', \'international\', \'both\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SUBTOTAL_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER', '10', 6, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_TAX_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_TAX_SORT_ORDER', '50', 6, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_TOTAL_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER', '99', 6, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_DISCOUNT_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_DISCOUNT_SORT_ORDER', '20', 6, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SUBTOTAL_NO_TAX_STATUS', 'true', 6, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'MODULE_ORDER_TOTAL_SUBTOTAL_NO_TAX_SORT_ORDER','40', 6, 2, '', NOW(), NULL, NULL);

# configuration_group_id 7
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_ORIGIN_COUNTRY', '81', 7, 1, '', NOW(), 'xtc_get_country_name', 'xtc_cfg_pull_down_country_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_ORIGIN_ZIP', '', 7, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_MAX_WEIGHT', '50', 7, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_BOX_WEIGHT', '3', 7, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_BOX_PADDING', '10', 7, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHOW_SHIPPING', 'true', 7, 6, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHIPPING_INFOS', '1', 7, 5, '', NOW(), NULL, NULL);

# configuration_group_id 8
# BOF - DokuMan - 2010-07-07 - change PRODUCT_FILTER_LIST to true/false
# INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_LIST_FILTER', '1', 8, 1, NULL, NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'PRODUCT_LIST_FILTER', 'true', 8, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# EOF - DokuMan - 2010-07-07 - change PRODUCT_FILTER_LIST to true/false

# configuration_group_id 9
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STOCK_CHECK', 'true', 9, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ATTRIBUTE_STOCK_CHECK', 'true', 9, 2, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STOCK_LIMITED', 'true', 9, 3, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STOCK_ALLOW_CHECKOUT', 'true', 9, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STOCK_MARK_PRODUCT_OUT_OF_STOCK', '<span style="color:red">***</span>', 9, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STOCK_REORDER_LEVEL', '5', 9, 6, '', NOW(), NULL, NULL);

# configuration_group_id 10
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_PAGE_PARSE_TIME', 'false', 10, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_PAGE_PARSE_TIME_LOG', 'page_parse_time.log', 10, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_PARSE_DATE_TIME_FORMAT', '%d/%m/%Y %H:%M:%S', 10, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DISPLAY_PAGE_PARSE_TIME', 'true', 10, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_DB_TRANSACTIONS', 'false', 10, 5, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

# configuration_group_id 11
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_CACHE', 'false', 11, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DIR_FS_CACHE', 'cache', 11, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CACHE_LIFETIME', '3600', 11, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CACHE_CHECK', 'true', 11, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DB_CACHE', 'false', 11, 5, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DB_CACHE_EXPIRE', '3600', 11, 6, '', NOW(), NULL, NULL);

# configuration_group_id 12
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_TRANSPORT', 'mail', 12, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'sendmail\', \'smtp\', \'mail\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SENDMAIL_PATH', '/usr/sbin/sendmail', 12, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_MAIN_SERVER', 'localhost', 12, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_Backup_Server', 'localhost', 12, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_PORT', '25', 12, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_USERNAME', 'Please Enter', 12, 6, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_PASSWORD', 'Please Enter', 12, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SMTP_AUTH', 'false', 12, 8, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_LINEFEED', 'LF', 12, 9, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'LF\', \'CRLF\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_USE_HTML', 'true', 12, 10, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ENTRY_EMAIL_ADDRESS_CHECK', 'false', 12, 11, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SEND_EMAILS', 'true', 12, 12, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# BOF - Tomcraft - 2009-11-05 - Advanced contact form
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_CONTACT_EMAIL_ADDRESS', 'false', 12, 13, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# EOF - Tomcraft - 2009-11-05 - Advanced contact form

# Constants for contact_us
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_EMAIL_ADDRESS', 'contact@your-shop.com', 12, 20, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_NAME', 'Mail send by Contact_us Form', 12, 21, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_REPLY_ADDRESS', '', 12, 22, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_REPLY_ADDRESS_NAME', '', 12, 23, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_EMAIL_SUBJECT', '', 12, 24, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CONTACT_US_FORWARDING_STRING', '', 12, 25, '', NOW(), NULL, NULL);

# Constants for support system
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_ADDRESS', 'support@your-shop.com', 12, 26, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_NAME', 'Mail send by support systems', 12, 27, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_REPLY_ADDRESS', '', 12, 28, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_REPLY_ADDRESS_NAME', '', 12, 29, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_SUBJECT', '', 12, 30, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_SUPPORT_FORWARDING_STRING', '', 12, 31, '', NOW(), NULL, NULL);

# Constants for billing system
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_ADDRESS', 'billing@your-shop.com', 12, 32, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_NAME', 'Mail send by billing systems', 12, 33, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_REPLY_ADDRESS', '', 12, 34, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_REPLY_ADDRESS_NAME', '', 12, 35, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_SUBJECT', '', 12, 36, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_FORWARDING_STRING', '', 12, 37, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'EMAIL_BILLING_SUBJECT_ORDER', 'Ihre Bestellung {$nr},am {$date}', 12, 38, '', NOW(), NULL, NULL);

# configuration_group_id 13
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DOWNLOAD_ENABLED', 'false', 13, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DOWNLOAD_BY_REDIRECT', 'false', 13, 2, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DOWNLOAD_UNALLOWED_PAYMENT', 'banktransfer,cod,invoice,moneyorder', 13, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DOWNLOAD_MIN_ORDERS_STATUS', '1', 13, 5, '', NOW(), NULL, NULL);

# configuration_group_id 14
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GZIP_COMPRESSION', 'false', 14, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GZIP_LEVEL', '5', 14, 2, '', NOW(), NULL, NULL);

# configuration_group_id 15
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_WRITE_DIRECTORY', '/tmp', 15, 1, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_FORCE_COOKIE_USE', 'False', 15, 2, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'True\', \'False\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_CHECK_SSL_SESSION_ID', 'False', 15, 3, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'True\', \'False\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_CHECK_USER_AGENT', 'False', 15, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'True\', \'False\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_CHECK_IP_ADDRESS', 'False', 15, 5, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'True\', \'False\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SESSION_RECREATE', 'False', 15, 7, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'True\', \'False\'),');

# configuration_group_id 16
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_MIN_KEYWORD_LENGTH', '6', 16, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_KEYWORDS_NUMBER', '5', 16, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_AUTHOR', '', 16, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_PUBLISHER', '', 16, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_COMPANY', '', 16, 6, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_TOPIC', 'shopping', 16, 7, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_REPLY_TO', 'xx@xx.com', 16, 8, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_REVISIT_AFTER', '5', 16, 9, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_ROBOTS', 'index,follow', 16, 10, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_DESCRIPTION', '', 16, 11, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'META_KEYWORDS', '', 16, 12, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CHECK_CLIENT_AGENT', 'true',16, 13, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

# configuration_group_id 17
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'USE_WYSIWYG', 'true', 17, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACTIVATE_GIFT_SYSTEM', 'false', 17, 2, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SECURITY_CODE_LENGTH', '10', 17, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'NEW_SIGNUP_GIFT_VOUCHER_AMOUNT', '0', 17, 4, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'NEW_SIGNUP_DISCOUNT_COUPON', '', 17, 5, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACTIVATE_SHIPPING_STATUS', 'true', 17, 6, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DISPLAY_CONDITIONS_ON_CHECKOUT', 'true', 17, 7, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SHOW_IP_LOG', 'false', 17, 8, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GROUP_CHECK', 'false', 17, 9, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACTIVATE_NAVIGATOR', 'false', 17, 10, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'QUICKLINK_ACTIVATED', 'true', 17, 11, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACTIVATE_REVERSE_CROSS_SELLING', 'true', 17, 12, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DISPLAY_REVOCATION_ON_CHECKOUT', 'true', 17, 13, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
# BOF - Tomcraft - 2010-06-09 - predefined revocation_id
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'REVOCATION_ID', '9', 17, 14, '', NOW(), NULL, NULL);
# EOF - Tomcraft - 2010-06-09 - predefined revocation_id
# BOF - DokuMan - 2010-08-13 - Google RSS Feed REFID configuration
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GOOGLE_RSS_FEED_REFID', '', 17, 15, '', NOW(), NULL, NULL);
# EOF - DokuMan - 2010-08-13 - Google RSS Feed REFID configuration

#configuration_group_id 18
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_COMPANY_VAT_CHECK', 'true', 18, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'STORE_OWNER_VAT_ID', '', 18, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CUSTOMERS_VAT_STATUS_ID', '1', 18, 23, '', NOW(), 'xtc_get_customers_status_name', 'xtc_cfg_pull_down_customers_status_list(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_COMPANY_VAT_LIVE_CHECK', 'true', 18, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_COMPANY_VAT_GROUP', 'true', 18, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'ACCOUNT_VAT_BLOCK_ERROR', 'true', 18, 4, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL', '3', '18', '24', '', NOW(), 'xtc_get_customers_status_name', 'xtc_cfg_pull_down_customers_status_list(');

#configuration_group_id 19
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GOOGLE_CONVERSION_ID', '', '19', '2', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GOOGLE_LANG', 'de', '19', '3', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'GOOGLE_CONVERSION', 'false', '19', '0', '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

#configuration_group_id 20
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CSV_TEXTSIGN', '"', '20', '1', '', NOW(), NULL, NULL);
# BOF - DokuMan - 2010-02-11 - set DEFAULT separator sign to semicolon ';' instead of tabulator '\t'
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'CSV_SEPERATOR', ';', '20', '2', '', NOW(), NULL, NULL);
# EOF - DokuMan - 2010-02-11 - set DEFAULT separator sign to semicolon ';' instead of tabulator '\t'
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'COMPRESS_EXPORT', 'false', '20', '3', '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

#configuration_group_id 21, Afterbuy
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'AFTERBUY_PARTNERID', '', '21', '2', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'AFTERBUY_PARTNERPASS', '', '21', '3', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'AFTERBUY_USERID', '', '21', '4', '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'AFTERBUY_ORDERSTATUS', '1', '21', '5', '', NOW(), 'xtc_get_order_status_name' , 'xtc_cfg_pull_down_order_statuses(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'AFTERBUY_ACTIVATED', 'false', '21', '6', '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

#configuration_group_id 22, Search Options
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SEARCH_IN_DESC', 'true', '22', '2', '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'SEARCH_IN_ATTR', 'true', '22', '3', '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');

#configuration_group_id 23, econda
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'TRACKING_ECONDA_ACTIVE', 'false', 23, 1, '', NOW(), NULL, 'xtc_cfg_select_option(array(\'true\', \'false\'),');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', 'TRACKING_ECONDA_ID','', 23, 2, '', NOW(), NULL, NULL);

#Dokuman - 2009-10-02 - added entries for new moneybookers payment module version 2.4
#configuration_group_id 31, Moneybookers
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_EMAILID', '', 31, 1, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_PWD','', 31, 2, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_MERCHANTID','', 31, 3, '', NOW(), NULL, NULL);
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID','0', 31, 4, '', NOW(), 'xtc_get_order_status_name' , 'xtc_cfg_pull_down_order_statuses(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID','0', 31, 5, '', NOW(),'xtc_get_order_status_name' , 'xtc_cfg_pull_down_order_statuses(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID','0', 31, 6, '', NOW(), 'xtc_get_order_status_name' , 'xtc_cfg_pull_down_order_statuses(');
INSERT INTO configuration (configuration_id, configuration_key, configuration_value, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('', '_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID','0', 31, 7, '', NOW(), 'xtc_get_order_status_name' , 'xtc_cfg_pull_down_order_statuses(');

INSERT INTO configuration_group VALUES (1,'My Store','General information about my store',1,1);
INSERT INTO configuration_group VALUES (2,'Minimum Values','The minimum values for functions / data',2,1);
INSERT INTO configuration_group VALUES (3,'Maximum Values','The maximum values for functions / data',3,1);
INSERT INTO configuration_group VALUES (4,'Images','Image parameters',4,1);
INSERT INTO configuration_group VALUES (5,'Customer Details','Customer account configuration',5,1);
INSERT INTO configuration_group VALUES (6,'Module Options','Hidden from configuration',6,0);
INSERT INTO configuration_group VALUES (7,'Shipping/Packaging','Shipping options available at my store',7,1);
INSERT INTO configuration_group VALUES (8,'Product Listing','Product Listing configuration options',8,1);
INSERT INTO configuration_group VALUES (9,'Stock','Stock configuration options',9,1);
INSERT INTO configuration_group VALUES (10,'Logging','Logging configuration options',10,1);
INSERT INTO configuration_group VALUES (11,'Cache','Caching configuration options',11,1);
INSERT INTO configuration_group VALUES (12,'E-Mail Options','General setting for E-Mail transport and HTML E-Mails',12,1);
INSERT INTO configuration_group VALUES (13,'Download','Downloadable products options',13,1);
INSERT INTO configuration_group VALUES (14,'GZip Compression','GZip compression options',14,1);
INSERT INTO configuration_group VALUES (15,'Sessions','Session options',15,1);
INSERT INTO configuration_group VALUES (16,'Meta-Tags/Search engines','Meta-tags/Search engines',16,1);
INSERT INTO configuration_group VALUES (18,'Vat ID','Vat ID',18,1);
INSERT INTO configuration_group VALUES (19,'Google Conversion','Google Conversion-Tracking',19,1);
INSERT INTO configuration_group VALUES (20,'Import/Export','Import/Export',20,1);
INSERT INTO configuration_group VALUES (21,'Afterbuy','Afterbuy.de',21,1);
INSERT INTO configuration_group VALUES (22,'Search Options','Additional Options for search function',22,1);
#franky_n - 2010-12-24 - added configuration_group entries for econda and moneybookers
INSERT INTO configuration_group VALUES (23,'Econda Tracking','Econda Tracking System',23,1);
INSERT INTO configuration_group VALUES (31,'Moneybookers','Moneybookers System',31,1);

#Countries
INSERT INTO countries VALUES (1,'Afghanistan','AF','AFG',1,1);
INSERT INTO countries VALUES (2,'Albania','AL','ALB',1,1);
INSERT INTO countries VALUES (3,'Algeria','DZ','DZA',1,1);
INSERT INTO countries VALUES (4,'American Samoa','AS','ASM',1,1);
INSERT INTO countries VALUES (5,'Andorra','AD','AND',1,1);
INSERT INTO countries VALUES (6,'Angola','AO','AGO',1,1);
INSERT INTO countries VALUES (7,'Anguilla','AI','AIA',1,1);
INSERT INTO countries VALUES (8,'Antarctica','AQ','ATA',1,1);
INSERT INTO countries VALUES (9,'Antigua and Barbuda','AG','ATG',1,1);
INSERT INTO countries VALUES (10,'Argentina','AR','ARG',1,1);
INSERT INTO countries VALUES (11,'Armenia','AM','ARM',1,1);
INSERT INTO countries VALUES (12,'Aruba','AW','ABW',1,1);
INSERT INTO countries VALUES (13,'Australia','AU','AUS',1,1);
INSERT INTO countries VALUES (14,'Austria','AT','AUT',5,1);
INSERT INTO countries VALUES (15,'Azerbaijan','AZ','AZE',1,1);
INSERT INTO countries VALUES (16,'Bahamas','BS','BHS',1,1);
INSERT INTO countries VALUES (17,'Bahrain','BH','BHR',1,1);
INSERT INTO countries VALUES (18,'Bangladesh','BD','BGD',1,1);
INSERT INTO countries VALUES (19,'Barbados','BB','BRB',1,1);
INSERT INTO countries VALUES (20,'Belarus','BY','BLR',1,1);
INSERT INTO countries VALUES (21,'Belgium','BE','BEL',1,1);
INSERT INTO countries VALUES (22,'Belize','BZ','BLZ',1,1);
INSERT INTO countries VALUES (23,'Benin','BJ','BEN',1,1);
INSERT INTO countries VALUES (24,'Bermuda','BM','BMU',1,1);
INSERT INTO countries VALUES (25,'Bhutan','BT','BTN',1,1);
INSERT INTO countries VALUES (26,'Bolivia','BO','BOL',1,1);
INSERT INTO countries VALUES (27,'Bosnia and Herzegowina','BA','BIH',1,1);
INSERT INTO countries VALUES (28,'Botswana','BW','BWA',1,1);
INSERT INTO countries VALUES (29,'Bouvet Island','BV','BVT',1,1);
INSERT INTO countries VALUES (30,'Brazil','BR','BRA',1,1);
INSERT INTO countries VALUES (31,'British Indian Ocean Territory','IO','IOT',1,1);
INSERT INTO countries VALUES (32,'Brunei Darussalam','BN','BRN',1,1);
INSERT INTO countries VALUES (33,'Bulgaria','BG','BGR',1,1);
INSERT INTO countries VALUES (34,'Burkina Faso','BF','BFA',1,1);
INSERT INTO countries VALUES (35,'Burundi','BI','BDI',1,1);
INSERT INTO countries VALUES (36,'Cambodia','KH','KHM',1,1);
INSERT INTO countries VALUES (37,'Cameroon','CM','CMR',1,1);
INSERT INTO countries VALUES (38,'Canada','CA','CAN',1,1);
INSERT INTO countries VALUES (39,'Cape Verde','CV','CPV',1,1);
INSERT INTO countries VALUES (40,'Cayman Islands','KY','CYM',1,1);
INSERT INTO countries VALUES (41,'Central African Republic','CF','CAF',1,1);
INSERT INTO countries VALUES (42,'Chad','TD','TCD',1,1);
INSERT INTO countries VALUES (43,'Chile','CL','CHL',1,1);
#DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format
INSERT INTO countries VALUES (44,'China','CN','CHN',7,1);
#DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format
INSERT INTO countries VALUES (45,'Christmas Island','CX','CXR',1,1);
INSERT INTO countries VALUES (46,'Cocos (Keeling) Islands','CC','CCK',1,1);
INSERT INTO countries VALUES (47,'Colombia','CO','COL',1,1);
INSERT INTO countries VALUES (48,'Comoros','KM','COM',1,1);
INSERT INTO countries VALUES (49,'Congo','CG','COG',1,1);
INSERT INTO countries VALUES (50,'Cook Islands','CK','COK',1,1);
INSERT INTO countries VALUES (51,'Costa Rica','CR','CRI',1,1);
INSERT INTO countries VALUES (52,'Cote D\'Ivoire','CI','CIV',1,1);
INSERT INTO countries VALUES (53,'Croatia','HR','HRV',1,1);
INSERT INTO countries VALUES (54,'Cuba','CU','CUB',1,1);
INSERT INTO countries VALUES (55,'Cyprus','CY','CYP',1,1);
INSERT INTO countries VALUES (56,'Czech Republic','CZ','CZE',1,1);
INSERT INTO countries VALUES (57,'Denmark','DK','DNK',1,1);
INSERT INTO countries VALUES (58,'Djibouti','DJ','DJI',1,1);
INSERT INTO countries VALUES (59,'Dominica','DM','DMA',1,1);
INSERT INTO countries VALUES (60,'Dominican Republic','DO','DOM',1,1);
INSERT INTO countries VALUES (61,'East Timor','TP','TMP',1,1);
INSERT INTO countries VALUES (62,'Ecuador','EC','ECU',1,1);
INSERT INTO countries VALUES (63,'Egypt','EG','EGY',1,1);
INSERT INTO countries VALUES (64,'El Salvador','SV','SLV',1,1);
INSERT INTO countries VALUES (65,'Equatorial Guinea','GQ','GNQ',1,1);
INSERT INTO countries VALUES (66,'Eritrea','ER','ERI',1,1);
INSERT INTO countries VALUES (67,'Estonia','EE','EST',1,1);
INSERT INTO countries VALUES (68,'Ethiopia','ET','ETH',1,1);
INSERT INTO countries VALUES (69,'Falkland Islands (Malvinas)','FK','FLK',1,1);
INSERT INTO countries VALUES (70,'Faroe Islands','FO','FRO',1,1);
INSERT INTO countries VALUES (71,'Fiji','FJ','FJI',1,1);
INSERT INTO countries VALUES (72,'Finland','FI','FIN',1,1);
INSERT INTO countries VALUES (73,'France','FR','FRA',1,1);
INSERT INTO countries VALUES (74,'France, Metropolitan','FX','FXX',1,1);
INSERT INTO countries VALUES (75,'French Guiana','GF','GUF',1,1);
INSERT INTO countries VALUES (76,'French Polynesia','PF','PYF',1,1);
INSERT INTO countries VALUES (77,'French Southern Territories','TF','ATF',1,1);
INSERT INTO countries VALUES (78,'Gabon','GA','GAB',1,1);
INSERT INTO countries VALUES (79,'Gambia','GM','GMB',1,1);
INSERT INTO countries VALUES (80,'Georgia','GE','GEO',1,1);
INSERT INTO countries VALUES (81,'Germany','DE','DEU',5,1);
INSERT INTO countries VALUES (82,'Ghana','GH','GHA',1,1);
INSERT INTO countries VALUES (83,'Gibraltar','GI','GIB',1,1);
INSERT INTO countries VALUES (84,'Greece','GR','GRC',1,1);
INSERT INTO countries VALUES (85,'Greenland','GL','GRL',1,1);
INSERT INTO countries VALUES (86,'Grenada','GD','GRD',1,1);
INSERT INTO countries VALUES (87,'Guadeloupe','GP','GLP',1,1);
INSERT INTO countries VALUES (88,'Guam','GU','GUM',1,1);
INSERT INTO countries VALUES (89,'Guatemala','GT','GTM',1,1);
INSERT INTO countries VALUES (90,'Guinea','GN','GIN',1,1);
INSERT INTO countries VALUES (91,'Guinea-bissau','GW','GNB',1,1);
INSERT INTO countries VALUES (92,'Guyana','GY','GUY',1,1);
INSERT INTO countries VALUES (93,'Haiti','HT','HTI',1,1);
INSERT INTO countries VALUES (94,'Heard and Mc Donald Islands','HM','HMD',1,1);
INSERT INTO countries VALUES (95,'Honduras','HN','HND',1,1);
INSERT INTO countries VALUES (96,'Hong Kong','HK','HKG',1,1);
INSERT INTO countries VALUES (97,'Hungary','HU','HUN',1,1);
INSERT INTO countries VALUES (98,'Iceland','IS','ISL',1,1);
INSERT INTO countries VALUES (99,'India','IN','IND',1,1);
INSERT INTO countries VALUES (100,'Indonesia','ID','IDN',1,1);
INSERT INTO countries VALUES (101,'Iran (Islamic Republic of)','IR','IRN',1,1);
INSERT INTO countries VALUES (102,'Iraq','IQ','IRQ',1,1);
INSERT INTO countries VALUES (103,'Ireland','IE','IRL',1,1);
INSERT INTO countries VALUES (104,'Israel','IL','ISR',1,1);
INSERT INTO countries VALUES (105,'Italy','IT','ITA',1,1);
INSERT INTO countries VALUES (106,'Jamaica','JM','JAM',1,1);
INSERT INTO countries VALUES (107,'Japan','JP','JPN',1,1);
INSERT INTO countries VALUES (108,'Jordan','JO','JOR',1,1);
INSERT INTO countries VALUES (109,'Kazakhstan','KZ','KAZ',1,1);
INSERT INTO countries VALUES (110,'Kenya','KE','KEN',1,1);
INSERT INTO countries VALUES (111,'Kiribati','KI','KIR',1,1);
INSERT INTO countries VALUES (112,'Korea, Democratic People\'s Republic of','KP','PRK',1,1);
INSERT INTO countries VALUES (113,'Korea, Republic of','KR','KOR',1,1);
INSERT INTO countries VALUES (114,'Kuwait','KW','KWT',1,1);
INSERT INTO countries VALUES (115,'Kyrgyzstan','KG','KGZ',1,1);
INSERT INTO countries VALUES (116,'Lao People\'s Democratic Republic','LA','LAO',1,1);
INSERT INTO countries VALUES (117,'Latvia','LV','LVA',1,1);
INSERT INTO countries VALUES (118,'Lebanon','LB','LBN',1,1);
INSERT INTO countries VALUES (119,'Lesotho','LS','LSO',1,1);
INSERT INTO countries VALUES (120,'Liberia','LR','LBR',1,1);
INSERT INTO countries VALUES (121,'Libyan Arab Jamahiriya','LY','LBY',1,1);
INSERT INTO countries VALUES (122,'Liechtenstein','LI','LIE',1,1);
INSERT INTO countries VALUES (123,'Lithuania','LT','LTU',1,1);
INSERT INTO countries VALUES (124,'Luxembourg','LU','LUX',1,1);
INSERT INTO countries VALUES (125,'Macau','MO','MAC',1,1);
INSERT INTO countries VALUES (126,'Macedonia, The Former Yugoslav Republic of','MK','MKD',1,1);
INSERT INTO countries VALUES (127,'Madagascar','MG','MDG',1,1);
INSERT INTO countries VALUES (128,'Malawi','MW','MWI',1,1);
INSERT INTO countries VALUES (129,'Malaysia','MY','MYS',1,1);
INSERT INTO countries VALUES (130,'Maldives','MV','MDV',1,1);
INSERT INTO countries VALUES (131,'Mali','ML','MLI',1,1);
INSERT INTO countries VALUES (132,'Malta','MT','MLT',1,1);
INSERT INTO countries VALUES (133,'Marshall Islands','MH','MHL',1,1);
INSERT INTO countries VALUES (134,'Martinique','MQ','MTQ',1,1);
INSERT INTO countries VALUES (135,'Mauritania','MR','MRT',1,1);
INSERT INTO countries VALUES (136,'Mauritius','MU','MUS',1,1);
INSERT INTO countries VALUES (137,'Mayotte','YT','MYT',1,1);
INSERT INTO countries VALUES (138,'Mexico','MX','MEX',1,1);
INSERT INTO countries VALUES (139,'Micronesia, Federated States of','FM','FSM',1,1);
INSERT INTO countries VALUES (140,'Moldova, Republic of','MD','MDA',1,1);
INSERT INTO countries VALUES (141,'Monaco','MC','MCO',1,1);
INSERT INTO countries VALUES (142,'Mongolia','MN','MNG',1,1);
INSERT INTO countries VALUES (143,'Montserrat','MS','MSR',1,1);
INSERT INTO countries VALUES (144,'Morocco','MA','MAR',1,1);
INSERT INTO countries VALUES (145,'Mozambique','MZ','MOZ',1,1);
INSERT INTO countries VALUES (146,'Myanmar','MM','MMR',1,1);
INSERT INTO countries VALUES (147,'Namibia','NA','NAM',1,1);
INSERT INTO countries VALUES (148,'Nauru','NR','NRU',1,1);
INSERT INTO countries VALUES (149,'Nepal','NP','NPL',1,1);
INSERT INTO countries VALUES (150,'Netherlands','NL','NLD',1,1);
INSERT INTO countries VALUES (151,'Netherlands Antilles','AN','ANT',1,1);
INSERT INTO countries VALUES (152,'New Caledonia','NC','NCL',1,1);
INSERT INTO countries VALUES (153,'New Zealand','NZ','NZL',1,1);
INSERT INTO countries VALUES (154,'Nicaragua','NI','NIC',1,1);
INSERT INTO countries VALUES (155,'Niger','NE','NER',1,1);
INSERT INTO countries VALUES (156,'Nigeria','NG','NGA',1,1);
INSERT INTO countries VALUES (157,'Niue','NU','NIU',1,1);
INSERT INTO countries VALUES (158,'Norfolk Island','NF','NFK',1,1);
INSERT INTO countries VALUES (159,'Northern Mariana Islands','MP','MNP',1,1);
INSERT INTO countries VALUES (160,'Norway','NO','NOR',1,1);
INSERT INTO countries VALUES (161,'Oman','OM','OMN',1,1);
INSERT INTO countries VALUES (162,'Pakistan','PK','PAK',1,1);
INSERT INTO countries VALUES (163,'Palau','PW','PLW',1,1);
INSERT INTO countries VALUES (164,'Panama','PA','PAN',1,1);
INSERT INTO countries VALUES (165,'Papua New Guinea','PG','PNG',1,1);
INSERT INTO countries VALUES (166,'Paraguay','PY','PRY',1,1);
INSERT INTO countries VALUES (167,'Peru','PE','PER',1,1);
INSERT INTO countries VALUES (168,'Philippines','PH','PHL',1,1);
INSERT INTO countries VALUES (169,'Pitcairn','PN','PCN',1,1);
INSERT INTO countries VALUES (170,'Poland','PL','POL',1,1);
INSERT INTO countries VALUES (171,'Portugal','PT','PRT',1,1);
INSERT INTO countries VALUES (172,'Puerto Rico','PR','PRI',1,1);
INSERT INTO countries VALUES (173,'Qatar','QA','QAT',1,1);
INSERT INTO countries VALUES (174,'Reunion','RE','REU',1,1);
INSERT INTO countries VALUES (175,'Romania','RO','ROM',1,1);
INSERT INTO countries VALUES (176,'Russian Federation','RU','RUS',1,1);
INSERT INTO countries VALUES (177,'Rwanda','RW','RWA',1,1);
INSERT INTO countries VALUES (178,'Saint Kitts and Nevis','KN','KNA',1,1);
INSERT INTO countries VALUES (179,'Saint Lucia','LC','LCA',1,1);
INSERT INTO countries VALUES (180,'Saint Vincent and the Grenadines','VC','VCT',1,1);
INSERT INTO countries VALUES (181,'Samoa','WS','WSM',1,1);
INSERT INTO countries VALUES (182,'San Marino','SM','SMR',1,1);
INSERT INTO countries VALUES (183,'Sao Tome and Principe','ST','STP',1,1);
INSERT INTO countries VALUES (184,'Saudi Arabia','SA','SAU',1,1);
INSERT INTO countries VALUES (185,'Senegal','SN','SEN',1,1);
INSERT INTO countries VALUES (186,'Seychelles','SC','SYC',1,1);
INSERT INTO countries VALUES (187,'Sierra Leone','SL','SLE',1,1);
INSERT INTO countries VALUES (188,'Singapore','SG','SGP', '4','1');
INSERT INTO countries VALUES (189,'Slovakia (Slovak Republic)','SK','SVK',1,1);
INSERT INTO countries VALUES (190,'Slovenia','SI','SVN',1,1);
INSERT INTO countries VALUES (191,'Solomon Islands','SB','SLB',1,1);
INSERT INTO countries VALUES (192,'Somalia','SO','SOM',1,1);
INSERT INTO countries VALUES (193,'South Africa','ZA','ZAF',1,1);
INSERT INTO countries VALUES (194,'South Georgia and the South Sandwich Islands','GS','SGS',1,1);
INSERT INTO countries VALUES (195,'Spain','ES','ESP','3','1');
INSERT INTO countries VALUES (196,'Sri Lanka','LK','LKA',1,1);
INSERT INTO countries VALUES (197,'St. Helena','SH','SHN',1,1);
INSERT INTO countries VALUES (198,'St. Pierre and Miquelon','PM','SPM',1,1);
INSERT INTO countries VALUES (199,'Sudan','SD','SDN',1,1);
INSERT INTO countries VALUES (200,'Suriname','SR','SUR',1,1);
INSERT INTO countries VALUES (201,'Svalbard and Jan Mayen Islands','SJ','SJM',1,1);
INSERT INTO countries VALUES (202,'Swaziland','SZ','SWZ',1,1);
INSERT INTO countries VALUES (203,'Sweden','SE','SWE',1,1);
INSERT INTO countries VALUES (204,'Switzerland','CH','CHE',1,1);
INSERT INTO countries VALUES (205,'Syrian Arab Republic','SY','SYR',1,1);
#DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format
INSERT INTO countries VALUES (206,'Taiwan','TW','TWN',6,1);
#DokuMan - 2010-09-01 - Added Taiwan and Chinese address_format
INSERT INTO countries VALUES (207,'Tajikistan','TJ','TJK',1,1);
INSERT INTO countries VALUES (208,'Tanzania, United Republic of','TZ','TZA',1,1);
INSERT INTO countries VALUES (209,'Thailand','TH','THA',1,1);
INSERT INTO countries VALUES (210,'Togo','TG','TGO',1,1);
INSERT INTO countries VALUES (211,'Tokelau','TK','TKL',1,1);
INSERT INTO countries VALUES (212,'Tonga','TO','TON',1,1);
INSERT INTO countries VALUES (213,'Trinidad and Tobago','TT','TTO',1,1);
INSERT INTO countries VALUES (214,'Tunisia','TN','TUN',1,1);
INSERT INTO countries VALUES (215,'Turkey','TR','TUR',1,1);
INSERT INTO countries VALUES (216,'Turkmenistan','TM','TKM',1,1);
INSERT INTO countries VALUES (217,'Turks and Caicos Islands','TC','TCA',1,1);
INSERT INTO countries VALUES (218,'Tuvalu','TV','TUV',1,1);
INSERT INTO countries VALUES (219,'Uganda','UG','UGA',1,1);
INSERT INTO countries VALUES (220,'Ukraine','UA','UKR',1,1);
INSERT INTO countries VALUES (221,'United Arab Emirates','AE','ARE',1,1);
INSERT INTO countries VALUES (222,'United Kingdom','GB','GBR',1,1);
INSERT INTO countries VALUES (223,'United States','US','USA', '2','1');
INSERT INTO countries VALUES (224,'United States Minor Outlying Islands','UM','UMI',1,1);
INSERT INTO countries VALUES (225,'Uruguay','UY','URY',1,1);
INSERT INTO countries VALUES (226,'Uzbekistan','UZ','UZB',1,1);
INSERT INTO countries VALUES (227,'Vanuatu','VU','VUT',1,1);
INSERT INTO countries VALUES (228,'Vatican City State (Holy See)','VA','VAT',1,1);
INSERT INTO countries VALUES (229,'Venezuela','VE','VEN',1,1);
INSERT INTO countries VALUES (230,'Viet Nam','VN','VNM',1,1);
INSERT INTO countries VALUES (231,'Virgin Islands (British)','VG','VGB',1,1);
INSERT INTO countries VALUES (232,'Virgin Islands (U.S.)','VI','VIR',1,1);
INSERT INTO countries VALUES (233,'Wallis and Futuna Islands','WF','WLF',1,1);
INSERT INTO countries VALUES (234,'Western Sahara','EH','ESH',1,1);
INSERT INTO countries VALUES (235,'Yemen','YE','YEM',1,1);
# BOF - Tomcraft - 2010-07-02 - Deleted Yugoslavia
#INSERT INTO countries VALUES (236,'Yugoslavia','YU','YUG',1,1);
# EOF - Tomcraft - 2010-07-02 - Deleted Yugoslavia
INSERT INTO countries VALUES (237,'Zaire','ZR','ZAR',1,1);
INSERT INTO countries VALUES (238,'Zambia','ZM','ZMB',1,1);
INSERT INTO countries VALUES (239,'Zimbabwe','ZW','ZWE',1,1);
# BOF - Tomcraft - 2010-07-02 - Added Serbia & Montenegro
INSERT INTO countries VALUES (240,'Serbia','RS','SRB',1,1);
INSERT INTO countries VALUES (241,'Montenegro','ME','MNE',1,1);
# EOF - Tomcraft - 2010-07-02 - Added Serbia & Montenegro

INSERT INTO currencies VALUES (1,'台幣','TWD','TWD','','.','','0','1', now());
INSERT INTO currencies VALUES (2,'人民币','CNY','CNY','','.','','0','0.2239', now());
INSERT INTO currencies VALUES (3,'Euro','EUR','','EUR',',','.','2','0.0258', NOW());

# BOF - Tomcraft - 2009-11-08 - Added option to deactivate languages (status 1)
INSERT INTO languages VALUES (1,'English','en','icon.gif','english',3,'utf-8',1);
INSERT INTO languages VALUES (2,'Deutsch','de','icon.gif','german',4,'utf-8',1);
INSERT INTO languages VALUES (3,'正體中文','tw','icon.gif','tchinese',1,'utf-8',1);
INSERT INTO languages VALUES (4,'简体中文','cn','icon.gif','schinese',2,'utf-8',1);
# EOF - Tomcraft - 2009-11-08 - Added option to deactivate languages (status 1)

INSERT INTO orders_status VALUES (1,1,'Pending');
INSERT INTO orders_status VALUES (1,2,'Offen');
INSERT INTO orders_status VALUES (2,1,'Processing');
INSERT INTO orders_status VALUES (2,2,'In Bearbeitung');
INSERT INTO orders_status VALUES (3,1,'Delivered');
INSERT INTO orders_status VALUES (3,2,'Versendet');
INSERT INTO orders_status VALUES
(1, 3, '新到訂單[待處理]'),
(1, 4, '新到订单[待处理]'),
(2, 3, '處理中'),
(2, 4, '处理中'),
(3, 3, '完成出貨'),
(3, 4, '完成出货');

INSERT INTO zones VALUES('',1,'BDS','Badakhshan');
INSERT INTO zones VALUES('',1,'BDG','Badghis');
INSERT INTO zones VALUES('',1,'BGL','Baghlan');
INSERT INTO zones VALUES('',1,'BAL','Balkh');
INSERT INTO zones VALUES('',1,'BAM','Bamian');
INSERT INTO zones VALUES('',1,'FRA','Farah');
INSERT INTO zones VALUES('',1,'FYB','Faryab');
INSERT INTO zones VALUES('',1,'GHA','Ghazni');
INSERT INTO zones VALUES('',1,'GHO','Ghowr');
INSERT INTO zones VALUES('',1,'HEL','Helmand');
INSERT INTO zones VALUES('',1,'HER','Herat');
INSERT INTO zones VALUES('',1,'JOW','Jowzjan');
INSERT INTO zones VALUES('',1,'KAB','Kabul');
INSERT INTO zones VALUES('',1,'KAN','Kandahar');
INSERT INTO zones VALUES('',1,'KAP','Kapisa');
INSERT INTO zones VALUES('',1,'KHO','Khost');
INSERT INTO zones VALUES('',1,'KNR','Konar');
INSERT INTO zones VALUES('',1,'KDZ','Kondoz');
INSERT INTO zones VALUES('',1,'LAG','Laghman');
INSERT INTO zones VALUES('',1,'LOW','Lowgar');
INSERT INTO zones VALUES('',1,'NAN','Nangrahar');
INSERT INTO zones VALUES('',1,'NIM','Nimruz');
INSERT INTO zones VALUES('',1,'NUR','Nurestan');
INSERT INTO zones VALUES('',1,'ORU','Oruzgan');
INSERT INTO zones VALUES('',1,'PIA','Paktia');
INSERT INTO zones VALUES('',1,'PKA','Paktika');
INSERT INTO zones VALUES('',1,'PAR','Parwan');
INSERT INTO zones VALUES('',1,'SAM','Samangan');
INSERT INTO zones VALUES('',1,'SAR','Sar-e Pol');
INSERT INTO zones VALUES('',1,'TAK','Takhar');
INSERT INTO zones VALUES('',1,'WAR','Wardak');
INSERT INTO zones VALUES('',1,'ZAB','Zabol');


#Albania

INSERT INTO zones VALUES('',2,'BR','Berat');
INSERT INTO zones VALUES('',2,'BU','Bulqize');
INSERT INTO zones VALUES('',2,'DL','Delvine');
INSERT INTO zones VALUES('',2,'DV','Devoll');
INSERT INTO zones VALUES('',2,'DI','Diber');
INSERT INTO zones VALUES('',2,'DR','Durres');
INSERT INTO zones VALUES('',2,'EL','Elbasan');
INSERT INTO zones VALUES('',2,'ER','Kolonje');
INSERT INTO zones VALUES('',2,'FR','Fier');
INSERT INTO zones VALUES('',2,'GJ','Gjirokaster');
INSERT INTO zones VALUES('',2,'GR','Gramsh');
INSERT INTO zones VALUES('',2,'HA','Has');
INSERT INTO zones VALUES('',2,'KA','Kavaje');
INSERT INTO zones VALUES('',2,'KB','Kurbin');
INSERT INTO zones VALUES('',2,'KC','Kucove');
INSERT INTO zones VALUES('',2,'KO','Korce');
INSERT INTO zones VALUES('',2,'KR','Kruje');
INSERT INTO zones VALUES('',2,'KU','Kukes');
INSERT INTO zones VALUES('',2,'LB','Librazhd');
INSERT INTO zones VALUES('',2,'LE','Lezhe');
INSERT INTO zones VALUES('',2,'LU','Lushnje');
INSERT INTO zones VALUES('',2,'MM','Malesi e Madhe');
INSERT INTO zones VALUES('',2,'MK','Mallakaster');
INSERT INTO zones VALUES('',2,'MT','Mat');
INSERT INTO zones VALUES('',2,'MR','Mirdite');
INSERT INTO zones VALUES('',2,'PQ','Peqin');
INSERT INTO zones VALUES('',2,'PR','Permet');
INSERT INTO zones VALUES('',2,'PG','Pogradec');
INSERT INTO zones VALUES('',2,'PU','Puke');
INSERT INTO zones VALUES('',2,'SH','Shkoder');
INSERT INTO zones VALUES('',2,'SK','Skrapar');
INSERT INTO zones VALUES('',2,'SR','Sarande');
INSERT INTO zones VALUES('',2,'TE','Tepelene');
INSERT INTO zones VALUES('',2,'TP','Tropoje');
INSERT INTO zones VALUES('',2,'TR','Tirane');
INSERT INTO zones VALUES('',2,'VL','Vlore');


#Algeria

INSERT INTO zones VALUES('',3,'ADR','Adrar');
INSERT INTO zones VALUES('',3,'ADE','Ain Defla');
INSERT INTO zones VALUES('',3,'ATE','Ain Temouchent');
INSERT INTO zones VALUES('',3,'ALG','Alger');
INSERT INTO zones VALUES('',3,'ANN','Annaba');
INSERT INTO zones VALUES('',3,'BAT','Batna');
INSERT INTO zones VALUES('',3,'BEC','Bechar');
INSERT INTO zones VALUES('',3,'BEJ','Bejaia');
INSERT INTO zones VALUES('',3,'BIS','Biskra');
INSERT INTO zones VALUES('',3,'BLI','Blida');
INSERT INTO zones VALUES('',3,'BBA','Bordj Bou Arreridj');
INSERT INTO zones VALUES('',3,'BOA','Bouira');
INSERT INTO zones VALUES('',3,'BMD','Boumerdes');
INSERT INTO zones VALUES('',3,'CHL','Chlef');
INSERT INTO zones VALUES('',3,'CON','Constantine');
INSERT INTO zones VALUES('',3,'DJE','Djelfa');
INSERT INTO zones VALUES('',3,'EBA','El Bayadh');
INSERT INTO zones VALUES('',3,'EOU','El Oued');
INSERT INTO zones VALUES('',3,'ETA','El Tarf');
INSERT INTO zones VALUES('',3,'GHA','Ghardaia');
INSERT INTO zones VALUES('',3,'GUE','Guelma');
INSERT INTO zones VALUES('',3,'ILL','Illizi');
INSERT INTO zones VALUES('',3,'JIJ','Jijel');
INSERT INTO zones VALUES('',3,'KHE','Khenchela');
INSERT INTO zones VALUES('',3,'LAG','Laghouat');
INSERT INTO zones VALUES('',3,'MUA','Muaskar');
INSERT INTO zones VALUES('',3,'MED','Medea');
INSERT INTO zones VALUES('',3,'MIL','Mila');
INSERT INTO zones VALUES('',3,'MOS','Mostaganem');
INSERT INTO zones VALUES('',3,'MSI','M\'Sila');
INSERT INTO zones VALUES('',3,'NAA','Naama');
INSERT INTO zones VALUES('',3,'ORA','Oran');
INSERT INTO zones VALUES('',3,'OUA','Ouargla');
INSERT INTO zones VALUES('',3,'OEB','Oum el-Bouaghi');
INSERT INTO zones VALUES('',3,'REL','Relizane');
INSERT INTO zones VALUES('',3,'SAI','Saida');
INSERT INTO zones VALUES('',3,'SET','Setif');
INSERT INTO zones VALUES('',3,'SBA','Sidi Bel Abbes');
INSERT INTO zones VALUES('',3,'SKI','Skikda');
INSERT INTO zones VALUES('',3,'SAH','Souk Ahras');
INSERT INTO zones VALUES('',3,'TAM','Tamanghasset');
INSERT INTO zones VALUES('',3,'TEB','Tebessa');
INSERT INTO zones VALUES('',3,'TIA','Tiaret');
INSERT INTO zones VALUES('',3,'TIN','Tindouf');
INSERT INTO zones VALUES('',3,'TIP','Tipaza');
INSERT INTO zones VALUES('',3,'TIS','Tissemsilt');
INSERT INTO zones VALUES('',3,'TOU','Tizi Ouzou');
INSERT INTO zones VALUES('',3,'TLE','Tlemcen');


#American Samoa

INSERT INTO zones VALUES('',4,'E','Eastern');
INSERT INTO zones VALUES('',4,'M','Manu\'a');
INSERT INTO zones VALUES('',4,'R','Rose Island');
INSERT INTO zones VALUES('',4,'S','Swains Island');
INSERT INTO zones VALUES('',4,'W','Western');


#Andorra

INSERT INTO zones VALUES('',5,'ALV','Andorra la Vella');
INSERT INTO zones VALUES('',5,'CAN','Canillo');
INSERT INTO zones VALUES('',5,'ENC','Encamp');
INSERT INTO zones VALUES('',5,'ESE','Escaldes-Engordany');
INSERT INTO zones VALUES('',5,'LMA','La Massana');
INSERT INTO zones VALUES('',5,'ORD','Ordino');
INSERT INTO zones VALUES('',5,'SJL','Sant Julia de Lria');


#Angola

INSERT INTO zones VALUES('',6,'BGO','Bengo');
INSERT INTO zones VALUES('',6,'BGU','Benguela');
INSERT INTO zones VALUES('',6,'BIE','Bie');
INSERT INTO zones VALUES('',6,'CAB','Cabinda');
INSERT INTO zones VALUES('',6,'CCU','Cuando-Cubango');
INSERT INTO zones VALUES('',6,'CNO','Cuanza Norte');
INSERT INTO zones VALUES('',6,'CUS','Cuanza Sul');
INSERT INTO zones VALUES('',6,'CNN','Cunene');
INSERT INTO zones VALUES('',6,'HUA','Huambo');
INSERT INTO zones VALUES('',6,'HUI','Huila');
INSERT INTO zones VALUES('',6,'LUA','Luanda');
INSERT INTO zones VALUES('',6,'LNO','Lunda Norte');
INSERT INTO zones VALUES('',6,'LSU','Lunda Sul');
INSERT INTO zones VALUES('',6,'MAL','Malange');
INSERT INTO zones VALUES('',6,'MOX','Moxico');
INSERT INTO zones VALUES('',6,'NAM','Namibe');
INSERT INTO zones VALUES('',6,'UIG','Uige');
INSERT INTO zones VALUES('',6,'ZAI','Zaire');


#Antigua and Barbuda

INSERT INTO zones VALUES('',9,'ASG','Saint George');
INSERT INTO zones VALUES('',9,'ASJ','Saint John');
INSERT INTO zones VALUES('',9,'ASM','Saint Mary');
INSERT INTO zones VALUES('',9,'ASL','Saint Paul');
INSERT INTO zones VALUES('',9,'ASR','Saint Peter');
INSERT INTO zones VALUES('',9,'ASH','Saint Philip');
INSERT INTO zones VALUES('',9,'BAR','Barbuda');
INSERT INTO zones VALUES('',9,'RED','Redonda');


#Argentina

INSERT INTO zones VALUES('',10,'AN','Antartida e Islas del Atlantico Sur');
INSERT INTO zones VALUES('',10,'BA','Buenos Aires');
INSERT INTO zones VALUES('',10,'CA','Catamarca');
INSERT INTO zones VALUES('',10,'CH','Chaco');
INSERT INTO zones VALUES('',10,'CU','Chubut');
INSERT INTO zones VALUES('',10,'CO','Cordoba');
INSERT INTO zones VALUES('',10,'CR','Corrientes');
INSERT INTO zones VALUES('',10,'CF','Capital Federal');
INSERT INTO zones VALUES('',10,'ER','Entre Rios');
INSERT INTO zones VALUES('',10,'FO','Formosa');
INSERT INTO zones VALUES('',10,'JU','Jujuy');
INSERT INTO zones VALUES('',10,'LP','La Pampa');
INSERT INTO zones VALUES('',10,'LR','La Rioja');
INSERT INTO zones VALUES('',10,'ME','Mendoza');
INSERT INTO zones VALUES('',10,'MI','Misiones');
INSERT INTO zones VALUES('',10,'NE','Neuquen');
INSERT INTO zones VALUES('',10,'RN','Rio Negro');
INSERT INTO zones VALUES('',10,'SA','Salta');
INSERT INTO zones VALUES('',10,'SJ','San Juan');
INSERT INTO zones VALUES('',10,'SL','San Luis');
INSERT INTO zones VALUES('',10,'SC','Santa Cruz');
INSERT INTO zones VALUES('',10,'SF','Santa Fe');
INSERT INTO zones VALUES('',10,'SD','Santiago del Estero');
INSERT INTO zones VALUES('',10,'TF','Tierra del Fuego');
INSERT INTO zones VALUES('',10,'TU','Tucuman');


#Armenia

INSERT INTO zones VALUES('',11,'AGT','Aragatsotn');
INSERT INTO zones VALUES('',11,'ARR','Ararat');
INSERT INTO zones VALUES('',11,'ARM','Armavir');
INSERT INTO zones VALUES('',11,'GEG','Geghark\'unik\'');
INSERT INTO zones VALUES('',11,'KOT','Kotayk\'');
INSERT INTO zones VALUES('',11,'LOR','Lorri');
INSERT INTO zones VALUES('',11,'SHI','Shirak');
INSERT INTO zones VALUES('',11,'SYU','Syunik\'');
INSERT INTO zones VALUES('',11,'TAV','Tavush');
INSERT INTO zones VALUES('',11,'VAY','Vayots\' Dzor');
INSERT INTO zones VALUES('',11,'YER','Yerevan');


#Australia

INSERT INTO zones VALUES('',13,'ACT','Australian Capitol Territory');
INSERT INTO zones VALUES('',13,'NSW','New South Wales');
INSERT INTO zones VALUES('',13,'NT','Northern Territory');
INSERT INTO zones VALUES('',13,'QLD','Queensland');
INSERT INTO zones VALUES('',13,'SA','South Australia');
INSERT INTO zones VALUES('',13,'TAS','Tasmania');
INSERT INTO zones VALUES('',13,'VIC','Victoria');
INSERT INTO zones VALUES('',13,'WA','Western Australia');


#Austria

INSERT INTO zones VALUES('',14,'BUR','Burgenland');
INSERT INTO zones VALUES('',14,'KAR','K&auml;rnten');
INSERT INTO zones VALUES('',14,'NOS','Nieder&ouml;esterreich');
INSERT INTO zones VALUES('',14,'OOS','Ober&ouml;esterreich');
INSERT INTO zones VALUES('',14,'SAL','Salzburg');
INSERT INTO zones VALUES('',14,'STE','Steiermark');
INSERT INTO zones VALUES('',14,'TIR','Tirol');
INSERT INTO zones VALUES('',14,'VOR','Vorarlberg');
INSERT INTO zones VALUES('',14,'WIE','Wien');


#Azerbaijan

INSERT INTO zones VALUES('',15,'AB','Ali Bayramli');
INSERT INTO zones VALUES('',15,'ABS','Abseron');
INSERT INTO zones VALUES('',15,'AGC','AgcabAdi');
INSERT INTO zones VALUES('',15,'AGM','Agdam');
INSERT INTO zones VALUES('',15,'AGS','Agdas');
INSERT INTO zones VALUES('',15,'AGA','Agstafa');
INSERT INTO zones VALUES('',15,'AGU','Agsu');
INSERT INTO zones VALUES('',15,'AST','Astara');
INSERT INTO zones VALUES('',15,'BA','Baki');
INSERT INTO zones VALUES('',15,'BAB','BabAk');
INSERT INTO zones VALUES('',15,'BAL','BalakAn');
INSERT INTO zones VALUES('',15,'BAR','BArdA');
INSERT INTO zones VALUES('',15,'BEY','Beylaqan');
INSERT INTO zones VALUES('',15,'BIL','Bilasuvar');
INSERT INTO zones VALUES('',15,'CAB','Cabrayil');
INSERT INTO zones VALUES('',15,'CAL','Calilabab');
INSERT INTO zones VALUES('',15,'CUL','Culfa');
INSERT INTO zones VALUES('',15,'DAS','Daskasan');
INSERT INTO zones VALUES('',15,'DAV','Davaci');
INSERT INTO zones VALUES('',15,'FUZ','Fuzuli');
INSERT INTO zones VALUES('',15,'GA','Ganca');
INSERT INTO zones VALUES('',15,'GAD','Gadabay');
INSERT INTO zones VALUES('',15,'GOR','Goranboy');
INSERT INTO zones VALUES('',15,'GOY','Goycay');
INSERT INTO zones VALUES('',15,'HAC','Haciqabul');
INSERT INTO zones VALUES('',15,'IMI','Imisli');
INSERT INTO zones VALUES('',15,'ISM','Ismayilli');
INSERT INTO zones VALUES('',15,'KAL','Kalbacar');
INSERT INTO zones VALUES('',15,'KUR','Kurdamir');
INSERT INTO zones VALUES('',15,'LA','Lankaran');
INSERT INTO zones VALUES('',15,'LAC','Lacin');
INSERT INTO zones VALUES('',15,'LAN','Lankaran');
INSERT INTO zones VALUES('',15,'LER','Lerik');
INSERT INTO zones VALUES('',15,'MAS','Masalli');
INSERT INTO zones VALUES('',15,'MI','Mingacevir');
INSERT INTO zones VALUES('',15,'NA','Naftalan');
INSERT INTO zones VALUES('',15,'NEF','Neftcala');
INSERT INTO zones VALUES('',15,'OGU','Oguz');
INSERT INTO zones VALUES('',15,'ORD','Ordubad');
INSERT INTO zones VALUES('',15,'QAB','Qabala');
INSERT INTO zones VALUES('',15,'QAX','Qax');
INSERT INTO zones VALUES('',15,'QAZ','Qazax');
INSERT INTO zones VALUES('',15,'QOB','Qobustan');
INSERT INTO zones VALUES('',15,'QBA','Quba');
INSERT INTO zones VALUES('',15,'QBI','Qubadli');
INSERT INTO zones VALUES('',15,'QUS','Qusar');
INSERT INTO zones VALUES('',15,'SA','Saki');
INSERT INTO zones VALUES('',15,'SAT','Saatli');
INSERT INTO zones VALUES('',15,'SAB','Sabirabad');
INSERT INTO zones VALUES('',15,'SAD','Sadarak');
INSERT INTO zones VALUES('',15,'SAH','Sahbuz');
INSERT INTO zones VALUES('',15,'SAK','Saki');
INSERT INTO zones VALUES('',15,'SAL','Salyan');
INSERT INTO zones VALUES('',15,'SM','Sumqayit');
INSERT INTO zones VALUES('',15,'SMI','Samaxi');
INSERT INTO zones VALUES('',15,'SKR','Samkir');
INSERT INTO zones VALUES('',15,'SMX','Samux');
INSERT INTO zones VALUES('',15,'SAR','Sarur');
INSERT INTO zones VALUES('',15,'SIY','Siyazan');
INSERT INTO zones VALUES('',15,'SS','Susa');
INSERT INTO zones VALUES('',15,'SUS','Susa');
INSERT INTO zones VALUES('',15,'TAR','Tartar');
INSERT INTO zones VALUES('',15,'TOV','Tovuz');
INSERT INTO zones VALUES('',15,'UCA','Ucar');
INSERT INTO zones VALUES('',15,'XA','Xankandi');
INSERT INTO zones VALUES('',15,'XAC','Xacmaz');
INSERT INTO zones VALUES('',15,'XAN','Xanlar');
INSERT INTO zones VALUES('',15,'XIZ','Xizi');
INSERT INTO zones VALUES('',15,'XCI','Xocali');
INSERT INTO zones VALUES('',15,'XVD','Xocavand');
INSERT INTO zones VALUES('',15,'YAR','Yardimli');
INSERT INTO zones VALUES('',15,'YEV','Yevlax');
INSERT INTO zones VALUES('',15,'ZAN','Zangilan');
INSERT INTO zones VALUES('',15,'ZAQ','Zaqatala');
INSERT INTO zones VALUES('',15,'ZAR','Zardab');
INSERT INTO zones VALUES('',15,'NX','Naxcivan');


#Bahamas

INSERT INTO zones VALUES('',16,'ACK','Acklins');
INSERT INTO zones VALUES('',16,'BER','Berry Islands');
INSERT INTO zones VALUES('',16,'BIM','Bimini');
INSERT INTO zones VALUES('',16,'BLK','Black Point');
INSERT INTO zones VALUES('',16,'CAT','Cat Island');
INSERT INTO zones VALUES('',16,'CAB','Central Abaco');
INSERT INTO zones VALUES('',16,'CAN','Central Andros');
INSERT INTO zones VALUES('',16,'CEL','Central Eleuthera');
INSERT INTO zones VALUES('',16,'FRE','City of Freeport');
INSERT INTO zones VALUES('',16,'CRO','Crooked Island');
INSERT INTO zones VALUES('',16,'EGB','East Grand Bahama');
INSERT INTO zones VALUES('',16,'EXU','Exuma');
INSERT INTO zones VALUES('',16,'GRD','Grand Cay');
INSERT INTO zones VALUES('',16,'HAR','Harbour Island');
INSERT INTO zones VALUES('',16,'HOP','Hope Town');
INSERT INTO zones VALUES('',16,'INA','Inagua');
INSERT INTO zones VALUES('',16,'LNG','Long Island');
INSERT INTO zones VALUES('',16,'MAN','Mangrove Cay');
INSERT INTO zones VALUES('',16,'MAY','Mayaguana');
INSERT INTO zones VALUES('',16,'MOO','Moore\'s Island');
INSERT INTO zones VALUES('',16,'NAB','North Abaco');
INSERT INTO zones VALUES('',16,'NAN','North Andros');
INSERT INTO zones VALUES('',16,'NEL','North Eleuthera');
INSERT INTO zones VALUES('',16,'RAG','Ragged Island');
INSERT INTO zones VALUES('',16,'RUM','Rum Cay');
INSERT INTO zones VALUES('',16,'SAL','San Salvador');
INSERT INTO zones VALUES('',16,'SAB','South Abaco');
INSERT INTO zones VALUES('',16,'SAN','South Andros');
INSERT INTO zones VALUES('',16,'SEL','South Eleuthera');
INSERT INTO zones VALUES('',16,'SWE','Spanish Wells');
INSERT INTO zones VALUES('',16,'WGB','West Grand Bahama');


#Bahrain

INSERT INTO zones VALUES('',17,'CAP','Capital');
INSERT INTO zones VALUES('',17,'CEN','Central');
INSERT INTO zones VALUES('',17,'MUH','Muharraq');
INSERT INTO zones VALUES('',17,'NOR','Northern');
INSERT INTO zones VALUES('',17,'SOU','Southern');


#Bangladesh

INSERT INTO zones VALUES('',18,'BAR','Barisal');
INSERT INTO zones VALUES('',18,'CHI','Chittagong');
INSERT INTO zones VALUES('',18,'DHA','Dhaka');
INSERT INTO zones VALUES('',18,'KHU','Khulna');
INSERT INTO zones VALUES('',18,'RAJ','Rajshahi');
INSERT INTO zones VALUES('',18,'SYL','Sylhet');


#Barbados

INSERT INTO zones VALUES('',19,'CC','Christ Church');
INSERT INTO zones VALUES('',19,'AND','Saint Andrew');
INSERT INTO zones VALUES('',19,'GEO','Saint George');
INSERT INTO zones VALUES('',19,'JAM','Saint James');
INSERT INTO zones VALUES('',19,'JOH','Saint John');
INSERT INTO zones VALUES('',19,'JOS','Saint Joseph');
INSERT INTO zones VALUES('',19,'LUC','Saint Lucy');
INSERT INTO zones VALUES('',19,'MIC','Saint Michael');
INSERT INTO zones VALUES('',19,'PET','Saint Peter');
INSERT INTO zones VALUES('',19,'PHI','Saint Philip');
INSERT INTO zones VALUES('',19,'THO','Saint Thomas');


#Belarus

INSERT INTO zones VALUES('',20,'BR','Brestskaya (Brest)');
INSERT INTO zones VALUES('',20,'HO','Homyel\'skaya (Homyel\')');
INSERT INTO zones VALUES('',20,'HM','Horad Minsk');
INSERT INTO zones VALUES('',20,'HR','Hrodzyenskaya (Hrodna)');
INSERT INTO zones VALUES('',20,'MA','Mahilyowskaya (Mahilyow)');
INSERT INTO zones VALUES('',20,'MI','Minskaya');
INSERT INTO zones VALUES('',20,'VI','Vitsyebskaya (Vitsyebsk)');


#Belgium

INSERT INTO zones VALUES('',21,'VAN','Antwerpen');
INSERT INTO zones VALUES('',21,'WBR','Brabant Wallon');
INSERT INTO zones VALUES('',21,'WHT','Hainaut');
INSERT INTO zones VALUES('',21,'WLG','Liege');
INSERT INTO zones VALUES('',21,'VLI','Limburg');
INSERT INTO zones VALUES('',21,'WLX','Luxembourg');
INSERT INTO zones VALUES('',21,'WNA','Namur');
INSERT INTO zones VALUES('',21,'VOV','Oost-Vlaanderen');
INSERT INTO zones VALUES('',21,'VBR','Vlaams Brabant');
INSERT INTO zones VALUES('',21,'VWV','West-Vlaanderen');


#Belize

INSERT INTO zones VALUES('',22,'BZ','Belize');
INSERT INTO zones VALUES('',22,'CY','Cayo');
INSERT INTO zones VALUES('',22,'CR','Corozal');
INSERT INTO zones VALUES('',22,'OW','Orange Walk');
INSERT INTO zones VALUES('',22,'SC','Stann Creek');
INSERT INTO zones VALUES('',22,'TO','Toledo');


#Benin

INSERT INTO zones VALUES('',23,'AL','Alibori');
INSERT INTO zones VALUES('',23,'AK','Atakora');
INSERT INTO zones VALUES('',23,'AQ','Atlantique');
INSERT INTO zones VALUES('',23,'BO','Borgou');
INSERT INTO zones VALUES('',23,'CO','Collines');
INSERT INTO zones VALUES('',23,'DO','Donga');
INSERT INTO zones VALUES('',23,'KO','Kouffo');
INSERT INTO zones VALUES('',23,'LI','Littoral');
INSERT INTO zones VALUES('',23,'MO','Mono');
INSERT INTO zones VALUES('',23,'OU','Oueme');
INSERT INTO zones VALUES('',23,'PL','Plateau');
INSERT INTO zones VALUES('',23,'ZO','Zou');


#Bermuda

INSERT INTO zones VALUES('',24,'DS','Devonshire');
INSERT INTO zones VALUES('',24,'HC','Hamilton City');
INSERT INTO zones VALUES('',24,'HA','Hamilton');
INSERT INTO zones VALUES('',24,'PG','Paget');
INSERT INTO zones VALUES('',24,'PB','Pembroke');
INSERT INTO zones VALUES('',24,'GC','Saint George City');
INSERT INTO zones VALUES('',24,'SG','Saint George\'s');
INSERT INTO zones VALUES('',24,'SA','Sandys');
INSERT INTO zones VALUES('',24,'SM','Smith\'s');
INSERT INTO zones VALUES('',24,'SH','Southampton');
INSERT INTO zones VALUES('',24,'WA','Warwick');


#Bhutan

INSERT INTO zones VALUES('',25,'BUM','Bumthang');
INSERT INTO zones VALUES('',25,'CHU','Chukha');
INSERT INTO zones VALUES('',25,'DAG','Dagana');
INSERT INTO zones VALUES('',25,'GAS','Gasa');
INSERT INTO zones VALUES('',25,'HAA','Haa');
INSERT INTO zones VALUES('',25,'LHU','Lhuntse');
INSERT INTO zones VALUES('',25,'MON','Mongar');
INSERT INTO zones VALUES('',25,'PAR','Paro');
INSERT INTO zones VALUES('',25,'PEM','Pemagatshel');
INSERT INTO zones VALUES('',25,'PUN','Punakha');
INSERT INTO zones VALUES('',25,'SJO','Samdrup Jongkhar');
INSERT INTO zones VALUES('',25,'SAT','Samtse');
INSERT INTO zones VALUES('',25,'SAR','Sarpang');
INSERT INTO zones VALUES('',25,'THI','Thimphu');
INSERT INTO zones VALUES('',25,'TRG','Trashigang');
INSERT INTO zones VALUES('',25,'TRY','Trashiyangste');
INSERT INTO zones VALUES('',25,'TRO','Trongsa');
INSERT INTO zones VALUES('',25,'TSI','Tsirang');
INSERT INTO zones VALUES('',25,'WPH','Wangdue Phodrang');
INSERT INTO zones VALUES('',25,'ZHE','Zhemgang');


#Bolivia

INSERT INTO zones VALUES('',26,'BEN','Beni');
INSERT INTO zones VALUES('',26,'CHU','Chuquisaca');
INSERT INTO zones VALUES('',26,'COC','Cochabamba');
INSERT INTO zones VALUES('',26,'LPZ','La Paz');
INSERT INTO zones VALUES('',26,'ORU','Oruro');
INSERT INTO zones VALUES('',26,'PAN','Pando');
INSERT INTO zones VALUES('',26,'POT','Potosi');
INSERT INTO zones VALUES('',26,'SCZ','Santa Cruz');
INSERT INTO zones VALUES('',26,'TAR','Tarija');


#Bosnia and Herzegovina

INSERT INTO zones VALUES('',27,'BRO','Brcko district');
INSERT INTO zones VALUES('',27,'FUS','Unsko-Sanski Kanton');
INSERT INTO zones VALUES('',27,'FPO','Posavski Kanton');
INSERT INTO zones VALUES('',27,'FTU','Tuzlanski Kanton');
INSERT INTO zones VALUES('',27,'FZE','Zenicko-Dobojski Kanton');
INSERT INTO zones VALUES('',27,'FBP','Bosanskopodrinjski Kanton');
INSERT INTO zones VALUES('',27,'FSB','Srednjebosanski Kanton');
INSERT INTO zones VALUES('',27,'FHN','Hercegovacko-neretvanski Kanton');
INSERT INTO zones VALUES('',27,'FZH','Zapadnohercegovacka Zupanija');
INSERT INTO zones VALUES('',27,'FSA','Kanton Sarajevo');
INSERT INTO zones VALUES('',27,'FZA','Zapadnobosanska');
INSERT INTO zones VALUES('',27,'SBL','Banja Luka');
INSERT INTO zones VALUES('',27,'SDO','Doboj');
INSERT INTO zones VALUES('',27,'SBI','Bijeljina');
INSERT INTO zones VALUES('',27,'SVL','Vlasenica');
INSERT INTO zones VALUES('',27,'SSR','Sarajevo-Romanija or Sokolac');
INSERT INTO zones VALUES('',27,'SFO','Foca');
INSERT INTO zones VALUES('',27,'STR','Trebinje');
#Botswana

INSERT INTO zones VALUES('',28,'CE','Central');
INSERT INTO zones VALUES('',28,'GH','Ghanzi');
INSERT INTO zones VALUES('',28,'KD','Kgalagadi');
INSERT INTO zones VALUES('',28,'KT','Kgatleng');
INSERT INTO zones VALUES('',28,'KW','Kweneng');
INSERT INTO zones VALUES('',28,'NG','Ngamiland');
INSERT INTO zones VALUES('',28,'NE','North East');
INSERT INTO zones VALUES('',28,'NW','North West');
INSERT INTO zones VALUES('',28,'SE','South East');
INSERT INTO zones VALUES('',28,'SO','Southern');


#Brazil

INSERT INTO zones VALUES('',30,'AC','Acre');
INSERT INTO zones VALUES('',30,'AL','Alagoas');
INSERT INTO zones VALUES('',30,'AP','Amapa');
INSERT INTO zones VALUES('',30,'AM','Amazonas');
INSERT INTO zones VALUES('',30,'BA','Bahia');
INSERT INTO zones VALUES('',30,'CE','Ceara');
INSERT INTO zones VALUES('',30,'DF','Distrito Federal');
INSERT INTO zones VALUES('',30,'ES','Espirito Santo');
INSERT INTO zones VALUES('',30,'GO','Goias');
INSERT INTO zones VALUES('',30,'MA','Maranhao');
INSERT INTO zones VALUES('',30,'MT','Mato Grosso');
INSERT INTO zones VALUES('',30,'MS','Mato Grosso do Sul');
INSERT INTO zones VALUES('',30,'MG','Minas Gerais');
INSERT INTO zones VALUES('',30,'PA','Para');
INSERT INTO zones VALUES('',30,'PB','Paraiba');
INSERT INTO zones VALUES('',30,'PR','Parana');
INSERT INTO zones VALUES('',30,'PE','Pernambuco');
INSERT INTO zones VALUES('',30,'PI','Piaui');
INSERT INTO zones VALUES('',30,'RJ','Rio de Janeiro');
INSERT INTO zones VALUES('',30,'RN','Rio Grande do Norte');
INSERT INTO zones VALUES('',30,'RS','Rio Grande do Sul');
INSERT INTO zones VALUES('',30,'RO','Rondonia');
INSERT INTO zones VALUES('',30,'RR','Roraima');
INSERT INTO zones VALUES('',30,'SC','Santa Catarina');
INSERT INTO zones VALUES('',30,'SP','Sao Paulo');
INSERT INTO zones VALUES('',30,'SE','Sergipe');
INSERT INTO zones VALUES('',30,'TO','Tocantins');


#British Indian Ocean Territory

INSERT INTO zones VALUES('',31,'PB','Peros Banhos');
INSERT INTO zones VALUES('',31,'SI','Salomon Islands');
INSERT INTO zones VALUES('',31,'NI','Nelsons Island');
INSERT INTO zones VALUES('',31,'TB','Three Brothers');
INSERT INTO zones VALUES('',31,'EA','Eagle Islands');
INSERT INTO zones VALUES('',31,'DI','Danger Island');
INSERT INTO zones VALUES('',31,'EG','Egmont Islands');
INSERT INTO zones VALUES('',31,'DG','Diego Garcia');


#Brunei Darussalam

INSERT INTO zones VALUES('',32,'BEL','Belait');
INSERT INTO zones VALUES('',32,'BRM','Brunei and Muara');
INSERT INTO zones VALUES('',32,'TEM','Temburong');
INSERT INTO zones VALUES('',32,'TUT','Tutong');


#Bulgaria

INSERT INTO zones VALUES('',33,'','Blagoevgrad');
INSERT INTO zones VALUES('',33,'','Burgas');
INSERT INTO zones VALUES('',33,'','Dobrich');
INSERT INTO zones VALUES('',33,'','Gabrovo');
INSERT INTO zones VALUES('',33,'','Haskovo');
INSERT INTO zones VALUES('',33,'','Kardjali');
INSERT INTO zones VALUES('',33,'','Kyustendil');
INSERT INTO zones VALUES('',33,'','Lovech');
INSERT INTO zones VALUES('',33,'','Montana');
INSERT INTO zones VALUES('',33,'','Pazardjik');
INSERT INTO zones VALUES('',33,'','Pernik');
INSERT INTO zones VALUES('',33,'','Pleven');
INSERT INTO zones VALUES('',33,'','Plovdiv');
INSERT INTO zones VALUES('',33,'','Razgrad');
INSERT INTO zones VALUES('',33,'','Shumen');
INSERT INTO zones VALUES('',33,'','Silistra');
INSERT INTO zones VALUES('',33,'','Sliven');
INSERT INTO zones VALUES('',33,'','Smolyan');
INSERT INTO zones VALUES('',33,'','Sofia');
INSERT INTO zones VALUES('',33,'','Sofia - town');
INSERT INTO zones VALUES('',33,'','Stara Zagora');
INSERT INTO zones VALUES('',33,'','Targovishte');
INSERT INTO zones VALUES('',33,'','Varna');
INSERT INTO zones VALUES('',33,'','Veliko Tarnovo');
INSERT INTO zones VALUES('',33,'','Vidin');
INSERT INTO zones VALUES('',33,'','Vratza');
INSERT INTO zones VALUES('',33,'','Yambol');


#Burkina Faso

INSERT INTO zones VALUES('',34,'BAL','Bale');
INSERT INTO zones VALUES('',34,'BAM','Bam');
INSERT INTO zones VALUES('',34,'BAN','Banwa');
INSERT INTO zones VALUES('',34,'BAZ','Bazega');
INSERT INTO zones VALUES('',34,'BOR','Bougouriba');
INSERT INTO zones VALUES('',34,'BLG','Boulgou');
INSERT INTO zones VALUES('',34,'BOK','Boulkiemde');
INSERT INTO zones VALUES('',34,'COM','Comoe');
INSERT INTO zones VALUES('',34,'GAN','Ganzourgou');
INSERT INTO zones VALUES('',34,'GNA','Gnagna');
INSERT INTO zones VALUES('',34,'GOU','Gourma');
INSERT INTO zones VALUES('',34,'HOU','Houet');
INSERT INTO zones VALUES('',34,'IOA','Ioba');
INSERT INTO zones VALUES('',34,'KAD','Kadiogo');
INSERT INTO zones VALUES('',34,'KEN','Kenedougou');
INSERT INTO zones VALUES('',34,'KOD','Komondjari');
INSERT INTO zones VALUES('',34,'KOP','Kompienga');
INSERT INTO zones VALUES('',34,'KOS','Kossi');
INSERT INTO zones VALUES('',34,'KOL','Koulpelogo');
INSERT INTO zones VALUES('',34,'KOT','Kouritenga');
INSERT INTO zones VALUES('',34,'KOW','Kourweogo');
INSERT INTO zones VALUES('',34,'LER','Leraba');
INSERT INTO zones VALUES('',34,'LOR','Loroum');
INSERT INTO zones VALUES('',34,'MOU','Mouhoun');
INSERT INTO zones VALUES('',34,'NAH','Nahouri');
INSERT INTO zones VALUES('',34,'NAM','Namentenga');
INSERT INTO zones VALUES('',34,'NAY','Nayala');
INSERT INTO zones VALUES('',34,'NOU','Noumbiel');
INSERT INTO zones VALUES('',34,'OUB','Oubritenga');
INSERT INTO zones VALUES('',34,'OUD','Oudalan');
INSERT INTO zones VALUES('',34,'PAS','Passore');
INSERT INTO zones VALUES('',34,'PON','Poni');
INSERT INTO zones VALUES('',34,'SAG','Sanguie');
INSERT INTO zones VALUES('',34,'SAM','Sanmatenga');
INSERT INTO zones VALUES('',34,'SEN','Seno');
INSERT INTO zones VALUES('',34,'SIS','Sissili');
INSERT INTO zones VALUES('',34,'SOM','Soum');
INSERT INTO zones VALUES('',34,'SOR','Sourou');
INSERT INTO zones VALUES('',34,'TAP','Tapoa');
INSERT INTO zones VALUES('',34,'TUY','Tuy');
INSERT INTO zones VALUES('',34,'YAG','Yagha');
INSERT INTO zones VALUES('',34,'YAT','Yatenga');
INSERT INTO zones VALUES('',34,'ZIR','Ziro');
INSERT INTO zones VALUES('',34,'ZOD','Zondoma');
INSERT INTO zones VALUES('',34,'ZOW','Zoundweogo');


#Burundi

INSERT INTO zones VALUES('',35,'BB','Bubanza');
INSERT INTO zones VALUES('',35,'BJ','Bujumbura');
INSERT INTO zones VALUES('',35,'BR','Bururi');
INSERT INTO zones VALUES('',35,'CA','Cankuzo');
INSERT INTO zones VALUES('',35,'CI','Cibitoke');
INSERT INTO zones VALUES('',35,'GI','Gitega');
INSERT INTO zones VALUES('',35,'KR','Karuzi');
INSERT INTO zones VALUES('',35,'KY','Kayanza');
INSERT INTO zones VALUES('',35,'KI','Kirundo');
INSERT INTO zones VALUES('',35,'MA','Makamba');
INSERT INTO zones VALUES('',35,'MU','Muramvya');
INSERT INTO zones VALUES('',35,'MY','Muyinga');
INSERT INTO zones VALUES('',35,'MW','Mwaro');
INSERT INTO zones VALUES('',35,'NG','Ngozi');
INSERT INTO zones VALUES('',35,'RT','Rutana');
INSERT INTO zones VALUES('',35,'RY','Ruyigi');


#Cambodia

INSERT INTO zones VALUES('',36,'PP','Phnom Penh');
INSERT INTO zones VALUES('',36,'PS','Preah Seihanu (Kompong Som or Sihanoukville)');
INSERT INTO zones VALUES('',36,'PA','Pailin');
INSERT INTO zones VALUES('',36,'KB','Keb');
INSERT INTO zones VALUES('',36,'BM','Banteay Meanchey');
INSERT INTO zones VALUES('',36,'BA','Battambang');
INSERT INTO zones VALUES('',36,'KM','Kampong Cham');
INSERT INTO zones VALUES('',36,'KN','Kampong Chhnang');
INSERT INTO zones VALUES('',36,'KU','Kampong Speu');
INSERT INTO zones VALUES('',36,'KO','Kampong Som');
INSERT INTO zones VALUES('',36,'KT','Kampong Thom');
INSERT INTO zones VALUES('',36,'KP','Kampot');
INSERT INTO zones VALUES('',36,'KL','Kandal');
INSERT INTO zones VALUES('',36,'KK','Kaoh Kong');
INSERT INTO zones VALUES('',36,'KR','Kratie');
INSERT INTO zones VALUES('',36,'MK','Mondul Kiri');
INSERT INTO zones VALUES('',36,'OM','Oddar Meancheay');
INSERT INTO zones VALUES('',36,'PU','Pursat');
INSERT INTO zones VALUES('',36,'PR','Preah Vihear');
INSERT INTO zones VALUES('',36,'PG','Prey Veng');
INSERT INTO zones VALUES('',36,'RK','Ratanak Kiri');
INSERT INTO zones VALUES('',36,'SI','Siemreap');
INSERT INTO zones VALUES('',36,'ST','Stung Treng');
INSERT INTO zones VALUES('',36,'SR','Svay Rieng');
INSERT INTO zones VALUES('',36,'TK','Takeo');


#Cameroon

INSERT INTO zones VALUES('',37,'ADA','Adamawa (Adamaoua)');
INSERT INTO zones VALUES('',37,'CEN','Centre');
INSERT INTO zones VALUES('',37,'EST','East (Est)');
INSERT INTO zones VALUES('',37,'EXN','Extreme North (Extrme-Nord)');
INSERT INTO zones VALUES('',37,'LIT','Littoral');
INSERT INTO zones VALUES('',37,'NOR','North (Nord)');
INSERT INTO zones VALUES('',37,'NOT','Northwest (Nord-Ouest)');
INSERT INTO zones VALUES('',37,'OUE','West (Ouest)');
INSERT INTO zones VALUES('',37,'SUD','South (Sud)');
INSERT INTO zones VALUES('',37,'SOU','Southwest (Sud-Ouest).');


#Canada

INSERT INTO zones VALUES('',38,'AB','Alberta');
INSERT INTO zones VALUES('',38,'BC','British Columbia');
INSERT INTO zones VALUES('',38,'MB','Manitoba');
INSERT INTO zones VALUES('',38,'NB','New Brunswick');
INSERT INTO zones VALUES('',38,'NL','Newfoundland and Labrador');
INSERT INTO zones VALUES('',38,'NT','Northwest Territories');
INSERT INTO zones VALUES('',38,'NS','Nova Scotia');
INSERT INTO zones VALUES('',38,'NU','Nunavut');
INSERT INTO zones VALUES('',38,'ON','Ontario');
INSERT INTO zones VALUES('',38,'PE','Prince Edward Island');
INSERT INTO zones VALUES('',38,'QC','Qu&eacute;bec');
INSERT INTO zones VALUES('',38,'SK','Saskatchewan');
INSERT INTO zones VALUES('',38,'YT','Yukon Territory');


#Cape Verde

INSERT INTO zones VALUES('',39,'BV','Boa Vista');
INSERT INTO zones VALUES('',39,'BR','Brava');
INSERT INTO zones VALUES('',39,'CS','Calheta de Sao Miguel');
INSERT INTO zones VALUES('',39,'MA','Maio');
INSERT INTO zones VALUES('',39,'MO','Mosteiros');
INSERT INTO zones VALUES('',39,'PA','Paul');
INSERT INTO zones VALUES('',39,'PN','Porto Novo');
INSERT INTO zones VALUES('',39,'PR','Praia');
INSERT INTO zones VALUES('',39,'RG','Ribeira Grande');
INSERT INTO zones VALUES('',39,'SL','Sal');
INSERT INTO zones VALUES('',39,'CA','Santa Catarina');
INSERT INTO zones VALUES('',39,'CR','Santa Cruz');
INSERT INTO zones VALUES('',39,'SD','Sao Domingos');
INSERT INTO zones VALUES('',39,'SF','Sao Filipe');
INSERT INTO zones VALUES('',39,'SN','Sao Nicolau');
INSERT INTO zones VALUES('',39,'SV','Sao Vicente');
INSERT INTO zones VALUES('',39,'TA','Tarrafal');


#Cayman Islands

INSERT INTO zones VALUES('',40,'CR','Creek');
INSERT INTO zones VALUES('',40,'EA','Eastern');
INSERT INTO zones VALUES('',40,'ML','Midland');
INSERT INTO zones VALUES('',40,'ST','South Town');
INSERT INTO zones VALUES('',40,'SP','Spot Bay');
INSERT INTO zones VALUES('',40,'SK','Stake Bay');
INSERT INTO zones VALUES('',40,'WD','West End ');
INSERT INTO zones VALUES('',40,'WN','Western');


#Central African Republic

INSERT INTO zones VALUES('',41,'BBA','Bamingui-Bangoran');
INSERT INTO zones VALUES('',41,'BKO','Basse-Kotto');
INSERT INTO zones VALUES('',41,'HKO','Haute-Kotto');
INSERT INTO zones VALUES('',41,'HMB','Haut-Mbomou');
INSERT INTO zones VALUES('',41,'KEM','Kemo');
INSERT INTO zones VALUES('',41,'LOB','Lobaye');
INSERT INTO zones VALUES('',41,'MKD','Mambere-Kade');
INSERT INTO zones VALUES('',41,'MBO','Mbomou');
INSERT INTO zones VALUES('',41,'NMM','Nana-Mambere');
INSERT INTO zones VALUES('',41,'OMP','Ombella-M\'Poko');
INSERT INTO zones VALUES('',41,'OUK','Ouaka');
INSERT INTO zones VALUES('',41,'OUH','Ouham');
INSERT INTO zones VALUES('',41,'OPE','Ouham-Pende');
INSERT INTO zones VALUES('',41,'VAK','Vakaga');
INSERT INTO zones VALUES('',41,'NGR','Nana-Grebizi');
INSERT INTO zones VALUES('',41,'SMB','Sangha-Mbaere');
INSERT INTO zones VALUES('',41,'BAN','Bangui');


#Chad

INSERT INTO zones VALUES('',42,'BA','Batha');
INSERT INTO zones VALUES('',42,'BI','Biltine');
INSERT INTO zones VALUES('',42,'BE','Borkou-Ennedi-Tibesti');
INSERT INTO zones VALUES('',42,'CB','Chari-Baguirmi');
INSERT INTO zones VALUES('',42,'GU','Guera');
INSERT INTO zones VALUES('',42,'KA','Kanem');
INSERT INTO zones VALUES('',42,'LA','Lac');
INSERT INTO zones VALUES('',42,'LC','Logone Occidental');
INSERT INTO zones VALUES('',42,'LR','Logone Oriental');
INSERT INTO zones VALUES('',42,'MK','Mayo-Kebbi');
INSERT INTO zones VALUES('',42,'MC','Moyen-Chari');
INSERT INTO zones VALUES('',42,'OU','Ouaddai');
INSERT INTO zones VALUES('',42,'SA','Salamat');
INSERT INTO zones VALUES('',42,'TA','Tandjile');


#Chile

INSERT INTO zones VALUES('',43,'AI','Aisen del General Carlos Ibanez del Campo');
INSERT INTO zones VALUES('',43,'AN','Antofagasta');
INSERT INTO zones VALUES('',43,'AR','Araucania');
INSERT INTO zones VALUES('',43,'AT','Atacama');
INSERT INTO zones VALUES('',43,'BI','Bio-Bio');
INSERT INTO zones VALUES('',43,'CO','Coquimbo');
INSERT INTO zones VALUES('',43,'LI','Libertador General Bernardo O\'Higgins');
INSERT INTO zones VALUES('',43,'LL','Los Lagos');
INSERT INTO zones VALUES('',43,'MA','Magallanes y de la Antartica Chilena');
INSERT INTO zones VALUES('',43,'ML','Maule');
INSERT INTO zones VALUES('',43,'RM','Region Metropolitana');
INSERT INTO zones VALUES('',43,'TA','Tarapaca');
INSERT INTO zones VALUES('',43,'VS','Valparaiso');

#China
INSERT INTO zones VALUES ('', '44', 'BE', '北京市');
INSERT INTO zones VALUES ('', '44', 'SG', '上海市');
INSERT INTO zones VALUES ('', '44', 'TI', '天津市');
INSERT INTO zones VALUES ('', '44', 'CH', '重庆市');
INSERT INTO zones VALUES ('', '44', 'AN', '安徽省');
INSERT INTO zones VALUES ('', '44', 'FU', '福建省');
INSERT INTO zones VALUES ('', '44', 'GA', '甘肃省');
INSERT INTO zones VALUES ('', '44', 'GU', '广东省');
INSERT INTO zones VALUES ('', '44', 'GX', '广西壮族自治区');
INSERT INTO zones VALUES ('', '44', 'GZ', '贵州省');
INSERT INTO zones VALUES ('', '44', 'HE', '海南省');
INSERT INTO zones VALUES ('', '44', 'HB', '河北省');
INSERT INTO zones VALUES ('', '44', 'HN', '河南省');
INSERT INTO zones VALUES ('', '44', 'HL', '黑龙江省');
INSERT INTO zones VALUES ('', '44', 'HU', '湖北省');
INSERT INTO zones VALUES ('', '44', 'HN', '湖南省');
INSERT INTO zones VALUES ('', '44', 'JL', '吉林省');
INSERT INTO zones VALUES ('', '44', 'JI', '江苏省');
INSERT INTO zones VALUES ('', '44', 'JX', '江西省');
INSERT INTO zones VALUES ('', '44', 'LI', '辽宁省');
INSERT INTO zones VALUES ('', '44', 'IM', '内蒙古自治区');
INSERT INTO zones VALUES ('', '44', 'NI', '宁夏回族自治区');
INSERT INTO zones VALUES ('', '44', 'QH', '青海省');
INSERT INTO zones VALUES ('', '44', 'SA', '山东省');
INSERT INTO zones VALUES ('', '44', 'SX', '山西省');
INSERT INTO zones VALUES ('', '44', 'SH', '陕西省');
INSERT INTO zones VALUES ('', '44', 'SI', '四川省');
INSERT INTO zones VALUES ('', '44', 'TB', '西藏自治区');
INSERT INTO zones VALUES ('', '44', 'XI', '新疆维吾尔族自治区');
INSERT INTO zones VALUES ('', '44', 'YU', '云南省');
INSERT INTO zones VALUES ('', '44', 'ZH', '浙江省');
INSERT INTO zones VALUES ('', '44', 'HK', '香港');
INSERT INTO zones VALUES ('', '44', 'MA', '澳门特别行政区');


#Cocos (Keeling) Islands

INSERT INTO zones VALUES('',46,'D','Direction Island');
INSERT INTO zones VALUES('',46,'H','Home Island');
INSERT INTO zones VALUES('',46,'O','Horsburgh Island');
INSERT INTO zones VALUES('',46,'S','South Island');
INSERT INTO zones VALUES('',46,'W','West Island');


#Colombia

INSERT INTO zones VALUES('',47,'AMZ','Amazonas');
INSERT INTO zones VALUES('',47,'ANT','Antioquia');
INSERT INTO zones VALUES('',47,'ARA','Arauca');
INSERT INTO zones VALUES('',47,'ATL','Atlantico');
INSERT INTO zones VALUES('',47,'BDC','Bogota D.C.');
INSERT INTO zones VALUES('',47,'BOL','Bolivar');
INSERT INTO zones VALUES('',47,'BOY','Boyaca');
INSERT INTO zones VALUES('',47,'CAL','Caldas');
INSERT INTO zones VALUES('',47,'CAQ','Caqueta');
INSERT INTO zones VALUES('',47,'CAS','Casanare');
INSERT INTO zones VALUES('',47,'CAU','Cauca');
INSERT INTO zones VALUES('',47,'CES','Cesar');
INSERT INTO zones VALUES('',47,'CHO','Choco');
INSERT INTO zones VALUES('',47,'COR','Cordoba');
INSERT INTO zones VALUES('',47,'CAM','Cundinamarca');
INSERT INTO zones VALUES('',47,'GNA','Guainia');
INSERT INTO zones VALUES('',47,'GJR','Guajira');
INSERT INTO zones VALUES('',47,'GVR','Guaviare');
INSERT INTO zones VALUES('',47,'HUI','Huila');
INSERT INTO zones VALUES('',47,'MAG','Magdalena');
INSERT INTO zones VALUES('',47,'MET','Meta');
INSERT INTO zones VALUES('',47,'NAR','Narino');
INSERT INTO zones VALUES('',47,'NDS','Norte de Santander');
INSERT INTO zones VALUES('',47,'PUT','Putumayo');
INSERT INTO zones VALUES('',47,'QUI','Quindio');
INSERT INTO zones VALUES('',47,'RIS','Risaralda');
INSERT INTO zones VALUES('',47,'SAP','San Andres y Providencia');
INSERT INTO zones VALUES('',47,'SAN','Santander');
INSERT INTO zones VALUES('',47,'SUC','Sucre');
INSERT INTO zones VALUES('',47,'TOL','Tolima');
INSERT INTO zones VALUES('',47,'VDC','Valle del Cauca');
INSERT INTO zones VALUES('',47,'VAU','Vaupes');
INSERT INTO zones VALUES('',47,'VIC','Vichada');


#Comoros

INSERT INTO zones VALUES('',48,'G','Grande Comore');
INSERT INTO zones VALUES('',48,'A','Anjouan');
INSERT INTO zones VALUES('',48,'M','Moheli');


#Congo

INSERT INTO zones VALUES('',49,'BO','Bouenza');
INSERT INTO zones VALUES('',49,'BR','Brazzaville');
INSERT INTO zones VALUES('',49,'CU','Cuvette');
INSERT INTO zones VALUES('',49,'CO','Cuvette-Ouest');
INSERT INTO zones VALUES('',49,'KO','Kouilou');
INSERT INTO zones VALUES('',49,'LE','Lekoumou');
INSERT INTO zones VALUES('',49,'LI','Likouala');
INSERT INTO zones VALUES('',49,'NI','Niari');
INSERT INTO zones VALUES('',49,'PL','Plateaux');
INSERT INTO zones VALUES('',49,'PO','Pool ');
INSERT INTO zones VALUES('',49,'SA','Sangha');


#Cook Islands

INSERT INTO zones VALUES('',50,'PU','Pukapuka');
INSERT INTO zones VALUES('',50,'RK','Rakahanga');
INSERT INTO zones VALUES('',50,'MK','Manihiki');
INSERT INTO zones VALUES('',50,'PE','Penrhyn');
INSERT INTO zones VALUES('',50,'NI','Nassau Island');
INSERT INTO zones VALUES('',50,'SU','Surwarrow');
INSERT INTO zones VALUES('',50,'PA','Palmerston');
INSERT INTO zones VALUES('',50,'AI','Aitutaki');
INSERT INTO zones VALUES('',50,'MA','Manuae');
INSERT INTO zones VALUES('',50,'TA','Takutea');
INSERT INTO zones VALUES('',50,'MT','Mitiaro');
INSERT INTO zones VALUES('',50,'AT','Atiu');
INSERT INTO zones VALUES('',50,'MU','Mauke');
INSERT INTO zones VALUES('',50,'RR','Rarotonga');
INSERT INTO zones VALUES('',50,'MG','Mangaia');


#Costa Rica

INSERT INTO zones VALUES('',51,'AL','Alajuela');
INSERT INTO zones VALUES('',51,'CA','Cartago');
INSERT INTO zones VALUES('',51,'GU','Guanacaste');
INSERT INTO zones VALUES('',51,'HE','Heredia');
INSERT INTO zones VALUES('',51,'LI','Limon');
INSERT INTO zones VALUES('',51,'PU','Puntarenas');
INSERT INTO zones VALUES('',51,'SJ','San Jose');


#Cote D\'Ivoire

INSERT INTO zones VALUES('',52,'ABE','Abengourou');
INSERT INTO zones VALUES('',52,'ABI','Abidjan');
INSERT INTO zones VALUES('',52,'ABO','Aboisso');
INSERT INTO zones VALUES('',52,'ADI','Adiake');
INSERT INTO zones VALUES('',52,'ADZ','Adzope');
INSERT INTO zones VALUES('',52,'AGB','Agboville');
INSERT INTO zones VALUES('',52,'AGN','Agnibilekrou');
INSERT INTO zones VALUES('',52,'ALE','Alepe');
INSERT INTO zones VALUES('',52,'BOC','Bocanda');
INSERT INTO zones VALUES('',52,'BAN','Bangolo');
INSERT INTO zones VALUES('',52,'BEO','Beoumi');
INSERT INTO zones VALUES('',52,'BIA','Biankouma');
INSERT INTO zones VALUES('',52,'BDK','Bondoukou');
INSERT INTO zones VALUES('',52,'BGN','Bongouanou');
INSERT INTO zones VALUES('',52,'BFL','Bouafle');
INSERT INTO zones VALUES('',52,'BKE','Bouake');
INSERT INTO zones VALUES('',52,'BNA','Bouna');
INSERT INTO zones VALUES('',52,'BDL','Boundiali');
INSERT INTO zones VALUES('',52,'DKL','Dabakala');
INSERT INTO zones VALUES('',52,'DBU','Dabou');
INSERT INTO zones VALUES('',52,'DAL','Daloa');
INSERT INTO zones VALUES('',52,'DAN','Danane');
INSERT INTO zones VALUES('',52,'DAO','Daoukro');
INSERT INTO zones VALUES('',52,'DIM','Dimbokro');
INSERT INTO zones VALUES('',52,'DIV','Divo');
INSERT INTO zones VALUES('',52,'DUE','Duekoue');
INSERT INTO zones VALUES('',52,'FER','Ferkessedougou');
INSERT INTO zones VALUES('',52,'GAG','Gagnoa');
INSERT INTO zones VALUES('',52,'GBA','Grand-Bassam');
INSERT INTO zones VALUES('',52,'GLA','Grand-Lahou');
INSERT INTO zones VALUES('',52,'GUI','Guiglo');
INSERT INTO zones VALUES('',52,'ISS','Issia');
INSERT INTO zones VALUES('',52,'JAC','Jacqueville');
INSERT INTO zones VALUES('',52,'KAT','Katiola');
INSERT INTO zones VALUES('',52,'KOR','Korhogo');
INSERT INTO zones VALUES('',52,'LAK','Lakota');
INSERT INTO zones VALUES('',52,'MAN','Man');
INSERT INTO zones VALUES('',52,'MKN','Mankono');
INSERT INTO zones VALUES('',52,'MBA','Mbahiakro');
INSERT INTO zones VALUES('',52,'ODI','Odienne');
INSERT INTO zones VALUES('',52,'OUM','Oume');
INSERT INTO zones VALUES('',52,'SAK','Sakassou');
INSERT INTO zones VALUES('',52,'SPE','San-Pedro');
INSERT INTO zones VALUES('',52,'SAS','Sassandra');
INSERT INTO zones VALUES('',52,'SEG','Seguela');
INSERT INTO zones VALUES('',52,'SIN','Sinfra');
INSERT INTO zones VALUES('',52,'SOU','Soubre');
INSERT INTO zones VALUES('',52,'TAB','Tabou');
INSERT INTO zones VALUES('',52,'TAN','Tanda');
INSERT INTO zones VALUES('',52,'TIE','Tiebissou');
INSERT INTO zones VALUES('',52,'TIN','Tingrela');
INSERT INTO zones VALUES('',52,'TIA','Tiassale');
INSERT INTO zones VALUES('',52,'TBA','Touba');
INSERT INTO zones VALUES('',52,'TLP','Toulepleu');
INSERT INTO zones VALUES('',52,'TMD','Toumodi');
INSERT INTO zones VALUES('',52,'VAV','Vavoua');
INSERT INTO zones VALUES('',52,'YAM','Yamoussoukro');
INSERT INTO zones VALUES('',52,'ZUE','Zuenoula');


#Croatia

INSERT INTO zones VALUES('',53,'BB','Bjelovar-Bilogora');
INSERT INTO zones VALUES('',53,'CZ','City of Zagreb');
INSERT INTO zones VALUES('',53,'DN','Dubrovnik-Neretva');
INSERT INTO zones VALUES('',53,'IS','Istra');
INSERT INTO zones VALUES('',53,'KA','Karlovac');
INSERT INTO zones VALUES('',53,'KK','Koprivnica-Krizevci');
INSERT INTO zones VALUES('',53,'KZ','Krapina-Zagorje');
INSERT INTO zones VALUES('',53,'LS','Lika-Senj');
INSERT INTO zones VALUES('',53,'ME','Medimurje');
INSERT INTO zones VALUES('',53,'OB','Osijek-Baranja');
INSERT INTO zones VALUES('',53,'PS','Pozega-Slavonia');
INSERT INTO zones VALUES('',53,'PG','Primorje-Gorski Kotar');
INSERT INTO zones VALUES('',53,'SI','Sibenik');
INSERT INTO zones VALUES('',53,'SM','Sisak-Moslavina');
INSERT INTO zones VALUES('',53,'SB','Slavonski Brod-Posavina');
INSERT INTO zones VALUES('',53,'SD','Split-Dalmatia');
INSERT INTO zones VALUES('',53,'VA','Varazdin');
INSERT INTO zones VALUES('',53,'VP','Virovitica-Podravina');
INSERT INTO zones VALUES('',53,'VS','Vukovar-Srijem');
INSERT INTO zones VALUES('',53,'ZK','Zadar-Knin');
INSERT INTO zones VALUES('',53,'ZA','Zagreb');


#Cuba

INSERT INTO zones VALUES('',54,'CA','Camaguey');
INSERT INTO zones VALUES('',54,'CD','Ciego de Avila');
INSERT INTO zones VALUES('',54,'CI','Cienfuegos');
INSERT INTO zones VALUES('',54,'CH','Ciudad de La Habana');
INSERT INTO zones VALUES('',54,'GR','Granma');
INSERT INTO zones VALUES('',54,'GU','Guantanamo');
INSERT INTO zones VALUES('',54,'HO','Holguin');
INSERT INTO zones VALUES('',54,'IJ','Isla de la Juventud');
INSERT INTO zones VALUES('',54,'LH','La Habana');
INSERT INTO zones VALUES('',54,'LT','Las Tunas');
INSERT INTO zones VALUES('',54,'MA','Matanzas');
INSERT INTO zones VALUES('',54,'PR','Pinar del Rio');
INSERT INTO zones VALUES('',54,'SS','Sancti Spiritus');
INSERT INTO zones VALUES('',54,'SC','Santiago de Cuba');
INSERT INTO zones VALUES('',54,'VC','Villa Clara');


#Cyprus

INSERT INTO zones VALUES('',55,'F','Famagusta');
INSERT INTO zones VALUES('',55,'K','Kyrenia');
INSERT INTO zones VALUES('',55,'A','Larnaca');
INSERT INTO zones VALUES('',55,'I','Limassol');
INSERT INTO zones VALUES('',55,'N','Nicosia');
INSERT INTO zones VALUES('',55,'P','Paphos');


#Czech Republic

INSERT INTO zones VALUES('',56,'U','Ustecky');
INSERT INTO zones VALUES('',56,'C','Jihocesky');
INSERT INTO zones VALUES('',56,'B','Jihomoravsky');
INSERT INTO zones VALUES('',56,'K','Karlovarsky');
INSERT INTO zones VALUES('',56,'H','Kralovehradecky');
INSERT INTO zones VALUES('',56,'L','Liberecky');
INSERT INTO zones VALUES('',56,'T','Moravskoslezsky');
INSERT INTO zones VALUES('',56,'M','Olomoucky');
INSERT INTO zones VALUES('',56,'E','Pardubicky');
INSERT INTO zones VALUES('',56,'P','Plzensky');
INSERT INTO zones VALUES('',56,'A','Praha');
INSERT INTO zones VALUES('',56,'S','Stredocesky');
INSERT INTO zones VALUES('',56,'J','Vysocina');
INSERT INTO zones VALUES('',56,'Z','Zlinsky');


#Denmark

INSERT INTO zones VALUES('',57,'AR','Arhus');
INSERT INTO zones VALUES('',57,'BH','Bornholm');
INSERT INTO zones VALUES('',57,'CO','Copenhagen');
INSERT INTO zones VALUES('',57,'FO','Faroe Islands');
INSERT INTO zones VALUES('',57,'FR','Frederiksborg');
INSERT INTO zones VALUES('',57,'FY','Fyn');
INSERT INTO zones VALUES('',57,'KO','Kobenhavn');
INSERT INTO zones VALUES('',57,'NO','Nordjylland');
INSERT INTO zones VALUES('',57,'RI','Ribe');
INSERT INTO zones VALUES('',57,'RK','Ringkobing');
INSERT INTO zones VALUES('',57,'RO','Roskilde');
INSERT INTO zones VALUES('',57,'SO','Sonderjylland');
INSERT INTO zones VALUES('',57,'ST','Storstrom');
INSERT INTO zones VALUES('',57,'VK','Vejle');
INSERT INTO zones VALUES('',57,'VJ','Vestj&aelig;lland');
INSERT INTO zones VALUES('',57,'VB','Viborg');


#Djibouti

INSERT INTO zones VALUES('',58,'S','\'Ali Sabih');
INSERT INTO zones VALUES('',58,'K','Dikhil');
INSERT INTO zones VALUES('',58,'J','Djibouti');
INSERT INTO zones VALUES('',58,'O','Obock');
INSERT INTO zones VALUES('',58,'T','Tadjoura');


#Dominica

INSERT INTO zones VALUES('',59,'AND','Saint Andrew Parish');
INSERT INTO zones VALUES('',59,'DAV','Saint David Parish');
INSERT INTO zones VALUES('',59,'GEO','Saint George Parish');
INSERT INTO zones VALUES('',59,'JOH','Saint John Parish');
INSERT INTO zones VALUES('',59,'JOS','Saint Joseph Parish');
INSERT INTO zones VALUES('',59,'LUK','Saint Luke Parish');
INSERT INTO zones VALUES('',59,'MAR','Saint Mark Parish');
INSERT INTO zones VALUES('',59,'PAT','Saint Patrick Parish');
INSERT INTO zones VALUES('',59,'PAU','Saint Paul Parish');
INSERT INTO zones VALUES('',59,'PET','Saint Peter Parish');


#Dominican Republic

INSERT INTO zones VALUES('',60,'DN','Distrito Nacional');
INSERT INTO zones VALUES('',60,'AZ','Azua');
INSERT INTO zones VALUES('',60,'BC','Baoruco');
INSERT INTO zones VALUES('',60,'BH','Barahona');
INSERT INTO zones VALUES('',60,'DJ','Dajabon');
INSERT INTO zones VALUES('',60,'DU','Duarte');
INSERT INTO zones VALUES('',60,'EL','Elias Pina');
INSERT INTO zones VALUES('',60,'SY','El Seybo');
INSERT INTO zones VALUES('',60,'ET','Espaillat');
INSERT INTO zones VALUES('',60,'HM','Hato Mayor');
INSERT INTO zones VALUES('',60,'IN','Independencia');
INSERT INTO zones VALUES('',60,'AL','La Altagracia');
INSERT INTO zones VALUES('',60,'RO','La Romana');
INSERT INTO zones VALUES('',60,'VE','La Vega');
INSERT INTO zones VALUES('',60,'MT','Maria Trinidad Sanchez');
INSERT INTO zones VALUES('',60,'MN','Monsenor Nouel');
INSERT INTO zones VALUES('',60,'MC','Monte Cristi');
INSERT INTO zones VALUES('',60,'MP','Monte Plata');
INSERT INTO zones VALUES('',60,'PD','Pedernales');
INSERT INTO zones VALUES('',60,'PR','Peravia (Bani)');
INSERT INTO zones VALUES('',60,'PP','Puerto Plata');
INSERT INTO zones VALUES('',60,'SL','Salcedo');
INSERT INTO zones VALUES('',60,'SM','Samana');
INSERT INTO zones VALUES('',60,'SH','Sanchez Ramirez');
INSERT INTO zones VALUES('',60,'SC','San Cristobal');
INSERT INTO zones VALUES('',60,'JO','San Jose de Ocoa');
INSERT INTO zones VALUES('',60,'SJ','San Juan');
INSERT INTO zones VALUES('',60,'PM','San Pedro de Macoris');
INSERT INTO zones VALUES('',60,'SA','Santiago');
INSERT INTO zones VALUES('',60,'ST','Santiago Rodriguez');
INSERT INTO zones VALUES('',60,'SD','Santo Domingo');
INSERT INTO zones VALUES('',60,'VA','Valverde');


#Timor Leste

INSERT INTO zones VALUES('',61,'AL','Aileu');
INSERT INTO zones VALUES('',61,'AN','Ainaro');
INSERT INTO zones VALUES('',61,'BA','Baucau');
INSERT INTO zones VALUES('',61,'BO','Bobonaro');
INSERT INTO zones VALUES('',61,'CO','Cova Lima');
INSERT INTO zones VALUES('',61,'DI','Dili');
INSERT INTO zones VALUES('',61,'ER','Ermera');
INSERT INTO zones VALUES('',61,'LA','Lautem');
INSERT INTO zones VALUES('',61,'LI','Liquica');
INSERT INTO zones VALUES('',61,'MT','Manatuto');
INSERT INTO zones VALUES('',61,'MF','Manufahi');
INSERT INTO zones VALUES('',61,'OE','Oecussi');
INSERT INTO zones VALUES('',61,'VI','Viqueque');


#Ecuador

INSERT INTO zones VALUES('', 62, 'AZU', 'Azuay');
INSERT INTO zones VALUES('', 62, 'BOL', 'Bolivar');
INSERT INTO zones VALUES('', 62, 'CAN', 'Ca&ntilde;ar');
INSERT INTO zones VALUES('', 62, 'CAR', 'Carchi');
INSERT INTO zones VALUES('', 62, 'CHI', 'Chimborazo');
INSERT INTO zones VALUES('', 62, 'COT', 'Cotopaxi');
INSERT INTO zones VALUES('', 62, 'EOR', 'El Oro');
INSERT INTO zones VALUES('', 62, 'ESM', 'Esmeraldas');
INSERT INTO zones VALUES('', 62, 'GPS', 'Gal&aacute;pagos');
INSERT INTO zones VALUES('', 62, 'GUA', 'Guayas');
INSERT INTO zones VALUES('', 62, 'IMB', 'Imbabura');
INSERT INTO zones VALUES('', 62, 'LOJ', 'Loja');
INSERT INTO zones VALUES('', 62, 'LRO', 'Los Ros');
INSERT INTO zones VALUES('', 62, 'MAN', 'Manab&iacute;');
INSERT INTO zones VALUES('', 62, 'MSA', 'Morona Santiago');
INSERT INTO zones VALUES('', 62, 'NAP', 'Napo');
INSERT INTO zones VALUES('', 62, 'ORE', 'Orellana');
INSERT INTO zones VALUES('', 62, 'PAS', 'Pastaza');
INSERT INTO zones VALUES('', 62, 'PIC', 'Pichincha');
INSERT INTO zones VALUES('', 62, 'SUC', 'Sucumb&iacute;os');
INSERT INTO zones VALUES('', 62, 'TUN', 'Tungurahua');
INSERT INTO zones VALUES('', 62, 'ZCH', 'Zamora Chinchipe');


#Egypt

INSERT INTO zones VALUES('',63,'DHY','Ad Daqahliyah');
INSERT INTO zones VALUES('',63,'BAM','Al Bahr al Ahmar');
INSERT INTO zones VALUES('',63,'BHY','Al Buhayrah');
INSERT INTO zones VALUES('',63,'FYM','Al Fayyum');
INSERT INTO zones VALUES('',63,'GBY','Al Gharbiyah');
INSERT INTO zones VALUES('',63,'IDR','Al Iskandariyah');
INSERT INTO zones VALUES('',63,'IML','Al Isma\'iliyah');
INSERT INTO zones VALUES('',63,'JZH','Al Jizah');
INSERT INTO zones VALUES('',63,'MFY','Al Minufiyah');
INSERT INTO zones VALUES('',63,'MNY','Al Minya');
INSERT INTO zones VALUES('',63,'QHR','Al Qahirah');
INSERT INTO zones VALUES('',63,'QLY','Al Qalyubiyah');
INSERT INTO zones VALUES('',63,'WJD','Al Wadi al Jadid');
INSERT INTO zones VALUES('',63,'SHQ','Ash Sharqiyah');
INSERT INTO zones VALUES('',63,'SWY','As Suways');
INSERT INTO zones VALUES('',63,'ASW','Aswan');
INSERT INTO zones VALUES('',63,'ASY','Asyut');
INSERT INTO zones VALUES('',63,'BSW','Bani Suwayf');
INSERT INTO zones VALUES('',63,'BSD','Bur Sa\'id');
INSERT INTO zones VALUES('',63,'DMY','Dumyat');
INSERT INTO zones VALUES('',63,'JNS','Janub Sina\'');
INSERT INTO zones VALUES('',63,'KSH','Kafr ash Shaykh');
INSERT INTO zones VALUES('',63,'MAT','Matruh');
INSERT INTO zones VALUES('',63,'QIN','Qina');
INSERT INTO zones VALUES('',63,'SHS','Shamal Sina\'');
INSERT INTO zones VALUES('',63,'SUH','Suhaj');


#El Salvador

INSERT INTO zones VALUES('',64,'AH','Ahuachapan');
INSERT INTO zones VALUES('',64,'CA','Cabanas');
INSERT INTO zones VALUES('',64,'CH','Chalatenango');
INSERT INTO zones VALUES('',64,'CU','Cuscatlan');
INSERT INTO zones VALUES('',64,'LB','La Libertad');
INSERT INTO zones VALUES('',64,'PZ','La Paz');
INSERT INTO zones VALUES('',64,'UN','La Union');
INSERT INTO zones VALUES('',64,'MO','Morazan');
INSERT INTO zones VALUES('',64,'SM','San Miguel');
INSERT INTO zones VALUES('',64,'SS','San Salvador');
INSERT INTO zones VALUES('',64,'SV','San Vicente');
INSERT INTO zones VALUES('',64,'SA','Santa Ana');
INSERT INTO zones VALUES('',64,'SO','Sonsonate');
INSERT INTO zones VALUES('',64,'US','Usulutan');


#Equatorial Guinea

INSERT INTO zones VALUES('',65,'AN','Provincia Annobon');
INSERT INTO zones VALUES('',65,'BN','Provincia Bioko Norte');
INSERT INTO zones VALUES('',65,'BS','Provincia Bioko Sur');
INSERT INTO zones VALUES('',65,'CS','Provincia Centro Sur');
INSERT INTO zones VALUES('',65,'KN','Provincia Kie-Ntem');
INSERT INTO zones VALUES('',65,'LI','Provincia Litoral');
INSERT INTO zones VALUES('',65,'WN','Provincia Wele-Nzas');


#Eritrea

INSERT INTO zones VALUES('',66,'MA','Central (Maekel)');
INSERT INTO zones VALUES('',66,'KE','Anseba (Keren)');
INSERT INTO zones VALUES('',66,'DK','Southern Red Sea (Debub-Keih-Bahri)');
INSERT INTO zones VALUES('',66,'SK','Northern Red Sea (Semien-Keih-Bahri)');
INSERT INTO zones VALUES('',66,'DE','Southern (Debub)');
INSERT INTO zones VALUES('',66,'BR','Gash-Barka (Barentu)');


#Estonia

INSERT INTO zones VALUES('',67,'HA','Harjumaa (Tallinn)');
INSERT INTO zones VALUES('',67,'HI','Hiiumaa (Kardla)');
INSERT INTO zones VALUES('',67,'IV','Ida-Virumaa (Johvi)');
INSERT INTO zones VALUES('',67,'JA','Jarvamaa (Paide)');
INSERT INTO zones VALUES('',67,'JO','Jogevamaa (Jogeva)');
INSERT INTO zones VALUES('',67,'LV','Laane-Virumaa (Rakvere)');
INSERT INTO zones VALUES('',67,'LA','Laanemaa (Haapsalu)');
INSERT INTO zones VALUES('',67,'PA','Parnumaa (Parnu)');
INSERT INTO zones VALUES('',67,'PO','Polvamaa (Polva)');
INSERT INTO zones VALUES('',67,'RA','Raplamaa (Rapla)');
INSERT INTO zones VALUES('',67,'SA','Saaremaa (Kuessaare)');
INSERT INTO zones VALUES('',67,'TA','Tartumaa (Tartu)');
INSERT INTO zones VALUES('',67,'VA','Valgamaa (Valga)');
INSERT INTO zones VALUES('',67,'VI','Viljandimaa (Viljandi)');
INSERT INTO zones VALUES('',67,'VO','Vorumaa (Voru)');


#Ethiopia

INSERT INTO zones VALUES('',68,'AF','Afar');
INSERT INTO zones VALUES('',68,'AH','Amhara');
INSERT INTO zones VALUES('',68,'BG','Benishangul-Gumaz');
INSERT INTO zones VALUES('',68,'GB','Gambela');
INSERT INTO zones VALUES('',68,'HR','Hariai');
INSERT INTO zones VALUES('',68,'OR','Oromia');
INSERT INTO zones VALUES('',68,'SM','Somali');
INSERT INTO zones VALUES('',68,'SN','Southern Nations - Nationalities and Peoples Region');
INSERT INTO zones VALUES('',68,'TG','Tigray');
INSERT INTO zones VALUES('',68,'AA','Addis Ababa');
INSERT INTO zones VALUES('',68,'DD','Dire Dawa');


#Fiji

INSERT INTO zones VALUES('',71,'C','Central Division');
INSERT INTO zones VALUES('',71,'N','Northern Division');
INSERT INTO zones VALUES('',71,'E','Eastern Division');
INSERT INTO zones VALUES('',71,'W','Western Division');
INSERT INTO zones VALUES('',71,'R','Rotuma');


#Finland

INSERT INTO zones VALUES('',72,'AL','Ahvenanmaan Laani');
INSERT INTO zones VALUES('',72,'ES','Etela-Suomen Laani');
INSERT INTO zones VALUES('',72,'IS','Ita-Suomen Laani');
INSERT INTO zones VALUES('',72,'LS','Lansi-Suomen Laani');
INSERT INTO zones VALUES('',72,'LA','Lapin Lanani');
INSERT INTO zones VALUES('',72,'OU','Oulun Laani');


#France

INSERT INTO zones VALUES('',73,'AL','Alsace');
INSERT INTO zones VALUES('',73,'AQ','Aquitaine');
INSERT INTO zones VALUES('',73,'AU','Auvergne');
INSERT INTO zones VALUES('',73,'BR','Brittany');
INSERT INTO zones VALUES('',73,'BU','Burgundy');
INSERT INTO zones VALUES('',73,'CE','Center Loire Valley');
INSERT INTO zones VALUES('',73,'CH','Champagne');
INSERT INTO zones VALUES('',73,'CO','Corse');
INSERT INTO zones VALUES('',73,'FR','France Comte');
INSERT INTO zones VALUES('',73,'LA','Languedoc Roussillon');
INSERT INTO zones VALUES('',73,'LI','Limousin');
INSERT INTO zones VALUES('',73,'LO','Lorraine');
INSERT INTO zones VALUES('',73,'MI','Midi Pyrenees');
INSERT INTO zones VALUES('',73,'NO','Nord Pas de Calais');
INSERT INTO zones VALUES('',73,'NR','Normandy');
INSERT INTO zones VALUES('',73,'PA','Paris / Ill de France');
INSERT INTO zones VALUES('',73,'PI','Picardie');
INSERT INTO zones VALUES('',73,'PO','Poitou Charente');
INSERT INTO zones VALUES('',73,'PR','Provence');
INSERT INTO zones VALUES('',73,'RH','Rhone Alps');
INSERT INTO zones VALUES('',73,'RI','Riviera');
INSERT INTO zones VALUES('',73,'WE','Western Loire Valley');


#France, Metropolitan

INSERT INTO zones VALUES('',74,'Et','Etranger');
INSERT INTO zones VALUES('',74,'01','Ain');
INSERT INTO zones VALUES('',74,'02','Aisne');
INSERT INTO zones VALUES('',74,'03','Allier');
INSERT INTO zones VALUES('',74,'04','Alpes de Haute Provence');
INSERT INTO zones VALUES('',74,'05','Hautes-Alpes');
INSERT INTO zones VALUES('',74,'06','Alpes Maritimes');
INSERT INTO zones VALUES('',74,'07','Ard&egrave;che');
INSERT INTO zones VALUES('',74,'08','Ardennes');
INSERT INTO zones VALUES('',74,'09','Ari&egrave;ge');
INSERT INTO zones VALUES('',74,'10','Aube');
INSERT INTO zones VALUES('',74,'11','Aude');
INSERT INTO zones VALUES('',74,'12','Aveyron');
INSERT INTO zones VALUES('',74,'13','Bouches du Rh&ocirc;ne');
INSERT INTO zones VALUES('',74,'14','Calvados');
INSERT INTO zones VALUES('',74,'15','Cantal');
INSERT INTO zones VALUES('',74,'16','Charente');
INSERT INTO zones VALUES('',74,'17','Charente Maritime');
INSERT INTO zones VALUES('',74,'18','Cher');
INSERT INTO zones VALUES('',74,'19','Corr&egrave;ze');
INSERT INTO zones VALUES('',74,'2A','Corse du Sud');
INSERT INTO zones VALUES('',74,'2B','Haute Corse');
INSERT INTO zones VALUES('',74,'21','C&ocirc;te d\'or');
INSERT INTO zones VALUES('',74,'22','C&ocirc;tes d\'Armor');
INSERT INTO zones VALUES('',74,'23','Creuse');
INSERT INTO zones VALUES('',74,'24','Dordogne');
INSERT INTO zones VALUES('',74,'25','Doubs');
INSERT INTO zones VALUES('',74,'26','Dr&ocirc;me');
INSERT INTO zones VALUES('',74,'27','Eure');
INSERT INTO zones VALUES('',74,'28','Eure et Loir');
INSERT INTO zones VALUES('',74,'29','Finist&egrave;re');
INSERT INTO zones VALUES('',74,'30','Gard');
INSERT INTO zones VALUES('',74,'31','Haute Garonne');
INSERT INTO zones VALUES('',74,'32','Gers');
INSERT INTO zones VALUES('',74,'33','Gironde');
INSERT INTO zones VALUES('',74,'34','H&eacute;rault');
INSERT INTO zones VALUES('',74,'35','Ille et Vilaine');
INSERT INTO zones VALUES('',74,'36','Indre');
INSERT INTO zones VALUES('',74,'37','Indre et Loire');
INSERT INTO zones VALUES('',74,'38','Is&eacute;re');
INSERT INTO zones VALUES('',74,'39','Jura');
INSERT INTO zones VALUES('',74,'40','Landes');
INSERT INTO zones VALUES('',74,'41','Loir et Cher');
INSERT INTO zones VALUES('',74,'42','Loire');
INSERT INTO zones VALUES('',74,'43','Haute Loire');
INSERT INTO zones VALUES('',74,'44','Loire Atlantique');
INSERT INTO zones VALUES('',74,'45','Loiret');
INSERT INTO zones VALUES('',74,'46','Lot');
INSERT INTO zones VALUES('',74,'47','Lot et Garonne');
INSERT INTO zones VALUES('',74,'48','Loz&egrave;re');
INSERT INTO zones VALUES('',74,'49','Maine et Loire');
INSERT INTO zones VALUES('',74,'50','Manche');
INSERT INTO zones VALUES('',74,'51','Marne');
INSERT INTO zones VALUES('',74,'52','Haute Marne');
INSERT INTO zones VALUES('',74,'53','Mayenne');
INSERT INTO zones VALUES('',74,'54','Meurthe et Moselle');
INSERT INTO zones VALUES('',74,'55','Meuse');
INSERT INTO zones VALUES('',74,'56','Morbihan');
INSERT INTO zones VALUES('',74,'57','Moselle');
INSERT INTO zones VALUES('',74,'58','Ni&egrave;vre');
INSERT INTO zones VALUES('',74,'59','Nord');
INSERT INTO zones VALUES('',74,'60','Oise');
INSERT INTO zones VALUES('',74,'61','Orne');
INSERT INTO zones VALUES('',74,'62','Pas de Calais');
INSERT INTO zones VALUES('',74,'63','Puy de D&ocirc;me');
INSERT INTO zones VALUES('',74,'64','Pyr&eacute;n&eacute;es Atlantiques');
INSERT INTO zones VALUES('',74,'65','Hautes Pyr&eacute;n&eacute;es');
INSERT INTO zones VALUES('',74,'66','Pyr&eacute;n&eacute;es Orientales');
INSERT INTO zones VALUES('',74,'67','Bas Rhin');
INSERT INTO zones VALUES('',74,'68','Haut Rhin');
INSERT INTO zones VALUES('',74,'69','Rh&ocirc;ne');
INSERT INTO zones VALUES('',74,'70','Haute Sa&ocirc;ne');
INSERT INTO zones VALUES('',74,'71','Sa&ocirc;ne et Loire');
INSERT INTO zones VALUES('',74,'72','Sarthe');
INSERT INTO zones VALUES('',74,'73','Savoie');
INSERT INTO zones VALUES('',74,'74','Haute Savoie');
INSERT INTO zones VALUES('',74,'75','Paris');
INSERT INTO zones VALUES('',74,'76','Seine Maritime');
INSERT INTO zones VALUES('',74,'77','Seine et Marne');
INSERT INTO zones VALUES('',74,'78','Yvelines');
INSERT INTO zones VALUES('',74,'79','Deux S&egrave;vres');
INSERT INTO zones VALUES('',74,'80','Somme');
INSERT INTO zones VALUES('',74,'81','Tarn');
INSERT INTO zones VALUES('',74,'82','Tarn et Garonne');
INSERT INTO zones VALUES('',74,'83','Var');
INSERT INTO zones VALUES('',74,'84','Vaucluse');
INSERT INTO zones VALUES('',74,'85','Vend&eacute;e');
INSERT INTO zones VALUES('',74,'86','Vienne');
INSERT INTO zones VALUES('',74,'87','Haute Vienne');
INSERT INTO zones VALUES('',74,'88','Vosges');
INSERT INTO zones VALUES('',74,'89','Yonne');
INSERT INTO zones VALUES('',74,'90','Territoire de Belfort');
INSERT INTO zones VALUES('',74,'91','Essonne');
INSERT INTO zones VALUES('',74,'92','Hauts de Seine');
INSERT INTO zones VALUES('',74,'93','Seine St-Denis');
INSERT INTO zones VALUES('',74,'94','Val de Marne');
INSERT INTO zones VALUES('',74,'95','Val d\'Oise');


#French Polynesia

INSERT INTO zones VALUES('',76,'M','Archipel des Marquises');
INSERT INTO zones VALUES('',76,'T','Archipel des Tuamotu');
INSERT INTO zones VALUES('',76,'I','Archipel des Tubuai');
INSERT INTO zones VALUES('',76,'V','Iles du Vent');
INSERT INTO zones VALUES('',76,'S','Iles Sous-le-Vent ');


#French Southern Territories

INSERT INTO zones VALUES('',77,'C','Iles Crozet');
INSERT INTO zones VALUES('',77,'K','Iles Kerguelen');
INSERT INTO zones VALUES('',77,'A','Ile Amsterdam');
INSERT INTO zones VALUES('',77,'P','Ile Saint-Paul');
INSERT INTO zones VALUES('',77,'D','Adelie Land');


#Gabon

INSERT INTO zones VALUES('',78,'ES','Estuaire');
INSERT INTO zones VALUES('',78,'HO','Haut-Ogooue');
INSERT INTO zones VALUES('',78,'MO','Moyen-Ogooue');
INSERT INTO zones VALUES('',78,'NG','Ngounie');
INSERT INTO zones VALUES('',78,'NY','Nyanga');
INSERT INTO zones VALUES('',78,'OI','Ogooue-Ivindo');
INSERT INTO zones VALUES('',78,'OL','Ogooue-Lolo');
INSERT INTO zones VALUES('',78,'OM','Ogooue-Maritime');
INSERT INTO zones VALUES('',78,'WN','Woleu-Ntem');


#Gambia

INSERT INTO zones VALUES('',79,'BJ','Banjul');
INSERT INTO zones VALUES('',79,'BS','Basse');
INSERT INTO zones VALUES('',79,'BR','Brikama');
INSERT INTO zones VALUES('',79,'JA','Janjangbure');
INSERT INTO zones VALUES('',79,'KA','Kanifeng');
INSERT INTO zones VALUES('',79,'KE','Kerewan');
INSERT INTO zones VALUES('',79,'KU','Kuntaur');
INSERT INTO zones VALUES('',79,'MA','Mansakonko');
INSERT INTO zones VALUES('',79,'LR','Lower River');
INSERT INTO zones VALUES('',79,'CR','Central River');
INSERT INTO zones VALUES('',79,'NB','North Bank');
INSERT INTO zones VALUES('',79,'UR','Upper River');
INSERT INTO zones VALUES('',79,'WE','Western');


#Georgia

INSERT INTO zones VALUES('',80,'AB','Abkhazia');
INSERT INTO zones VALUES('',80,'AJ','Ajaria');
INSERT INTO zones VALUES('',80,'TB','Tbilisi');
INSERT INTO zones VALUES('',80,'GU','Guria');
INSERT INTO zones VALUES('',80,'IM','Imereti');
INSERT INTO zones VALUES('',80,'KA','Kakheti');
INSERT INTO zones VALUES('',80,'KK','Kvemo Kartli');
INSERT INTO zones VALUES('',80,'MM','Mtskheta-Mtianeti');
INSERT INTO zones VALUES('',80,'RL','Racha Lechkhumi and Kvemo Svaneti');
INSERT INTO zones VALUES('',80,'SZ','Samegrelo-Zemo Svaneti');
INSERT INTO zones VALUES('',80,'SJ','Samtskhe-Javakheti');
INSERT INTO zones VALUES('',80,'SK','Shida Kartli');


#Germany

INSERT INTO zones VALUES('',81,'BAW','Baden-W&uuml;rttemberg');
INSERT INTO zones VALUES('',81,'BAY','Bayern');
INSERT INTO zones VALUES('',81,'BER','Berlin');
INSERT INTO zones VALUES('',81,'BRG','Brandenburg');
INSERT INTO zones VALUES('',81,'BRE','Bremen');
INSERT INTO zones VALUES('',81,'HAM','Hamburg');
INSERT INTO zones VALUES('',81,'HES','Hessen');
INSERT INTO zones VALUES('',81,'MEC','Mecklenburg-Vorpommern');
INSERT INTO zones VALUES('',81,'NDS','Niedersachsen');
INSERT INTO zones VALUES('',81,'NRW','Nordrhein-Westfalen');
INSERT INTO zones VALUES('',81,'RHE','Rheinland-Pfalz');
INSERT INTO zones VALUES('',81,'SAR','Saarland');
INSERT INTO zones VALUES('',81,'SAS','Sachsen');
INSERT INTO zones VALUES('',81,'SAC','Sachsen-Anhalt');
INSERT INTO zones VALUES('',81,'SCN','Schleswig-Holstein');
INSERT INTO zones VALUES('',81,'THE','Th&uuml;ringen');


#Ghana

INSERT INTO zones VALUES('',82,'AS','Ashanti Region');
INSERT INTO zones VALUES('',82,'BA','Brong-Ahafo Region');
INSERT INTO zones VALUES('',82,'CE','Central Region');
INSERT INTO zones VALUES('',82,'EA','Eastern Region');
INSERT INTO zones VALUES('',82,'GA','Greater Accra Region');
INSERT INTO zones VALUES('',82,'NO','Northern Region');
INSERT INTO zones VALUES('',82,'UE','Upper East Region');
INSERT INTO zones VALUES('',82,'UW','Upper West Region');
INSERT INTO zones VALUES('',82,'VO','Volta Region');
INSERT INTO zones VALUES('',82,'WE','Western Region');


#Greece

INSERT INTO zones VALUES('',84,'AT','Attica');
INSERT INTO zones VALUES('',84,'CN','Central Greece');
INSERT INTO zones VALUES('',84,'CM','Central Macedonia');
INSERT INTO zones VALUES('',84,'CR','Crete');
INSERT INTO zones VALUES('',84,'EM','East Macedonia and Thrace');
INSERT INTO zones VALUES('',84,'EP','Epirus');
INSERT INTO zones VALUES('',84,'II','Ionian Islands');
INSERT INTO zones VALUES('',84,'NA','North Aegean');
INSERT INTO zones VALUES('',84,'PP','Peloponnesos');
INSERT INTO zones VALUES('',84,'SA','South Aegean');
INSERT INTO zones VALUES('',84,'TH','Thessaly');
INSERT INTO zones VALUES('',84,'WG','West Greece');
INSERT INTO zones VALUES('',84,'WM','West Macedonia');


#Greenland

INSERT INTO zones VALUES('',85,'A','Avannaa');
INSERT INTO zones VALUES('',85,'T','Tunu ');
INSERT INTO zones VALUES('',85,'K','Kitaa');


#Grenada

INSERT INTO zones VALUES('',86,'A','Saint Andrew');
INSERT INTO zones VALUES('',86,'D','Saint David');
INSERT INTO zones VALUES('',86,'G','Saint George');
INSERT INTO zones VALUES('',86,'J','Saint John');
INSERT INTO zones VALUES('',86,'M','Saint Mark');
INSERT INTO zones VALUES('',86,'P','Saint Patrick');
INSERT INTO zones VALUES('',86,'C','Carriacou');
INSERT INTO zones VALUES('',86,'Q','Petit Martinique');


#Guatemala

INSERT INTO zones VALUES('',89,'AV','Alta Verapaz');
INSERT INTO zones VALUES('',89,'BV','Baja Verapaz');
INSERT INTO zones VALUES('',89,'CM','Chimaltenango');
INSERT INTO zones VALUES('',89,'CQ','Chiquimula');
INSERT INTO zones VALUES('',89,'PE','El Peten');
INSERT INTO zones VALUES('',89,'PR','El Progreso');
INSERT INTO zones VALUES('',89,'QC','El Quiche');
INSERT INTO zones VALUES('',89,'ES','Escuintla');
INSERT INTO zones VALUES('',89,'GU','Guatemala');
INSERT INTO zones VALUES('',89,'HU','Huehuetenango');
INSERT INTO zones VALUES('',89,'IZ','Izabal');
INSERT INTO zones VALUES('',89,'JA','Jalapa');
INSERT INTO zones VALUES('',89,'JU','Jutiapa');
INSERT INTO zones VALUES('',89,'QZ','Quetzaltenango');
INSERT INTO zones VALUES('',89,'RE','Retalhuleu');
INSERT INTO zones VALUES('',89,'ST','Sacatepequez');
INSERT INTO zones VALUES('',89,'SM','San Marcos');
INSERT INTO zones VALUES('',89,'SR','Santa Rosa');
INSERT INTO zones VALUES('',89,'SO','Solola');
INSERT INTO zones VALUES('',89,'SU','Suchitepequez');
INSERT INTO zones VALUES('',89,'TO','Totonicapan');
INSERT INTO zones VALUES('',89,'ZA','Zacapa');


#Guinea

INSERT INTO zones VALUES('',90,'CNK','Conakry');
INSERT INTO zones VALUES('',90,'BYL','Beyla');
INSERT INTO zones VALUES('',90,'BFA','Boffa');
INSERT INTO zones VALUES('',90,'BOK','Boke');
INSERT INTO zones VALUES('',90,'COY','Coyah');
INSERT INTO zones VALUES('',90,'DBL','Dabola');
INSERT INTO zones VALUES('',90,'DLB','Dalaba');
INSERT INTO zones VALUES('',90,'DGR','Dinguiraye');
INSERT INTO zones VALUES('',90,'DBR','Dubreka');
INSERT INTO zones VALUES('',90,'FRN','Faranah');
INSERT INTO zones VALUES('',90,'FRC','Forecariah');
INSERT INTO zones VALUES('',90,'FRI','Fria');
INSERT INTO zones VALUES('',90,'GAO','Gaoual');
INSERT INTO zones VALUES('',90,'GCD','Gueckedou');
INSERT INTO zones VALUES('',90,'KNK','Kankan');
INSERT INTO zones VALUES('',90,'KRN','Kerouane');
INSERT INTO zones VALUES('',90,'KND','Kindia');
INSERT INTO zones VALUES('',90,'KSD','Kissidougou');
INSERT INTO zones VALUES('',90,'KBA','Koubia');
INSERT INTO zones VALUES('',90,'KDA','Koundara');
INSERT INTO zones VALUES('',90,'KRA','Kouroussa');
INSERT INTO zones VALUES('',90,'LAB','Labe');
INSERT INTO zones VALUES('',90,'LLM','Lelouma');
INSERT INTO zones VALUES('',90,'LOL','Lola');
INSERT INTO zones VALUES('',90,'MCT','Macenta');
INSERT INTO zones VALUES('',90,'MAL','Mali');
INSERT INTO zones VALUES('',90,'MAM','Mamou');
INSERT INTO zones VALUES('',90,'MAN','Mandiana');
INSERT INTO zones VALUES('',90,'NZR','Nzerekore');
INSERT INTO zones VALUES('',90,'PIT','Pita');
INSERT INTO zones VALUES('',90,'SIG','Siguiri');
INSERT INTO zones VALUES('',90,'TLM','Telimele');
INSERT INTO zones VALUES('',90,'TOG','Tougue');
INSERT INTO zones VALUES('',90,'YOM','Yomou');


#Guam



#Guinea-Bissau

INSERT INTO zones VALUES('',91,'BF','Bafata Region');
INSERT INTO zones VALUES('',91,'BB','Biombo Region');
INSERT INTO zones VALUES('',91,'BS','Bissau Region');
INSERT INTO zones VALUES('',91,'BL','Bolama Region');
INSERT INTO zones VALUES('',91,'CA','Cacheu Region');
INSERT INTO zones VALUES('',91,'GA','Gabu Region');
INSERT INTO zones VALUES('',91,'OI','Oio Region');
INSERT INTO zones VALUES('',91,'QU','Quinara Region');
INSERT INTO zones VALUES('',91,'TO','Tombali Region');


#Guyana

INSERT INTO zones VALUES('',92,'BW','Barima-Waini');
INSERT INTO zones VALUES('',92,'CM','Cuyuni-Mazaruni');
INSERT INTO zones VALUES('',92,'DM','Demerara-Mahaica');
INSERT INTO zones VALUES('',92,'EC','East Berbice-Corentyne');
INSERT INTO zones VALUES('',92,'EW','Essequibo Islands-West Demerara');
INSERT INTO zones VALUES('',92,'MB','Mahaica-Berbice');
INSERT INTO zones VALUES('',92,'PM','Pomeroon-Supenaam');
INSERT INTO zones VALUES('',92,'PI','Potaro-Siparuni');
INSERT INTO zones VALUES('',92,'UD','Upper Demerara-Berbice');
INSERT INTO zones VALUES('',92,'UT','Upper Takutu-Upper Essequibo');


#Haiti

INSERT INTO zones VALUES('',93,'AR','Artibonite');
INSERT INTO zones VALUES('',93,'CE','Centre');
INSERT INTO zones VALUES('',93,'GA','Grand\'Anse');
INSERT INTO zones VALUES('',93,'ND','Nord');
INSERT INTO zones VALUES('',93,'NE','Nord-Est');
INSERT INTO zones VALUES('',93,'NO','Nord-Ouest');
INSERT INTO zones VALUES('',93,'OU','Ouest');
INSERT INTO zones VALUES('',93,'SD','Sud');
INSERT INTO zones VALUES('',93,'SE','Sud-Est');


#Heard Island and McDonald Islands

INSERT INTO zones VALUES('',94,'F','Flat Island');
INSERT INTO zones VALUES('',94,'M','McDonald Island');
INSERT INTO zones VALUES('',94,'S','Shag Island');
INSERT INTO zones VALUES('',94,'H','Heard Island');


#Honduras

INSERT INTO zones VALUES('',95,'AT','Atlantida');
INSERT INTO zones VALUES('',95,'CH','Choluteca');
INSERT INTO zones VALUES('',95,'CL','Colon');
INSERT INTO zones VALUES('',95,'CM','Comayagua');
INSERT INTO zones VALUES('',95,'CP','Copan');
INSERT INTO zones VALUES('',95,'CR','Cortes');
INSERT INTO zones VALUES('',95,'PA','El Paraiso');
INSERT INTO zones VALUES('',95,'FM','Francisco Morazan');
INSERT INTO zones VALUES('',95,'GD','Gracias a Dios');
INSERT INTO zones VALUES('',95,'IN','Intibuca');
INSERT INTO zones VALUES('',95,'IB','Islas de la Bahia (Bay Islands)');
INSERT INTO zones VALUES('',95,'PZ','La Paz');
INSERT INTO zones VALUES('',95,'LE','Lempira');
INSERT INTO zones VALUES('',95,'OC','Ocotepeque');
INSERT INTO zones VALUES('',95,'OL','Olancho');
INSERT INTO zones VALUES('',95,'SB','Santa Barbara');
INSERT INTO zones VALUES('',95,'VA','Valle');
INSERT INTO zones VALUES('',95,'YO','Yoro');


#Hong Kong

INSERT INTO zones VALUES('',96,'HCW','Central and Western Hong Kong Island');
INSERT INTO zones VALUES('',96,'HEA','Eastern Hong Kong Island');
INSERT INTO zones VALUES('',96,'HSO','Southern Hong Kong Island');
INSERT INTO zones VALUES('',96,'HWC','Wan Chai Hong Kong Island');
INSERT INTO zones VALUES('',96,'KKC','Kowloon City Kowloon');
INSERT INTO zones VALUES('',96,'KKT','Kwun Tong Kowloon');
INSERT INTO zones VALUES('',96,'KSS','Sham Shui Po Kowloon');
INSERT INTO zones VALUES('',96,'KWT','Wong Tai Sin Kowloon');
INSERT INTO zones VALUES('',96,'KYT','Yau Tsim Mong Kowloon');
INSERT INTO zones VALUES('',96,'NIS','Islands New Territories');
INSERT INTO zones VALUES('',96,'NKT','Kwai Tsing New Territories');
INSERT INTO zones VALUES('',96,'NNO','North New Territories');
INSERT INTO zones VALUES('',96,'NSK','Sai Kung New Territories');
INSERT INTO zones VALUES('',96,'NST','Sha Tin New Territories');
INSERT INTO zones VALUES('',96,'NTP','Tai Po New Territories');
INSERT INTO zones VALUES('',96,'NTW','Tsuen Wan New Territories');
INSERT INTO zones VALUES('',96,'NTM','Tuen Mun New Territories');
INSERT INTO zones VALUES('',96,'NYL','Yuen Long New Territories');


#Hungary

INSERT INTO zones VALUES('',97,'BK','Bacs-Kiskun');
INSERT INTO zones VALUES('',97,'BA','Baranya');
INSERT INTO zones VALUES('',97,'BE','Bekes');
INSERT INTO zones VALUES('',97,'BS','Bekescsaba');
INSERT INTO zones VALUES('',97,'BZ','Borsod-Abauj-Zemplen');
INSERT INTO zones VALUES('',97,'BU','Budapest');
INSERT INTO zones VALUES('',97,'CS','Csongrad');
INSERT INTO zones VALUES('',97,'DE','Debrecen');
INSERT INTO zones VALUES('',97,'DU','Dunaujvaros');
INSERT INTO zones VALUES('',97,'EG','Eger');
INSERT INTO zones VALUES('',97,'FE','Fejer');
INSERT INTO zones VALUES('',97,'GY','Gyor');
INSERT INTO zones VALUES('',97,'GM','Gyor-Moson-Sopron');
INSERT INTO zones VALUES('',97,'HB','Hajdu-Bihar');
INSERT INTO zones VALUES('',97,'HE','Heves');
INSERT INTO zones VALUES('',97,'HO','Hodmezovasarhely');
INSERT INTO zones VALUES('',97,'JN','Jasz-Nagykun-Szolnok');
INSERT INTO zones VALUES('',97,'KA','Kaposvar');
INSERT INTO zones VALUES('',97,'KE','Kecskemet');
INSERT INTO zones VALUES('',97,'KO','Komarom-Esztergom');
INSERT INTO zones VALUES('',97,'MI','Miskolc');
INSERT INTO zones VALUES('',97,'NA','Nagykanizsa');
INSERT INTO zones VALUES('',97,'NO','Nograd');
INSERT INTO zones VALUES('',97,'NY','Nyiregyhaza');
INSERT INTO zones VALUES('',97,'PE','Pecs');
INSERT INTO zones VALUES('',97,'PS','Pest');
INSERT INTO zones VALUES('',97,'SO','Somogy');
INSERT INTO zones VALUES('',97,'SP','Sopron');
INSERT INTO zones VALUES('',97,'SS','Szabolcs-Szatmar-Bereg');
INSERT INTO zones VALUES('',97,'SZ','Szeged');
INSERT INTO zones VALUES('',97,'SE','Szekesfehervar');
INSERT INTO zones VALUES('',97,'SL','Szolnok');
INSERT INTO zones VALUES('',97,'SM','Szombathely');
INSERT INTO zones VALUES('',97,'TA','Tatabanya');
INSERT INTO zones VALUES('',97,'TO','Tolna');
INSERT INTO zones VALUES('',97,'VA','Vas');
INSERT INTO zones VALUES('',97,'VE','Veszprem');
INSERT INTO zones VALUES('',97,'ZA','Zala');
INSERT INTO zones VALUES('',97,'ZZ','Zalaegerszeg');


#Iceland

INSERT INTO zones VALUES('',98,'AL','Austurland');
INSERT INTO zones VALUES('',98,'HF','Hofuoborgarsvaeoi');
INSERT INTO zones VALUES('',98,'NE','Norourland eystra');
INSERT INTO zones VALUES('',98,'NV','Norourland vestra');
INSERT INTO zones VALUES('',98,'SL','Suourland');
INSERT INTO zones VALUES('',98,'SN','Suournes');
INSERT INTO zones VALUES('',98,'VF','Vestfiroir');
INSERT INTO zones VALUES('',98,'VL','Vesturland');


#India

INSERT INTO zones VALUES('',99,'AN','Andaman and Nicobar Islands');
INSERT INTO zones VALUES('',99,'AP','Andhra Pradesh');
INSERT INTO zones VALUES('',99,'AR','Arunachal Pradesh');
INSERT INTO zones VALUES('',99,'AS','Assam');
INSERT INTO zones VALUES('',99,'BI','Bihar');
INSERT INTO zones VALUES('',99,'CH','Chandigarh');
INSERT INTO zones VALUES('',99,'DA','Dadra and Nagar Haveli');
INSERT INTO zones VALUES('',99,'DM','Daman and Diu');
INSERT INTO zones VALUES('',99,'DE','Delhi');
INSERT INTO zones VALUES('',99,'GO','Goa');
INSERT INTO zones VALUES('',99,'GU','Gujarat');
INSERT INTO zones VALUES('',99,'HA','Haryana');
INSERT INTO zones VALUES('',99,'HP','Himachal Pradesh');
INSERT INTO zones VALUES('',99,'JA','Jammu and Kashmir');
INSERT INTO zones VALUES('',99,'KA','Karnataka');
INSERT INTO zones VALUES('',99,'KE','Kerala');
INSERT INTO zones VALUES('',99,'LI','Lakshadweep Islands');
INSERT INTO zones VALUES('',99,'MP','Madhya Pradesh');
INSERT INTO zones VALUES('',99,'MA','Maharashtra');
INSERT INTO zones VALUES('',99,'MN','Manipur');
INSERT INTO zones VALUES('',99,'ME','Meghalaya');
INSERT INTO zones VALUES('',99,'MI','Mizoram');
INSERT INTO zones VALUES('',99,'NA','Nagaland');
INSERT INTO zones VALUES('',99,'OR','Orissa');
INSERT INTO zones VALUES('',99,'PO','Pondicherry');
INSERT INTO zones VALUES('',99,'PU','Punjab');
INSERT INTO zones VALUES('',99,'RA','Rajasthan');
INSERT INTO zones VALUES('',99,'SI','Sikkim');
INSERT INTO zones VALUES('',99,'TN','Tamil Nadu');
INSERT INTO zones VALUES('',99,'TR','Tripura');
INSERT INTO zones VALUES('',99,'UP','Uttar Pradesh');
INSERT INTO zones VALUES('',99,'WB','West Bengal');


#Indonesia

INSERT INTO zones VALUES('',100,'AC','Aceh');
INSERT INTO zones VALUES('',100,'BA','Bali');
INSERT INTO zones VALUES('',100,'BT','Banten');
INSERT INTO zones VALUES('',100,'BE','Bengkulu');
INSERT INTO zones VALUES('',100,'BD','BoDeTaBek');
INSERT INTO zones VALUES('',100,'GO','Gorontalo');
INSERT INTO zones VALUES('',100,'JK','Jakarta Raya');
INSERT INTO zones VALUES('',100,'JA','Jambi');
INSERT INTO zones VALUES('',100,'JB','Jawa Barat');
INSERT INTO zones VALUES('',100,'JT','Jawa Tengah');
INSERT INTO zones VALUES('',100,'JI','Jawa Timur');
INSERT INTO zones VALUES('',100,'KB','Kalimantan Barat');
INSERT INTO zones VALUES('',100,'KS','Kalimantan Selatan');
INSERT INTO zones VALUES('',100,'KT','Kalimantan Tengah');
INSERT INTO zones VALUES('',100,'KI','Kalimantan Timur');
INSERT INTO zones VALUES('',100,'BB','Kepulauan Bangka Belitung');
INSERT INTO zones VALUES('',100,'LA','Lampung');
INSERT INTO zones VALUES('',100,'MA','Maluku');
INSERT INTO zones VALUES('',100,'MU','Maluku Utara');
INSERT INTO zones VALUES('',100,'NB','Nusa Tenggara Barat');
INSERT INTO zones VALUES('',100,'NT','Nusa Tenggara Timur');
INSERT INTO zones VALUES('',100,'PA','Papua');
INSERT INTO zones VALUES('',100,'RI','Riau');
INSERT INTO zones VALUES('',100,'SN','Sulawesi Selatan');
INSERT INTO zones VALUES('',100,'ST','Sulawesi Tengah');
INSERT INTO zones VALUES('',100,'SG','Sulawesi Tenggara');
INSERT INTO zones VALUES('',100,'SA','Sulawesi Utara');
INSERT INTO zones VALUES('',100,'SB','Sumatera Barat');
INSERT INTO zones VALUES('',100,'SS','Sumatera Selatan');
INSERT INTO zones VALUES('',100,'SU','Sumatera Utara');
INSERT INTO zones VALUES('',100,'YO','Yogyakarta');


#Iran Islamic Republic Of

INSERT INTO zones VALUES('',101,'TEH','Tehran');
INSERT INTO zones VALUES('',101,'QOM','Qom');
INSERT INTO zones VALUES('',101,'MKZ','Markazi');
INSERT INTO zones VALUES('',101,'QAZ','Qazvin');
INSERT INTO zones VALUES('',101,'GIL','Gilan');
INSERT INTO zones VALUES('',101,'ARD','Ardabil');
INSERT INTO zones VALUES('',101,'ZAN','Zanjan');
INSERT INTO zones VALUES('',101,'EAZ','East Azarbaijan');
INSERT INTO zones VALUES('',101,'WEZ','West Azarbaijan');
INSERT INTO zones VALUES('',101,'KRD','Kurdistan');
INSERT INTO zones VALUES('',101,'HMD','Hamadan');
INSERT INTO zones VALUES('',101,'KRM','Kermanshah');
INSERT INTO zones VALUES('',101,'ILM','Ilam');
INSERT INTO zones VALUES('',101,'LRS','Lorestan');
INSERT INTO zones VALUES('',101,'KZT','Khuzestan');
INSERT INTO zones VALUES('',101,'CMB','Chahar Mahaal and Bakhtiari');
INSERT INTO zones VALUES('',101,'KBA','Kohkiluyeh and Buyer Ahmad');
INSERT INTO zones VALUES('',101,'BSH','Bushehr');
INSERT INTO zones VALUES('',101,'FAR','Fars');
INSERT INTO zones VALUES('',101,'HRM','Hormozgan');
INSERT INTO zones VALUES('',101,'SBL','Sistan and Baluchistan');
INSERT INTO zones VALUES('',101,'KRB','Kerman');
INSERT INTO zones VALUES('',101,'YZD','Yazd');
INSERT INTO zones VALUES('',101,'EFH','Esfahan');
INSERT INTO zones VALUES('',101,'SMN','Semnan');
INSERT INTO zones VALUES('',101,'MZD','Mazandaran');
INSERT INTO zones VALUES('',101,'GLS','Golestan');
INSERT INTO zones VALUES('',101,'NKH','North Khorasan');
INSERT INTO zones VALUES('',101,'RKH','Razavi Khorasan');
INSERT INTO zones VALUES('',101,'SKH','South Khorasan');


#Iraq

INSERT INTO zones VALUES('',102,'BD','Baghdad');
INSERT INTO zones VALUES('',102,'SD','Salah ad Din');
INSERT INTO zones VALUES('',102,'DY','Diyala');
INSERT INTO zones VALUES('',102,'WS','Wasit');
INSERT INTO zones VALUES('',102,'MY','Maysan');
INSERT INTO zones VALUES('',102,'BA','Al Basrah');
INSERT INTO zones VALUES('',102,'DQ','Dhi Qar');
INSERT INTO zones VALUES('',102,'MU','Al Muthanna');
INSERT INTO zones VALUES('',102,'QA','Al Qadisyah');
INSERT INTO zones VALUES('',102,'BB','Babil');
INSERT INTO zones VALUES('',102,'KB','Al Karbala');
INSERT INTO zones VALUES('',102,'NJ','An Najaf');
INSERT INTO zones VALUES('',102,'AB','Al Anbar');
INSERT INTO zones VALUES('',102,'NN','Ninawa');
INSERT INTO zones VALUES('',102,'DH','Dahuk');
INSERT INTO zones VALUES('',102,'AL','Arbil');
INSERT INTO zones VALUES('',102,'TM','At Ta\'mim');
INSERT INTO zones VALUES('',102,'SL','As Sulaymaniyah');


#Ireland

INSERT INTO zones VALUES('',103,'CA','Carlow');
INSERT INTO zones VALUES('',103,'CV','Cavan');
INSERT INTO zones VALUES('',103,'CL','Clare');
INSERT INTO zones VALUES('',103,'CO','Cork');
INSERT INTO zones VALUES('',103,'DO','Donegal');
INSERT INTO zones VALUES('',103,'DU','Dublin');
INSERT INTO zones VALUES('',103,'GA','Galway');
INSERT INTO zones VALUES('',103,'KE','Kerry');
INSERT INTO zones VALUES('',103,'KI','Kildare');
INSERT INTO zones VALUES('',103,'KL','Kilkenny');
INSERT INTO zones VALUES('',103,'LA','Laois');
INSERT INTO zones VALUES('',103,'LE','Leitrim');
INSERT INTO zones VALUES('',103,'LI','Limerick');
INSERT INTO zones VALUES('',103,'LO','Longford');
INSERT INTO zones VALUES('',103,'LU','Louth');
INSERT INTO zones VALUES('',103,'MA','Mayo');
INSERT INTO zones VALUES('',103,'ME','Meath');
INSERT INTO zones VALUES('',103,'MO','Monaghan');
INSERT INTO zones VALUES('',103,'OF','Offaly');
INSERT INTO zones VALUES('',103,'RO','Roscommon');
INSERT INTO zones VALUES('',103,'SL','Sligo');
INSERT INTO zones VALUES('',103,'TI','Tipperary');
INSERT INTO zones VALUES('',103,'WA','Waterford');
INSERT INTO zones VALUES('',103,'WE','Westmeath');
INSERT INTO zones VALUES('',103,'WX','Wexford');
INSERT INTO zones VALUES('',103,'WI','Wicklow');


#Israel

INSERT INTO zones VALUES('',104,'BS','Be\'er Sheva');
INSERT INTO zones VALUES('',104,'BH','Bika\'at Hayarden');
INSERT INTO zones VALUES('',104,'EA','Eilat and Arava');
INSERT INTO zones VALUES('',104,'GA','Galil');
INSERT INTO zones VALUES('',104,'HA','Haifa');
INSERT INTO zones VALUES('',104,'JM','Jehuda Mountains');
INSERT INTO zones VALUES('',104,'JE','Jerusalem');
INSERT INTO zones VALUES('',104,'NE','Negev');
INSERT INTO zones VALUES('',104,'SE','Semaria');
INSERT INTO zones VALUES('',104,'SH','Sharon');
INSERT INTO zones VALUES('',104,'TA','Tel Aviv (Gosh Dan)');


#Italy

INSERT INTO zones VALUES('',105,'AB','Abruzzo');
INSERT INTO zones VALUES('',105,'BA','Basilicata');
INSERT INTO zones VALUES('',105,'CA','Calabria');
INSERT INTO zones VALUES('',105,'CP','Campania');
INSERT INTO zones VALUES('',105,'ER','Emilia Romagna');
INSERT INTO zones VALUES('',105,'FV','Friuli-Venezia Giulia');
INSERT INTO zones VALUES('',105,'LA','Lazio (Latium & Rome)');
INSERT INTO zones VALUES('',105,'TM','Le Marche (The Marches)');
INSERT INTO zones VALUES('',105,'LI','Liguria');
INSERT INTO zones VALUES('',105,'LO','Lombardia (Lombardy)');
INSERT INTO zones VALUES('',105,'MO','Molise');
INSERT INTO zones VALUES('',105,'PI','Piemonte (Piedmont)');
INSERT INTO zones VALUES('',105,'AP','Puglia (Apulia)');
INSERT INTO zones VALUES('',105,'SA','Sardegna (Sardinia)');
INSERT INTO zones VALUES('',105,'SI','Sicilia (Sicily)');
INSERT INTO zones VALUES('',105,'TU','Toscana (Tuscany)');
INSERT INTO zones VALUES('',105,'TR','Trentino Alto Adige');
INSERT INTO zones VALUES('',105,'UM','Umbria');
INSERT INTO zones VALUES('',105,'VA','Val d\'Aosta');
INSERT INTO zones VALUES('',105,'VE','Veneto');


#Jamaica

INSERT INTO zones VALUES('',106,'CLA','Clarendon Parish');
INSERT INTO zones VALUES('',106,'HAN','Hanover Parish');
INSERT INTO zones VALUES('',106,'KIN','Kingston Parish');
INSERT INTO zones VALUES('',106,'MAN','Manchester Parish');
INSERT INTO zones VALUES('',106,'POR','Portland Parish');
INSERT INTO zones VALUES('',106,'AND','Saint Andrew Parish');
INSERT INTO zones VALUES('',106,'ANN','Saint Ann Parish');
INSERT INTO zones VALUES('',106,'CAT','Saint Catherine Parish');
INSERT INTO zones VALUES('',106,'ELI','Saint Elizabeth Parish');
INSERT INTO zones VALUES('',106,'JAM','Saint James Parish');
INSERT INTO zones VALUES('',106,'MAR','Saint Mary Parish');
INSERT INTO zones VALUES('',106,'THO','Saint Thomas Parish');
INSERT INTO zones VALUES('',106,'TRL','Trelawny Parish');
INSERT INTO zones VALUES('',106,'WML','Westmoreland Parish');


#Japan

INSERT INTO zones VALUES('',107,'AI','Aichi');
INSERT INTO zones VALUES('',107,'AK','Akita');
INSERT INTO zones VALUES('',107,'AO','Aomori');
INSERT INTO zones VALUES('',107,'CH','Chiba');
INSERT INTO zones VALUES('',107,'EH','Ehime');
INSERT INTO zones VALUES('',107,'FK','Fukui');
INSERT INTO zones VALUES('',107,'FU','Fukuoka');
INSERT INTO zones VALUES('',107,'FS','Fukushima');
INSERT INTO zones VALUES('',107,'GI','Gifu');
INSERT INTO zones VALUES('',107,'GU','Gumma');
INSERT INTO zones VALUES('',107,'HI','Hiroshima');
INSERT INTO zones VALUES('',107,'HO','Hokkaido');
INSERT INTO zones VALUES('',107,'HY','Hyogo');
INSERT INTO zones VALUES('',107,'IB','Ibaraki');
INSERT INTO zones VALUES('',107,'IS','Ishikawa');
INSERT INTO zones VALUES('',107,'IW','Iwate');
INSERT INTO zones VALUES('',107,'KA','Kagawa');
INSERT INTO zones VALUES('',107,'KG','Kagoshima');
INSERT INTO zones VALUES('',107,'KN','Kanagawa');
INSERT INTO zones VALUES('',107,'KO','Kochi');
INSERT INTO zones VALUES('',107,'KU','Kumamoto');
INSERT INTO zones VALUES('',107,'KY','Kyoto');
INSERT INTO zones VALUES('',107,'MI','Mie');
INSERT INTO zones VALUES('',107,'MY','Miyagi');
INSERT INTO zones VALUES('',107,'MZ','Miyazaki');
INSERT INTO zones VALUES('',107,'NA','Nagano');
INSERT INTO zones VALUES('',107,'NG','Nagasaki');
INSERT INTO zones VALUES('',107,'NR','Nara');
INSERT INTO zones VALUES('',107,'NI','Niigata');
INSERT INTO zones VALUES('',107,'OI','Oita');
INSERT INTO zones VALUES('',107,'OK','Okayama');
INSERT INTO zones VALUES('',107,'ON','Okinawa');
INSERT INTO zones VALUES('',107,'OS','Osaka');
INSERT INTO zones VALUES('',107,'SA','Saga');
INSERT INTO zones VALUES('',107,'SI','Saitama');
INSERT INTO zones VALUES('',107,'SH','Shiga');
INSERT INTO zones VALUES('',107,'SM','Shimane');
INSERT INTO zones VALUES('',107,'SZ','Shizuoka');
INSERT INTO zones VALUES('',107,'TO','Tochigi');
INSERT INTO zones VALUES('',107,'TS','Tokushima');
INSERT INTO zones VALUES('',107,'TK','Tokyo');
INSERT INTO zones VALUES('',107,'TT','Tottori');
INSERT INTO zones VALUES('',107,'TY','Toyama');
INSERT INTO zones VALUES('',107,'WA','Wakayama');
INSERT INTO zones VALUES('',107,'YA','Yamagata');
INSERT INTO zones VALUES('',107,'YM','Yamaguchi');
INSERT INTO zones VALUES('',107,'YN','Yamanashi');


#Jordan

INSERT INTO zones VALUES('',108,'AM','\'Amman');
INSERT INTO zones VALUES('',108,'AJ','Ajlun');
INSERT INTO zones VALUES('',108,'AA','Al \'Aqabah');
INSERT INTO zones VALUES('',108,'AB','Al Balqa\'');
INSERT INTO zones VALUES('',108,'AK','Al Karak');
INSERT INTO zones VALUES('',108,'AL','Al Mafraq');
INSERT INTO zones VALUES('',108,'AT','At Tafilah');
INSERT INTO zones VALUES('',108,'AZ','Az Zarqa\'');
INSERT INTO zones VALUES('',108,'IR','Irbid');
INSERT INTO zones VALUES('',108,'JA','Jarash');
INSERT INTO zones VALUES('',108,'MA','Ma\'an');
INSERT INTO zones VALUES('',108,'MD','Madaba');


#Kazakhstan

INSERT INTO zones VALUES('',109,'AL','Almaty');
INSERT INTO zones VALUES('',109,'AC','Almaty City');
INSERT INTO zones VALUES('',109,'AM','Aqmola');
INSERT INTO zones VALUES('',109,'AQ','Aqtobe');
INSERT INTO zones VALUES('',109,'AS','Astana City');
INSERT INTO zones VALUES('',109,'AT','Atyrau');
INSERT INTO zones VALUES('',109,'BA','Batys Qazaqstan');
INSERT INTO zones VALUES('',109,'BY','Bayqongyr City');
INSERT INTO zones VALUES('',109,'MA','Mangghystau');
INSERT INTO zones VALUES('',109,'ON','Ongtustik Qazaqstan');
INSERT INTO zones VALUES('',109,'PA','Pavlodar');
INSERT INTO zones VALUES('',109,'QA','Qaraghandy');
INSERT INTO zones VALUES('',109,'QO','Qostanay');
INSERT INTO zones VALUES('',109,'QY','Qyzylorda');
INSERT INTO zones VALUES('',109,'SH','Shyghys Qazaqstan');
INSERT INTO zones VALUES('',109,'SO','Soltustik Qazaqstan');
INSERT INTO zones VALUES('',109,'ZH','Zhambyl');


#Kenya

INSERT INTO zones VALUES('',110,'CE','Central');
INSERT INTO zones VALUES('',110,'CO','Coast');
INSERT INTO zones VALUES('',110,'EA','Eastern');
INSERT INTO zones VALUES('',110,'NA','Nairobi Area');
INSERT INTO zones VALUES('',110,'NE','North Eastern');
INSERT INTO zones VALUES('',110,'NY','Nyanza');
INSERT INTO zones VALUES('',110,'RV','Rift Valley');
INSERT INTO zones VALUES('',110,'WE','Western');


#Kiribati

INSERT INTO zones VALUES('',111,'AG','Abaiang');
INSERT INTO zones VALUES('',111,'AM','Abemama');
INSERT INTO zones VALUES('',111,'AK','Aranuka');
INSERT INTO zones VALUES('',111,'AO','Arorae');
INSERT INTO zones VALUES('',111,'BA','Banaba');
INSERT INTO zones VALUES('',111,'BE','Beru');
INSERT INTO zones VALUES('',111,'bT','Butaritari');
INSERT INTO zones VALUES('',111,'KA','Kanton');
INSERT INTO zones VALUES('',111,'KR','Kiritimati');
INSERT INTO zones VALUES('',111,'KU','Kuria');
INSERT INTO zones VALUES('',111,'MI','Maiana');
INSERT INTO zones VALUES('',111,'MN','Makin');
INSERT INTO zones VALUES('',111,'ME','Marakei');
INSERT INTO zones VALUES('',111,'NI','Nikunau');
INSERT INTO zones VALUES('',111,'NO','Nonouti');
INSERT INTO zones VALUES('',111,'ON','Onotoa');
INSERT INTO zones VALUES('',111,'TT','Tabiteuea');
INSERT INTO zones VALUES('',111,'TR','Tabuaeran');
INSERT INTO zones VALUES('',111,'TM','Tamana');
INSERT INTO zones VALUES('',111,'TW','Tarawa');
INSERT INTO zones VALUES('',111,'TE','Teraina');


#Korea Democratic People's Republic Of (North Korea)

INSERT INTO zones VALUES('',112,'CHA','Chagang-do');
INSERT INTO zones VALUES('',112,'HAB','Hamgyong-bukto');
INSERT INTO zones VALUES('',112,'HAN','Hamgyong-namdo');
INSERT INTO zones VALUES('',112,'HWB','Hwanghae-bukto');
INSERT INTO zones VALUES('',112,'HWN','Hwanghae-namdo');
INSERT INTO zones VALUES('',112,'KAN','Kangwon-do');
INSERT INTO zones VALUES('',112,'PYB','P\'yongan-bukto');
INSERT INTO zones VALUES('',112,'PYN','P\'yongan-namdo');
INSERT INTO zones VALUES('',112,'YAN','Ryanggang-do (Yanggang-do)');
INSERT INTO zones VALUES('',112,'NAJ','Rason Directly Governed City');
INSERT INTO zones VALUES('',112,'PYO','P\'yongyang Special City');


#Korea, Republic of

INSERT INTO zones VALUES('',113,'CO','Ch\'ungch\'ong-bukto');
INSERT INTO zones VALUES('',113,'CH','Ch\'ungch\'ong-namdo');
INSERT INTO zones VALUES('',113,'CD','Cheju-do');
INSERT INTO zones VALUES('',113,'CB','Cholla-bukto');
INSERT INTO zones VALUES('',113,'CN','Cholla-namdo');
INSERT INTO zones VALUES('',113,'IG','Inch\'on-gwangyoksi');
INSERT INTO zones VALUES('',113,'KA','Kangwon-do');
INSERT INTO zones VALUES('',113,'KG','Kwangju-gwangyoksi');
INSERT INTO zones VALUES('',113,'KD','Kyonggi-do');
INSERT INTO zones VALUES('',113,'KB','Kyongsang-bukto');
INSERT INTO zones VALUES('',113,'KN','Kyongsang-namdo');
INSERT INTO zones VALUES('',113,'PG','Pusan-gwangyoksi');
INSERT INTO zones VALUES('',113,'SO','Soul-t\'ukpyolsi');
INSERT INTO zones VALUES('',113,'TA','Taegu-gwangyoksi');
INSERT INTO zones VALUES('',113,'TG','Taejon-gwangyoksi');


#Kuwait

INSERT INTO zones VALUES('',114,'AL','Al \'Asimah');
INSERT INTO zones VALUES('',114,'AA','Al Ahmadi');
INSERT INTO zones VALUES('',114,'AF','Al Farwaniyah');
INSERT INTO zones VALUES('',114,'AJ','Al Jahra\'');
INSERT INTO zones VALUES('',114,'HA','Hawalli');


#Kyrgyzstan

INSERT INTO zones VALUES('',115,'GB','Bishkek');
INSERT INTO zones VALUES('',115,'B','Batken');
INSERT INTO zones VALUES('',115,'C','Chu');
INSERT INTO zones VALUES('',115,'J','Jalal-Abad');
INSERT INTO zones VALUES('',115,'N','Naryn');
INSERT INTO zones VALUES('',115,'O','Osh');
INSERT INTO zones VALUES('',115,'T','Talas');
INSERT INTO zones VALUES('',115,'Y','Ysyk-Kol');


#Lao People's Democratic Republic

INSERT INTO zones VALUES('',116,'VT','Vientiane');
INSERT INTO zones VALUES('',116,'AT','Attapu');
INSERT INTO zones VALUES('',116,'BK','Bokeo');
INSERT INTO zones VALUES('',116,'BL','Bolikhamxai');
INSERT INTO zones VALUES('',116,'CH','Champasak ');
INSERT INTO zones VALUES('',116,'HO','Houaphan');
INSERT INTO zones VALUES('',116,'KH','Khammouan');
INSERT INTO zones VALUES('',116,'LM','Louang Namtha');
INSERT INTO zones VALUES('',116,'LP','Louangphabang');
INSERT INTO zones VALUES('',116,'OU','Oudomxai');
INSERT INTO zones VALUES('',116,'PH','Phongsali');
INSERT INTO zones VALUES('',116,'SL','Salavan');
INSERT INTO zones VALUES('',116,'SV','Savannakhet');
INSERT INTO zones VALUES('',116,'VI','Vientiane');
INSERT INTO zones VALUES('',116,'XA','Xaignabouli');
INSERT INTO zones VALUES('',116,'XE','Xekong');
INSERT INTO zones VALUES('',116,'XI','Xiangkhoang');
INSERT INTO zones VALUES('',116,'XN','Xaisomboun');


#Latvia

INSERT INTO zones VALUES('',117,'AIZ','Aizkraukles Rajons');
INSERT INTO zones VALUES('',117,'ALU','Aluksnes Rajons');
INSERT INTO zones VALUES('',117,'BAL','Balvu Rajons');
INSERT INTO zones VALUES('',117,'BAU','Bauskas Rajons');
INSERT INTO zones VALUES('',117,'CES','Cesu Rajons');
INSERT INTO zones VALUES('',117,'DGR','Daugavpils Rajons');
INSERT INTO zones VALUES('',117,'DOB','Dobeles Rajons');
INSERT INTO zones VALUES('',117,'GUL','Gulbenes Rajons');
INSERT INTO zones VALUES('',117,'JEK','Jekabpils Rajons');
INSERT INTO zones VALUES('',117,'JGR','Jelgavas Rajons');
INSERT INTO zones VALUES('',117,'KRA','Kraslavas Rajons');
INSERT INTO zones VALUES('',117,'KUL','Kuldigas Rajons');
INSERT INTO zones VALUES('',117,'LPR','Liepajas Rajons');
INSERT INTO zones VALUES('',117,'LIM','Limbazu Rajons');
INSERT INTO zones VALUES('',117,'LUD','Ludzas Rajons');
INSERT INTO zones VALUES('',117,'MAD','Madonas Rajons');
INSERT INTO zones VALUES('',117,'OGR','Ogres Rajons');
INSERT INTO zones VALUES('',117,'PRE','Preilu Rajons');
INSERT INTO zones VALUES('',117,'RZR','Rezeknes Rajons');
INSERT INTO zones VALUES('',117,'RGR','Rigas Rajons');
INSERT INTO zones VALUES('',117,'SAL','Saldus Rajons');
INSERT INTO zones VALUES('',117,'TAL','Talsu Rajons');
INSERT INTO zones VALUES('',117,'TUK','Tukuma Rajons');
INSERT INTO zones VALUES('',117,'VLK','Valkas Rajons');
INSERT INTO zones VALUES('',117,'VLM','Valmieras Rajons');
INSERT INTO zones VALUES('',117,'VSR','Ventspils Rajons');
INSERT INTO zones VALUES('',117,'DGV','Daugavpils');
INSERT INTO zones VALUES('',117,'JGV','Jelgava');
INSERT INTO zones VALUES('',117,'JUR','Jurmala');
INSERT INTO zones VALUES('',117,'LPK','Liepaja');
INSERT INTO zones VALUES('',117,'RZK','Rezekne');
INSERT INTO zones VALUES('',117,'RGA','Riga');
INSERT INTO zones VALUES('',117,'VSL','Ventspils');


#Lesotho

INSERT INTO zones VALUES('',119,'BE','Berea');
INSERT INTO zones VALUES('',119,'BB','Butha-Buthe');
INSERT INTO zones VALUES('',119,'LE','Leribe');
INSERT INTO zones VALUES('',119,'MF','Mafeteng');
INSERT INTO zones VALUES('',119,'MS','Maseru');
INSERT INTO zones VALUES('',119,'MH','Mohale\'s Hoek');
INSERT INTO zones VALUES('',119,'MK','Mokhotlong');
INSERT INTO zones VALUES('',119,'QN','Qacha\'s Nek');
INSERT INTO zones VALUES('',119,'QT','Quthing');
INSERT INTO zones VALUES('',119,'TT','Thaba-Tseka');


#Liberia

INSERT INTO zones VALUES('',120,'BI','Bomi');
INSERT INTO zones VALUES('',120,'BG','Bong');
INSERT INTO zones VALUES('',120,'GB','Grand Bassa');
INSERT INTO zones VALUES('',120,'CM','Grand Cape Mount');
INSERT INTO zones VALUES('',120,'GG','Grand Gedeh');
INSERT INTO zones VALUES('',120,'GK','Grand Kru');
INSERT INTO zones VALUES('',120,'LO','Lofa');
INSERT INTO zones VALUES('',120,'MG','Margibi');
INSERT INTO zones VALUES('',120,'ML','Maryland');
INSERT INTO zones VALUES('',120,'MS','Montserrado');
INSERT INTO zones VALUES('',120,'NB','Nimba');
INSERT INTO zones VALUES('',120,'RC','River Cess');
INSERT INTO zones VALUES('',120,'SN','Sinoe');


#Libyan Arab Jamahiriya

INSERT INTO zones VALUES('',121,'AJ','Ajdabiya');
INSERT INTO zones VALUES('',121,'AZ','Al \'Aziziyah');
INSERT INTO zones VALUES('',121,'FA','Al Fatih');
INSERT INTO zones VALUES('',121,'JA','Al Jabal al Akhdar');
INSERT INTO zones VALUES('',121,'JU','Al Jufrah');
INSERT INTO zones VALUES('',121,'KH','Al Khums');
INSERT INTO zones VALUES('',121,'KU','Al Kufrah');
INSERT INTO zones VALUES('',121,'NK','An Nuqat al Khams');
INSERT INTO zones VALUES('',121,'AS','Ash Shati\'');
INSERT INTO zones VALUES('',121,'AW','Awbari');
INSERT INTO zones VALUES('',121,'ZA','Az Zawiyah');
INSERT INTO zones VALUES('',121,'BA','Banghazi');
INSERT INTO zones VALUES('',121,'DA','Darnah');
INSERT INTO zones VALUES('',121,'GD','Ghadamis');
INSERT INTO zones VALUES('',121,'GY','Gharyan');
INSERT INTO zones VALUES('',121,'MI','Misratah');
INSERT INTO zones VALUES('',121,'MZ','Murzuq');
INSERT INTO zones VALUES('',121,'SB','Sabha');
INSERT INTO zones VALUES('',121,'SW','Sawfajjin');
INSERT INTO zones VALUES('',121,'SU','Surt');
INSERT INTO zones VALUES('',121,'TL','Tarabulus (Tripoli)');
INSERT INTO zones VALUES('',121,'TH','Tarhunah');
INSERT INTO zones VALUES('',121,'TU','Tubruq');
INSERT INTO zones VALUES('',121,'YA','Yafran');
INSERT INTO zones VALUES('',121,'ZL','Zlitan');


#Liechtenstein

INSERT INTO zones VALUES('',122,'V','Vaduz');
INSERT INTO zones VALUES('',122,'A','Schaan');
INSERT INTO zones VALUES('',122,'B','Balzers');
INSERT INTO zones VALUES('',122,'N','Triesen');
INSERT INTO zones VALUES('',122,'E','Eschen');
INSERT INTO zones VALUES('',122,'M','Mauren');
INSERT INTO zones VALUES('',122,'T','Triesenberg');
INSERT INTO zones VALUES('',122,'R','Ruggell');
INSERT INTO zones VALUES('',122,'G','Gamprin');
INSERT INTO zones VALUES('',122,'L','Schellenberg');
INSERT INTO zones VALUES('',122,'P','Planken');


#Lithuania

INSERT INTO zones VALUES('',123,'AL','Alytus');
INSERT INTO zones VALUES('',123,'KA','Kaunas');
INSERT INTO zones VALUES('',123,'KL','Klaipeda');
INSERT INTO zones VALUES('',123,'MA','Marijampole');
INSERT INTO zones VALUES('',123,'PA','Panevezys');
INSERT INTO zones VALUES('',123,'SI','Siauliai');
INSERT INTO zones VALUES('',123,'TA','Taurage');
INSERT INTO zones VALUES('',123,'TE','Telsiai');
INSERT INTO zones VALUES('',123,'UT','Utena');
INSERT INTO zones VALUES('',123,'VI','Vilnius');


#Luxembourg

INSERT INTO zones VALUES('',124,'DD','Diekirch');
INSERT INTO zones VALUES('',124,'DC','Clervaux');
INSERT INTO zones VALUES('',124,'DR','Redange');
INSERT INTO zones VALUES('',124,'DV','Vianden');
INSERT INTO zones VALUES('',124,'DW','Wiltz');
INSERT INTO zones VALUES('',124,'GG','Grevenmacher');
INSERT INTO zones VALUES('',124,'GE','Echternach');
INSERT INTO zones VALUES('',124,'GR','Remich');
INSERT INTO zones VALUES('',124,'LL','Luxembourg');
INSERT INTO zones VALUES('',124,'LC','Capellen');
INSERT INTO zones VALUES('',124,'LE','Esch-sur-Alzette');
INSERT INTO zones VALUES('',124,'LM','Mersch');


#Macau
INSERT INTO zones VALUES('',125,'OLF','Our Lady Fatima Parish');
INSERT INTO zones VALUES('',125,'ANT','St. Anthony Parish');
INSERT INTO zones VALUES('',125,'LAZ','St. Lazarus Parish');
INSERT INTO zones VALUES('',125,'CAT','Cathedral Parish');
INSERT INTO zones VALUES('',125,'LAW','St. Lawrence Parish');


#Madagascar

INSERT INTO zones VALUES('',127,'AN','Antananarivo');
INSERT INTO zones VALUES('',127,'AS','Antsiranana');
INSERT INTO zones VALUES('',127,'FN','Fianarantsoa');
INSERT INTO zones VALUES('',127,'MJ','Mahajanga');
INSERT INTO zones VALUES('',127,'TM','Toamasina');
INSERT INTO zones VALUES('',127,'TL','Toliara');


#Malawi

INSERT INTO zones VALUES('',128,'BLK','Balaka');
INSERT INTO zones VALUES('',128,'BLT','Blantyre');
INSERT INTO zones VALUES('',128,'CKW','Chikwawa');
INSERT INTO zones VALUES('',128,'CRD','Chiradzulu');
INSERT INTO zones VALUES('',128,'CTP','Chitipa');
INSERT INTO zones VALUES('',128,'DDZ','Dedza');
INSERT INTO zones VALUES('',128,'DWA','Dowa');
INSERT INTO zones VALUES('',128,'KRG','Karonga');
INSERT INTO zones VALUES('',128,'KSG','Kasungu');
INSERT INTO zones VALUES('',128,'LKM','Likoma');
INSERT INTO zones VALUES('',128,'LLG','Lilongwe');
INSERT INTO zones VALUES('',128,'MCG','Machinga');
INSERT INTO zones VALUES('',128,'MGC','Mangochi');
INSERT INTO zones VALUES('',128,'MCH','Mchinji');
INSERT INTO zones VALUES('',128,'MLJ','Mulanje');
INSERT INTO zones VALUES('',128,'MWZ','Mwanza');
INSERT INTO zones VALUES('',128,'MZM','Mzimba');
INSERT INTO zones VALUES('',128,'NTU','Ntcheu');
INSERT INTO zones VALUES('',128,'NKB','Nkhata Bay');
INSERT INTO zones VALUES('',128,'NKH','Nkhotakota');
INSERT INTO zones VALUES('',128,'NSJ','Nsanje');
INSERT INTO zones VALUES('',128,'NTI','Ntchisi');
INSERT INTO zones VALUES('',128,'PHL','Phalombe');
INSERT INTO zones VALUES('',128,'RMP','Rumphi');
INSERT INTO zones VALUES('',128,'SLM','Salima');
INSERT INTO zones VALUES('',128,'THY','Thyolo');
INSERT INTO zones VALUES('',128,'ZBA','Zomba');


#Malaysia

INSERT INTO zones VALUES('',129,'JO','Johor');
INSERT INTO zones VALUES('',129,'KE','Kedah');
INSERT INTO zones VALUES('',129,'KL','Kelantan');
INSERT INTO zones VALUES('',129,'LA','Labuan');
INSERT INTO zones VALUES('',129,'ME','Melaka');
INSERT INTO zones VALUES('',129,'NS','Negeri Sembilan');
INSERT INTO zones VALUES('',129,'PA','Pahang');
INSERT INTO zones VALUES('',129,'PE','Perak');
INSERT INTO zones VALUES('',129,'PR','Perlis');
INSERT INTO zones VALUES('',129,'PP','Pulau Pinang');
INSERT INTO zones VALUES('',129,'SA','Sabah');
INSERT INTO zones VALUES('',129,'SR','Sarawak');
INSERT INTO zones VALUES('',129,'SE','Selangor');
INSERT INTO zones VALUES('',129,'TE','Terengganu');
INSERT INTO zones VALUES('',129,'WP','Wilayah Persekutuan');


#Maldives

INSERT INTO zones VALUES('',130,'THU','Thiladhunmathi Uthuru');
INSERT INTO zones VALUES('',130,'THD','Thiladhunmathi Dhekunu');
INSERT INTO zones VALUES('',130,'MLU','Miladhunmadulu Uthuru');
INSERT INTO zones VALUES('',130,'MLD','Miladhunmadulu Dhekunu');
INSERT INTO zones VALUES('',130,'MAU','Maalhosmadulu Uthuru');
INSERT INTO zones VALUES('',130,'MAD','Maalhosmadulu Dhekunu');
INSERT INTO zones VALUES('',130,'FAA','Faadhippolhu');
INSERT INTO zones VALUES('',130,'MAA','Male Atoll');
INSERT INTO zones VALUES('',130,'AAU','Ari Atoll Uthuru');
INSERT INTO zones VALUES('',130,'AAD','Ari Atoll Dheknu');
INSERT INTO zones VALUES('',130,'FEA','Felidhe Atoll');
INSERT INTO zones VALUES('',130,'MUA','Mulaku Atoll');
INSERT INTO zones VALUES('',130,'NAU','Nilandhe Atoll Uthuru');
INSERT INTO zones VALUES('',130,'NAD','Nilandhe Atoll Dhekunu');
INSERT INTO zones VALUES('',130,'KLH','Kolhumadulu');
INSERT INTO zones VALUES('',130,'HDH','Hadhdhunmathi');
INSERT INTO zones VALUES('',130,'HAU','Huvadhu Atoll Uthuru');
INSERT INTO zones VALUES('',130,'HAD','Huvadhu Atoll Dhekunu');
INSERT INTO zones VALUES('',130,'FMU','Fua Mulaku');
INSERT INTO zones VALUES('',130,'ADD','Addu');


#Mali

INSERT INTO zones VALUES('',131,'GA','Gao');
INSERT INTO zones VALUES('',131,'KY','Kayes');
INSERT INTO zones VALUES('',131,'KD','Kidal');
INSERT INTO zones VALUES('',131,'KL','Koulikoro');
INSERT INTO zones VALUES('',131,'MP','Mopti');
INSERT INTO zones VALUES('',131,'SG','Segou');
INSERT INTO zones VALUES('',131,'SK','Sikasso');
INSERT INTO zones VALUES('',131,'TB','Tombouctou');
INSERT INTO zones VALUES('',131,'CD','Bamako Capital District');


#Malta

INSERT INTO zones VALUES('',132,'ATT','Attard');
INSERT INTO zones VALUES('',132,'BAL','Balzan');
INSERT INTO zones VALUES('',132,'BGU','Birgu');
INSERT INTO zones VALUES('',132,'BKK','Birkirkara');
INSERT INTO zones VALUES('',132,'BRZ','Birzebbuga');
INSERT INTO zones VALUES('',132,'BOR','Bormla');
INSERT INTO zones VALUES('',132,'DIN','Dingli');
INSERT INTO zones VALUES('',132,'FGU','Fgura');
INSERT INTO zones VALUES('',132,'FLO','Floriana');
INSERT INTO zones VALUES('',132,'GDJ','Gudja');
INSERT INTO zones VALUES('',132,'GZR','Gzira');
INSERT INTO zones VALUES('',132,'GRG','Gargur');
INSERT INTO zones VALUES('',132,'GXQ','Gaxaq');
INSERT INTO zones VALUES('',132,'HMR','Hamrun');
INSERT INTO zones VALUES('',132,'IKL','Iklin');
INSERT INTO zones VALUES('',132,'ISL','Isla');
INSERT INTO zones VALUES('',132,'KLK','Kalkara');
INSERT INTO zones VALUES('',132,'KRK','Kirkop');
INSERT INTO zones VALUES('',132,'LIJ','Lija');
INSERT INTO zones VALUES('',132,'LUQ','Luqa');
INSERT INTO zones VALUES('',132,'MRS','Marsa');
INSERT INTO zones VALUES('',132,'MKL','Marsaskala');
INSERT INTO zones VALUES('',132,'MXL','Marsaxlokk');
INSERT INTO zones VALUES('',132,'MDN','Mdina');
INSERT INTO zones VALUES('',132,'MEL','Melliea');
INSERT INTO zones VALUES('',132,'MGR','Mgarr');
INSERT INTO zones VALUES('',132,'MST','Mosta');
INSERT INTO zones VALUES('',132,'MQA','Mqabba');
INSERT INTO zones VALUES('',132,'MSI','Msida');
INSERT INTO zones VALUES('',132,'MTF','Mtarfa');
INSERT INTO zones VALUES('',132,'NAX','Naxxar');
INSERT INTO zones VALUES('',132,'PAO','Paola');
INSERT INTO zones VALUES('',132,'PEM','Pembroke');
INSERT INTO zones VALUES('',132,'PIE','Pieta');
INSERT INTO zones VALUES('',132,'QOR','Qormi');
INSERT INTO zones VALUES('',132,'QRE','Qrendi');
INSERT INTO zones VALUES('',132,'RAB','Rabat');
INSERT INTO zones VALUES('',132,'SAF','Safi');
INSERT INTO zones VALUES('',132,'SGI','San Giljan');
INSERT INTO zones VALUES('',132,'SLU','Santa Lucija');
INSERT INTO zones VALUES('',132,'SPB','San Pawl il-Bahar');
INSERT INTO zones VALUES('',132,'SGW','San Gwann');
INSERT INTO zones VALUES('',132,'SVE','Santa Venera');
INSERT INTO zones VALUES('',132,'SIG','Siggiewi');
INSERT INTO zones VALUES('',132,'SLM','Sliema');
INSERT INTO zones VALUES('',132,'SWQ','Swieqi');
INSERT INTO zones VALUES('',132,'TXB','Ta Xbiex');
INSERT INTO zones VALUES('',132,'TRX','Tarxien');
INSERT INTO zones VALUES('',132,'VLT','Valletta');
INSERT INTO zones VALUES('',132,'XGJ','Xgajra');
INSERT INTO zones VALUES('',132,'ZBR','Zabbar');
INSERT INTO zones VALUES('',132,'ZBG','Zebbug');
INSERT INTO zones VALUES('',132,'ZJT','Zejtun');
INSERT INTO zones VALUES('',132,'ZRQ','Zurrieq');
INSERT INTO zones VALUES('',132,'FNT','Fontana');
INSERT INTO zones VALUES('',132,'GHJ','Ghajnsielem');
INSERT INTO zones VALUES('',132,'GHR','Gharb');
INSERT INTO zones VALUES('',132,'GHS','Ghasri');
INSERT INTO zones VALUES('',132,'KRC','Kercem');
INSERT INTO zones VALUES('',132,'MUN','Munxar');
INSERT INTO zones VALUES('',132,'NAD','Nadur');
INSERT INTO zones VALUES('',132,'QAL','Qala');
INSERT INTO zones VALUES('',132,'VIC','Victoria');
INSERT INTO zones VALUES('',132,'SLA','San Lawrenz');
INSERT INTO zones VALUES('',132,'SNT','Sannat');
INSERT INTO zones VALUES('',132,'ZAG','Xagra');
INSERT INTO zones VALUES('',132,'XEW','Xewkija');
INSERT INTO zones VALUES('',132,'ZEB','Zebbug');
#Marshall Islands
INSERT INTO zones VALUES('',133,'ALG','Ailinginae');
INSERT INTO zones VALUES('',133,'ALL','Ailinglaplap');
INSERT INTO zones VALUES('',133,'ALK','Ailuk');
INSERT INTO zones VALUES('',133,'ARN','Arno');
INSERT INTO zones VALUES('',133,'AUR','Aur');
INSERT INTO zones VALUES('',133,'BKR','Bikar');
INSERT INTO zones VALUES('',133,'BKN','Bikini');
INSERT INTO zones VALUES('',133,'BKK','Bokak');
INSERT INTO zones VALUES('',133,'EBN','Ebon');
INSERT INTO zones VALUES('',133,'ENT','Enewetak');
INSERT INTO zones VALUES('',133,'EKB','Erikub');
INSERT INTO zones VALUES('',133,'JBT','Jabat');
INSERT INTO zones VALUES('',133,'JLT','Jaluit');
INSERT INTO zones VALUES('',133,'JEM','Jemo');
INSERT INTO zones VALUES('',133,'KIL','Kili');
INSERT INTO zones VALUES('',133,'KWJ','Kwajalein');
INSERT INTO zones VALUES('',133,'LAE','Lae');
INSERT INTO zones VALUES('',133,'LIB','Lib');
INSERT INTO zones VALUES('',133,'LKP','Likiep');
INSERT INTO zones VALUES('',133,'MJR','Majuro');
INSERT INTO zones VALUES('',133,'MLP','Maloelap');
INSERT INTO zones VALUES('',133,'MJT','Mejit');
INSERT INTO zones VALUES('',133,'MIL','Mili');
INSERT INTO zones VALUES('',133,'NMK','Namorik');
INSERT INTO zones VALUES('',133,'NAM','Namu');
INSERT INTO zones VALUES('',133,'RGL','Rongelap');
INSERT INTO zones VALUES('',133,'RGK','Rongrik');
INSERT INTO zones VALUES('',133,'TOK','Toke');
INSERT INTO zones VALUES('',133,'UJA','Ujae');
INSERT INTO zones VALUES('',133,'UJL','Ujelang');
INSERT INTO zones VALUES('',133,'UTK','Utirik');
INSERT INTO zones VALUES('',133,'WTH','Wotho');
INSERT INTO zones VALUES('',133,'WTJ','Wotje');


#Mauritania

INSERT INTO zones VALUES('',135,'AD','Adrar');
INSERT INTO zones VALUES('',135,'AS','Assaba');
INSERT INTO zones VALUES('',135,'BR','Brakna');
INSERT INTO zones VALUES('',135,'DN','Dakhlet Nouadhibou');
INSERT INTO zones VALUES('',135,'GO','Gorgol');
INSERT INTO zones VALUES('',135,'GM','Guidimaka');
INSERT INTO zones VALUES('',135,'HC','Hodh Ech Chargui');
INSERT INTO zones VALUES('',135,'HG','Hodh El Gharbi');
INSERT INTO zones VALUES('',135,'IN','Inchiri');
INSERT INTO zones VALUES('',135,'TA','Tagant');
INSERT INTO zones VALUES('',135,'TZ','Tiris Zemmour');
INSERT INTO zones VALUES('',135,'TR','Trarza');
INSERT INTO zones VALUES('',135,'NO','Nouakchott');


#Mauritius

INSERT INTO zones VALUES('',136,'BR','Beau Bassin-Rose Hill');
INSERT INTO zones VALUES('',136,'CU','Curepipe');
INSERT INTO zones VALUES('',136,'PU','Port Louis');
INSERT INTO zones VALUES('',136,'QB','Quatre Bornes');
INSERT INTO zones VALUES('',136,'VP','Vacoas-Phoenix');
INSERT INTO zones VALUES('',136,'AG','Agalega Islands');
INSERT INTO zones VALUES('',136,'CC','Cargados Carajos Shoals (Saint Brandon Islands)');
INSERT INTO zones VALUES('',136,'RO','Rodrigues');
INSERT INTO zones VALUES('',136,'BL','Black River');
INSERT INTO zones VALUES('',136,'FL','Flacq');
INSERT INTO zones VALUES('',136,'GP','Grand Port');
INSERT INTO zones VALUES('',136,'MO','Moka');
INSERT INTO zones VALUES('',136,'PA','Pamplemousses');
INSERT INTO zones VALUES('',136,'PW','Plaines Wilhems');
INSERT INTO zones VALUES('',136,'PL','Port Louis');
INSERT INTO zones VALUES('',136,'RR','Riviere du Rempart');
INSERT INTO zones VALUES('',136,'SA','Savanne');


#Mexico
INSERT INTO zones VALUES('',138,'AGU','Aguascalientes');
INSERT INTO zones VALUES('',138,'BCN','Baja California Norte');
INSERT INTO zones VALUES('',138,'BCS','Baja California Sur');
INSERT INTO zones VALUES('',138,'CAM','Campeche');
INSERT INTO zones VALUES('',138,'CHP','Chiapas');
INSERT INTO zones VALUES('',138,'CHH','Chihuahua');
INSERT INTO zones VALUES('',138,'COA','Coahuila de Zaragoza');
INSERT INTO zones VALUES('',138,'COL','Colima');
INSERT INTO zones VALUES('',138,'DIF','Distrito Federal');
INSERT INTO zones VALUES('',138,'DUR','Durango');
INSERT INTO zones VALUES('',138,'GUA','Guanajuato');
INSERT INTO zones VALUES('',138,'GRO','Guerrero');
INSERT INTO zones VALUES('',138,'HID','Hidalgo');
INSERT INTO zones VALUES('',138,'JAL','Jalisco');
INSERT INTO zones VALUES('',138,'MEX','Mexico');
INSERT INTO zones VALUES('',138,'MIC','Michoacan de Ocampo');
INSERT INTO zones VALUES('',138,'MOR','Morelos');
INSERT INTO zones VALUES('',138,'NAY','Nayarit');
INSERT INTO zones VALUES('',138,'NLE','Nuevo Leon');
INSERT INTO zones VALUES('',138,'OAX','Oaxaca');
INSERT INTO zones VALUES('',138,'PUE','Puebla');
INSERT INTO zones VALUES('',138,'QUE','Queretaro de Arteaga');
INSERT INTO zones VALUES('',138,'ROO','Quintana Roo');
INSERT INTO zones VALUES('',138,'SLP','San Luis Potosi');
INSERT INTO zones VALUES('',138,'SIN','Sinaloa');
INSERT INTO zones VALUES('',138,'SON','Sonora');
INSERT INTO zones VALUES('',138,'TAB','Tabasco');
INSERT INTO zones VALUES('',138,'TAM','Tamaulipas');
INSERT INTO zones VALUES('',138,'TLA','Tlaxcala');
INSERT INTO zones VALUES('',138,'VER','Veracruz-Llave');
INSERT INTO zones VALUES('',138,'YUC','Yucatan');
INSERT INTO zones VALUES('',138,'ZAC','Zacatecas');


#Micronesia Federated States of
INSERT INTO zones VALUES('',139,'C','Chuuk');
INSERT INTO zones VALUES('',139,'K','Kosrae');
INSERT INTO zones VALUES('',139,'P','Pohnpei');
INSERT INTO zones VALUES('',139,'Y','Yap');


#Moldova Republic of

INSERT INTO zones VALUES('',140,'GA','Gagauzia');
INSERT INTO zones VALUES('',140,'CU','Chisinau');
INSERT INTO zones VALUES('',140,'BA','Balti');
INSERT INTO zones VALUES('',140,'CA','Cahul');
INSERT INTO zones VALUES('',140,'ED','Edinet');
INSERT INTO zones VALUES('',140,'LA','Lapusna');
INSERT INTO zones VALUES('',140,'OR','Orhei');
INSERT INTO zones VALUES('',140,'SO','Soroca');
INSERT INTO zones VALUES('',140,'TI','Tighina');
INSERT INTO zones VALUES('',140,'UN','Ungheni');
INSERT INTO zones VALUES('',140,'SN','Stnga Nistrului');


#Monaco
INSERT INTO zones VALUES('',141,'FV','Fontvieille');
INSERT INTO zones VALUES('',141,'LC','La Condamine');
INSERT INTO zones VALUES('',141,'MV','Monaco-Ville');
INSERT INTO zones VALUES('',141,'MC','Monte-Carlo');


#Mongolia
INSERT INTO zones VALUES('',142,'1','Ulanbaatar');
INSERT INTO zones VALUES('',142,'035','Orhon');
INSERT INTO zones VALUES('',142,'037','Darhan uul');
INSERT INTO zones VALUES('',142,'039','Hentiy');
INSERT INTO zones VALUES('',142,'041','Hovsgol');
INSERT INTO zones VALUES('',142,'043','Hovd');
INSERT INTO zones VALUES('',142,'046','Uvs');
INSERT INTO zones VALUES('',142,'047','Tov');
INSERT INTO zones VALUES('',142,'049','Selenge');
INSERT INTO zones VALUES('',142,'051','Suhbaatar');
INSERT INTO zones VALUES('',142,'053','Omnogovi');
INSERT INTO zones VALUES('',142,'055','Ovorhangay');
INSERT INTO zones VALUES('',142,'057','Dzavhan');
INSERT INTO zones VALUES('',142,'059','DundgovL');
INSERT INTO zones VALUES('',142,'061','Dornod');
INSERT INTO zones VALUES('',142,'063','Dornogov');
INSERT INTO zones VALUES('',142,'064','Govi-Sumber');
INSERT INTO zones VALUES('',142,'065','Govi-Altay');
INSERT INTO zones VALUES('',142,'067','Bulgan');
INSERT INTO zones VALUES('',142,'069','Bayanhongor');
INSERT INTO zones VALUES('',142,'071','Bayan-Olgiy');
INSERT INTO zones VALUES('',142,'073','Arhangay');


#Montserrat
INSERT INTO zones VALUES('',143,'A','Saint Anthony');
INSERT INTO zones VALUES('',143,'G','Saint Georges');
INSERT INTO zones VALUES('',143,'P','Saint Peter');


#Morocco

INSERT INTO zones VALUES('',144,'AGD','Agadir');
INSERT INTO zones VALUES('',144,'HOC','Al Hoceima');
INSERT INTO zones VALUES('',144,'AZI','Azilal');
INSERT INTO zones VALUES('',144,'BME','Beni Mellal');
INSERT INTO zones VALUES('',144,'BSL','Ben Slimane');
INSERT INTO zones VALUES('',144,'BLM','Boulemane');
INSERT INTO zones VALUES('',144,'CBL','Casablanca');
INSERT INTO zones VALUES('',144,'CHA','Chaouen');
INSERT INTO zones VALUES('',144,'EJA','El Jadida');
INSERT INTO zones VALUES('',144,'EKS','El Kelaa des Sraghna');
INSERT INTO zones VALUES('',144,'ERA','Er Rachidia');
INSERT INTO zones VALUES('',144,'ESS','Essaouira');
INSERT INTO zones VALUES('',144,'FES','Fes');
INSERT INTO zones VALUES('',144,'FIG','Figuig');
INSERT INTO zones VALUES('',144,'GLM','Guelmim');
INSERT INTO zones VALUES('',144,'IFR','Ifrane');
INSERT INTO zones VALUES('',144,'KEN','Kenitra');
INSERT INTO zones VALUES('',144,'KHM','Khemisset');
INSERT INTO zones VALUES('',144,'KHN','Khenifra');
INSERT INTO zones VALUES('',144,'KHO','Khouribga');
INSERT INTO zones VALUES('',144,'LYN','Laayoune');
INSERT INTO zones VALUES('',144,'LAR','Larache');
INSERT INTO zones VALUES('',144,'MRK','Marrakech');
INSERT INTO zones VALUES('',144,'MKN','Meknes');
INSERT INTO zones VALUES('',144,'NAD','Nador');
INSERT INTO zones VALUES('',144,'ORZ','Ouarzazate');
INSERT INTO zones VALUES('',144,'OUJ','Oujda');
INSERT INTO zones VALUES('',144,'RSA','Rabat-Sale');
INSERT INTO zones VALUES('',144,'SAF','Safi');
INSERT INTO zones VALUES('',144,'SET','Settat');
INSERT INTO zones VALUES('',144,'SKA','Sidi Kacem');
INSERT INTO zones VALUES('',144,'TGR','Tangier');
INSERT INTO zones VALUES('',144,'TAN','Tan-Tan');
INSERT INTO zones VALUES('',144,'TAO','Taounate');
INSERT INTO zones VALUES('',144,'TRD','Taroudannt');
INSERT INTO zones VALUES('',144,'TAT','Tata');
INSERT INTO zones VALUES('',144,'TAZ','Taza');
INSERT INTO zones VALUES('',144,'TET','Tetouan');
INSERT INTO zones VALUES('',144,'TIZ','Tiznit');
INSERT INTO zones VALUES('',144,'ADK','Ad Dakhla');
INSERT INTO zones VALUES('',144,'BJD','Boujdour');
INSERT INTO zones VALUES('',144,'ESM','Es Smara');


#Mozambique

INSERT INTO zones VALUES('',145,'CD','Cabo Delgado');
INSERT INTO zones VALUES('',145,'GZ','Gaza');
INSERT INTO zones VALUES('',145,'IN','Inhambane');
INSERT INTO zones VALUES('',145,'MN','Manica');
INSERT INTO zones VALUES('',145,'MC','Maputo (city)');
INSERT INTO zones VALUES('',145,'MP','Maputo');
INSERT INTO zones VALUES('',145,'NA','Nampula');
INSERT INTO zones VALUES('',145,'NI','Niassa');
INSERT INTO zones VALUES('',145,'SO','Sofala');
INSERT INTO zones VALUES('',145,'TE','Tete');
INSERT INTO zones VALUES('',145,'ZA','Zambezia');


#Myanmar

INSERT INTO zones VALUES('',146,'AY','Ayeyarwady');
INSERT INTO zones VALUES('',146,'BG','Bago');
INSERT INTO zones VALUES('',146,'MG','Magway');
INSERT INTO zones VALUES('',146,'MD','Mandalay');
INSERT INTO zones VALUES('',146,'SG','Sagaing');
INSERT INTO zones VALUES('',146,'TN','Tanintharyi');
INSERT INTO zones VALUES('',146,'YG','Yangon');
INSERT INTO zones VALUES('',146,'CH','Chin State');
INSERT INTO zones VALUES('',146,'KC','Kachin State');
INSERT INTO zones VALUES('',146,'KH','Kayah State');
INSERT INTO zones VALUES('',146,'KN','Kayin State');
INSERT INTO zones VALUES('',146,'MN','Mon State');
INSERT INTO zones VALUES('',146,'RK','Rakhine State');
INSERT INTO zones VALUES('',146,'SH','Shan State');


#Namibia
INSERT INTO zones VALUES('',147,'CA','Caprivi');
INSERT INTO zones VALUES('',147,'ER','Erongo');
INSERT INTO zones VALUES('',147,'HA','Hardap');
INSERT INTO zones VALUES('',147,'KR','Karas');
INSERT INTO zones VALUES('',147,'KV','Kavango');
INSERT INTO zones VALUES('',147,'KH','Khomas');
INSERT INTO zones VALUES('',147,'KU','Kunene');
INSERT INTO zones VALUES('',147,'OW','Ohangwena');
INSERT INTO zones VALUES('',147,'OK','Omaheke');
INSERT INTO zones VALUES('',147,'OT','Omusati');
INSERT INTO zones VALUES('',147,'ON','Oshana');
INSERT INTO zones VALUES('',147,'OO','Oshikoto');
INSERT INTO zones VALUES('',147,'OJ','Otjozondjupa');


#Nauru

INSERT INTO zones VALUES('',148,'AO','Aiwo');
INSERT INTO zones VALUES('',148,'AA','Anabar');
INSERT INTO zones VALUES('',148,'AT','Anetan');
INSERT INTO zones VALUES('',148,'AI','Anibare');
INSERT INTO zones VALUES('',148,'BA','Baiti');
INSERT INTO zones VALUES('',148,'BO','Boe');
INSERT INTO zones VALUES('',148,'BU','Buada');
INSERT INTO zones VALUES('',148,'DE','Denigomodu');
INSERT INTO zones VALUES('',148,'EW','Ewa');
INSERT INTO zones VALUES('',148,'IJ','Ijuw');
INSERT INTO zones VALUES('',148,'ME','Meneng');
INSERT INTO zones VALUES('',148,'NI','Nibok');
INSERT INTO zones VALUES('',148,'UA','Uaboe');
INSERT INTO zones VALUES('',148,'YA','Yaren');


#Nepal

INSERT INTO zones VALUES('',149,'BA','Bagmati');
INSERT INTO zones VALUES('',149,'BH','Bheri');
INSERT INTO zones VALUES('',149,'DH','Dhawalagiri');
INSERT INTO zones VALUES('',149,'GA','Gandaki');
INSERT INTO zones VALUES('',149,'JA','Janakpur');
INSERT INTO zones VALUES('',149,'KA','Karnali');
INSERT INTO zones VALUES('',149,'KO','Kosi');
INSERT INTO zones VALUES('',149,'LU','Lumbini');
INSERT INTO zones VALUES('',149,'MA','Mahakali');
INSERT INTO zones VALUES('',149,'ME','Mechi');
INSERT INTO zones VALUES('',149,'NA','Narayani');
INSERT INTO zones VALUES('',149,'RA','Rapti');
INSERT INTO zones VALUES('',149,'SA','Sagarmatha');
INSERT INTO zones VALUES('',149,'SE','Seti');


#Netherlands

INSERT INTO zones VALUES('',150,'DR','Drenthe');
INSERT INTO zones VALUES('',150,'FL','Flevoland');
INSERT INTO zones VALUES('',150,'FR','Friesland');
INSERT INTO zones VALUES('',150,'GE','Gelderland');
INSERT INTO zones VALUES('',150,'GR','Groningen');
INSERT INTO zones VALUES('',150,'LI','Limburg');
INSERT INTO zones VALUES('',150,'NB','Noord Brabant');
INSERT INTO zones VALUES('',150,'NH','Noord Holland');
INSERT INTO zones VALUES('',150,'OV','Overijssel');
INSERT INTO zones VALUES('',150,'UT','Utrecht');
INSERT INTO zones VALUES('',150,'ZE','Zeeland');
INSERT INTO zones VALUES('',150,'ZH','Zuid Holland');


#New Caledonia
INSERT INTO zones VALUES('',152,'L','Iles Loyaute');
INSERT INTO zones VALUES('',152,'N','Nord');
INSERT INTO zones VALUES('',152,'S','Sud');


#New Zealand
INSERT INTO zones VALUES('',153,'AUK','Auckland');
INSERT INTO zones VALUES('',153,'BOP','Bay of Plenty');
INSERT INTO zones VALUES('',153,'CAN','Canterbury');
INSERT INTO zones VALUES('',153,'COR','Coromandel');
INSERT INTO zones VALUES('',153,'GIS','Gisborne');
INSERT INTO zones VALUES('',153,'FIO','Fiordland');
INSERT INTO zones VALUES('',153,'HKB','Hawke\'s Bay');
INSERT INTO zones VALUES('',153,'MBH','Marlborough');
INSERT INTO zones VALUES('',153,'MWT','Manawatu-Wanganui');
INSERT INTO zones VALUES('',153,'MCM','Mt Cook-Mackenzie');
INSERT INTO zones VALUES('',153,'NSN','Nelson');
INSERT INTO zones VALUES('',153,'NTL','Northland');
INSERT INTO zones VALUES('',153,'OTA','Otago');
INSERT INTO zones VALUES('',153,'STL','Southland');
INSERT INTO zones VALUES('',153,'TKI','Taranaki');
INSERT INTO zones VALUES('',153,'WGN','Wellington');
INSERT INTO zones VALUES('',153,'WKO','Waikato');
INSERT INTO zones VALUES('',153,'WAI','Wairprarapa');
INSERT INTO zones VALUES('',153,'WTC','West Coast');


#Nicaragua

INSERT INTO zones VALUES('',154,'AN','Atlantico Norte');
INSERT INTO zones VALUES('',154,'AS','Atlantico Sur');
INSERT INTO zones VALUES('',154,'BO','Boaco');
INSERT INTO zones VALUES('',154,'CA','Carazo');
INSERT INTO zones VALUES('',154,'CI','Chinandega');
INSERT INTO zones VALUES('',154,'CO','Chontales');
INSERT INTO zones VALUES('',154,'ES','Esteli');
INSERT INTO zones VALUES('',154,'GR','Granada');
INSERT INTO zones VALUES('',154,'JI','Jinotega');
INSERT INTO zones VALUES('',154,'LE','Leon');
INSERT INTO zones VALUES('',154,'MD','Madriz');
INSERT INTO zones VALUES('',154,'MN','Managua');
INSERT INTO zones VALUES('',154,'MS','Masaya');
INSERT INTO zones VALUES('',154,'MT','Matagalpa');
INSERT INTO zones VALUES('',154,'NS','Nuevo Segovia');
INSERT INTO zones VALUES('',154,'RS','Rio San Juan');
INSERT INTO zones VALUES('',154,'RI','Rivas');


#Niger

INSERT INTO zones VALUES('',155,'AG','Agadez');
INSERT INTO zones VALUES('',155,'DF','Diffa');
INSERT INTO zones VALUES('',155,'DS','Dosso');
INSERT INTO zones VALUES('',155,'MA','Maradi');
INSERT INTO zones VALUES('',155,'NM','Niamey');
INSERT INTO zones VALUES('',155,'TH','Tahoua');
INSERT INTO zones VALUES('',155,'TL','Tillaberi');
INSERT INTO zones VALUES('',155,'ZD','Zinder');


#Nigeria

INSERT INTO zones VALUES('',156,'AB','Abia');
INSERT INTO zones VALUES('',156,'CT','Abuja Federal Capital Territory');
INSERT INTO zones VALUES('',156,'AD','Adamawa');
INSERT INTO zones VALUES('',156,'AK','Akwa Ibom');
INSERT INTO zones VALUES('',156,'AN','Anambra');
INSERT INTO zones VALUES('',156,'BC','Bauchi');
INSERT INTO zones VALUES('',156,'BY','Bayelsa');
INSERT INTO zones VALUES('',156,'BN','Benue');
INSERT INTO zones VALUES('',156,'BO','Borno');
INSERT INTO zones VALUES('',156,'CR','Cross River');
INSERT INTO zones VALUES('',156,'DE','Delta');
INSERT INTO zones VALUES('',156,'EB','Ebonyi');
INSERT INTO zones VALUES('',156,'ED','Edo');
INSERT INTO zones VALUES('',156,'EK','Ekiti');
INSERT INTO zones VALUES('',156,'EN','Enugu');
INSERT INTO zones VALUES('',156,'GO','Gombe');
INSERT INTO zones VALUES('',156,'IM','Imo');
INSERT INTO zones VALUES('',156,'JI','Jigawa');
INSERT INTO zones VALUES('',156,'KD','Kaduna');
INSERT INTO zones VALUES('',156,'KN','Kano');
INSERT INTO zones VALUES('',156,'KT','Katsina');
INSERT INTO zones VALUES('',156,'KE','Kebbi');
INSERT INTO zones VALUES('',156,'KO','Kogi');
INSERT INTO zones VALUES('',156,'KW','Kwara');
INSERT INTO zones VALUES('',156,'LA','Lagos');
INSERT INTO zones VALUES('',156,'NA','Nassarawa');
INSERT INTO zones VALUES('',156,'NI','Niger');
INSERT INTO zones VALUES('',156,'OG','Ogun');
INSERT INTO zones VALUES('',156,'ONG','Ondo');
INSERT INTO zones VALUES('',156,'OS','Osun');
INSERT INTO zones VALUES('',156,'OY','Oyo');
INSERT INTO zones VALUES('',156,'PL','Plateau');
INSERT INTO zones VALUES('',156,'RI','Rivers');
INSERT INTO zones VALUES('',156,'SO','Sokoto');
INSERT INTO zones VALUES('',156,'TA','Taraba');
INSERT INTO zones VALUES('',156,'YO','Yobe');
INSERT INTO zones VALUES('',156,'ZA','Zamfara');


#Northern Mariana Islands
INSERT INTO zones VALUES('',159,'N','Northern Islands');
INSERT INTO zones VALUES('',159,'R','Rota');
INSERT INTO zones VALUES('',159,'S','Saipan');
INSERT INTO zones VALUES('',159,'T','Tinian');


#Norway

INSERT INTO zones VALUES('',160,'AK','Akershus');
INSERT INTO zones VALUES('',160,'AA','Aust-Agder');
INSERT INTO zones VALUES('',160,'BU','Buskerud');
INSERT INTO zones VALUES('',160,'FM','Finnmark');
INSERT INTO zones VALUES('',160,'HM','Hedmark');
INSERT INTO zones VALUES('',160,'HL','Hordaland');
INSERT INTO zones VALUES('',160,'MR','More og Romdal');
INSERT INTO zones VALUES('',160,'NT','Nord-Trondelag');
INSERT INTO zones VALUES('',160,'NL','Nordland');
INSERT INTO zones VALUES('',160,'OF','Ostfold');
INSERT INTO zones VALUES('',160,'OP','Oppland');
INSERT INTO zones VALUES('',160,'OL','Oslo');
INSERT INTO zones VALUES('',160,'RL','Rogaland');
INSERT INTO zones VALUES('',160,'ST','Sor-Trondelag');
INSERT INTO zones VALUES('',160,'SJ','Sogn og Fjordane');
INSERT INTO zones VALUES('',160,'SV','Svalbard');
INSERT INTO zones VALUES('',160,'TM','Telemark');
INSERT INTO zones VALUES('',160,'TR','Troms');
INSERT INTO zones VALUES('',160,'VA','Vest-Agder');
INSERT INTO zones VALUES('',160,'VF','Vestfold');


#Oman
INSERT INTO zones VALUES('',161,'DA','Ad Dakhiliyah');
INSERT INTO zones VALUES('',161,'BA','Al Batinah');
INSERT INTO zones VALUES('',161,'WU','Al Wusta');
INSERT INTO zones VALUES('',161,'SH','Ash Sharqiyah');
INSERT INTO zones VALUES('',161,'ZA','Az Zahirah');
INSERT INTO zones VALUES('',161,'MA','Masqat');
INSERT INTO zones VALUES('',161,'MU','Musandam');
INSERT INTO zones VALUES('',161,'ZU','Zufar');


#Pakistan

INSERT INTO zones VALUES('',162,'B','Balochistan');
INSERT INTO zones VALUES('',162,'T','Federally Administered Tribal Areas');
INSERT INTO zones VALUES('',162,'I','Islamabad Capital Territory');
INSERT INTO zones VALUES('',162,'N','North-West Frontier');
INSERT INTO zones VALUES('',162,'P','Punjab');
INSERT INTO zones VALUES('',162,'S','Sindh ');


#Palau
INSERT INTO zones VALUES('',163,'AM','Aimeliik');
INSERT INTO zones VALUES('',163,'AR','Airai');
INSERT INTO zones VALUES('',163,'AN','Angaur');
INSERT INTO zones VALUES('',163,'HA','Hatohobei');
INSERT INTO zones VALUES('',163,'KA','Kayangel');
INSERT INTO zones VALUES('',163,'KO','Koror');
INSERT INTO zones VALUES('',163,'ME','Melekeok');
INSERT INTO zones VALUES('',163,'NA','Ngaraard');
INSERT INTO zones VALUES('',163,'NG','Ngarchelong');
INSERT INTO zones VALUES('',163,'ND','Ngardmau');
INSERT INTO zones VALUES('',163,'NT','Ngatpang');
INSERT INTO zones VALUES('',163,'NC','Ngchesar');
INSERT INTO zones VALUES('',163,'NR','Ngeremlengui');
INSERT INTO zones VALUES('',163,'NW','Ngiwal');
INSERT INTO zones VALUES('',163,'PE','Peleliu');
INSERT INTO zones VALUES('',163,'SO','Sonsorol');


#Panama

INSERT INTO zones VALUES('',164,'BT','Bocas del Toro');
INSERT INTO zones VALUES('',164,'CH','Chiriqui');
INSERT INTO zones VALUES('',164,'CC','Cocle');
INSERT INTO zones VALUES('',164,'CL','Colon');
INSERT INTO zones VALUES('',164,'DA','Darien');
INSERT INTO zones VALUES('',164,'HE','Herrera');
INSERT INTO zones VALUES('',164,'LS','Los Santos');
INSERT INTO zones VALUES('',164,'PA','Panama');
INSERT INTO zones VALUES('',164,'SB','San Blas');
INSERT INTO zones VALUES('',164,'VG','Veraguas');


#Papua New Guinea

INSERT INTO zones VALUES('',165,'BV','Bougainville');
INSERT INTO zones VALUES('',165,'CE','Central');
INSERT INTO zones VALUES('',165,'CH','Chimbu');
INSERT INTO zones VALUES('',165,'EH','Eastern Highlands');
INSERT INTO zones VALUES('',165,'EB','East New Britain');
INSERT INTO zones VALUES('',165,'ES','East Sepik');
INSERT INTO zones VALUES('',165,'EN','Enga');
INSERT INTO zones VALUES('',165,'GU','Gulf');
INSERT INTO zones VALUES('',165,'MD','Madang');
INSERT INTO zones VALUES('',165,'MN','Manus');
INSERT INTO zones VALUES('',165,'MB','Milne Bay');
INSERT INTO zones VALUES('',165,'MR','Morobe');
INSERT INTO zones VALUES('',165,'NC','National Capital');
INSERT INTO zones VALUES('',165,'NI','New Ireland');
INSERT INTO zones VALUES('',165,'NO','Northern');
INSERT INTO zones VALUES('',165,'SA','Sandaun');
INSERT INTO zones VALUES('',165,'SH','Southern Highlands');
INSERT INTO zones VALUES('',165,'WE','Western');
INSERT INTO zones VALUES('',165,'WH','Western Highlands');
INSERT INTO zones VALUES('',165,'WB','West New Britain');


#Paraguay
INSERT INTO zones VALUES('',166,'AG','Alto Paraguay');
INSERT INTO zones VALUES('',166,'AN','Alto Parana')
INSERT INTO zones VALUES('',166,'AM','Amambay');
INSERT INTO zones VALUES('',166,'AS','Asuncion');
INSERT INTO zones VALUES('',166,'BO','Boqueron');
INSERT INTO zones VALUES('',166,'CG','Caaguazu');
INSERT INTO zones VALUES('',166,'CZ','Caazapa');
INSERT INTO zones VALUES('',166,'CN','Canindeyu');
INSERT INTO zones VALUES('',166,'CE','Central');
INSERT INTO zones VALUES('',166,'CC','Concepcion');
INSERT INTO zones VALUES('',166,'CD','Cordillera');
INSERT INTO zones VALUES('',166,'GU','Guaira');
INSERT INTO zones VALUES('',166,'IT','Itapua');
INSERT INTO zones VALUES('',166,'MI','Misiones');
INSERT INTO zones VALUES('',166,'NE','Neembucu');
INSERT INTO zones VALUES('',166,'PA','Paraguari');
INSERT INTO zones VALUES('',166,'PH','Presidente Hayes');
INSERT INTO zones VALUES('',166,'SP','San Pedro');


#Peru

INSERT INTO zones VALUES('',167,'AM','Amazonas');
INSERT INTO zones VALUES('',167,'AN','Ancash');
INSERT INTO zones VALUES('',167,'AP','Apurimac');
INSERT INTO zones VALUES('',167,'AR','Arequipa');
INSERT INTO zones VALUES('',167,'AY','Ayacucho');
INSERT INTO zones VALUES('',167,'CJ','Cajamarca');
INSERT INTO zones VALUES('',167,'CL','Callao');
INSERT INTO zones VALUES('',167,'CU','Cusco');
INSERT INTO zones VALUES('',167,'HV','Huancavelica');
INSERT INTO zones VALUES('',167,'HO','Huanuco');
INSERT INTO zones VALUES('',167,'IC','Ica');
INSERT INTO zones VALUES('',167,'JU','Junin');
INSERT INTO zones VALUES('',167,'LD','La Libertad');
INSERT INTO zones VALUES('',167,'LY','Lambayeque');
INSERT INTO zones VALUES('',167,'LI','Lima');
INSERT INTO zones VALUES('',167,'LO','Loreto');
INSERT INTO zones VALUES('',167,'MD','Madre de Dios');
INSERT INTO zones VALUES('',167,'MO','Moquegua');
INSERT INTO zones VALUES('',167,'PA','Pasco');
INSERT INTO zones VALUES('',167,'PI','Piura');
INSERT INTO zones VALUES('',167,'PU','Puno');
INSERT INTO zones VALUES('',167,'SM','San Martin');
INSERT INTO zones VALUES('',167,'TA','Tacna');
INSERT INTO zones VALUES('',167,'TU','Tumbes');
INSERT INTO zones VALUES('',167,'UC','Ucayali');


#Philippines

INSERT INTO zones VALUES('',168,'ABR','Abra');
INSERT INTO zones VALUES('',168,'ANO','Agusan del Norte');
INSERT INTO zones VALUES('',168,'ASU','Agusan del Sur');
INSERT INTO zones VALUES('',168,'AKL','Aklan');
INSERT INTO zones VALUES('',168,'ALB','Albay');
INSERT INTO zones VALUES('',168,'ANT','Antique');
INSERT INTO zones VALUES('',168,'APY','Apayao');
INSERT INTO zones VALUES('',168,'AUR','Aurora');
INSERT INTO zones VALUES('',168,'BAS','Basilan');
INSERT INTO zones VALUES('',168,'BTA','Bataan');
INSERT INTO zones VALUES('',168,'BTE','Batanes');
INSERT INTO zones VALUES('',168,'BTG','Batangas');
INSERT INTO zones VALUES('',168,'BLR','Biliran');
INSERT INTO zones VALUES('',168,'BEN','Benguet');
INSERT INTO zones VALUES('',168,'BOL','Bohol');
INSERT INTO zones VALUES('',168,'BUK','Bukidnon');
INSERT INTO zones VALUES('',168,'BUL','Bulacan');
INSERT INTO zones VALUES('',168,'CAG','Cagayan');
INSERT INTO zones VALUES('',168,'CNO','Camarines Norte');
INSERT INTO zones VALUES('',168,'CSU','Camarines Sur');
INSERT INTO zones VALUES('',168,'CAM','Camiguin');
INSERT INTO zones VALUES('',168,'CAP','Capiz');
INSERT INTO zones VALUES('',168,'CAT','Catanduanes');
INSERT INTO zones VALUES('',168,'CAV','Cavite');
INSERT INTO zones VALUES('',168,'CEB','Cebu');
INSERT INTO zones VALUES('',168,'CMP','Compostela');
INSERT INTO zones VALUES('',168,'DNO','Davao del Norte');
INSERT INTO zones VALUES('',168,'DSU','Davao del Sur');
INSERT INTO zones VALUES('',168,'DOR','Davao Oriental');
INSERT INTO zones VALUES('',168,'ESA','Eastern Samar');
INSERT INTO zones VALUES('',168,'GUI','Guimaras');
INSERT INTO zones VALUES('',168,'IFU','Ifugao');
INSERT INTO zones VALUES('',168,'INO','Ilocos Norte');
INSERT INTO zones VALUES('',168,'ISU','Ilocos Sur');
INSERT INTO zones VALUES('',168,'ILO','Iloilo');
INSERT INTO zones VALUES('',168,'ISA','Isabela');
INSERT INTO zones VALUES('',168,'KAL','Kalinga');
INSERT INTO zones VALUES('',168,'LAG','Laguna');
INSERT INTO zones VALUES('',168,'LNO','Lanao del Norte');
INSERT INTO zones VALUES('',168,'LSU','Lanao del Sur');
INSERT INTO zones VALUES('',168,'UNI','La Union');
INSERT INTO zones VALUES('',168,'LEY','Leyte');
INSERT INTO zones VALUES('',168,'MAG','Maguindanao');
INSERT INTO zones VALUES('',168,'MRN','Marinduque');
INSERT INTO zones VALUES('',168,'MSB','Masbate');
INSERT INTO zones VALUES('',168,'MIC','Mindoro Occidental');
INSERT INTO zones VALUES('',168,'MIR','Mindoro Oriental');
INSERT INTO zones VALUES('',168,'MSC','Misamis Occidental');
INSERT INTO zones VALUES('',168,'MOR','Misamis Oriental');
INSERT INTO zones VALUES('',168,'MOP','Mountain');
INSERT INTO zones VALUES('',168,'NOC','Negros Occidental');
INSERT INTO zones VALUES('',168,'NOR','Negros Oriental');
INSERT INTO zones VALUES('',168,'NCT','North Cotabato');
INSERT INTO zones VALUES('',168,'NSM','Northern Samar');
INSERT INTO zones VALUES('',168,'NEC','Nueva Ecija');
INSERT INTO zones VALUES('',168,'NVZ','Nueva Vizcaya');
INSERT INTO zones VALUES('',168,'PLW','Palawan');
INSERT INTO zones VALUES('',168,'PMP','Pampanga');
INSERT INTO zones VALUES('',168,'PNG','Pangasinan');
INSERT INTO zones VALUES('',168,'QZN','Quezon');
INSERT INTO zones VALUES('',168,'QRN','Quirino');
INSERT INTO zones VALUES('',168,'RIZ','Rizal');
INSERT INTO zones VALUES('',168,'ROM','Romblon');
INSERT INTO zones VALUES('',168,'SMR','Samar');
INSERT INTO zones VALUES('',168,'SRG','Sarangani');
INSERT INTO zones VALUES('',168,'SQJ','Siquijor');
INSERT INTO zones VALUES('',168,'SRS','Sorsogon');
INSERT INTO zones VALUES('',168,'SCO','South Cotabato');
INSERT INTO zones VALUES('',168,'SLE','Southern Leyte');
INSERT INTO zones VALUES('',168,'SKU','Sultan Kudarat');
INSERT INTO zones VALUES('',168,'SLU','Sulu');
INSERT INTO zones VALUES('',168,'SNO','Surigao del Norte');
INSERT INTO zones VALUES('',168,'SSU','Surigao del Sur');
INSERT INTO zones VALUES('',168,'TAR','Tarlac');
INSERT INTO zones VALUES('',168,'TAW','Tawi-Tawi');
INSERT INTO zones VALUES('',168,'ZBL','Zambales');
INSERT INTO zones VALUES('',168,'ZNO','Zamboanga del Norte');
INSERT INTO zones VALUES('',168,'ZSU','Zamboanga del Sur');
INSERT INTO zones VALUES('',168,'ZSI','Zamboanga Sibugay');


#Poland
INSERT INTO zones VALUES('',170,'DO','Dolnoslaskie');
INSERT INTO zones VALUES('',170,'KP','Kujawsko-Pomorskie');
INSERT INTO zones VALUES('',170,'LO','Lodzkie');
INSERT INTO zones VALUES('',170,'LL','Lubelskie');
INSERT INTO zones VALUES('',170,'LU','Lubuskie');
INSERT INTO zones VALUES('',170,'ML','Malopolskie');
INSERT INTO zones VALUES('',170,'MZ','Mazowieckie');
INSERT INTO zones VALUES('',170,'OP','Opolskie');
INSERT INTO zones VALUES('',170,'PP','Podkarpackie');
INSERT INTO zones VALUES('',170,'PL','Podlaskie');
INSERT INTO zones VALUES('',170,'PM','Pomorskie');
INSERT INTO zones VALUES('',170,'SL','Slaskie');
INSERT INTO zones VALUES('',170,'SW','Swietokrzyskie');
INSERT INTO zones VALUES('',170,'WM','Warminsko-Mazurskie');
INSERT INTO zones VALUES('',170,'WP','Wielkopolskie');
INSERT INTO zones VALUES('',170,'ZA','Zachodniopomorskie');


#Saint Pierre and Miquelon
INSERT INTO zones VALUES('',198,'P','Saint Pierre');
INSERT INTO zones VALUES('',198,'M','Miquelon');


#Portugal

INSERT INTO zones VALUES('',171,'AC','A&ccedil;ores');
INSERT INTO zones VALUES('',171,'AV','Aveiro');
INSERT INTO zones VALUES('',171,'BE','Beja');
INSERT INTO zones VALUES('',171,'BR','Braga');
INSERT INTO zones VALUES('',171,'BA','Bragan&ccedil;a');
INSERT INTO zones VALUES('',171,'CB','Castelo Branco');
INSERT INTO zones VALUES('',171,'CO','Coimbra');
INSERT INTO zones VALUES('',171,'EV','&Eacute;vora');
INSERT INTO zones VALUES('',171,'FA','Faro');
INSERT INTO zones VALUES('',171,'GU','Guarda');
INSERT INTO zones VALUES('',171,'LE','Leiria');
INSERT INTO zones VALUES('',171,'LI','Lisboa');
INSERT INTO zones VALUES('',171,'ME','Madeira');
INSERT INTO zones VALUES('',171,'PO','Portalegre');
INSERT INTO zones VALUES('',171,'PR','Porto');
INSERT INTO zones VALUES('',171,'SA','Santar&eacute;m');
INSERT INTO zones VALUES('',171,'SE','Set&uacute;bal');
INSERT INTO zones VALUES('',171,'VC','Viana do Castelo');
INSERT INTO zones VALUES('',171,'VR','Vila Real');
INSERT INTO zones VALUES('',171,'VI','Viseu');


#Qatar

INSERT INTO zones VALUES('',173,'DW','Ad Dawhah');
INSERT INTO zones VALUES('',173,'GW','Al Ghuwayriyah');
INSERT INTO zones VALUES('',173,'JM','Al Jumayliyah');
INSERT INTO zones VALUES('',173,'KR','Al Khawr');
INSERT INTO zones VALUES('',173,'WK','Al Wakrah');
INSERT INTO zones VALUES('',173,'RN','Ar Rayyan');
INSERT INTO zones VALUES('',173,'JB','Jarayan al Batinah');
INSERT INTO zones VALUES('',173,'MS','Madinat ash Shamal');
INSERT INTO zones VALUES('',173,'UD','Umm Sa\'id');
INSERT INTO zones VALUES('',173,'UL','Umm Salal');


#Romania

INSERT INTO zones VALUES('',175,'AB','Alba');
INSERT INTO zones VALUES('',175,'AR','Arad');
INSERT INTO zones VALUES('',175,'AG','Arges');
INSERT INTO zones VALUES('',175,'BC','Bacau');
INSERT INTO zones VALUES('',175,'BH','Bihor');
INSERT INTO zones VALUES('',175,'BN','Bistrita-Nasaud');
INSERT INTO zones VALUES('',175,'BT','Botosani');
INSERT INTO zones VALUES('',175,'BV','Brasov');
INSERT INTO zones VALUES('',175,'BR','Braila');
INSERT INTO zones VALUES('',175,'B','Bucuresti');
INSERT INTO zones VALUES('',175,'BZ','Buzau');
INSERT INTO zones VALUES('',175,'CS','Caras-Severin');
INSERT INTO zones VALUES('',175,'CL','Calarasi');
INSERT INTO zones VALUES('',175,'CJ','Cluj');
INSERT INTO zones VALUES('',175,'CT','Constanta');
INSERT INTO zones VALUES('',175,'CV','Covasna');
INSERT INTO zones VALUES('',175,'DB','Dimbovta');
INSERT INTO zones VALUES('',175,'DJ','Dolj');
INSERT INTO zones VALUES('',175,'GL','Galati');
INSERT INTO zones VALUES('',175,'GR','Giurgiu');
INSERT INTO zones VALUES('',175,'GJ','Gorj');
INSERT INTO zones VALUES('',175,'HR','Harghita');
INSERT INTO zones VALUES('',175,'HD','Hunedoara');
INSERT INTO zones VALUES('',175,'IL','Ialomita');
INSERT INTO zones VALUES('',175,'IS','Iasi');
INSERT INTO zones VALUES('',175,'IF','Ilfov');
INSERT INTO zones VALUES('',175,'MM','Maramures');
INSERT INTO zones VALUES('',175,'MH','Mehedinti');
INSERT INTO zones VALUES('',175,'MS','Mures');
INSERT INTO zones VALUES('',175,'NT','Neamt');
INSERT INTO zones VALUES('',175,'OT','Olt');
INSERT INTO zones VALUES('',175,'PH','Prahova');
INSERT INTO zones VALUES('',175,'SM','Satu-Mare');
INSERT INTO zones VALUES('',175,'SJ','Salaj');
INSERT INTO zones VALUES('',175,'SB','Sibiu');
INSERT INTO zones VALUES('',175,'SV','Suceava');
INSERT INTO zones VALUES('',175,'TR','Teleorman');
INSERT INTO zones VALUES('',175,'TM','Timis');
INSERT INTO zones VALUES('',175,'TL','Tulcea');
INSERT INTO zones VALUES('',175,'VS','Vaslui');
INSERT INTO zones VALUES('',175,'VL','Valcea');
INSERT INTO zones VALUES('',175,'VN','Vrancea');


#Russian Federation

INSERT INTO zones VALUES('',176,'AB','Abakan');
INSERT INTO zones VALUES('',176,'AG','Aginskoye');
INSERT INTO zones VALUES('',176,'AN','Anadyr');
INSERT INTO zones VALUES('',176,'AR','Arkahangelsk');
INSERT INTO zones VALUES('',176,'AS','Astrakhan');
INSERT INTO zones VALUES('',176,'BA','Barnaul');
INSERT INTO zones VALUES('',176,'BE','Belgorod');
INSERT INTO zones VALUES('',176,'BI','Birobidzhan');
INSERT INTO zones VALUES('',176,'BL','Blagoveshchensk');
INSERT INTO zones VALUES('',176,'BR','Bryansk');
INSERT INTO zones VALUES('',176,'CH','Cheboksary');
INSERT INTO zones VALUES('',176,'CL','Chelyabinsk');
INSERT INTO zones VALUES('',176,'CR','Cherkessk');
INSERT INTO zones VALUES('',176,'CI','Chita');
INSERT INTO zones VALUES('',176,'DU','Dudinka');
INSERT INTO zones VALUES('',176,'EL','Elista');
INSERT INTO zones VALUES('',176,'GO','Gomo-Altaysk');
INSERT INTO zones VALUES('',176,'GA','Gorno-Altaysk');
INSERT INTO zones VALUES('',176,'GR','Groznyy');
INSERT INTO zones VALUES('',176,'IR','Irkutsk');
INSERT INTO zones VALUES('',176,'IV','Ivanovo');
INSERT INTO zones VALUES('',176,'IZ','Izhevsk');
INSERT INTO zones VALUES('',176,'KA','Kalinigrad');
INSERT INTO zones VALUES('',176,'KL','Kaluga');
INSERT INTO zones VALUES('',176,'KS','Kasnodar');
INSERT INTO zones VALUES('',176,'KZ','Kazan');
INSERT INTO zones VALUES('',176,'KE','Kemerovo');
INSERT INTO zones VALUES('',176,'KH','Khabarovsk');
INSERT INTO zones VALUES('',176,'KM','Khanty-Mansiysk');
INSERT INTO zones VALUES('',176,'KO','Kostroma');
INSERT INTO zones VALUES('',176,'KR','Krasnodar');
INSERT INTO zones VALUES('',176,'KN','Krasnoyarsk');
INSERT INTO zones VALUES('',176,'KU','Kudymkar');
INSERT INTO zones VALUES('',176,'KG','Kurgan');
INSERT INTO zones VALUES('',176,'KK','Kursk');
INSERT INTO zones VALUES('',176,'KY','Kyzyl');
INSERT INTO zones VALUES('',176,'LI','Lipetsk');
INSERT INTO zones VALUES('',176,'MA','Magadan');
INSERT INTO zones VALUES('',176,'MK','Makhachkala');
INSERT INTO zones VALUES('',176,'MY','Maykop');
INSERT INTO zones VALUES('',176,'MO','Moscow');
INSERT INTO zones VALUES('',176,'MU','Murmansk');
INSERT INTO zones VALUES('',176,'NA','Nalchik');
INSERT INTO zones VALUES('',176,'NR','Naryan Mar');
INSERT INTO zones VALUES('',176,'NZ','Nazran');
INSERT INTO zones VALUES('',176,'NI','Nizhniy Novgorod');
INSERT INTO zones VALUES('',176,'NO','Novgorod');
INSERT INTO zones VALUES('',176,'NV','Novosibirsk');
INSERT INTO zones VALUES('',176,'OM','Omsk');
INSERT INTO zones VALUES('',176,'OR','Orel');
INSERT INTO zones VALUES('',176,'OE','Orenburg');
INSERT INTO zones VALUES('',176,'PA','Palana');
INSERT INTO zones VALUES('',176,'PE','Penza');
INSERT INTO zones VALUES('',176,'PR','Perm');
INSERT INTO zones VALUES('',176,'PK','Petropavlovsk-Kamchatskiy');
INSERT INTO zones VALUES('',176,'PT','Petrozavodsk');
INSERT INTO zones VALUES('',176,'PS','Pskov');
INSERT INTO zones VALUES('',176,'RO','Rostov-na-Donu');
INSERT INTO zones VALUES('',176,'RY','Ryazan');
INSERT INTO zones VALUES('',176,'SL','Salekhard');
INSERT INTO zones VALUES('',176,'SA','Samara');
INSERT INTO zones VALUES('',176,'SR','Saransk');
INSERT INTO zones VALUES('',176,'SV','Saratov');
INSERT INTO zones VALUES('',176,'SM','Smolensk');
INSERT INTO zones VALUES('',176,'SP','St. Petersburg');
INSERT INTO zones VALUES('',176,'ST','Stavropol');
INSERT INTO zones VALUES('',176,'SY','Syktyvkar');
INSERT INTO zones VALUES('',176,'TA','Tambov');
INSERT INTO zones VALUES('',176,'TO','Tomsk');
INSERT INTO zones VALUES('',176,'TU','Tula');
INSERT INTO zones VALUES('',176,'TR','Tura');
INSERT INTO zones VALUES('',176,'TV','Tver');
INSERT INTO zones VALUES('',176,'TY','Tyumen');
INSERT INTO zones VALUES('',176,'UF','Ufa');
INSERT INTO zones VALUES('',176,'UL','Ul\'yanovsk');
INSERT INTO zones VALUES('',176,'UU','Ulan-Ude');
INSERT INTO zones VALUES('',176,'US','Ust\'-Ordynskiy');
INSERT INTO zones VALUES('',176,'VL','Vladikavkaz');
INSERT INTO zones VALUES('',176,'VA','Vladimir');
INSERT INTO zones VALUES('',176,'VV','Vladivostok');
INSERT INTO zones VALUES('',176,'VG','Volgograd');
INSERT INTO zones VALUES('',176,'VD','Vologda');
INSERT INTO zones VALUES('',176,'VO','Voronezh');
INSERT INTO zones VALUES('',176,'VY','Vyatka');
INSERT INTO zones VALUES('',176,'YA','Yakutsk');
INSERT INTO zones VALUES('',176,'YR','Yaroslavl');
INSERT INTO zones VALUES('',176,'YE','Yekaterinburg');
INSERT INTO zones VALUES('',176,'YO','Yoshkar-Ola');


#Rwanda

INSERT INTO zones VALUES('',177,'BU','Butare');
INSERT INTO zones VALUES('',177,'BY','Byumba');
INSERT INTO zones VALUES('',177,'CY','Cyangugu');
INSERT INTO zones VALUES('',177,'GK','Gikongoro');
INSERT INTO zones VALUES('',177,'GS','Gisenyi');
INSERT INTO zones VALUES('',177,'GT','Gitarama');
INSERT INTO zones VALUES('',177,'KG','Kibungo');
INSERT INTO zones VALUES('',177,'KY','Kibuye');
INSERT INTO zones VALUES('',177,'KR','Kigali Rurale');
INSERT INTO zones VALUES('',177,'KV','Kigali-ville');
INSERT INTO zones VALUES('',177,'RU','Ruhengeri');
INSERT INTO zones VALUES('',177,'UM','Umutara');


#Saint Kitts and Nevis

INSERT INTO zones VALUES('',178,'CCN','Christ Church Nichola Town');
INSERT INTO zones VALUES('',178,'SAS','Saint Anne Sandy Point');
INSERT INTO zones VALUES('',178,'SGB','Saint George Basseterre');
INSERT INTO zones VALUES('',178,'SGG','Saint George Gingerland');
INSERT INTO zones VALUES('',178,'SJW','Saint James Windward');
INSERT INTO zones VALUES('',178,'SJC','Saint John Capesterre');
INSERT INTO zones VALUES('',178,'SJF','Saint John Figtree');
INSERT INTO zones VALUES('',178,'SMC','Saint Mary Cayon');
INSERT INTO zones VALUES('',178,'CAP','Saint Paul Capesterre');
INSERT INTO zones VALUES('',178,'CHA','Saint Paul Charlestown');
INSERT INTO zones VALUES('',178,'SPB','Saint Peter Basseterre');
INSERT INTO zones VALUES('',178,'STL','Saint Thomas Lowland');
INSERT INTO zones VALUES('',178,'STM','Saint Thomas Middle Island');
INSERT INTO zones VALUES('',178,'TPP','Trinity Palmetto Point');


#Saint Lucia
INSERT INTO zones VALUES('',179,'AR','Anse-la-Raye');
INSERT INTO zones VALUES('',179,'CA','Castries');
INSERT INTO zones VALUES('',179,'CH','Choiseul');
INSERT INTO zones VALUES('',179,'DA','Dauphin');
INSERT INTO zones VALUES('',179,'DE','Dennery');
INSERT INTO zones VALUES('',179,'GI','Gros-Islet');
INSERT INTO zones VALUES('',179,'LA','Laborie');
INSERT INTO zones VALUES('',179,'MI','Micoud');
INSERT INTO zones VALUES('',179,'PR','Praslin');
INSERT INTO zones VALUES('',179,'SO','Soufriere');
INSERT INTO zones VALUES('',179,'VF','Vieux-Fort');


#Saint Vincent and the Grenadines

INSERT INTO zones VALUES('',180,'C','Charlotte');
INSERT INTO zones VALUES('',180,'R','Grenadines');
INSERT INTO zones VALUES('',180,'A','Saint Andrew');
INSERT INTO zones VALUES('',180,'D','Saint David');
INSERT INTO zones VALUES('',180,'G','Saint George');
INSERT INTO zones VALUES('',180,'P','Saint Patrick');


#Samoa
INSERT INTO zones VALUES('',181,'AN','A\'ana');
INSERT INTO zones VALUES('',181,'AI','Aiga-i-le-Tai');
INSERT INTO zones VALUES('',181,'AT','Atua');
INSERT INTO zones VALUES('',181,'FA','Fa\'asaleleaga');
INSERT INTO zones VALUES('',181,'GE','Gaga\'emauga');
INSERT INTO zones VALUES('',181,'GF','Gagaifomauga');
INSERT INTO zones VALUES('',181,'PA','Palauli');
INSERT INTO zones VALUES('',181,'SA','Satupa\'itea');
INSERT INTO zones VALUES('',181,'TU','Tuamasaga');
INSERT INTO zones VALUES('',181,'VF','Va\'a-o-Fonoti');
INSERT INTO zones VALUES('',181,'VS','Vaisigano');


#San Marino

INSERT INTO zones VALUES('',182,'AC','Acquaviva');
INSERT INTO zones VALUES('',182,'BM','Borgo Maggiore');
INSERT INTO zones VALUES('',182,'CH','Chiesanuova');
INSERT INTO zones VALUES('',182,'DO','Domagnano');
INSERT INTO zones VALUES('',182,'FA','Faetano');
INSERT INTO zones VALUES('',182,'FI','Fiorentino');
INSERT INTO zones VALUES('',182,'MO','Montegiardino');
INSERT INTO zones VALUES('',182,'SM','Citta di San Marino');
INSERT INTO zones VALUES('',182,'SE','Serravalle');


#Sao Tome and Principe
INSERT INTO zones VALUES('',183,'S','Sao Tome');
INSERT INTO zones VALUES('',183,'P','Principe');


#Saudia Arabia
INSERT INTO zones VALUES('',184,'BH','Al Bahah');
INSERT INTO zones VALUES('',184,'HS','Al Hudud ash Shamaliyah');
INSERT INTO zones VALUES('',184,'JF','Al Jawf');
INSERT INTO zones VALUES('',184,'MD','Al Madinah');
INSERT INTO zones VALUES('',184,'QS','Al Qasim');
INSERT INTO zones VALUES('',184,'RD','Ar Riyad');
INSERT INTO zones VALUES('',184,'AQ','Ash Sharqiyah (Eastern)');
INSERT INTO zones VALUES('',184,'AS','\'Asir');
INSERT INTO zones VALUES('',184,'HL','Ha\'il');
INSERT INTO zones VALUES('',184,'JZ','Jizan');
INSERT INTO zones VALUES('',184,'ML','Makkah');
INSERT INTO zones VALUES('',184,'NR','Najran');
INSERT INTO zones VALUES('',184,'TB','Tabuk');


#Senegal

INSERT INTO zones VALUES('',185,'DA','Dakar');
INSERT INTO zones VALUES('',185,'DI','Diourbel');
INSERT INTO zones VALUES('',185,'FA','Fatick');
INSERT INTO zones VALUES('',185,'KA','Kaolack');
INSERT INTO zones VALUES('',185,'KO','Kolda');
INSERT INTO zones VALUES('',185,'LO','Louga');
INSERT INTO zones VALUES('',185,'MA','Matam');
INSERT INTO zones VALUES('',185,'SL','Saint-Louis');
INSERT INTO zones VALUES('',185,'TA','Tambacounda');
INSERT INTO zones VALUES('',185,'TH','Thies ');
INSERT INTO zones VALUES('',185,'ZI','Ziguinchor');


#Seychelles

INSERT INTO zones VALUES('',186,'AP','Anse aux Pins');
INSERT INTO zones VALUES('',186,'AB','Anse Boileau');
INSERT INTO zones VALUES('',186,'AE','Anse Etoile');
INSERT INTO zones VALUES('',186,'AL','Anse Louis');
INSERT INTO zones VALUES('',186,'AR','Anse Royale');
INSERT INTO zones VALUES('',186,'BL','Baie Lazare');
INSERT INTO zones VALUES('',186,'BS','Baie Sainte Anne');
INSERT INTO zones VALUES('',186,'BV','Beau Vallon');
INSERT INTO zones VALUES('',186,'BA','Bel Air');
INSERT INTO zones VALUES('',186,'BO','Bel Ombre');
INSERT INTO zones VALUES('',186,'CA','Cascade');
INSERT INTO zones VALUES('',186,'GL','Glacis');
INSERT INTO zones VALUES('',186,'GM','Grand\' Anse (on Mahe)');
INSERT INTO zones VALUES('',186,'GP','Grand\' Anse (on Praslin)');
INSERT INTO zones VALUES('',186,'DG','La Digue');
INSERT INTO zones VALUES('',186,'RA','La Riviere Anglaise');
INSERT INTO zones VALUES('',186,'MB','Mont Buxton');
INSERT INTO zones VALUES('',186,'MF','Mont Fleuri');
INSERT INTO zones VALUES('',186,'PL','Plaisance');
INSERT INTO zones VALUES('',186,'PR','Pointe La Rue');
INSERT INTO zones VALUES('',186,'PG','Port Glaud');
INSERT INTO zones VALUES('',186,'SL','Saint Louis');
INSERT INTO zones VALUES('',186,'TA','Takamaka');


#Sierra Leone

INSERT INTO zones VALUES('',187,'E','Eastern');
INSERT INTO zones VALUES('',187,'N','Northern');
INSERT INTO zones VALUES('',187,'S','Southern');
INSERT INTO zones VALUES('',187,'W','Western');


#Slovakia

INSERT INTO zones VALUES('',189,'BA','Banskobystricky');
INSERT INTO zones VALUES('',189,'BR','Bratislavsky');
INSERT INTO zones VALUES('',189,'KO','Kosicky');
INSERT INTO zones VALUES('',189,'NI','Nitriansky');
INSERT INTO zones VALUES('',189,'PR','Presovsky');
INSERT INTO zones VALUES('',189,'TC','Trenciansky');
INSERT INTO zones VALUES('',189,'TV','Trnavsky');
INSERT INTO zones VALUES('',189,'ZI','Zilinsky');


#Solomon Islands

INSERT INTO zones VALUES('',191,'CE','Central');
INSERT INTO zones VALUES('',191,'CH','Choiseul');
INSERT INTO zones VALUES('',191,'GC','Guadalcanal');
INSERT INTO zones VALUES('',191,'HO','Honiara');
INSERT INTO zones VALUES('',191,'IS','Isabel');
INSERT INTO zones VALUES('',191,'MK','Makira');
INSERT INTO zones VALUES('',191,'ML','Malaita');
INSERT INTO zones VALUES('',191,'RB','Rennell and Bellona');
INSERT INTO zones VALUES('',191,'TM','Temotu');
INSERT INTO zones VALUES('',191,'WE','Western');


#Somalia
INSERT INTO zones VALUES('',192,'AW','Awdal');
INSERT INTO zones VALUES('',192,'BK','Bakool');
INSERT INTO zones VALUES('',192,'BN','Banaadir');
INSERT INTO zones VALUES('',192,'BR','Bari');
INSERT INTO zones VALUES('',192,'BY','Bay');
INSERT INTO zones VALUES('',192,'GA','Galguduud');
INSERT INTO zones VALUES('',192,'GE','Gedo');
INSERT INTO zones VALUES('',192,'HI','Hiiraan');
INSERT INTO zones VALUES('',192,'JD','Jubbada Dhexe');
INSERT INTO zones VALUES('',192,'JH','Jubbada Hoose');
INSERT INTO zones VALUES('',192,'MU','Mudug');
INSERT INTO zones VALUES('',192,'NU','Nugaal');
INSERT INTO zones VALUES('',192,'SA','Sanaag');
INSERT INTO zones VALUES('',192,'SD','Shabeellaha Dhexe');
INSERT INTO zones VALUES('',192,'SH','Shabeellaha Hoose');
INSERT INTO zones VALUES('',192,'SL','Sool');
INSERT INTO zones VALUES('',192,'TO','Togdheer');
INSERT INTO zones VALUES('',192,'WG','Woqooyi Galbeed');


#South Africa

INSERT INTO zones VALUES('',193,'EC','Eastern Cape');
INSERT INTO zones VALUES('',193,'FS','Free State');
INSERT INTO zones VALUES('',193,'GT','Gauteng');
INSERT INTO zones VALUES('',193,'KN','KwaZulu-Natal');
INSERT INTO zones VALUES('',193,'LP','Limpopo');
INSERT INTO zones VALUES('',193,'MP','Mpumalanga');
INSERT INTO zones VALUES('',193,'NW','North West');
INSERT INTO zones VALUES('',193,'NC','Northern Cape');
INSERT INTO zones VALUES('',193,'WC','Western Cape');


#Spain

INSERT INTO zones VALUES('', 195,'CA','A Coru&ntilde;a');
INSERT INTO zones VALUES('', 195,'AL','&Aacute;lava');
INSERT INTO zones VALUES('', 195,'AB','Albacete');
INSERT INTO zones VALUES('', 195,'AC','Alicante');
INSERT INTO zones VALUES('', 195,'AM','Almeria');
INSERT INTO zones VALUES('', 195,'AS','Asturias');
INSERT INTO zones VALUES('', 195,'AV','&Aacute;vila');
INSERT INTO zones VALUES('', 195,'BJ','Badajoz');
INSERT INTO zones VALUES('', 195,'IB','Baleares');
INSERT INTO zones VALUES('', 195,'BA','Barcelona');
INSERT INTO zones VALUES('', 195,'BU','Burgos');
INSERT INTO zones VALUES('', 195,'CC','C&aacute;ceres');
INSERT INTO zones VALUES('', 195,'CZ','C&aacute;diz');
INSERT INTO zones VALUES('', 195,'CT','Cantabria');
INSERT INTO zones VALUES('', 195,'CL','Castell&oacute;n');
INSERT INTO zones VALUES('', 195,'CE','Ceuta');
INSERT INTO zones VALUES('', 195,'CR','Ciudad Real');
INSERT INTO zones VALUES('', 195,'CD','C&oacute;rdoba');
INSERT INTO zones VALUES('', 195,'CU','Cuenca');
INSERT INTO zones VALUES('', 195,'GI','Girona');
INSERT INTO zones VALUES('', 195,'GD','Granada');
INSERT INTO zones VALUES('', 195,'GJ','Guadalajara');
INSERT INTO zones VALUES('', 195,'GP','Guip&uacute;zcoa');
INSERT INTO zones VALUES('', 195,'HL','Huelva');
INSERT INTO zones VALUES('', 195,'HS','Huesca');
INSERT INTO zones VALUES('', 195,'JN','Ja&eacute;n');
INSERT INTO zones VALUES('', 195,'RJ','La Rioja');
INSERT INTO zones VALUES('', 195,'PM','Las Palmas');
INSERT INTO zones VALUES('', 195,'LE','Leon');
INSERT INTO zones VALUES('', 195,'LL','Lleida');
INSERT INTO zones VALUES('', 195,'LG','Lugo');
INSERT INTO zones VALUES('', 195,'MD','Madrid');
INSERT INTO zones VALUES('', 195,'MA','Malaga');
INSERT INTO zones VALUES('', 195,'ML','Melilla');
INSERT INTO zones VALUES('', 195,'MU','Murcia');
INSERT INTO zones VALUES('', 195,'NV','Navarra');
INSERT INTO zones VALUES('', 195,'OU','Ourense');
INSERT INTO zones VALUES('', 195,'PL','Palencia');
INSERT INTO zones VALUES('', 195,'PO','Pontevedra');
INSERT INTO zones VALUES('', 195,'SL','Salamanca');
INSERT INTO zones VALUES('', 195,'SC','Santa Cruz de Tenerife');
INSERT INTO zones VALUES('', 195,'SG','Segovia');
INSERT INTO zones VALUES('', 195,'SV','Sevilla');
INSERT INTO zones VALUES('', 195,'SO','Soria');
INSERT INTO zones VALUES('', 195,'TA','Tarragona');
INSERT INTO zones VALUES('', 195,'TE','Teruel');
INSERT INTO zones VALUES('', 195,'TO','Toledo');
INSERT INTO zones VALUES('', 195,'VC','Valencia');
INSERT INTO zones VALUES('', 195,'VD','Valladolid');
INSERT INTO zones VALUES('', 195,'VZ','Vizcaya');
INSERT INTO zones VALUES('', 195,'ZM','Zamora');
INSERT INTO zones VALUES('', 195,'ZR','Zaragoza');


#Sri Lanka

INSERT INTO zones VALUES('',196,'CE','Central');
INSERT INTO zones VALUES('',196,'EA','Eastern');
INSERT INTO zones VALUES('',196,'NC','North Central');
INSERT INTO zones VALUES('',196,'NO','Northern');
INSERT INTO zones VALUES('',196,'NW','North Western');
INSERT INTO zones VALUES('',196,'SA','Sabaragamuwa');
INSERT INTO zones VALUES('',196,'SO','Southern');
INSERT INTO zones VALUES('',196,'UV','Uva');
INSERT INTO zones VALUES('',196,'WE','Western');


#Saint Helena

INSERT INTO zones VALUES('',197,'A','Ascension');
INSERT INTO zones VALUES('',197,'S','Saint Helena');
INSERT INTO zones VALUES('',197,'T','Tristan da Cunha');


#Sudan

INSERT INTO zones VALUES('',199,'ANL','A\'ali an Nil');
INSERT INTO zones VALUES('',199,'BAM','Al Bahr al Ahmar');
INSERT INTO zones VALUES('',199,'BRT','Al Buhayrat');
INSERT INTO zones VALUES('',199,'JZR','Al Jazirah');
INSERT INTO zones VALUES('',199,'KRT','Al Khartum');
INSERT INTO zones VALUES('',199,'QDR','Al Qadarif');
INSERT INTO zones VALUES('',199,'WDH','Al Wahdah');
INSERT INTO zones VALUES('',199,'ANB','An Nil al Abyad');
INSERT INTO zones VALUES('',199,'ANZ','An Nil al Azraq');
INSERT INTO zones VALUES('',199,'ASH','Ash Shamaliyah');
INSERT INTO zones VALUES('',199,'BJA','Bahr al Jabal');
INSERT INTO zones VALUES('',199,'GIS','Gharb al Istiwa\'iyah');
INSERT INTO zones VALUES('',199,'GBG','Gharb Bahr al Ghazal');
INSERT INTO zones VALUES('',199,'GDA','Gharb Darfur');
INSERT INTO zones VALUES('',199,'GKU','Gharb Kurdufan');
INSERT INTO zones VALUES('',199,'JDA','Janub Darfur');
INSERT INTO zones VALUES('',199,'JKU','Janub Kurdufan');
INSERT INTO zones VALUES('',199,'JQL','Junqali');
INSERT INTO zones VALUES('',199,'KSL','Kassala');
INSERT INTO zones VALUES('',199,'NNL','Nahr an Nil');
INSERT INTO zones VALUES('',199,'SBG','Shamal Bahr al Ghazal');
INSERT INTO zones VALUES('',199,'SDA','Shamal Darfur');
INSERT INTO zones VALUES('',199,'SKU','Shamal Kurdufan');
INSERT INTO zones VALUES('',199,'SIS','Sharq al Istiwa\'iyah');
INSERT INTO zones VALUES('',199,'SNR','Sinnar');
INSERT INTO zones VALUES('',199,'WRB','Warab');


#Suriname
INSERT INTO zones VALUES('',200,'BR','Brokopondo');
INSERT INTO zones VALUES('',200,'CM','Commewijne');
INSERT INTO zones VALUES('',200,'CR','Coronie');
INSERT INTO zones VALUES('',200,'MA','Marowijne');
INSERT INTO zones VALUES('',200,'NI','Nickerie');
INSERT INTO zones VALUES('',200,'PA','Para');
INSERT INTO zones VALUES('',200,'PM','Paramaribo');
INSERT INTO zones VALUES('',200,'SA','Saramacca');
INSERT INTO zones VALUES('',200,'SI','Sipaliwini');
INSERT INTO zones VALUES('',200,'WA','Wanica');

#Swaziland
INSERT INTO zones VALUES('',202,'H','Hhohho');
INSERT INTO zones VALUES('',202,'L','Lubombo');
INSERT INTO zones VALUES('',202,'M','Manzini');
INSERT INTO zones VALUES('',202,'S','Shishelweni');


#Sweden
INSERT INTO zones VALUES('',203,'BL','Blekinge');
INSERT INTO zones VALUES('',203,'DA','Dalama');
INSERT INTO zones VALUES('',203,'GA','Gavleborg');
INSERT INTO zones VALUES('',203,'GO','Gotland');
INSERT INTO zones VALUES('',203,'HA','Halland');
INSERT INTO zones VALUES('',203,'JA','Jamtland');
INSERT INTO zones VALUES('',203,'JO','Jonkping');
INSERT INTO zones VALUES('',203,'KA','Kalmar');
INSERT INTO zones VALUES('',203,'KR','Kronoberg');
INSERT INTO zones VALUES('',203,'NO','Norrbotten');
INSERT INTO zones VALUES('',203,'OR','Orebro');
INSERT INTO zones VALUES('',203,'OG','Ostergotland');
INSERT INTO zones VALUES('',203,'SK','Skane');
INSERT INTO zones VALUES('',203,'SO','Sodermanland');
INSERT INTO zones VALUES('',203,'ST','Stockholm');
INSERT INTO zones VALUES('',203,'UP','Uppdala');
INSERT INTO zones VALUES('',203,'VL','Varmland');
INSERT INTO zones VALUES('',203,'VB','Vasterbotten');
INSERT INTO zones VALUES('',203,'VN','Vasternorrland');
INSERT INTO zones VALUES('',203,'VM','Vastmanland');
INSERT INTO zones VALUES('',203,'VG','Vastra Gotaland');


#Switzerland
INSERT INTO zones VALUES('',204,'AG','Aargau');
INSERT INTO zones VALUES('',204,'AR','Appenzell Ausserrhoden');
INSERT INTO zones VALUES('',204,'AI','Appenzell Innerrhoden');
INSERT INTO zones VALUES('',204,'BS','Basel-Stadt');
INSERT INTO zones VALUES('',204,'BL','Basel-Landschaft');
INSERT INTO zones VALUES('',204,'BE','Bern');
INSERT INTO zones VALUES('',204,'FR','Fribourg');
INSERT INTO zones VALUES('',204,'GE','Gen&egrave;ve');
INSERT INTO zones VALUES('',204,'GL','Glarus');
INSERT INTO zones VALUES('',204,'GR','Graub&uuml;nden');
INSERT INTO zones VALUES('',204,'JU','Jura');
INSERT INTO zones VALUES('',204,'LU','Luzern');
INSERT INTO zones VALUES('',204,'NE','Neuch&agrave;tel');
INSERT INTO zones VALUES('',204,'NW','Nidwald');
INSERT INTO zones VALUES('',204,'OW','Obwald');
INSERT INTO zones VALUES('',204,'SG','St. Gallen');
INSERT INTO zones VALUES('',204,'SH','Schaffhausen');
INSERT INTO zones VALUES('',204,'SZ','Schwyz');
INSERT INTO zones VALUES('',204,'SO','Solothurn');
INSERT INTO zones VALUES('',204,'TG','Thurgau');
INSERT INTO zones VALUES('',204,'TI','Ticino');
INSERT INTO zones VALUES('',204,'UR','Uri');
INSERT INTO zones VALUES('',204,'VS','Valais');
INSERT INTO zones VALUES('',204,'VD','Vaud');
INSERT INTO zones VALUES('',204,'ZG','Zug');
INSERT INTO zones VALUES('',204,'ZH','Z&uuml;rich');


#Syrian Arab Republic
INSERT INTO zones VALUES('',205,'HA','Al Hasakah');
INSERT INTO zones VALUES('',205,'LA','Al Ladhiqiyah');
INSERT INTO zones VALUES('',205,'QU','Al Qunaytirah');
INSERT INTO zones VALUES('',205,'RQ','Ar Raqqah');
INSERT INTO zones VALUES('',205,'SU','As Suwayda');
INSERT INTO zones VALUES('',205,'DA','Dara');
INSERT INTO zones VALUES('',205,'DZ','Dayr az Zawr');
INSERT INTO zones VALUES('',205,'DI','Dimashq');
INSERT INTO zones VALUES('',205,'HL','Halab');
INSERT INTO zones VALUES('',205,'HM','Hamah');
INSERT INTO zones VALUES('',205,'HI','Hims');
INSERT INTO zones VALUES('',205,'ID','Idlib');
INSERT INTO zones VALUES('',205,'RD','Rif Dimashq');
INSERT INTO zones VALUES('',205,'TA','Tartus');

#Taiwan
INSERT INTO zones VALUES('', 206, 'TC','臺北市');
INSERT INTO zones VALUES('', 206, 'CL','基隆市');
INSERT INTO zones VALUES('', 206, 'TP','新北市');
INSERT INTO zones VALUES('', 206, 'IL','宜蘭縣');
INSERT INTO zones VALUES('', 206, 'HC','新竹市');
INSERT INTO zones VALUES('', 206, 'HS','新竹縣');
INSERT INTO zones VALUES('', 206, 'TY','桃園縣');
INSERT INTO zones VALUES('', 206, 'ML','苗栗縣');
INSERT INTO zones VALUES('', 206, 'TH','臺中市');
INSERT INTO zones VALUES('', 206, 'TG','臺中縣');
INSERT INTO zones VALUES('', 206, 'CH','彰化縣');
INSERT INTO zones VALUES('', 206, 'NT','南投縣');
INSERT INTO zones VALUES('', 206, 'CC','嘉義市');
INSERT INTO zones VALUES('', 206, 'CI','嘉義縣');
INSERT INTO zones VALUES('', 206, 'YL','雲林縣');
INSERT INTO zones VALUES('', 206, 'TN','臺南市');
INSERT INTO zones VALUES('', 206, 'TA','臺南縣');
INSERT INTO zones VALUES('', 206, 'KC','高雄市');
INSERT INTO zones VALUES('', 206, 'KH','高雄縣');
INSERT INTO zones VALUES('', 206, 'PH','澎湖縣');
INSERT INTO zones VALUES('', 206, 'PT','屏東縣');
INSERT INTO zones VALUES('', 206, 'TT','臺東縣');
INSERT INTO zones VALUES('', 206, 'HL','花蓮縣');
INSERT INTO zones VALUES('', 206, 'KM','金門縣');
INSERT INTO zones VALUES('', 206, 'LC','連江縣');
INSERT INTO zones VALUES('', 206, 'NH','南海諸島');
INSERT INTO zones VALUES('', 206, 'DY','釣魚台列嶼');

#Tajikistan
INSERT INTO zones VALUES('',207,'GB','Gorno-Badakhstan');
INSERT INTO zones VALUES('',207,'KT','Khatlon');
INSERT INTO zones VALUES('',207,'SU','Sughd');


#Tanzania United Republic of
INSERT INTO zones VALUES('',208,'AR','Arusha');
INSERT INTO zones VALUES('',208,'DS','Dar es Salaam');
INSERT INTO zones VALUES('',208,'DO','Dodoma');
INSERT INTO zones VALUES('',208,'IR','Iringa');
INSERT INTO zones VALUES('',208,'KA','Kagera');
INSERT INTO zones VALUES('',208,'KI','Kigoma');
INSERT INTO zones VALUES('',208,'KJ','Kilimanjaro');
INSERT INTO zones VALUES('',208,'LN','Lindi');
INSERT INTO zones VALUES('',208,'MY','Manyara');
INSERT INTO zones VALUES('',208,'MR','Mara');
INSERT INTO zones VALUES('',208,'MB','Mbeya');
INSERT INTO zones VALUES('',208,'MO','Morogoro');
INSERT INTO zones VALUES('',208,'MT','Mtwara');
INSERT INTO zones VALUES('',208,'MW','Mwanza');
INSERT INTO zones VALUES('',208,'PN','Pemba North');
INSERT INTO zones VALUES('',208,'PS','Pemba South');
INSERT INTO zones VALUES('',208,'PW','Pwani');
INSERT INTO zones VALUES('',208,'RK','Rukwa');
INSERT INTO zones VALUES('',208,'RV','Ruvuma');
INSERT INTO zones VALUES('',208,'SH','Shinyanga');
INSERT INTO zones VALUES('',208,'SI','Singida');
INSERT INTO zones VALUES('',208,'TB','Tabora');
INSERT INTO zones VALUES('',208,'TN','Tanga');
INSERT INTO zones VALUES('',208,'ZC','Zanzibar Central/South');
INSERT INTO zones VALUES('',208,'ZN','Zanzibar North');
INSERT INTO zones VALUES('',208,'ZU','Zanzibar Urban/West');


#Thailand
INSERT INTO zones VALUES('',209,'Amnat Charoen','Amnat Charoen');
INSERT INTO zones VALUES('',209,'Ang Thong','Ang Thong');
INSERT INTO zones VALUES('',209,'Ayutthaya','Ayutthaya');
INSERT INTO zones VALUES('',209,'Bangkok','Bangkok');
INSERT INTO zones VALUES('',209,'Buriram','Buriram');
INSERT INTO zones VALUES('',209,'Chachoengsao','Chachoengsao');
INSERT INTO zones VALUES('',209,'Chai Nat','Chai Nat');
INSERT INTO zones VALUES('',209,'Chaiyaphum','Chaiyaphum');
INSERT INTO zones VALUES('',209,'Chanthaburi','Chanthaburi');
INSERT INTO zones VALUES('',209,'Chiang Mai','Chiang Mai');
INSERT INTO zones VALUES('',209,'Chiang Rai','Chiang Rai');
INSERT INTO zones VALUES('',209,'Chon Buri','Chon Buri');
INSERT INTO zones VALUES('',209,'Chumphon','Chumphon');
INSERT INTO zones VALUES('',209,'Kalasin','Kalasin');
INSERT INTO zones VALUES('',209,'Kamphaeng Phet','Kamphaeng Phet');
INSERT INTO zones VALUES('',209,'Kanchanaburi','Kanchanaburi');
INSERT INTO zones VALUES('',209,'Khon Kaen','Khon Kaen');
INSERT INTO zones VALUES('',209,'Krabi','Krabi');
INSERT INTO zones VALUES('',209,'Lampang','Lampang');
INSERT INTO zones VALUES('',209,'Lamphun','Lamphun');
INSERT INTO zones VALUES('',209,'Loei','Loei');
INSERT INTO zones VALUES('',209,'Lop Buri','Lop Buri');
INSERT INTO zones VALUES('',209,'Mae Hong Son','Mae Hong Son');
INSERT INTO zones VALUES('',209,'Maha Sarakham','Maha Sarakham');
INSERT INTO zones VALUES('',209,'Mukdahan','Mukdahan');
INSERT INTO zones VALUES('',209,'Nakhon Nayok','Nakhon Nayok');
INSERT INTO zones VALUES('',209,'Nakhon Pathom','Nakhon Pathom');
INSERT INTO zones VALUES('',209,'Nakhon Phanom','Nakhon Phanom');
INSERT INTO zones VALUES('',209,'Nakhon Ratchasima','Nakhon Ratchasima');
INSERT INTO zones VALUES('',209,'Nakhon Sawan','Nakhon Sawan');
INSERT INTO zones VALUES('',209,'Nakhon Si Thammarat','Nakhon Si Thammarat');
INSERT INTO zones VALUES('',209,'Nan','Nan');
INSERT INTO zones VALUES('',209,'Narathiwat','Narathiwat');
INSERT INTO zones VALUES('',209,'Nong Bua Lamphu','Nong Bua Lamphu');
INSERT INTO zones VALUES('',209,'Nong Khai','Nong Khai');
INSERT INTO zones VALUES('',209,'Nonthaburi','Nonthaburi');
INSERT INTO zones VALUES('',209,'Pathum Thani','Pathum Thani');
INSERT INTO zones VALUES('',209,'Pattani','Pattani');
INSERT INTO zones VALUES('',209,'Phangnga','Phangnga');
INSERT INTO zones VALUES('',209,'Phatthalung','Phatthalung');
INSERT INTO zones VALUES('',209,'Phayao','Phayao');
INSERT INTO zones VALUES('',209,'Phetchabun','Phetchabun');
INSERT INTO zones VALUES('',209,'Phetchaburi','Phetchaburi');
INSERT INTO zones VALUES('',209,'Phichit','Phichit');
INSERT INTO zones VALUES('',209,'Phitsanulok','Phitsanulok');
INSERT INTO zones VALUES('',209,'Phrae','Phrae');
INSERT INTO zones VALUES('',209,'Phuket','Phuket');
INSERT INTO zones VALUES('',209,'Prachin Buri','Prachin Buri');
INSERT INTO zones VALUES('',209,'Prachuap Khiri Khan','Prachuap Khiri Khan');
INSERT INTO zones VALUES('',209,'Ranong','Ranong');
INSERT INTO zones VALUES('',209,'Ratchaburi','Ratchaburi');
INSERT INTO zones VALUES('',209,'Rayong','Rayong');
INSERT INTO zones VALUES('',209,'Roi Et','Roi Et');
INSERT INTO zones VALUES('',209,'Sa Kaeo','Sa Kaeo');
INSERT INTO zones VALUES('',209,'Sakon Nakhon','Sakon Nakhon');
INSERT INTO zones VALUES('',209,'Samut Prakan','Samut Prakan');
INSERT INTO zones VALUES('',209,'Samut Sakhon','Samut Sakhon');
INSERT INTO zones VALUES('',209,'Samut Songkhram','Samut Songkhram');
INSERT INTO zones VALUES('',209,'Sara Buri','Sara Buri');
INSERT INTO zones VALUES('',209,'Satun','Satun');
INSERT INTO zones VALUES('',209,'Sing Buri','Sing Buri');
INSERT INTO zones VALUES('',209,'Sisaket','Sisaket');
INSERT INTO zones VALUES('',209,'Songkhla','Songkhla');
INSERT INTO zones VALUES('',209,'Sukhothai','Sukhothai');
INSERT INTO zones VALUES('',209,'Suphan Buri','Suphan Buri');
INSERT INTO zones VALUES('',209,'Surat Thani','Surat Thani');
INSERT INTO zones VALUES('',209,'Surin','Surin');
INSERT INTO zones VALUES('',209,'Tak','Tak');
INSERT INTO zones VALUES('',209,'Trang','Trang');
INSERT INTO zones VALUES('',209,'Trat','Trat');
INSERT INTO zones VALUES('',209,'Ubon Ratchathani','Ubon Ratchathani');
INSERT INTO zones VALUES('',209,'Udon Thani','Udon Thani');
INSERT INTO zones VALUES('',209,'Uthai Thani','Uthai Thani');
INSERT INTO zones VALUES('',209,'Uttaradit','Uttaradit');
INSERT INTO zones VALUES('',209,'Yala','Yala');
INSERT INTO zones VALUES('',209,'Yasothon','Yasothon');


#Togo
INSERT INTO zones VALUES('',210,'K','Kara');
INSERT INTO zones VALUES('',210,'P','Plateaux');
INSERT INTO zones VALUES('',210,'S','Savanes');
INSERT INTO zones VALUES('',210,'C','Centrale');
INSERT INTO zones VALUES('',210,'M','Maritime');


#Tokelau
INSERT INTO zones VALUES('',211,'A','Atafu');
INSERT INTO zones VALUES('',211,'F','Fakaofo');
INSERT INTO zones VALUES('',211,'N','Nukunonu');


#Tonga
INSERT INTO zones VALUES('',212,'H','Ha\'apai');
INSERT INTO zones VALUES('',212,'T','Tongatapu');
INSERT INTO zones VALUES('',212,'V','Vava\'u');


#Trinidad and Tobago
INSERT INTO zones VALUES('',213,'CT','Couva/Tabaquite/Talparo');
INSERT INTO zones VALUES('',213,'DM','Diego Martin');
INSERT INTO zones VALUES('',213,'MR','Mayaro/Rio Claro');
INSERT INTO zones VALUES('',213,'PD','Penal/Debe');
INSERT INTO zones VALUES('',213,'PT','Princes Town');
INSERT INTO zones VALUES('',213,'SG','Sangre Grande');
INSERT INTO zones VALUES('',213,'SL','San Juan/Laventille');
INSERT INTO zones VALUES('',213,'SI','Siparia');
INSERT INTO zones VALUES('',213,'TP','Tunapuna/Piarco');
INSERT INTO zones VALUES('',213,'PS','Port of Spain');
INSERT INTO zones VALUES('',213,'SF','San Fernando');
INSERT INTO zones VALUES('',213,'AR','Arima');
INSERT INTO zones VALUES('',213,'PF','Point Fortin');
INSERT INTO zones VALUES('',213,'CH','Chaguanas');
INSERT INTO zones VALUES('',213,'TO','Tobago');


#Tunisia
INSERT INTO zones VALUES('',214,'AR','Ariana');
INSERT INTO zones VALUES('',214,'BJ','Beja');
INSERT INTO zones VALUES('',214,'BA','Ben Arous');
INSERT INTO zones VALUES('',214,'BI','Bizerte');
INSERT INTO zones VALUES('',214,'GB','Gabes');
INSERT INTO zones VALUES('',214,'GF','Gafsa');
INSERT INTO zones VALUES('',214,'JE','Jendouba');
INSERT INTO zones VALUES('',214,'KR','Kairouan');
INSERT INTO zones VALUES('',214,'KS','Kasserine');
INSERT INTO zones VALUES('',214,'KB','Kebili');
INSERT INTO zones VALUES('',214,'KF','Kef');
INSERT INTO zones VALUES('',214,'MH','Mahdia');
INSERT INTO zones VALUES('',214,'MN','Manouba');
INSERT INTO zones VALUES('',214,'ME','Medenine');
INSERT INTO zones VALUES('',214,'MO','Monastir');
INSERT INTO zones VALUES('',214,'NA','Nabeul');
INSERT INTO zones VALUES('',214,'SF','Sfax');
INSERT INTO zones VALUES('',214,'SD','Sidi');
INSERT INTO zones VALUES('',214,'SL','Siliana');
INSERT INTO zones VALUES('',214,'SO','Sousse');
INSERT INTO zones VALUES('',214,'TA','Tataouine');
INSERT INTO zones VALUES('',214,'TO','Tozeur');
INSERT INTO zones VALUES('',214,'TU','Tunis');
INSERT INTO zones VALUES('',214,'ZA','Zaghouan');


#Turkey
INSERT INTO zones VALUES('',215,'ADA','Adana');
INSERT INTO zones VALUES('',215,'ADI','Adiyaman');
INSERT INTO zones VALUES('',215,'AFY','Afyonkarahisar');
INSERT INTO zones VALUES('',215,'AGR','Agri');
INSERT INTO zones VALUES('',215,'AKS','Aksaray');
INSERT INTO zones VALUES('',215,'AMA','Amasya');
INSERT INTO zones VALUES('',215,'ANK','Ankara');
INSERT INTO zones VALUES('',215,'ANT','Antalya');
INSERT INTO zones VALUES('',215,'ARD','Ardahan');
INSERT INTO zones VALUES('',215,'ART','Artvin');
INSERT INTO zones VALUES('',215,'AYI','Aydin');
INSERT INTO zones VALUES('',215,'BAL','Balikesir');
INSERT INTO zones VALUES('',215,'BAR','Bartin');
INSERT INTO zones VALUES('',215,'BAT','Batman');
INSERT INTO zones VALUES('',215,'BAY','Bayburt');
INSERT INTO zones VALUES('',215,'BIL','Bilecik');
INSERT INTO zones VALUES('',215,'BIN','Bingol');
INSERT INTO zones VALUES('',215,'BIT','Bitlis');
INSERT INTO zones VALUES('',215,'BOL','Bolu');
INSERT INTO zones VALUES('',215,'BRD','Burdur');
INSERT INTO zones VALUES('',215,'BRS','Bursa');
INSERT INTO zones VALUES('',215,'CKL','Canakkale');
INSERT INTO zones VALUES('',215,'CKR','Cankiri');
INSERT INTO zones VALUES('',215,'COR','Corum');
INSERT INTO zones VALUES('',215,'DEN','Denizli');
INSERT INTO zones VALUES('',215,'DIY','Diyarbakir');
INSERT INTO zones VALUES('',215,'DUZ','Duzce');
INSERT INTO zones VALUES('',215,'EDI','Edirne');
INSERT INTO zones VALUES('',215,'ELA','Elazig');
INSERT INTO zones VALUES('',215,'EZC','Erzincan');
INSERT INTO zones VALUES('',215,'EZR','Erzurum');
INSERT INTO zones VALUES('',215,'ESK','Eskisehir');
INSERT INTO zones VALUES('',215,'GAZ','Gaziantep');
INSERT INTO zones VALUES('',215,'GIR','Giresun');
INSERT INTO zones VALUES('',215,'GMS','Gumushane');
INSERT INTO zones VALUES('',215,'HKR','Hakkari');
INSERT INTO zones VALUES('',215,'HTY','Hatay');
INSERT INTO zones VALUES('',215,'IGD','Igdir');
INSERT INTO zones VALUES('',215,'ISP','Isparta');
INSERT INTO zones VALUES('',215,'IST','Istanbul');
INSERT INTO zones VALUES('',215,'IZM','Izmir');
INSERT INTO zones VALUES('',215,'KAH','Kahramanmaras');
INSERT INTO zones VALUES('',215,'KRB','Karabuk');
INSERT INTO zones VALUES('',215,'KRM','Karaman');
INSERT INTO zones VALUES('',215,'KRS','Kars');
INSERT INTO zones VALUES('',215,'KAS','Kastamonu');
INSERT INTO zones VALUES('',215,'KAY','Kayseri');
INSERT INTO zones VALUES('',215,'KLS','Kilis');
INSERT INTO zones VALUES('',215,'KRK','Kirikkale');
INSERT INTO zones VALUES('',215,'KLR','Kirklareli');
INSERT INTO zones VALUES('',215,'KRH','Kirsehir');
INSERT INTO zones VALUES('',215,'KOC','Kocaeli');
INSERT INTO zones VALUES('',215,'KON','Konya');
INSERT INTO zones VALUES('',215,'KUT','Kutahya');
INSERT INTO zones VALUES('',215,'MAL','Malatya');
INSERT INTO zones VALUES('',215,'MAN','Manisa');
INSERT INTO zones VALUES('',215,'MAR','Mardin');
INSERT INTO zones VALUES('',215,'MER','Mersin');
INSERT INTO zones VALUES('',215,'MUG','Mugla');
INSERT INTO zones VALUES('',215,'MUS','Mus');
INSERT INTO zones VALUES('',215,'NEV','Nevsehir');
INSERT INTO zones VALUES('',215,'NIG','Nigde');
INSERT INTO zones VALUES('',215,'ORD','Ordu');
INSERT INTO zones VALUES('',215,'OSM','Osmaniye');
INSERT INTO zones VALUES('',215,'RIZ','Rize');
INSERT INTO zones VALUES('',215,'SAK','Sakarya');
INSERT INTO zones VALUES('',215,'SAM','Samsun');
INSERT INTO zones VALUES('',215,'SAN','Sanliurfa');
INSERT INTO zones VALUES('',215,'SII','Siirt');
INSERT INTO zones VALUES('',215,'SIN','Sinop');
INSERT INTO zones VALUES('',215,'SIR','Sirnak');
INSERT INTO zones VALUES('',215,'SIV','Sivas');
INSERT INTO zones VALUES('',215,'TEL','Tekirdag');
INSERT INTO zones VALUES('',215,'TOK','Tokat');
INSERT INTO zones VALUES('',215,'TRA','Trabzon');
INSERT INTO zones VALUES('',215,'TUN','Tunceli');
INSERT INTO zones VALUES('',215,'USK','Usak');
INSERT INTO zones VALUES('',215,'VAN','Van');
INSERT INTO zones VALUES('',215,'YAL','Yalova');
INSERT INTO zones VALUES('',215,'YOZ','Yozgat');
INSERT INTO zones VALUES('',215,'ZON','Zonguldak');


#Turkmenistan
INSERT INTO zones VALUES('',216,'A','Ahal Welayaty');
INSERT INTO zones VALUES('',216,'B','Balkan Welayaty ');
INSERT INTO zones VALUES('',216,'D','Dashhowuz Welayaty');
INSERT INTO zones VALUES('',216,'L','Lebap Welayaty');
INSERT INTO zones VALUES('',216,'M','Mary Welayaty');


#Turks and Caicos Islands
INSERT INTO zones VALUES('',217,'AC','Ambergris Cays');
INSERT INTO zones VALUES('',217,'DC','Dellis Cay');
INSERT INTO zones VALUES('',217,'FC','French Cay');
INSERT INTO zones VALUES('',217,'LW','Little Water Cay');
INSERT INTO zones VALUES('',217,'RC','Parrot Cay');
INSERT INTO zones VALUES('',217,'PN','Pine Cay');
INSERT INTO zones VALUES('',217,'SL','Salt Cay');
INSERT INTO zones VALUES('',217,'GT','Grand Turk');
INSERT INTO zones VALUES('',217,'SC','South Caicos');
INSERT INTO zones VALUES('',217,'EC','East Caicos');
INSERT INTO zones VALUES('',217,'MC','Middle Caicos');
INSERT INTO zones VALUES('',217,'NC','North Caicos');
INSERT INTO zones VALUES('',217,'PR','Providenciales');
INSERT INTO zones VALUES('',217,'WC','West Caicos');


#Tuvalu
INSERT INTO zones VALUES('',218,'NMG','Nanumanga');
INSERT INTO zones VALUES('',218,'NLK','Niulakita');
INSERT INTO zones VALUES('',218,'NTO','Niutao');
INSERT INTO zones VALUES('',218,'FUN','Funafuti');
INSERT INTO zones VALUES('',218,'NME','Nanumea');
INSERT INTO zones VALUES('',218,'NUI','Nui');
INSERT INTO zones VALUES('',218,'NFT','Nukufetau');
INSERT INTO zones VALUES('',218,'NLL','Nukulaelae');
INSERT INTO zones VALUES('',218,'VAI','Vaitupu');


#Uganda
INSERT INTO zones VALUES('',219,'KAL','Kalangala');
INSERT INTO zones VALUES('',219,'KMP','Kampala');
INSERT INTO zones VALUES('',219,'KAY','Kayunga');
INSERT INTO zones VALUES('',219,'KIB','Kiboga');
INSERT INTO zones VALUES('',219,'LUW','Luwero');
INSERT INTO zones VALUES('',219,'MAS','Masaka');
INSERT INTO zones VALUES('',219,'MPI','Mpigi');
INSERT INTO zones VALUES('',219,'MUB','Mubende');
INSERT INTO zones VALUES('',219,'MUK','Mukono');
INSERT INTO zones VALUES('',219,'NKS','Nakasongola');
INSERT INTO zones VALUES('',219,'RAK','Rakai');
INSERT INTO zones VALUES('',219,'SEM','Sembabule');
INSERT INTO zones VALUES('',219,'WAK','Wakiso');
INSERT INTO zones VALUES('',219,'BUG','Bugiri');
INSERT INTO zones VALUES('',219,'BUS','Busia');
INSERT INTO zones VALUES('',219,'IGA','Iganga');
INSERT INTO zones VALUES('',219,'JIN','Jinja');
INSERT INTO zones VALUES('',219,'KAB','Kaberamaido');
INSERT INTO zones VALUES('',219,'KML','Kamuli');
INSERT INTO zones VALUES('',219,'KPC','Kapchorwa');
INSERT INTO zones VALUES('',219,'KTK','Katakwi');
INSERT INTO zones VALUES('',219,'KUM','Kumi');
INSERT INTO zones VALUES('',219,'MAY','Mayuge');
INSERT INTO zones VALUES('',219,'MBA','Mbale');
INSERT INTO zones VALUES('',219,'PAL','Pallisa');
INSERT INTO zones VALUES('',219,'SIR','Sironko');
INSERT INTO zones VALUES('',219,'SOR','Soroti');
INSERT INTO zones VALUES('',219,'TOR','Tororo');
INSERT INTO zones VALUES('',219,'ADJ','Adjumani');
INSERT INTO zones VALUES('',219,'APC','Apac');
INSERT INTO zones VALUES('',219,'ARU','Arua');
INSERT INTO zones VALUES('',219,'GUL','Gulu');
INSERT INTO zones VALUES('',219,'KIT','Kitgum');
INSERT INTO zones VALUES('',219,'KOT','Kotido');
INSERT INTO zones VALUES('',219,'LIR','Lira');
INSERT INTO zones VALUES('',219,'MRT','Moroto');
INSERT INTO zones VALUES('',219,'MOY','Moyo');
INSERT INTO zones VALUES('',219,'NAK','Nakapiripirit');
INSERT INTO zones VALUES('',219,'NEB','Nebbi');
INSERT INTO zones VALUES('',219,'PAD','Pader');
INSERT INTO zones VALUES('',219,'YUM','Yumbe');
INSERT INTO zones VALUES('',219,'BUN','Bundibugyo');
INSERT INTO zones VALUES('',219,'BSH','Bushenyi');
INSERT INTO zones VALUES('',219,'HOI','Hoima');
INSERT INTO zones VALUES('',219,'KBL','Kabale');
INSERT INTO zones VALUES('',219,'KAR','Kabarole');
INSERT INTO zones VALUES('',219,'KAM','Kamwenge');
INSERT INTO zones VALUES('',219,'KAN','Kanungu');
INSERT INTO zones VALUES('',219,'KAS','Kasese');
INSERT INTO zones VALUES('',219,'KBA','Kibaale');
INSERT INTO zones VALUES('',219,'KIS','Kisoro');
INSERT INTO zones VALUES('',219,'KYE','Kyenjojo');
INSERT INTO zones VALUES('',219,'MSN','Masindi');
INSERT INTO zones VALUES('',219,'MBR','Mbarara');
INSERT INTO zones VALUES('',219,'NTU','Ntungamo');
INSERT INTO zones VALUES('',219,'RUK','Rukungiri');


#Ukraine
INSERT INTO zones VALUES('',220,'CK','Cherkasy');
INSERT INTO zones VALUES('',220,'CH','Chernihiv');
INSERT INTO zones VALUES('',220,'CV','Chernivtsi');
INSERT INTO zones VALUES('',220,'CR','Crimea');
INSERT INTO zones VALUES('',220,'DN','Dnipropetrovs\'k');
INSERT INTO zones VALUES('',220,'DO','Donets\'k');
INSERT INTO zones VALUES('',220,'IV','Ivano-Frankivs\'k');
INSERT INTO zones VALUES('',220,'KL','Kharkiv Kherson');
INSERT INTO zones VALUES('',220,'KM','Khmel\'nyts\'kyy');
INSERT INTO zones VALUES('',220,'KR','Kirovohrad');
INSERT INTO zones VALUES('',220,'KV','Kiev');
INSERT INTO zones VALUES('',220,'KY','Kyyiv');
INSERT INTO zones VALUES('',220,'LU','Luhans\'k');
INSERT INTO zones VALUES('',220,'LV','L\'viv');
INSERT INTO zones VALUES('',220,'MY','Mykolayiv');
INSERT INTO zones VALUES('',220,'OD','Odesa');
INSERT INTO zones VALUES('',220,'PO','Poltava');
INSERT INTO zones VALUES('',220,'RI','Rivne');
INSERT INTO zones VALUES('',220,'SE','Sevastopol');
INSERT INTO zones VALUES('',220,'SU','Sumy');
INSERT INTO zones VALUES('',220,'TE','Ternopil\'');
INSERT INTO zones VALUES('',220,'VI','Vinnytsya');
INSERT INTO zones VALUES('',220,'VO','Volyn\'');
INSERT INTO zones VALUES('',220,'ZK','Zakarpattya');
INSERT INTO zones VALUES('',220,'ZA','Zaporizhzhya');
INSERT INTO zones VALUES('',220,'ZH','Zhytomyr');


#United Arab Emirates
INSERT INTO zones VALUES('',221,'AZ','Abu Zaby');
INSERT INTO zones VALUES('',221,'AJ','\'Ajman');
INSERT INTO zones VALUES('',221,'FU','Al Fujayrah');
INSERT INTO zones VALUES('',221,'SH','Ash Shariqah');
INSERT INTO zones VALUES('',221,'DU','Dubayy');
INSERT INTO zones VALUES('',221,'RK','R\'as al Khaymah');
INSERT INTO zones VALUES('',221,'UQ','Umm al Qaywayn');


#United Kingdom
INSERT INTO zones VALUES('',222, 'ABN', 'Aberdeen');
INSERT INTO zones VALUES('',222, 'ABNS', 'Aberdeenshire');
INSERT INTO zones VALUES('',222, 'ANG', 'Anglesey');
INSERT INTO zones VALUES('',222, 'AGS', 'Angus');
INSERT INTO zones VALUES('',222, 'ARY', 'Argyll and Bute');
INSERT INTO zones VALUES('',222, 'BEDS', 'Bedfordshire');
INSERT INTO zones VALUES('',222, 'BERKS', 'Berkshire');
INSERT INTO zones VALUES('',222, 'BLA', 'Blaenau Gwent');
INSERT INTO zones VALUES('',222, 'BRI', 'Bridgend');
INSERT INTO zones VALUES('',222, 'BSTL', 'Bristol');
INSERT INTO zones VALUES('',222, 'BUCKS', 'Buckinghamshire');
INSERT INTO zones VALUES('',222, 'CAE', 'Caerphilly');
INSERT INTO zones VALUES('',222, 'CAMBS', 'Cambridgeshire');
INSERT INTO zones VALUES('',222, 'CDF', 'Cardiff');
INSERT INTO zones VALUES('',222, 'CARM', 'Carmarthenshire');
INSERT INTO zones VALUES('',222, 'CDGN', 'Ceredigion');
INSERT INTO zones VALUES('',222, 'CHES', 'Cheshire');
INSERT INTO zones VALUES('',222, 'CLACK', 'Clackmannanshire');
INSERT INTO zones VALUES('',222, 'CON', 'Conwy');
INSERT INTO zones VALUES('',222, 'CORN', 'Cornwall');
INSERT INTO zones VALUES('',222, 'DNBG', 'Denbighshire');
INSERT INTO zones VALUES('',222, 'DERBY', 'Derbyshire');
INSERT INTO zones VALUES('',222, 'DVN', 'Devon');
INSERT INTO zones VALUES('',222, 'DOR', 'Dorset');
INSERT INTO zones VALUES('',222, 'DGL', 'Dumfries and Galloway');
INSERT INTO zones VALUES('',222, 'DUND', 'Dundee');
INSERT INTO zones VALUES('',222, 'DHM', 'Durham');
INSERT INTO zones VALUES('',222, 'ARYE', 'East Ayrshire');
INSERT INTO zones VALUES('',222, 'DUNBE', 'East Dunbartonshire');
INSERT INTO zones VALUES('',222, 'LOTE', 'East Lothian');
INSERT INTO zones VALUES('',222, 'RENE', 'East Renfrewshire');
INSERT INTO zones VALUES('',222, 'ERYS', 'East Riding of Yorkshire');
INSERT INTO zones VALUES('',222, 'SXE', 'East Sussex');
INSERT INTO zones VALUES('',222, 'EDIN', 'Edinburgh');
INSERT INTO zones VALUES('',222, 'ESX', 'Essex');
INSERT INTO zones VALUES('',222, 'FALK', 'Falkirk');
INSERT INTO zones VALUES('',222, 'FFE', 'Fife');
INSERT INTO zones VALUES('',222, 'FLINT', 'Flintshire');
INSERT INTO zones VALUES('',222, 'GLAS', 'Glasgow');
INSERT INTO zones VALUES('',222, 'GLOS', 'Gloucestershire');
INSERT INTO zones VALUES('',222, 'LDN', 'Greater London');
INSERT INTO zones VALUES('',222, 'MCH', 'Greater Manchester');
INSERT INTO zones VALUES('',222, 'GDD', 'Gwynedd');
INSERT INTO zones VALUES('',222, 'HANTS', 'Hampshire');
INSERT INTO zones VALUES('',222, 'HWR', 'Herefordshire');
INSERT INTO zones VALUES('',222, 'HERTS', 'Hertfordshire');
INSERT INTO zones VALUES('',222, 'HLD', 'Highlands');
INSERT INTO zones VALUES('',222, 'IVER', 'Inverclyde');
INSERT INTO zones VALUES('',222, 'IOW', 'Isle of Wight');
INSERT INTO zones VALUES('',222, 'KNT', 'Kent');
INSERT INTO zones VALUES('',222, 'LANCS', 'Lancashire');
INSERT INTO zones VALUES('',222, 'LEICS', 'Leicestershire');
INSERT INTO zones VALUES('',222, 'LINCS', 'Lincolnshire');
INSERT INTO zones VALUES('',222, 'MSY', 'Merseyside');
INSERT INTO zones VALUES('',222, 'MERT', 'Merthyr Tydfil');
INSERT INTO zones VALUES('',222, 'MLOT', 'Midlothian');
INSERT INTO zones VALUES('',222, 'MMOUTH', 'Monmouthshire');
INSERT INTO zones VALUES('',222, 'MORAY', 'Moray');
INSERT INTO zones VALUES('',222, 'NPRTAL', 'Neath Port Talbot');
INSERT INTO zones VALUES('',222, 'NEWPT', 'Newport');
INSERT INTO zones VALUES('',222, 'NOR', 'Norfolk');
INSERT INTO zones VALUES('',222, 'ARYN', 'North Ayrshire');
INSERT INTO zones VALUES('',222, 'LANN', 'North Lanarkshire');
INSERT INTO zones VALUES('',222, 'YSN', 'North Yorkshire');
INSERT INTO zones VALUES('',222, 'NHM', 'Northamptonshire');
INSERT INTO zones VALUES('',222, 'NLD', 'Northumberland');
INSERT INTO zones VALUES('',222, 'NOT', 'Nottinghamshire');
INSERT INTO zones VALUES('',222, 'ORK', 'Orkney Islands');
INSERT INTO zones VALUES('',222, 'OFE', 'Oxfordshire');
INSERT INTO zones VALUES('',222, 'PEM', 'Pembrokeshire');
INSERT INTO zones VALUES('',222, 'PERTH', 'Perth and Kinross');
INSERT INTO zones VALUES('',222, 'PWS', 'Powys');
INSERT INTO zones VALUES('',222, 'REN', 'Renfrewshire');
INSERT INTO zones VALUES('',222, 'RHON', 'Rhondda Cynon Taff');
INSERT INTO zones VALUES('',222, 'RUT', 'Rutland');
INSERT INTO zones VALUES('',222, 'BOR', 'Scottish Borders');
INSERT INTO zones VALUES('',222, 'SHET', 'Shetland Islands');
INSERT INTO zones VALUES('',222, 'SPE', 'Shropshire');
INSERT INTO zones VALUES('',222, 'SOM', 'Somerset');
INSERT INTO zones VALUES('',222, 'ARYS', 'South Ayrshire');
INSERT INTO zones VALUES('',222, 'LANS', 'South Lanarkshire');
INSERT INTO zones VALUES('',222, 'YSS', 'South Yorkshire');
INSERT INTO zones VALUES('',222, 'SFD', 'Staffordshire');
INSERT INTO zones VALUES('',222, 'STIR', 'Stirling');
INSERT INTO zones VALUES('',222, 'SFK', 'Suffolk');
INSERT INTO zones VALUES('',222, 'SRY', 'Surrey');
INSERT INTO zones VALUES('',222, 'SWAN', 'Swansea');
INSERT INTO zones VALUES('',222, 'TORF', 'Torfaen');
INSERT INTO zones VALUES('',222, 'TWR', 'Tyne and Wear');
INSERT INTO zones VALUES('',222, 'VGLAM', 'Vale of Glamorgan');
INSERT INTO zones VALUES('',222, 'WARKS', 'Warwickshire');
INSERT INTO zones VALUES('',222, 'WDUN', 'West Dunbartonshire');
INSERT INTO zones VALUES('',222, 'WLOT', 'West Lothian');
INSERT INTO zones VALUES('',222, 'WMD', 'West Midlands');
INSERT INTO zones VALUES('',222, 'SXW', 'West Sussex');
INSERT INTO zones VALUES('',222, 'YSW', 'West Yorkshire');
INSERT INTO zones VALUES('',222, 'WIL', 'Western Isles');
INSERT INTO zones VALUES('',222, 'WLT', 'Wiltshire');
INSERT INTO zones VALUES('',222, 'WORCS', 'Worcestershire');
INSERT INTO zones VALUES('',222, 'WRX', 'Wrexham');


#United States
INSERT INTO zones VALUES('',223,'AL','Alabama');
INSERT INTO zones VALUES('',223,'AK','Alaska');
INSERT INTO zones VALUES('',223,'AS','American Samoa');
INSERT INTO zones VALUES('',223,'AZ','Arizona');
INSERT INTO zones VALUES('',223,'AR','Arkansas');
INSERT INTO zones VALUES('',223,'AF','Armed Forces Africa');
INSERT INTO zones VALUES('',223,'AA','Armed Forces Americas');
INSERT INTO zones VALUES('',223,'AC','Armed Forces Canada');
INSERT INTO zones VALUES('',223,'AE','Armed Forces Europe');
INSERT INTO zones VALUES('',223,'AM','Armed Forces Middle East');
INSERT INTO zones VALUES('',223,'AP','Armed Forces Pacific');
INSERT INTO zones VALUES('',223,'CA','California');
INSERT INTO zones VALUES('',223,'CO','Colorado');
INSERT INTO zones VALUES('',223,'CT','Connecticut');
INSERT INTO zones VALUES('',223,'DE','Delaware');
INSERT INTO zones VALUES('',223,'DC','District of Columbia');
INSERT INTO zones VALUES('',223,'FM','Federated States Of Micronesia');
INSERT INTO zones VALUES('',223,'FL','Florida');
INSERT INTO zones VALUES('',223,'GA','Georgia');
INSERT INTO zones VALUES('',223,'GU','Guam');
INSERT INTO zones VALUES('',223,'HI','Hawaii');
INSERT INTO zones VALUES('',223,'ID','Idaho');
INSERT INTO zones VALUES('',223,'IL','Illinois');
INSERT INTO zones VALUES('',223,'IN','Indiana');
INSERT INTO zones VALUES('',223,'IA','Iowa');
INSERT INTO zones VALUES('',223,'KS','Kansas');
INSERT INTO zones VALUES('',223,'KY','Kentucky');
INSERT INTO zones VALUES('',223,'LA','Louisiana');
INSERT INTO zones VALUES('',223,'ME','Maine');
INSERT INTO zones VALUES('',223,'MH','Marshall Islands');
INSERT INTO zones VALUES('',223,'MD','Maryland');
INSERT INTO zones VALUES('',223,'MA','Massachusetts');
INSERT INTO zones VALUES('',223,'MI','Michigan');
INSERT INTO zones VALUES('',223,'MN','Minnesota');
INSERT INTO zones VALUES('',223,'MS','Mississippi');
INSERT INTO zones VALUES('',223,'MO','Missouri');
INSERT INTO zones VALUES('',223,'MT','Montana');
INSERT INTO zones VALUES('',223,'NE','Nebraska');
INSERT INTO zones VALUES('',223,'NV','Nevada');
INSERT INTO zones VALUES('',223,'NH','New Hampshire');
INSERT INTO zones VALUES('',223,'NJ','New Jersey');
INSERT INTO zones VALUES('',223,'NM','New Mexico');
INSERT INTO zones VALUES('',223,'NY','New York');
INSERT INTO zones VALUES('',223,'NC','North Carolina');
INSERT INTO zones VALUES('',223,'ND','North Dakota');
INSERT INTO zones VALUES('',223,'MP','Northern Mariana Islands');
INSERT INTO zones VALUES('',223,'OH','Ohio');
INSERT INTO zones VALUES('',223,'OK','Oklahoma');
INSERT INTO zones VALUES('',223,'OR','Oregon');
INSERT INTO zones VALUES('',223,'PW','Palau');
INSERT INTO zones VALUES('',223,'PA','Pennsylvania');
INSERT INTO zones VALUES('',223,'PR','Puerto Rico');
INSERT INTO zones VALUES('',223,'RI','Rhode Island');
INSERT INTO zones VALUES('',223,'SC','South Carolina');
INSERT INTO zones VALUES('',223,'SD','South Dakota');
INSERT INTO zones VALUES('',223,'TN','Tennessee');
INSERT INTO zones VALUES('',223,'TX','Texas');
INSERT INTO zones VALUES('',223,'UT','Utah');
INSERT INTO zones VALUES('',223,'VT','Vermont');
INSERT INTO zones VALUES('',223,'VI','Virgin Islands');
INSERT INTO zones VALUES('',223,'VA','Virginia');
INSERT INTO zones VALUES('',223,'WA','Washington');
INSERT INTO zones VALUES('',223,'WV','West Virginia');
INSERT INTO zones VALUES('',223,'WI','Wisconsin');
INSERT INTO zones VALUES('',223,'WY','Wyoming');


#United States Minor Outlying Islands
INSERT INTO zones VALUES('',224,'BI','Baker Island');
INSERT INTO zones VALUES('',224,'HI','Howland Island');
INSERT INTO zones VALUES('',224,'JI','Jarvis Island');
INSERT INTO zones VALUES('',224,'JA','Johnston Atoll');
INSERT INTO zones VALUES('',224,'KR','Kingman Reef');
INSERT INTO zones VALUES('',224,'MA','Midway Atoll');
INSERT INTO zones VALUES('',224,'NI','Navassa Island');
INSERT INTO zones VALUES('',224,'PA','Palmyra Atoll');
INSERT INTO zones VALUES('',224,'WI','Wake Island');


#Uruguay
INSERT INTO zones VALUES('',225,'AR','Artigas');
INSERT INTO zones VALUES('',225,'CA','Canelones');
INSERT INTO zones VALUES('',225,'CL','Cerro Largo');
INSERT INTO zones VALUES('',225,'CO','Colonia');
INSERT INTO zones VALUES('',225,'DU','Durazno');
INSERT INTO zones VALUES('',225,'FS','Flores');
INSERT INTO zones VALUES('',225,'FA','Florida');
INSERT INTO zones VALUES('',225,'LA','Lavalleja');
INSERT INTO zones VALUES('',225,'MA','Maldonado');
INSERT INTO zones VALUES('',225,'MO','Montevideo');
INSERT INTO zones VALUES('',225,'PA','Paysandu');
INSERT INTO zones VALUES('',225,'RN','Rio Negro');
INSERT INTO zones VALUES('',225,'RV','Rivera');
INSERT INTO zones VALUES('',225,'RO','Rocha');
INSERT INTO zones VALUES('',225,'SL','Salto');
INSERT INTO zones VALUES('',225,'SJ','San Jose');
INSERT INTO zones VALUES('',225,'SO','Soriano');
INSERT INTO zones VALUES('',225,'TA','Tacuarembo');
INSERT INTO zones VALUES('',225,'TT','Treinta y Tres');


#Uzbekistan
INSERT INTO zones VALUES('',226,'AN','Andijon');
INSERT INTO zones VALUES('',226,'BU','Buxoro');
INSERT INTO zones VALUES('',226,'FA','Farg\'ona');
INSERT INTO zones VALUES('',226,'JI','Jizzax');
INSERT INTO zones VALUES('',226,'NG','Namangan');
INSERT INTO zones VALUES('',226,'NW','Navoiy');
INSERT INTO zones VALUES('',226,'QA','Qashqadaryo');
INSERT INTO zones VALUES('',226,'QR','Qoraqalpog\'iston Republikasi');
INSERT INTO zones VALUES('',226,'SA','Samarqand');
INSERT INTO zones VALUES('',226,'SI','Sirdaryo');
INSERT INTO zones VALUES('',226,'SU','Surxondaryo');
INSERT INTO zones VALUES('',226,'TK','Toshkent City');
INSERT INTO zones VALUES('',226,'TO','Toshkent Region');
INSERT INTO zones VALUES('',226,'XO','Xorazm');


#Vanuatu

INSERT INTO zones VALUES('',227,'MA','Malampa');
INSERT INTO zones VALUES('',227,'PE','Penama');
INSERT INTO zones VALUES('',227,'SA','Sanma');
INSERT INTO zones VALUES('',227,'SH','Shefa');
INSERT INTO zones VALUES('',227,'TA','Tafea');
INSERT INTO zones VALUES('',227,'TO','Torba');


#Venezuela
INSERT INTO zones VALUES('',229,'AM','Amazonas');
INSERT INTO zones VALUES('',229,'AN','Anzoategui');
INSERT INTO zones VALUES('',229,'AP','Apure');
INSERT INTO zones VALUES('',229,'AR','Aragua');
INSERT INTO zones VALUES('',229,'BA','Barinas');
INSERT INTO zones VALUES('',229,'BO','Bolivar');
INSERT INTO zones VALUES('',229,'CA','Carabobo');
INSERT INTO zones VALUES('',229,'CO','Cojedes');
INSERT INTO zones VALUES('',229,'DA','Delta Amacuro');
INSERT INTO zones VALUES('',229,'DF','Dependencias Federales');
INSERT INTO zones VALUES('',229,'DI','Distrito Federal');
INSERT INTO zones VALUES('',229,'FA','Falcon');
INSERT INTO zones VALUES('',229,'GU','Guarico');
INSERT INTO zones VALUES('',229,'LA','Lara');
INSERT INTO zones VALUES('',229,'ME','Merida');
INSERT INTO zones VALUES('',229,'MI','Miranda');
INSERT INTO zones VALUES('',229,'MO','Monagas');
INSERT INTO zones VALUES('',229,'NE','Nueva Esparta');
INSERT INTO zones VALUES('',229,'PO','Portuguesa');
INSERT INTO zones VALUES('',229,'SU','Sucre');
INSERT INTO zones VALUES('',229,'TA','Tachira');
INSERT INTO zones VALUES('',229,'TR','Trujillo');
INSERT INTO zones VALUES('',229,'VA','Vargas');
INSERT INTO zones VALUES('',229,'YA','Yaracuy');
INSERT INTO zones VALUES('',229,'ZU','Zulia');


#Vietnam
INSERT INTO zones VALUES('',230,'AG','An Giang');
INSERT INTO zones VALUES('',230,'BG','Bac Giang');
INSERT INTO zones VALUES('',230,'BK','Bac Kan');
INSERT INTO zones VALUES('',230,'BL','Bac Lieu');
INSERT INTO zones VALUES('',230,'BC','Bac Ninh');
INSERT INTO zones VALUES('',230,'BR','Ba Ria-Vung Tau');
INSERT INTO zones VALUES('',230,'BN','Ben Tre');
INSERT INTO zones VALUES('',230,'BH','Binh Dinh');
INSERT INTO zones VALUES('',230,'BU','Binh Duong');
INSERT INTO zones VALUES('',230,'BP','Binh Phuoc');
INSERT INTO zones VALUES('',230,'BT','Binh Thuan');
INSERT INTO zones VALUES('',230,'CM','Ca Mau');
INSERT INTO zones VALUES('',230,'CT','Can Tho');
INSERT INTO zones VALUES('',230,'CB','Cao Bang');
INSERT INTO zones VALUES('',230,'DL','Dak Lak');
INSERT INTO zones VALUES('',230,'DG','Dak Nong');
INSERT INTO zones VALUES('',230,'DN','Da Nang');
INSERT INTO zones VALUES('',230,'DB','Dien Bien');
INSERT INTO zones VALUES('',230,'DI','Dong Nai');
INSERT INTO zones VALUES('',230,'DT','Dong Thap');
INSERT INTO zones VALUES('',230,'GL','Gia Lai');
INSERT INTO zones VALUES('',230,'HG','Ha Giang');
INSERT INTO zones VALUES('',230,'HD','Hai Duong');
INSERT INTO zones VALUES('',230,'HP','Hai Phong');
INSERT INTO zones VALUES('',230,'HM','Ha Nam');
INSERT INTO zones VALUES('',230,'HI','Ha Noi');
INSERT INTO zones VALUES('',230,'HT','Ha Tay');
INSERT INTO zones VALUES('',230,'HH','Ha Tinh');
INSERT INTO zones VALUES('',230,'HB','Hoa Binh');
INSERT INTO zones VALUES('',230,'HC','Ho Chin Minh');
INSERT INTO zones VALUES('',230,'HU','Hau Giang');
INSERT INTO zones VALUES('',230,'HY','Hung Yen');


#Virgin Islands (U.S.)
INSERT INTO zones VALUES('',232,'C','Saint Croix');
INSERT INTO zones VALUES('',232,'J','Saint John');
INSERT INTO zones VALUES('',232,'T','Saint Thomas');


#Wallis and Futuna
INSERT INTO zones VALUES('',233,'A','Alo');
INSERT INTO zones VALUES('',233,'S','Sigave');
INSERT INTO zones VALUES('',233,'W','Wallis');


#Yemen

INSERT INTO zones VALUES('',235,'AB','Abyan');
INSERT INTO zones VALUES('',235,'AD','Adan');
INSERT INTO zones VALUES('',235,'AM','Amran');
INSERT INTO zones VALUES('',235,'BA','Al Bayda');
INSERT INTO zones VALUES('',235,'DA','Ad Dali')
INSERT INTO zones VALUES('',235,'DH','Dhamar');
INSERT INTO zones VALUES('',235,'HD','Hadramawt');
INSERT INTO zones VALUES('',235,'HJ','Hajjah');
INSERT INTO zones VALUES('',235,'HU','Al Hudaydah');
INSERT INTO zones VALUES('',235,'IB','Ibb');
INSERT INTO zones VALUES('',235,'JA','Al Jawf');
INSERT INTO zones VALUES('',235,'LA','Lahij');
INSERT INTO zones VALUES('',235,'MA','Ma\'rib');
INSERT INTO zones VALUES('',235,'MR','Al Mahrah');
INSERT INTO zones VALUES('',235,'MW','Al Mahwit');
INSERT INTO zones VALUES('',235,'SD','Sa\'dah');
INSERT INTO zones VALUES('',235,'SN','San\'a');
INSERT INTO zones VALUES('',235,'SH','Shabwah');
INSERT INTO zones VALUES('',235,'TA','Ta\'izz');


#Serbia and Montenegro / Yugoslavia
INSERT INTO zones VALUES('',236,'KOS','Kosovo');
INSERT INTO zones VALUES('',236,'MON','Montenegro');
INSERT INTO zones VALUES('',236,'SER','Serbia');
INSERT INTO zones VALUES('',236,'VOJ','Vojvodina');


#Congo, The Democratic Republic of the
INSERT INTO zones VALUES('',237,'BC','Bas-Congo');
INSERT INTO zones VALUES('',237,'BN','Bandundu');
INSERT INTO zones VALUES('',237,'EQ','Equateur');
INSERT INTO zones VALUES('',237,'KA','Katanga');
INSERT INTO zones VALUES('',237,'KE','Kasai-Oriental');
INSERT INTO zones VALUES('',237,'KN','Kinshasa');
INSERT INTO zones VALUES('',237,'KW','Kasai-Occidental');
INSERT INTO zones VALUES('',237,'MA','Maniema');
INSERT INTO zones VALUES('',237,'NK','Nord-Kivu');
INSERT INTO zones VALUES('',237,'OR','Orientale');
INSERT INTO zones VALUES('',237,'SK','Sud-Kivu');


#Zambia
INSERT INTO zones VALUES('',238,'CE','Central');
INSERT INTO zones VALUES('',238,'CB','Copperbelt');
INSERT INTO zones VALUES('',238,'EA','Eastern');
INSERT INTO zones VALUES('',238,'LP','Luapula');
INSERT INTO zones VALUES('',238,'LK','Lusaka');
INSERT INTO zones VALUES('',238,'NO','Northern');
INSERT INTO zones VALUES('',238,'NW','North-Western');
INSERT INTO zones VALUES('',238,'SO','Southern');
INSERT INTO zones VALUES('',238,'WE','Western');


#Zimbabwe
INSERT INTO zones VALUES('',239,'BU','Bulawayo');
INSERT INTO zones VALUES('',239,'HA','Harare');
INSERT INTO zones VALUES('',239,'ML','Manicaland');
INSERT INTO zones VALUES('',239,'MC','Mashonaland Central');
INSERT INTO zones VALUES('',239,'ME','Mashonaland East');
INSERT INTO zones VALUES('',239,'MW','Mashonaland West');
INSERT INTO zones VALUES('',239,'MV','Masvingo');
INSERT INTO zones VALUES('',239,'MN','Matabeleland North');
INSERT INTO zones VALUES('',239,'MS','Matabeleland South');
INSERT INTO zones VALUES('',239,'MD','Midlands');

# Data for table `payment_moneybookers_countries`
INSERT INTO payment_moneybookers_countries VALUES (2, 'ALB');
INSERT INTO payment_moneybookers_countries VALUES (3, 'ALG');
INSERT INTO payment_moneybookers_countries VALUES (4, 'AME');
INSERT INTO payment_moneybookers_countries VALUES (5, 'AND');
INSERT INTO payment_moneybookers_countries VALUES (6, 'AGL');
INSERT INTO payment_moneybookers_countries VALUES (7, 'ANG');
INSERT INTO payment_moneybookers_countries VALUES (9, 'ANT');
INSERT INTO payment_moneybookers_countries VALUES (10, 'ARG');
INSERT INTO payment_moneybookers_countries VALUES (11, 'ARM');
INSERT INTO payment_moneybookers_countries VALUES (12, 'ARU');
INSERT INTO payment_moneybookers_countries VALUES (13, 'AUS');
INSERT INTO payment_moneybookers_countries VALUES (14, 'AUT');
INSERT INTO payment_moneybookers_countries VALUES (15, 'AZE');
INSERT INTO payment_moneybookers_countries VALUES (16, 'BMS');
INSERT INTO payment_moneybookers_countries VALUES (17, 'BAH');
INSERT INTO payment_moneybookers_countries VALUES (18, 'BAN');
INSERT INTO payment_moneybookers_countries VALUES (19, 'BAR');
INSERT INTO payment_moneybookers_countries VALUES (20, 'BLR');
INSERT INTO payment_moneybookers_countries VALUES (21, 'BGM');
INSERT INTO payment_moneybookers_countries VALUES (22, 'BEL');
INSERT INTO payment_moneybookers_countries VALUES (23, 'BEN');
INSERT INTO payment_moneybookers_countries VALUES (24, 'BER');
INSERT INTO payment_moneybookers_countries VALUES (26, 'BOL');
INSERT INTO payment_moneybookers_countries VALUES (27, 'BOS');
INSERT INTO payment_moneybookers_countries VALUES (28, 'BOT');
INSERT INTO payment_moneybookers_countries VALUES (30, 'BRA');
INSERT INTO payment_moneybookers_countries VALUES (32, 'BRU');
INSERT INTO payment_moneybookers_countries VALUES (33, 'BUL');
INSERT INTO payment_moneybookers_countries VALUES (34, 'BKF');
INSERT INTO payment_moneybookers_countries VALUES (35, 'BUR');
INSERT INTO payment_moneybookers_countries VALUES (36, 'CAM');
INSERT INTO payment_moneybookers_countries VALUES (37, 'CMR');
INSERT INTO payment_moneybookers_countries VALUES (38, 'CAN');
INSERT INTO payment_moneybookers_countries VALUES (39, 'CAP');
INSERT INTO payment_moneybookers_countries VALUES (40, 'CAY');
INSERT INTO payment_moneybookers_countries VALUES (41, 'CEN');
INSERT INTO payment_moneybookers_countries VALUES (42, 'CHA');
INSERT INTO payment_moneybookers_countries VALUES (43, 'CHL');
INSERT INTO payment_moneybookers_countries VALUES (44, 'CHN');
INSERT INTO payment_moneybookers_countries VALUES (47, 'COL');
INSERT INTO payment_moneybookers_countries VALUES (49, 'CON');
INSERT INTO payment_moneybookers_countries VALUES (51, 'COS');
INSERT INTO payment_moneybookers_countries VALUES (52, 'COT');
INSERT INTO payment_moneybookers_countries VALUES (53, 'CRO');
INSERT INTO payment_moneybookers_countries VALUES (54, 'CUB');
INSERT INTO payment_moneybookers_countries VALUES (55, 'CYP');
INSERT INTO payment_moneybookers_countries VALUES (56, 'CZE');
INSERT INTO payment_moneybookers_countries VALUES (57, 'DEN');
INSERT INTO payment_moneybookers_countries VALUES (58, 'DJI');
INSERT INTO payment_moneybookers_countries VALUES (59, 'DOM');
INSERT INTO payment_moneybookers_countries VALUES (60, 'DRP');
INSERT INTO payment_moneybookers_countries VALUES (62, 'ECU');
INSERT INTO payment_moneybookers_countries VALUES (64, 'EL_');
INSERT INTO payment_moneybookers_countries VALUES (65, 'EQU');
INSERT INTO payment_moneybookers_countries VALUES (66, 'ERI');
INSERT INTO payment_moneybookers_countries VALUES (67, 'EST');
INSERT INTO payment_moneybookers_countries VALUES (68, 'ETH');
INSERT INTO payment_moneybookers_countries VALUES (70, 'FAR');
INSERT INTO payment_moneybookers_countries VALUES (71, 'FIJ');
INSERT INTO payment_moneybookers_countries VALUES (72, 'FIN');
INSERT INTO payment_moneybookers_countries VALUES (73, 'FRA');
INSERT INTO payment_moneybookers_countries VALUES (75, 'FRE');
INSERT INTO payment_moneybookers_countries VALUES (78, 'GAB');
INSERT INTO payment_moneybookers_countries VALUES (79, 'GAM');
INSERT INTO payment_moneybookers_countries VALUES (80, 'GEO');
INSERT INTO payment_moneybookers_countries VALUES (81, 'GER');
INSERT INTO payment_moneybookers_countries VALUES (82, 'GHA');
INSERT INTO payment_moneybookers_countries VALUES (83, 'GIB');
INSERT INTO payment_moneybookers_countries VALUES (84, 'GRC');
INSERT INTO payment_moneybookers_countries VALUES (85, 'GRL');
INSERT INTO payment_moneybookers_countries VALUES (87, 'GDL');
INSERT INTO payment_moneybookers_countries VALUES (88, 'GUM');
INSERT INTO payment_moneybookers_countries VALUES (89, 'GUA');
INSERT INTO payment_moneybookers_countries VALUES (90, 'GUI');
INSERT INTO payment_moneybookers_countries VALUES (91, 'GBS');
INSERT INTO payment_moneybookers_countries VALUES (92, 'GUY');
INSERT INTO payment_moneybookers_countries VALUES (93, 'HAI');
INSERT INTO payment_moneybookers_countries VALUES (95, 'HON');
INSERT INTO payment_moneybookers_countries VALUES (96, 'HKG');
INSERT INTO payment_moneybookers_countries VALUES (97, 'HUN');
INSERT INTO payment_moneybookers_countries VALUES (98, 'ICE');
INSERT INTO payment_moneybookers_countries VALUES (99, 'IND');
INSERT INTO payment_moneybookers_countries VALUES (101, 'IRN');
INSERT INTO payment_moneybookers_countries VALUES (102, 'IRA');
INSERT INTO payment_moneybookers_countries VALUES (103, 'IRE');
INSERT INTO payment_moneybookers_countries VALUES (104, 'ISR');
INSERT INTO payment_moneybookers_countries VALUES (105, 'ITA');
INSERT INTO payment_moneybookers_countries VALUES (106, 'JAM');
INSERT INTO payment_moneybookers_countries VALUES (107, 'JAP');
INSERT INTO payment_moneybookers_countries VALUES (108, 'JOR');
INSERT INTO payment_moneybookers_countries VALUES (109, 'KAZ');
INSERT INTO payment_moneybookers_countries VALUES (110, 'KEN');
INSERT INTO payment_moneybookers_countries VALUES (112, 'SKO');
INSERT INTO payment_moneybookers_countries VALUES (113, 'KOR');
INSERT INTO payment_moneybookers_countries VALUES (114, 'KUW');
INSERT INTO payment_moneybookers_countries VALUES (115, 'KYR');
INSERT INTO payment_moneybookers_countries VALUES (116, 'LAO');
INSERT INTO payment_moneybookers_countries VALUES (117, 'LAT');
INSERT INTO payment_moneybookers_countries VALUES (141, 'MCO');
INSERT INTO payment_moneybookers_countries VALUES (119, 'LES');
INSERT INTO payment_moneybookers_countries VALUES (120, 'LIB');
INSERT INTO payment_moneybookers_countries VALUES (121, 'LBY');
INSERT INTO payment_moneybookers_countries VALUES (122, 'LIE');
INSERT INTO payment_moneybookers_countries VALUES (123, 'LIT');
INSERT INTO payment_moneybookers_countries VALUES (124, 'LUX');
INSERT INTO payment_moneybookers_countries VALUES (125, 'MAC');
INSERT INTO payment_moneybookers_countries VALUES (126, 'F.Y');
INSERT INTO payment_moneybookers_countries VALUES (127, 'MAD');
INSERT INTO payment_moneybookers_countries VALUES (128, 'MLW');
INSERT INTO payment_moneybookers_countries VALUES (129, 'MLS');
INSERT INTO payment_moneybookers_countries VALUES (130, 'MAL');
INSERT INTO payment_moneybookers_countries VALUES (131, 'MLI');
INSERT INTO payment_moneybookers_countries VALUES (132, 'MLT');
INSERT INTO payment_moneybookers_countries VALUES (134, 'MAR');
INSERT INTO payment_moneybookers_countries VALUES (135, 'MRT');
INSERT INTO payment_moneybookers_countries VALUES (136, 'MAU');
INSERT INTO payment_moneybookers_countries VALUES (138, 'MEX');
INSERT INTO payment_moneybookers_countries VALUES (140, 'MOL');
INSERT INTO payment_moneybookers_countries VALUES (142, 'MON');
INSERT INTO payment_moneybookers_countries VALUES (143, 'MTT');
INSERT INTO payment_moneybookers_countries VALUES (144, 'MOR');
INSERT INTO payment_moneybookers_countries VALUES (145, 'MOZ');
INSERT INTO payment_moneybookers_countries VALUES (76, 'PYF');
INSERT INTO payment_moneybookers_countries VALUES (147, 'NAM');
INSERT INTO payment_moneybookers_countries VALUES (149, 'NEP');
INSERT INTO payment_moneybookers_countries VALUES (150, 'NED');
INSERT INTO payment_moneybookers_countries VALUES (151, 'NET');
INSERT INTO payment_moneybookers_countries VALUES (152, 'CDN');
INSERT INTO payment_moneybookers_countries VALUES (153, 'NEW');
INSERT INTO payment_moneybookers_countries VALUES (154, 'NIC');
INSERT INTO payment_moneybookers_countries VALUES (155, 'NIG');
INSERT INTO payment_moneybookers_countries VALUES (69, 'FLK');
INSERT INTO payment_moneybookers_countries VALUES (160, 'NWY');
INSERT INTO payment_moneybookers_countries VALUES (161, 'OMA');
INSERT INTO payment_moneybookers_countries VALUES (162, 'PAK');
INSERT INTO payment_moneybookers_countries VALUES (164, 'PAN');
INSERT INTO payment_moneybookers_countries VALUES (165, 'PAP');
INSERT INTO payment_moneybookers_countries VALUES (166, 'PAR');
INSERT INTO payment_moneybookers_countries VALUES (167, 'PER');
INSERT INTO payment_moneybookers_countries VALUES (168, 'PHI');
INSERT INTO payment_moneybookers_countries VALUES (170, 'POL');
INSERT INTO payment_moneybookers_countries VALUES (171, 'POR');
INSERT INTO payment_moneybookers_countries VALUES (172, 'PUE');
INSERT INTO payment_moneybookers_countries VALUES (173, 'QAT');
INSERT INTO payment_moneybookers_countries VALUES (175, 'ROM');
INSERT INTO payment_moneybookers_countries VALUES (176, 'RUS');
INSERT INTO payment_moneybookers_countries VALUES (177, 'RWA');
INSERT INTO payment_moneybookers_countries VALUES (178, 'SKN');
INSERT INTO payment_moneybookers_countries VALUES (179, 'SLU');
INSERT INTO payment_moneybookers_countries VALUES (180, 'ST.');
INSERT INTO payment_moneybookers_countries VALUES (181, 'WES');
INSERT INTO payment_moneybookers_countries VALUES (182, 'SAN');
INSERT INTO payment_moneybookers_countries VALUES (183, 'SAO');
INSERT INTO payment_moneybookers_countries VALUES (184, 'SAU');
INSERT INTO payment_moneybookers_countries VALUES (185, 'SEN');
INSERT INTO payment_moneybookers_countries VALUES (186, 'SEY');
INSERT INTO payment_moneybookers_countries VALUES (187, 'SIE');
INSERT INTO payment_moneybookers_countries VALUES (188, 'SIN');
INSERT INTO payment_moneybookers_countries VALUES (189, 'SLO');
INSERT INTO payment_moneybookers_countries VALUES (190, 'SLV');
INSERT INTO payment_moneybookers_countries VALUES (191, 'SOL');
INSERT INTO payment_moneybookers_countries VALUES (192, 'SOM');
INSERT INTO payment_moneybookers_countries VALUES (193, 'SOU');
INSERT INTO payment_moneybookers_countries VALUES (195, 'SPA');
INSERT INTO payment_moneybookers_countries VALUES (196, 'SRI');
INSERT INTO payment_moneybookers_countries VALUES (199, 'SUD');
INSERT INTO payment_moneybookers_countries VALUES (200, 'SUR');
INSERT INTO payment_moneybookers_countries VALUES (202, 'SWA');
INSERT INTO payment_moneybookers_countries VALUES (203, 'SWE');
INSERT INTO payment_moneybookers_countries VALUES (204, 'SWI');
INSERT INTO payment_moneybookers_countries VALUES (205, 'SYR');
INSERT INTO payment_moneybookers_countries VALUES (206, 'TWN');
INSERT INTO payment_moneybookers_countries VALUES (207, 'TAJ');
INSERT INTO payment_moneybookers_countries VALUES (208, 'TAN');
INSERT INTO payment_moneybookers_countries VALUES (209, 'THA');
INSERT INTO payment_moneybookers_countries VALUES (210, 'TOG');
INSERT INTO payment_moneybookers_countries VALUES (212, 'TON');
INSERT INTO payment_moneybookers_countries VALUES (213, 'TRI');
INSERT INTO payment_moneybookers_countries VALUES (214, 'TUN');
INSERT INTO payment_moneybookers_countries VALUES (215, 'TUR');
INSERT INTO payment_moneybookers_countries VALUES (216, 'TKM');
INSERT INTO payment_moneybookers_countries VALUES (217, 'TCI');
INSERT INTO payment_moneybookers_countries VALUES (219, 'UGA');
INSERT INTO payment_moneybookers_countries VALUES (231, 'BRI');
INSERT INTO payment_moneybookers_countries VALUES (221, 'UAE');
INSERT INTO payment_moneybookers_countries VALUES (222, 'GBR');
INSERT INTO payment_moneybookers_countries VALUES (223, 'UNI');
INSERT INTO payment_moneybookers_countries VALUES (225, 'URU');
INSERT INTO payment_moneybookers_countries VALUES (226, 'UZB');
INSERT INTO payment_moneybookers_countries VALUES (227, 'VAN');
INSERT INTO payment_moneybookers_countries VALUES (229, 'VEN');
INSERT INTO payment_moneybookers_countries VALUES (230, 'VIE');
INSERT INTO payment_moneybookers_countries VALUES (232, 'US_');
INSERT INTO payment_moneybookers_countries VALUES (235, 'YEM');
INSERT INTO payment_moneybookers_countries VALUES (236, 'YUG');
INSERT INTO payment_moneybookers_countries VALUES (238, 'ZAM');
INSERT INTO payment_moneybookers_countries VALUES (239, 'ZIM');

# Data for table `payment_moneybookers_currencies`
INSERT INTO payment_moneybookers_currencies VALUES ('AUD', 'Australian Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('BGN', 'Bulgarian Lev');
INSERT INTO payment_moneybookers_currencies VALUES ('CAD', 'Canadian Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('CHF', 'Swiss Franc');
INSERT INTO payment_moneybookers_currencies VALUES ('CZK', 'Czech Koruna');
INSERT INTO payment_moneybookers_currencies VALUES ('DKK', 'Danish Krone');
INSERT INTO payment_moneybookers_currencies VALUES ('EEK', 'Estonian Koruna');
INSERT INTO payment_moneybookers_currencies VALUES ('EUR', 'Euro');
INSERT INTO payment_moneybookers_currencies VALUES ('GBP', 'Pound Sterling');
INSERT INTO payment_moneybookers_currencies VALUES ('HKD', 'Hong Kong Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('HUF', 'Forint');
INSERT INTO payment_moneybookers_currencies VALUES ('ILS', 'Shekel');
INSERT INTO payment_moneybookers_currencies VALUES ('ISK', 'Iceland Krona');
INSERT INTO payment_moneybookers_currencies VALUES ('JPY', 'Yen');
INSERT INTO payment_moneybookers_currencies VALUES ('KRW', 'South-Korean Won');
INSERT INTO payment_moneybookers_currencies VALUES ('LVL', 'Latvian Lat');
INSERT INTO payment_moneybookers_currencies VALUES ('MYR', 'Malaysian Ringgit');
INSERT INTO payment_moneybookers_currencies VALUES ('NOK', 'Norwegian Krone');
INSERT INTO payment_moneybookers_currencies VALUES ('NZD', 'New Zealand Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('PLN', 'Zloty');
INSERT INTO payment_moneybookers_currencies VALUES ('SEK', 'Swedish Krona');
INSERT INTO payment_moneybookers_currencies VALUES ('SGD', 'Singapore Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('SKK', 'Slovak Koruna');
INSERT INTO payment_moneybookers_currencies VALUES ('THB', 'Baht');
INSERT INTO payment_moneybookers_currencies VALUES ('TWD', 'New Taiwan Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('USD', 'US Dollar');
INSERT INTO payment_moneybookers_currencies VALUES ('ZAR', 'South-African Rand');