<?php

namespace miukoba\TDD\Tests;

use miukoba\TDD\Money;

class Money_Test extends \PHPUnit_Framework_TestCase
{
    public function testEquality()
    {
        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }
}