<?php

namespace FullzTools\Templates\Elements;

/**
 * Alerts Template Element
 * 
 * Display alert messages
 */
class Alerts
{
    /**
     * Render success alert
     */
    public static function success($message)
    {
        ?>
        <div class="alert alert-success">
            <?= htmlspecialchars($message) ?>
        </div>
        <?php
    }
    
    /**
     * Render error alert
     */
    public static function error($message)
    {
        ?>
        <div class="alert alert-error">
            <?= htmlspecialchars($message) ?>
        </div>
        <?php
    }
    
    /**
     * Render warning alert
     */
    public static function warning($message)
    {
        ?>
        <div class="alert alert-warning">
            <?= htmlspecialchars($message) ?>
        </div>
        <?php
    }
}
