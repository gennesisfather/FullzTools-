<?php

namespace FullzTools\Tests\Unit;

use PHPUnit\Framework\TestCase;
use FullzTools\Config\Helpers;

/**
 * Unit tests for Helpers class
 */
class HelpersTest extends TestCase
{
    public function testSanitizeEscapesHtml()
    {
        $input = '<script>alert("xss")</script>';
        $expected = '&lt;script&gt;alert(&quot;xss&quot;)&lt;/script&gt;';
        
        $result = Helpers::sanitize($input);
        
        $this->assertEquals($expected, $result);
    }
    
    public function testFormatCurrency()
    {
        $amount = 1234.56;
        $expected = '$1,234.56';
        
        $result = Helpers::formatCurrency($amount);
        
        $this->assertEquals($expected, $result);
    }
    
    public function testRandomStringGeneratesCorrectLength()
    {
        $length = 20;
        
        $result = Helpers::randomString($length);
        
        $this->assertEquals($length, strlen($result));
    }
}
