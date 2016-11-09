<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/9 11:06
 */

namespace designPattern\decorator;


abstract class ShapeDecorator implements Shape
{
    protected $decoratedShape;

    public function __construct(Shape $shape)
    {
        $this->decoratedShape = $shape;
    }

    public function draw()
    {
        $this->decoratedShape->draw();
    }
}