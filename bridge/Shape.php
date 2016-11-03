<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/3 17:38
 */

namespace designPattern\bridge;


abstract class Shape
{
    /**
     * @var DrawAPI
     */
    protected $drawAPI;

    public function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    abstract function draw();

}