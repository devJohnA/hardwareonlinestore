<?php
// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP Pre-defined constant: (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Adjust SITE_ROOT to point to the correct directory
defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__DIR__));

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'include');

// Load the database configuration first
require_once(LIB_PATH . DS . "config.php");
require_once(LIB_PATH . DS . "function.php");
require_once(LIB_PATH . DS . "session.php");
require_once(LIB_PATH . DS . "accounts.php");
require_once(LIB_PATH . DS . "autonumbers.php");
require_once(LIB_PATH . DS . "products.php");
require_once(LIB_PATH . DS . "stockin.php");
require_once(LIB_PATH . DS . "categories.php");
require_once(LIB_PATH . DS . "sidebarFunction.php");
require_once(LIB_PATH . DS . "promos.php");
require_once(LIB_PATH . DS . "customers.php");
require_once(LIB_PATH . DS . "orders.php");
require_once(LIB_PATH . DS . "summary.php");
require_once(LIB_PATH . DS . "settings.php");
require_once(LIB_PATH . DS . "database.php");
?>