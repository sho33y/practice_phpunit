<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/29
 * Time: 21:59
 */

namespace App;


class Sum
{
    /**
     * @var Money
     */
    public $augend;

    /**
     * @var Money
     */
    public $addend;

    /**
     * Sum constructor.
     * @param Money $augend
     * @param Money $addend
     */
    public function __construct(Money $augend, Money $addend)
    {

    }
}