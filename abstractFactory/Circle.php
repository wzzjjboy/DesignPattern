<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:24
 */

namespace designPattern\abstractFactory;


class Circle implements Shape
{

    public function draw()
    {
        println("Inside Circle::draw() method.");
    }
}