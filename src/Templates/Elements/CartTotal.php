<?php

namespace FullzTools\Templates\Elements;

/**
 * Cart Total Template Element
 * 
 * Display shopping cart total
 */
class CartTotal
{
    /**
     * Render cart total
     */
    public static function render($items, $total)
    {
        ?>
        <div class="cart-total">
            <h3>Cart Summary</h3>
            <div class="items-count">
                Items: <?= count($items) ?>
            </div>
            <div class="total-amount">
                Total: $<?= number_format($total, 2) ?>
            </div>
            <button class="btn btn-checkout">Proceed to Checkout</button>
        </div>
        <?php
    }
}
