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

    function times(int $multiplier)
    {
        $this->amount *= $multiplier;
    }
}