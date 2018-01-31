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
     * PHPはHashMapが存在しないので連想配列を使用する
     * @var []
     */
    private $rates = [];

    /**
     * @param Expression $source
     * @param string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to) : Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * @param string $from
     * @param string $to
     * @param int $rate
     */
    public function addRate(string $from, string $to, int $rate)
    {
        // PHPではJavaのHashMapのような記述ができない
        // $this->rates[new Pair($from, $to)] = $rate;
        // とりあえず、$from_$toで代用した
        $this->rates[$from . '_' . $to] = $rate;
    }

    /**
     * @param string $from
     * @param string $to
     * @return int
     */
    public function rate(string $from, string $to) : int
    {
        return $this->rates[$from . '_' . $to];
    }
}