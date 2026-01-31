<?php

/**
 * Google Voice Purchase Admin Email Template (Text)
 */

return <<<TEXT
New Google Voice Purchase

A new Google Voice account has been purchased.

Order ID: {orderId}
Customer: {customerName}
Email: {customerEmail}
Amount: {amount}
Date: {purchaseDate}
TEXT;
