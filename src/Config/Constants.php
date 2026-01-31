<?php

// Constants Configuration

// Bootstrap settings
define('BOOTSTRAP_VERSION', '5.1.3');
define('BOOTSTRAP_CSS_PATH', '/assets/css/bootstrap.min.css');
define('BOOTSTRAP_JS_PATH', '/assets/js/bootstrap.bundle.min.js');

// Database table names
define('TABLE_USERS', 'users');
define('TABLE_ORDERS', 'orders');
define('TABLE_PRODUCTS', 'products');
define('TABLE_INVENTORY', 'inventory');

// NOWPayments configuration
define('NOW_PAYMENTS_API_KEY', 'your_api_key_here');
define('NOW_PAYMENTS_SECRET', 'your_secret_here');

// Inventory details
define('INVENTORY_LOW_THRESHOLD', 5);
define('INVENTORY_CHECK_INTERVAL', 3600); // in seconds

?>