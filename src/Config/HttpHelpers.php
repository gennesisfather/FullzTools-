<?php

namespace FullzTools\Config;

/**
 * HTTP Helper Functions
 * 
 * HTTP-related utility functions
 */
class HttpHelpers
{
    /**
     * Redirect to URL
     */
    public static function redirect($url)
    {
        header("Location: $url");
        exit;
    }
    
    /**
     * Get current URL
     */
    public static function currentUrl()
    {
        return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
    
    /**
     * Check if request is POST
     */
    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}
