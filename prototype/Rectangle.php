<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:05
 */

namespace designPattern\prototype;


class Rectangle extends Shape
{
    public function __construct()
    {
        $this->type = "Rectangle";
    }

    public function draw()
    {
        println("Inside Rectangle::draw() method.");
    }
}