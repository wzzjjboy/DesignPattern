<?php
/**
 * @description:享元模式（Flyweight Pattern）主要用于减少创建对象的数量，以减少内存占用和提高性能。这种类型的设计模式属于结构型模式，它提供了减少对象数量从而改善应用所需的对象结构的方式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:57
 */

namespace designPattern\flyweight;


class Circle implements Shape
{
    private  $color;
    private  $x;
    private  $y;
    private  $radius;

    public function __construct($color)
    {
        $this->color = $color;
    }


    /**
     * @param mixed $x
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @param mixed $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * @param mixed $radius
     * @return self
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        return $this;
    }


    public function draw()
    {
        println("Circle: Draw() [Color : {$this->color}, x : {$this->x}, y : {$this->y}, radius : {$this->radius}" );
    }
}