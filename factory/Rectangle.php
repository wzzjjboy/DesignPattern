<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:42
 */

namespace designPattern\factory;


class Rectangle implements Shape {

    public function draw()
    {
        println("Inside Rectangle::draw() method.");
    }
}