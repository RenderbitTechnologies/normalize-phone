<?php

namespace RenderbitTechnologies\NormalizePhone;

use PHPUnit\Framework\TestCase;

class NormalizePhoneTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testNormalizePhone()
    {
        $this->assertEquals(normalize_phone('9434012345'), '919434012345');
        $this->assertEquals(normalize_phone('+919434012345'), '919434012345');
        $this->assertEquals(normalize_phone('+91-9434012345'), '919434012345');
        $this->assertEquals(normalize_phone('+19434012345'), '19434012345');
        $this->assertEquals(normalize_phone('+91 9434012345'), '919434012345');
        $this->assertEquals(normalize_phone('(+91) 94340 12345'), '919434012345');
    }
}
