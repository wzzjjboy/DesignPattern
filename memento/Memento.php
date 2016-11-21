<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:19
 */

namespace designPattern\memento;


class Memento
{
    /**
     * @var string
     */
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}