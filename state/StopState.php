<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:28
 */

namespace designPattern\state;


class StopState implements State
{

    public function doAction(Context $context)
    {
        println("Player is in start stop");
        $context->setState($this);
    }

    function __toString()
    {
        return 'Stop State';
    }
}