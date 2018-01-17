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
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier) : Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}