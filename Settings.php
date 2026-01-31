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
        global $db; // Assumes a global PDO object for the database connection

        try {
            $query = $db->query("SELECT `key`, `value` FROM settings");
            $settings = $query->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($settings as $setting) {
                self::$settings[$setting['key']] = $setting['value'];
            }
        } catch (\PDOException $e) {
            error_log("Failed to load settings: " . $e->getMessage());
        }
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