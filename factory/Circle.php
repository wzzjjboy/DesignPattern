<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:42
 */

namespace designPattern\factory;


class Circle implements Shape {
    public function draw()
    {
        println("Inside Circle::draw() method. ");
    }
}