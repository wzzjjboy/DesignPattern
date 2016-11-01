<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:26
 */

namespace designPattern\abstractFactory;


class ColorFactory extends AbstractFactory {

    function getColor($color)
    {
        switch (strtolower($color)){
            case "green": $class = new Green();break;
            case "blue": $class = new Blue();break;
            default:$class = null;
        }
        return $class;
    }

    function getShape($shape)
    {
        return null;
    }
}