<?php

namespace FullzTools\Config;

/**
 * Application Constants
 * 
 * Defines application-wide constants
 */
class Constants
{
    const APP_NAME = 'FullzTools';
    const VERSION = '1.0.0';
    
    // User roles
    const ROLE_ADMIN = 'admin';
    const ROLE_SELLER = 'seller';
    const ROLE_USER = 'user';
    
    // Order statuses
    const ORDER_PENDING = 'pending';
    const ORDER_COMPLETED = 'completed';
    const ORDER_CANCELLED = 'cancelled';
}
