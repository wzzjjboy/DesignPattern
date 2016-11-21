<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:21
 */

namespace designPattern\memento;


class Originator
{
    /**
     * @var string
     */
    private $state;

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return Memento
     */
    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}