<?php

namespace FullzTools\Templates\Elements\Payment;

/**
 * BTC Payment Template Element
 * 
 * Display Bitcoin payment form
 */
class BTC
{
    /**
     * Render BTC payment form
     */
    public static function render($amount, $address)
    {
        ?>
        <div class="payment-btc">
            <h3>Bitcoin Payment</h3>
            <p>Amount: <?= htmlspecialchars($amount) ?> BTC</p>
            <p>Send to address:</p>
            <div class="btc-address">
                <code><?= htmlspecialchars($address) ?></code>
            </div>
            <p class="note">Payment will be confirmed after 3 confirmations</p>
        </div>
        <?php
    }
}
