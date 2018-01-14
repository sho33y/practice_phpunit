<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     * @test
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10, $product->amount);
        $product = $five->times(3);
        self::assertEquals(15, $product->amount);
    }
}
