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
class Money implements Expression
{
    /**
     * @var
     */
    protected $amount;
    protected $currency;

    /**
     * Money constructor.
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier) : Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Money $addend
     * @return Sum
     */
    public function plus(Money $addend) : Sum
    {
        return new Sum($this, $addend);
    }

    /**
     * @param string $to
     * @return $this|Money
     */
    public function reduce(string $to) : Money
    {
        return $this;
    }

    /**
     * @return int
     */
    public function amount() : int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function currency() : string
    {
        return $this->currency;
    }

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money) : bool
    {
        return $this->amount === $money->amount && $this->currency() === $money->currency();
    }

    public function toString() : string
    {
        return $this->amount . " " . $this->currency;
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount) : Money
    {
        return new Money($amount, "USD");
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount) : Money
    {
        return new Money($amount, "CHF");
    }
}