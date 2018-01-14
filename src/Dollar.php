<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/14
 * Time: 11:53
 */

namespace App;

//TODO リスト
//・$5 + 10 CHF = $10 (レートが2:1の場合)
//・$5 * 2 = $10
//・amount を private にする
//・Dollarの副作用をどうする？
//・Money の丸め処理をどうする？

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