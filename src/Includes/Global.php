<?php

/**
 * Global Functions and Utilities
 * 
 * Commonly used functions across the application
 */

use FullzTools\Config\Helpers;
use FullzTools\Config\HttpHelpers;
use FullzTools\Config\Security;

/**
 * Escape HTML output
 */
function e($string)
{
    return Helpers::sanitize($string);
}

/**
 * Redirect to URL
 */
function redirect($url)
{
    HttpHelpers::redirect($url);
}

/**
 * Check if user is authenticated
 */
function isAuthenticated()
{
    return \FullzTools\Config\Auth::check();
}

/**
 * Get current user
 */
function currentUser()
{
    return \FullzTools\Config\User::current();
}
