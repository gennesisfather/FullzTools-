<?php

/**
 * Main Configuration File
 * 
 * Bootstrap and configuration initialization
 */

// Define paths
define('ROOT_PATH', dirname(__DIR__, 2));
define('SRC_PATH', ROOT_PATH . '/src');
define('PUBLIC_PATH', ROOT_PATH . '/src/Public');

// Load Composer autoloader
require_once ROOT_PATH . '/vendor/autoload.php';

// Initialize application
use FullzTools\Config\Session;
use FullzTools\Config\Settings;
use FullzTools\Config\Database;

// Start session
Session::start();

// Load settings
Settings::load();

// Get database instance
$db = Database::getInstance();
