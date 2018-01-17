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

        $product = new Franc(5);
        $this->assertTrue($product->equals(new Franc(5)));
        $product = new Franc(5);
        $this->assertFalse($product->equals(new Franc(6)));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }
}
