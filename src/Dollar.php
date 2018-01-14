<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/14
 * Time: 11:53
 */

namespace App;

/**
 * Class Dollar
 * @package App
 */
class Dollar
{
    public $amount;

    /**
     * Dollar constructor.
     * @param int $amount
     */
    function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Dollar
     */
    function times(int $multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param Dollar $dollar
     * @return bool
     */
    function equals(Dollar $dollar)
    {
        return $this->amount == $dollar->amount;
    }
}