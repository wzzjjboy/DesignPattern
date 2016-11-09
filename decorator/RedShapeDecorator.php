<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/9 11:08
 */

namespace designPattern\decorator;


class RedShapeDecorator extends ShapeDecorator
{
    public function draw()
    {
        parent::draw();
        $this->setRedBorder();
    }

    private function setRedBorder()
    {
        println("Border Color: Red");
    }
}