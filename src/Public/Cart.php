<?php

/**
 * Shopping Cart Page
 * 
 * View and manage shopping cart
 */

require_once __DIR__ . '/../Includes/Config.php';

use FullzTools\Config\Auth;
use FullzTools\Config\HttpHelpers;
use FullzTools\Templates\Elements\CartTotal;

if (!Auth::check()) {
    HttpHelpers::redirect('/login.php');
}

// TODO: Retrieve cart items from session or database
$cartItems = [];
$total = 0.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - FullzTools</title>
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
        <nav>
            <a href="/index.php">Home</a>
            <a href="/buy.php">Continue Shopping</a>
            <a href="/logout.php">Logout</a>
        </nav>
    </header>
    
    <main>
        <section class="cart">
            <?php if (empty($cartItems)): ?>
                <p>Your cart is empty.</p>
                <a href="/buy.php" class="btn">Start Shopping</a>
            <?php else: ?>
                <div class="cart-items">
                    <!-- Cart items will be displayed here -->
                </div>
                <?php CartTotal::render($cartItems, $total); ?>
            <?php endif; ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?= date('Y') ?> FullzTools. All rights reserved.</p>
    </footer>
</body>
</html>
