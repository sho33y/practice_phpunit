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

    /**
     * @param Pair $object
     * @return bool
     */
    public function equals(Pair $object) : bool
    {
        $pair = new Pair($object->from, $object->to);
        return ($this->from == $pair->from && $this->to == $pair->to);
    }

    /**
     * @return int
     */
    public function hashCode() : int
    {
        return 0;
    }
}