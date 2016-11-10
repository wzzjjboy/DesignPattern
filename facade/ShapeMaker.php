<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:37
 */

namespace designPattern\facade;


class ShapeMaker
{

    private $circle;
    private $rectangle;
    private $square;

    public function __construct()
    {
        $this->circle = new Circle;
        $this->rectangle = new Rectangle;
        $this->square = new Square;
    }

    public function drawCircle(){
        $this->circle->draw();
    }

    public function drawRectangle(){
        $this->rectangle->draw();
    }

    public function drawSquare(){
        $this->square->draw();
    }


}