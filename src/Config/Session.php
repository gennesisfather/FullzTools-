<?php

namespace FullzTools\Config;

/**
 * Session Management
 * 
 * Handles PHP session operations
 */
class Session
{
    /**
     * Start session
     */
    public static function start()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    /**
     * Set session value
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    /**
     * Get session value
     */
    public static function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }
    
    /**
     * Destroy session
     */
    public static function destroy()
    {
        session_destroy();
    }
}
