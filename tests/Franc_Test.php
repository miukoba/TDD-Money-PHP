<?php

namespace miukoba\TDD\Tests;

use miukoba\TDD\Money;

class Franc_Test extends \PHPUnit_Framework_TestCase
{

    public function testMultiplication()
    {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
    }
}