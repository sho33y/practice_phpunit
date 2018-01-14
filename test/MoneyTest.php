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
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
        $product = new Dollar(5);
        $this->assertTrue($product->equals(new Dollar(5)));
        $product = new Dollar(5);
        $this->assertFalse($product->equals(new Dollar(6)));
    }
}
