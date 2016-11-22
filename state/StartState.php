<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:28
 */

namespace designPattern\state;


class StartState implements State
{

    public function doAction(Context $context)
    {
        println("Player is in start state");
        $context->setState($this);
    }

    function __toString()
    {
        return 'Start State';
    }
}