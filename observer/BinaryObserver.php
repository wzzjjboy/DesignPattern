<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:55
 */

namespace designPattern\observer;


class BinaryObserver extends Observer
{
    protected $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $subject->attach($this);
    }


    public function update()
    {
        println( "Binary String: " .
            decbin($this->subject->getState()  ) );
    }
}