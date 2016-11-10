<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:35
 */

namespace designPattern\facade;


class Square implements Shape
{

    public function draw()
    {
        println("Square::draw()");
    }
}