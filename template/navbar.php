<?php
/**
 * Navigation Bar Template
 */
?>
<header class="navbar">
    <div class="navbar-brand">
        <a href="/index.php">FullzTools</a>
    </div>
    <nav class="navbar-menu">
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="navbar-actions">
        <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
            <a href="/logout.php" class="btn">Logout</a>
        <?php else: ?>
            <a href="/login.php" class="btn">Login</a>
        <?php endif; ?>
    </div>
</header>
