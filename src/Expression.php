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
     * @param string $to
     * @return Money
     */
    public function reduce(string $to) : Money;
}