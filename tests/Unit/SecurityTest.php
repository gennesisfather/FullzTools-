<?php

namespace FullzTools\Tests\Unit;

use PHPUnit\Framework\TestCase;
use FullzTools\Config\Security;

/**
 * Unit tests for Security class
 */
class SecurityTest extends TestCase
{
    public function testHashPasswordCreatesHash()
    {
        $password = 'testPassword123';
        
        $hash = Security::hashPassword($password);
        
        $this->assertNotEmpty($hash);
        $this->assertNotEquals($password, $hash);
    }
    
    public function testVerifyPasswordWithCorrectPassword()
    {
        $password = 'testPassword123';
        $hash = Security::hashPassword($password);
        
        $result = Security::verifyPassword($password, $hash);
        
        $this->assertTrue($result);
    }
    
    public function testVerifyPasswordWithIncorrectPassword()
    {
        $password = 'testPassword123';
        $wrongPassword = 'wrongPassword456';
        $hash = Security::hashPassword($password);
        
        $result = Security::verifyPassword($wrongPassword, $hash);
        
        $this->assertFalse($result);
    }
    
    public function testGenerateCsrfTokenCreatesToken()
    {
        $token = Security::generateCsrfToken();
        
        $this->assertNotEmpty($token);
        $this->assertEquals(64, strlen($token)); // 32 bytes = 64 hex chars
    }
}
