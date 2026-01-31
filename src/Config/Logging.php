<?php

namespace FullzTools\Config;

/**
 * Logging Configuration
 * 
 * Handles application logging
 */
class Logging
{
    /**
     * Log error message
     */
    public static function error($message)
    {
        // TODO: Implement error logging
        error_log($message);
    }
    
    /**
     * Log info message
     */
    public static function info($message)
    {
        // TODO: Implement info logging
    }
    
    /**
     * Log debug message
     */
    public static function debug($message)
    {
        // TODO: Implement debug logging
    }
}
