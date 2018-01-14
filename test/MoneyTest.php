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
        $dollar = new Dollar(5);

        $dollar->times(2);
        self::assertEquals(10, $dollar->amount);
    }
}
