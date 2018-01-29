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
        return $source->reduce($to);
    }
}