<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:26
 */

namespace designPattern\abstractFactory;


class FactoryProducer{
    public static function getFactory($type)
    {
        return strtolower($type) == 'shape' ? new ShapeFactory() : new ColorFactory();
    }
}