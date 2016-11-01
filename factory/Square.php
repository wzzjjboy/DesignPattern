<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:42
 */

namespace designPattern\factory;


class Square implements Shape {
    public function draw()
    {
        println("Inside Square::draw() method.");
    }
}