<?php

// Constants configuration for FullzTools

// Bootstrap settings
define('BOOTSTRAP_SETTINGS', [
    'env' => 'production',
    'debug' => false,
]);

// Database table names
define('DB_TABLE_USERS', 'users');
define('DB_TABLE_ORDERS', 'orders');

// NowPayments configuration
define('NOWPAYMENTS_API_KEY', 'your_nowpayments_api_key');

// Sales configuration
define('SALES_TAX_RATE', 0.07);

// Inventory configuration
define('INVENTORY_CHECK_INTERVAL', 60);

// Timezone fallback
define('TIMEZONE_FALLBACK', 'UTC');

?>