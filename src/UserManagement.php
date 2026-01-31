<?php

declare(strict_types=1);

/**
 * User Management Functions
 * 
 * Handles user data operations including:
 * - Fetching user data
 * - Balance management
 * - User updates
 */

if (!defined('APP_ROOT')) {
    die('Direct access not permitted');
}

/**
 * Get user data by ID
 * 
 * @param int $userId User ID
 * @return array|null User data or null if not found
 */
function get_user(int $userId): ?array
{
    global $config, $pdo;
    
    try {
        $sql = "SELECT u.*, t.typeName, t.typeColor 
                FROM {
$config['table_users']} u 
                LEFT JOIN {$config['table_types']} t ON u.typeId = t.typeId 
                WHERE u.userId = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetch() ?: null;
    } catch (PDOException $e) {
        error_log('[USER ERROR] Failed to get user: ' . $e->getMessage());
        return null;
    }
}

/**
 * Get user balance
 * 
 * @param int $userId User ID
 * @return float User balance
 */
function get_balance(int $userId): float
{
    global $config, $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT credit FROM {$config['table_users']} WHERE userId = ?");
        $stmt->execute([$userId]);
        $row = $stmt->fetch();
        return $row ? (float) $row['credit'] : 0.0;
    } catch (PDOException $e) {
        error_log('[USER ERROR] Failed to get balance: ' . $e->getMessage());
        return 0.0;
    }
}

/**
 * Update user balance
 * 
 * @param int $userId User ID
 * @param float $amount Amount to add/subtract/set
 * @param string $type Operation type: 'add', 'subtract', or 'set'
 * @return bool True on success
 */
function update_balance(int $userId, float $amount, string $type = 'add'): bool
{
    global $config, $pdo;
    
    try {
        if ($type === 'add') {
            $sql = "UPDATE {$config['table_users']} SET credit = credit + ? WHERE userId = ?";
            $stmt = $pdo->prepare($sql);
            return $stmt->execute([$amount, $userId]);
            
        } elseif ($type === 'subtract') {
            // Ensure sufficient balance before subtracting
            $sql = "UPDATE {$config['table_users']} 
                    SET credit = credit - ? 
                    WHERE userId = ? AND credit >= ?";
            $stmt = $pdo->prepare($sql);
            return $stmt->execute([$amount, $userId, $amount]) && $stmt->rowCount() > 0;
            
        } else {
            // Set to specific amount
            $sql = "UPDATE {$config['table_users']} SET credit = ? WHERE userId = ?";
            $stmt = $pdo->prepare($sql);
            return $stmt->execute([$amount, $userId]);
        }
        
    } catch (PDOException $e) {
        error_log('[USER ERROR] Failed to update balance: ' . $e->getMessage());
        return false;
    }
}

?>