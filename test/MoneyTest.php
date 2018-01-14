<?php

namespace App;

use PHPUnit\Framework\TestCase;
use Money\Money;
use Money\Currency;

class MoneyTest extends TestCase
{
    /**
     * @test
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five.times(2);
        self::assertEquals(10, $five.amount);
    }
}
