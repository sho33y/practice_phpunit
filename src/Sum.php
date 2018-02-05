<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/29
 * Time: 21:59
 */

namespace App;


class Sum implements Expression
{
    /**
     * @var Expression
     */
    public $augend;

    /**
     * @var Expression
     */
    public $addend;

    /**
     * Sum constructor.
     * @param Expression $augend
     * @param Expression $addend
     */
    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    /**
     * @param int $multiplier
     * @return Expression
     */
    public function times(int $multiplier) : Expression
    {
        return new Sum($this->augend->times($multiplier), $this->addend->times($multiplier));
    }

    /**
     * @param Expression $addend
     * @return Expression
     */
    public function plus(Expression $addend) : Expression
    {
        return new Sum($this, $addend);
    }

    /**
     * @param Bank $bank
     * @param string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to) : Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount() + $this->addend->reduce($bank, $to)->amount();
        return new Money($amount, $to);
    }
}