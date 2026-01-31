<?php

/**
 * Buy Page
 * 
 * Product/service purchase page
 */

require_once __DIR__ . '/../Includes/Config.php';

use FullzTools\Config\Auth;
use FullzTools\Config\HttpHelpers;

if (!Auth::check()) {
    HttpHelpers::redirect('/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy - FullzTools</title>
</head>
<body>
    <header>
        <h1>Available Products</h1>
        <nav>
            <a href="/index.php">Home</a>
            <a href="/cart.php">Cart</a>
            <a href="/logout.php">Logout</a>
        </nav>
    </header>
    
    <main>
        <section class="products">
            <h2>Browse Products</h2>
            <!-- Product listing will be implemented here -->
            <p>Product catalog coming soon...</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?= date('Y') ?> FullzTools. All rights reserved.</p>
    </footer>
</body>
</html>
