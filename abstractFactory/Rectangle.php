<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:23
 */

namespace designPattern\abstractFactory;


class Rectangle implements Shape
{
    public function draw()
    {
        println("Inside Rectangle::draw() method");
    }
}