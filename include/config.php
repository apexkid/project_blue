<?php
//Paths for various directories.
define('SITE_ROOT', dirname(dirname(__FILE__)));

define('PRESENTATION_DIR', SITE_ROOT.'/presentation/');
define('BUSINESS_DIR', SITE_ROOT.'/business/');

define('SMARTY_DIR', SITE_ROOT.'/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR.'templates');
define('COMPILE_DIR', PRESENTATION_DIR.'templates_c');
define('CONFIG_DIR', SITE_ROOT.'/include/configs');

//Error handling parametres
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);
define('ERROR_TYPES', E_ALL);

//Mailing system parametres
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'zeekisfreak@gmail.com');
define('SEND_FROM', 'report@projectblue.com');

//Error logging parametres
define('LOG_ERRORS', true);
define('LOG_ERROR_FILE', 'C:\\wamp\www\project_blue\error_log.txt');
define('SITE_GENERIC_ERROR_MESSAGE', '<h1> Site: An Error Occured </h1>');

//Database Parametres
define('DB_PERSISTENCY', true);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'qwerty');
define('DB_DATABASE', 'projectblue');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

//Link factory parametres
define('HTTP_SERVER_PORT', '80');
define('VIRTUAL_LOCATION', '/project_blue/');

//Catalog parametres
define('PRODUCTS_PER_PAGE', '10');
define('PRODUCTS_SHORT_DESCRIPTION_LENGTH', '100');

//Cart parametres
define('CART_EXPIRE_TIME', 604800);
define('GET_CART_PRODUCTS', 1);
define('GET_CART_SAVED_PRODUCTS', 2);
define('ADD_PRODUCT', 1);
define('REMOVE_PRODUCT', 2);
define('UPDATE_PRODUCT_QUANTITY', 3);
define('SAVE_PRODUCT_FOR_LATER', 4);
define('MOVE_PRODUCT_TO_CART', 5);

//SSL parametres
define('USE_SSL', false);

//Admin Parametres
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'dwingg');

//Hashing Parametres
define('HASH_PREFIX', 'K1-');
?>