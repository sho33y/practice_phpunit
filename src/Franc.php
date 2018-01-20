<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/16
 * Time: 22:11
 */

namespace App;

/**
 * Class Franc
 * @package App
 */
class Franc extends Money
{
    /**
     * Franc constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier) : Money
    {
        return Money::franc($this->amount * $multiplier, null);
    }
}