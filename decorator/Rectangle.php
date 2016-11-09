<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/9 10:53
 */

namespace designPattern\decorator;


class Rectangle implements Shape
{

    public function draw()
    {
        println("Shape: Rectangle");
    }
}