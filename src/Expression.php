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
     * @param Expression $added
     * @return Sum
     */
    public function plus(Expression $addend) : Sum;

    /**
     * @param Bank $bank
     * @param string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to) : Money;
}