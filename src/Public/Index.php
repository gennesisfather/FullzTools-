<?php

/**
 * Public Index Page
 * 
 * Main homepage
 */

require_once __DIR__ . '/../Includes/Config.php';

use FullzTools\Config\Settings;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Settings::get('site_name', 'FullzTools') ?></title>
</head>
<body>
    <header>
        <h1>Welcome to FullzTools</h1>
        <nav>
            <a href="/index.php">Home</a>
            <a href="/buy.php">Buy</a>
            <a href="/login.php">Login</a>
            <a href="/register.php">Register</a>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <h2>Your Trusted Source</h2>
            <p>Browse our services and products</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?= date('Y') ?> FullzTools. All rights reserved.</p>
    </footer>
</body>
</html>
