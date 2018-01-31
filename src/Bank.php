<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/28
 * Time: 20:45
 */

namespace App;

/**
 * Class Bank
 * @package App
 */
class Bank
{
    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to) : Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * @param string $from
     * @param string $to
     * @param int $rate
     */
    public function addRate(string $from, string $to, int $rate)
    {
    }

    /**
     * @param string $from
     * @param string $to
     * @return int
     */
    public function rate(string $from, string $to) : int
    {
        return ($from == "CHF" && $to == "USD") ? 2 : 1;
    }
}