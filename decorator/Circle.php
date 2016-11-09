<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/9 10:48
 */

namespace designPattern\decorator;


class Circle implements Shape
{

    public function draw()
    {
        println("Shape: Circle");
    }
}