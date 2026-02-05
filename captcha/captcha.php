<?php
/**
 * Captcha Generator
 */

session_start();

// Captcha configuration
$captchaLength = 6;
$captchaChars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
$width = 150;
$height = 50;

// Generate captcha string
$captchaString = '';
for ($i = 0; $i < $captchaLength; $i++) {
    $captchaString .= $captchaChars[random_int(0, strlen($captchaChars) - 1)];
}

// Store in session
$_SESSION['captcha'] = $captchaString;

// Create image
$image = imagecreatetruecolor($width, $height);

// Colors
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);
$lineColor = imagecolorallocate($image, 200, 200, 200);

// Fill background
imagefilledrectangle($image, 0, 0, $width, $height, $bgColor);

// Add noise lines
for ($i = 0; $i < 5; $i++) {
    imageline($image, random_int(0, $width), random_int(0, $height),
              random_int(0, $width), random_int(0, $height), $lineColor);
}

// Add text
$fontSize = 5;
$x = ($width - strlen($captchaString) * imagefontwidth($fontSize)) / 2;
$y = ($height - imagefontheight($fontSize)) / 2;
imagestring($image, $fontSize, $x, $y, $captchaString, $textColor);

// Output image
header('Content-Type: image/png');
header('Cache-Control: no-cache, no-store, must-revalidate');
imagepng($image);
imagedestroy($image);
