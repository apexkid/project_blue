<?php

session_start();
ob_start();

require_once 'include/config.php';

require_once PRESENTATION_DIR.'application.php';

require_once BUSINESS_DIR.'link.php';
require_once BUSINESS_DIR.'error_handler.php';
require_once BUSINESS_DIR.'database_handler.php';

require_once BUSINESS_DIR.'catalog.php';

$application = new Application();
$application -> display('store_admin.tpl');

DatabaseHandler::Close();

flush();
ob_flush();
ob_end_clean();

?>