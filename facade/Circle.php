<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:36
 */

namespace designPattern\facade;


class Circle implements Shape
{

    public function draw()
    {
        println("Circle::draw()");
    }
}