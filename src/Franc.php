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
class Franc
{
    private $amount;

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
    public function times(int $multiplier)
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param Franc $franc
     */
    public function equals(Franc $franc)
    {
        return $this->amount == $franc->amount;
    }
}