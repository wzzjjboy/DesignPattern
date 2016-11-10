<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 10:00
 */

namespace designPattern\flyweight;


class ShapeFactory
{
    private static $hasMap = array();

    /**
     * @param $color
     * @return Circle
     */
    public static function getCircle($color)
    {
        if (!isset(self::$hasMap[$color]) || !($instance = self::$hasMap[$color])){
            self::$hasMap[$color] = new Circle($color);
            println("Creating circle of color : {$color}" );
        }

        return self::$hasMap[$color];
    }
}