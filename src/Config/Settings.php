<?php

namespace FullzTools\Config;

/**
 * Application Settings
 * 
 * Handles application-wide settings
 */
class Settings
{
    private static $settings = [];
    
    /**
     * Load settings
     */
    public static function load()
    {
        // TODO: Load settings from database or config file
    }
    
    /**
     * Get setting value
     */
    public static function get($key, $default = null)
    {
        return self::$settings[$key] ?? $default;
    }
    
    /**
     * Set setting value
     */
    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}
