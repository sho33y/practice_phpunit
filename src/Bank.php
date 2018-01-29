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
     * @return Sum
     */
    public function reduce(Expression $source, string $to) : Sum
    {
        // PHPではできない
        // $sum = (Sum)$source;
        $sum = $source;
        return $sum->reduce($to);
    }
}