<?php

namespace FullzTools\Config;

/**
 * Helper Functions
 * 
 * Common utility functions
 */
class Helpers
{
    /**
     * Sanitize input
     */
    public static function sanitize($input)
    {
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }
    
    /**
     * Format currency
     */
    public static function formatCurrency($amount)
    {
        return '$' . number_format($amount, 2);
    }
    
    /**
     * Generate random string
     */
    public static function randomString($length = 10)
    {
        return bin2hex(random_bytes($length / 2));
    }
}
