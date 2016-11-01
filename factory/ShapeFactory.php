<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:43
 */

namespace designPattern\factory;


class ShapeFactory {
    public function getShape($shapeType)
    {
        switch (strtolower($shapeType)){
            case "circle": $class = new Circle();break;
            case "rectangle": $class = new Rectangle();break;
            case "square": $class = new Square();break;
            default:$class = null;
        }
        return $class;
    }
}
