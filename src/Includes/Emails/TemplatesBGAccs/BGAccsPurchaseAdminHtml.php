<?php

/**
 * BG Accounts Purchase Admin Email Template (HTML)
 */

return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BG Account Purchase Notification</title>
</head>
<body>
    <h2>New BG Account Purchase</h2>
    <p>A new BG account has been purchased.</p>
    <p><strong>Order ID:</strong> {orderId}</p>
    <p><strong>Customer:</strong> {customerName}</p>
    <p><strong>Email:</strong> {customerEmail}</p>
    <p><strong>Amount:</strong> {amount}</p>
    <p><strong>Date:</strong> {purchaseDate}</p>
</body>
</html>
HTML;
