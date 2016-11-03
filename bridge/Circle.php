<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/3 17:51
 */

namespace designPattern\bridge;


class Circle extends Shape
{
    /**
     * @var integer
     */
    private $x;

    /**
     * @var integer
     */
    private $y;

    /**
     * @var integer
     */
    private $radius;


    public function __construct(DrawAPI $drawAPI, $x, $y, $radius)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    function draw()
    {
        $this->drawAPI->drawCircle($this->radius, $this->x, $this->y);
    }
}