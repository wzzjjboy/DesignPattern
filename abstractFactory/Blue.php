<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:25
 */

namespace designPattern\abstractFactory;


class Blue implements Color
{

    public function fill()
    {
        println("Inside Blue::fill() method.");
    }
}