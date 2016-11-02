<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:07
 */

namespace designPattern\prototype;


class Square extends Shape
{
    public function __construct()
    {
        $this->type = "Square";
    }


    public function draw()
    {
        println("Inside Square::draw() method.");
    }
}