<?php

/**
 * BG Accounts Purchase User Email Template (HTML)
 */

return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your BG Account Purchase</title>
</head>
<body>
    <h2>Thank You for Your Purchase!</h2>
    <p>Dear {customerName},</p>
    <p>Your BG account purchase has been confirmed.</p>
    <p><strong>Order ID:</strong> {orderId}</p>
    <p><strong>Amount Paid:</strong> {amount}</p>
    <p><strong>Purchase Date:</strong> {purchaseDate}</p>
    <p>We will process your order shortly.</p>
    <p>Thank you for choosing our service!</p>
</body>
</html>
HTML;
