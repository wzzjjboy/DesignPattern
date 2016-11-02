<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:09
 */

namespace designPattern\prototype;


class ShapeCache
{

    /**
     * @var Shape[]
     */
    private static $shapeMap = array();

    /**
     * @param string $shapeId
     * @return Shape
     */
    public static function getShape($shapeId){
        return self::$shapeMap[$shapeId]->_clone();
    }

    public static function loadCache()
    {
        $circle = new Circle();
        $circle->setId('1');
        self::$shapeMap[$circle->getId()] = $circle;

        $square = new Square();
        $square->setId('2');
        self::$shapeMap[$square->getId()] = $square;

        $rectangle = new Rectangle();
        $rectangle->setId('3');
        self::$shapeMap[$rectangle->getId()] = $rectangle;
    }

}
