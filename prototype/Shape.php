<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/2 10:00
 */

namespace designPattern\prototype;


abstract class Shape
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    public function _clone()
    {
        return clone $this;
    }

    abstract public function draw();
}