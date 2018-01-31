<?php
/**
 * Created by PhpStorm.
 * User: yagishitasho
 * Date: 2018/01/31
 * Time: 21:36
 */

namespace App;


class Pair
{
    /**
     * @var
     */
    private $from;

    /**
     * @var
     */
    private $to;

    /**
     * Pair constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}