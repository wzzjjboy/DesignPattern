<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:08
 */

namespace designPattern\prototype;


class Circle extends Shape
{
    public function __construct()
    {
        $this->type = "Circle";
    }

    public function draw()
    {
        println("Inside Circle::draw() method.");
    }

}