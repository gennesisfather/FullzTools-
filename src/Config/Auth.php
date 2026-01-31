<?php

declare(strict_types=1);

/**
 * Authentication Functions
 * 
 * Handles user authentication checks including:
 * - Login status verification
 * - Admin role verification
 * - Permission checks
 * - Session security and validation
 */

if (!defined('APP_ROOT')) {
    die('Direct access not permitted');
}

/**
 * Check if user is logged in
 * 
 * @return bool True if user is logged in
 */
function is_login(): bool
{
    if (!isset($_SESSION['userId']) || empty($_SESSION['userId']) || empty($_SESSION['username']) || empty($_SESSION['regDate'])) {
        // Log login failure for debugging
        error_log('Authentication Error: Invalid or missing session variables');
        return false;
    }

    // Validate session lifetime (e.g., 30 minutes)
    if (isset($_SESSION['created']) && (time() - $_SESSION['created'] > 1800)) {
        session_unset();
        session_destroy();
        error_log('Session expired due to inactivity');
        return false;
    }

    return true;
}

/**
 * Check if user is admin
 * 
 * @return bool True if user is admin
 */
function is_admin(): bool
{
    return is_login() && isset($_SESSION['userType']) && $_SESSION['userType'] == '1';
}

/**
 * Alias for is_admin()
 * 
 * @return bool True if user is admin
 */
function is_login_admin(): bool
{
    return is_admin();
}

/**
 * Get current logged-in user ID
 * 
 * @return int|null User ID or null if not logged in
 */
function get_user_id(): ?int
{
    return isset($_SESSION['userId']) ? (int)$_SESSION['userId'] : null;
}