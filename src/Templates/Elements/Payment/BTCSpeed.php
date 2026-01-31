<?php

namespace FullzTools\Templates\Elements\Payment;

/**
 * BTC Speed Payment Template Element
 * 
 * Display Bitcoin Speed payment form (faster confirmation)
 */
class BTCSpeed
{
    /**
     * Render BTC Speed payment form
     */
    public static function render($amount, $address)
    {
        ?>
        <div class="payment-btc-speed">
            <h3>Bitcoin Speed Payment</h3>
            <p>Amount: <?= htmlspecialchars($amount) ?> BTC</p>
            <p>Send to address:</p>
            <div class="btc-address">
                <code><?= htmlspecialchars($address) ?></code>
            </div>
            <p class="note">Faster confirmation - Payment confirmed after 1 confirmation</p>
        </div>
        <?php
    }
}
