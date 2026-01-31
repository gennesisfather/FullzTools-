<?php

/**
 * BG Accounts Purchase Admin Email Template (Text)
 */

return <<<TEXT
New BG Account Purchase

A new BG account has been purchased.

Order ID: {orderId}
Customer: {customerName}
Email: {customerEmail}
Amount: {amount}
Date: {purchaseDate}
TEXT;
