<?php
/**
 * Main Entry Point
 */

require_once __DIR__ . '/bootstrap/app.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/template/head.php'; ?>
    <title>FullzTools</title>
</head>
<body>
    <?php include __DIR__ . '/template/navbar.php'; ?>

    <main class="main-content">
        <div class="container">
            <h1>Welcome to FullzTools</h1>
            <p>Your application content goes here.</p>
        </div>
    </main>

    <?php include __DIR__ . '/template/footer.php'; ?>
    <?php include __DIR__ . '/template/scripts.php'; ?>
</body>
</html>
