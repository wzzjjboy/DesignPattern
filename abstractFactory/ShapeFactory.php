<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:25
 */

namespace designPattern\abstractFactory;


class ShapeFactory extends AbstractFactory {

    function getColor($color)
    {
        return null;
    }

    function getShape($shape)
    {
        switch (strtolower($shape)){
            case "circle": $class = new Circle();break;
            case "rectangle": $class = new Rectangle();break;
            case "square": $class = new Square();break;
            default:$class = null;
        }
        return $class;
    }
}