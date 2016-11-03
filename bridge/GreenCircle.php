<?php

/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/3 17:34
 */

namespace designPattern\bridge;

class GreenCircle implements DrawAPI
{

    public function drawCircle($radius, $x, $y)
    {
        println("Drawing Circle[ color: green, radius: {$radius} , x: {$x}  ,  y: {$y} ]");
    }
}