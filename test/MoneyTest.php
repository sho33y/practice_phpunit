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
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $product = new Dollar(5);
        $this->assertTrue($product->equals(new Dollar(5)));
    }
}
