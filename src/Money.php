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
     * @return Expression
     */
    public function times(int $multiplier) : Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @param Expression $addend
     * @return Sum|null
     */
    public function plus(Expression $addend) : ?Sum
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
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
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