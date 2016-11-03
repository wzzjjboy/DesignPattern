<?php

/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/3 17:34
 */

namespace designPattern\bridge;

class RedCircle implements DrawAPI
{

    public function drawCircle($radius, $x, $y)
    {
        println("Drawing Circle[ color: red, radius: {$radius} , x: {$x}  ,  y: {$y} ]");
    }
}