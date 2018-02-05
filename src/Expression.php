<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/28
 * Time: 20:41
 */

namespace App;

/**
 * Interface Expression
 * @package App
 */
interface Expression
{
    /**
     * @param Expression $addend
     * @return Expression
     */
    public function plus(Expression $addend) : Expression;

    /**
     * @param Bank $bank
     * @param string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to) : Money;
}