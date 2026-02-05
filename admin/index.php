<?php
/**
 * Admin Panel Index
 */

require_once __DIR__ . '/../bootstrap/app.php';

// Check admin authentication
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /index.php');
    exit;
}

// Admin dashboard content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/../template/head.php'; ?>
    <title>Admin Dashboard</title>
</head>
<body>
    <?php include __DIR__ . '/../template/navbar.php'; ?>
    <?php include __DIR__ . '/../template/menu.php'; ?>

    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-content">
            <!-- Admin content here -->
        </div>
    </div>

    <?php include __DIR__ . '/../template/footer.php'; ?>
    <?php include __DIR__ . '/../template/scripts.php'; ?>
</body>
</html>
