<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/17
 * Time: 13:19
 */

namespace App;

/**
 * Class Money
 * @package App
 */
class Money
{
    protected $amount;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money) : bool
    {
        return $this->amount == $money->amount;
    }
}