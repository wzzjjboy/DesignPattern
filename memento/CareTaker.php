<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:26
 */

namespace designPattern\memento;


class CareTaker
{
    /**
     * @var Memento[]
     */
    public $mementoList;

    public function add(Memento $state)
    {
        $this->mementoList[] = $state;
    }

    public function get($index)
    {
        return $this->mementoList[$index];
    }
}