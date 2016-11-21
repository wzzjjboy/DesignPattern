<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:50
 */

namespace designPattern\observer;


class Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

    /**
     * @var int
     */
    private $state;

    /**
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param int $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->notify();
    }

    public function attach(Observer $observer){
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }
}