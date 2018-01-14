<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function 足し算のテスト()
    {
        $sut = new Calculator();

        $actual = $sut->plus(2, 3);
        $expected = 5;

        $this->assertSame($expected, $actual);
    }
}
