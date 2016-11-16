<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/16 9:00
 */

namespace designPattern\iterator;


class NameIterator implements Iterator
{

    /**
     * @var integer
     */
    private $index = 0;

    /**
     * @var array
     */
    private $name;

    private $debug;

    /**
     * NameIterator constructor.
     * @param array $name
     * @param boolean $debug
     */
    public function __construct($name, $debug)
    {
        $this->name = $name;
        $this->debug = $debug;
    }


    public function current()
    {
        if ($this->debug)
            println(__METHOD__);
        return $this->name[$this->index];
    }

    public function next()
    {
        if ($this->debug)
            println(__METHOD__);
        $this->index++;
    }

    public function key()
    {
        if ($this->debug)
            println(__METHOD__);
        $this->index;
    }

    public function valid()
    {
        if ($this->debug)
            println(__METHOD__);
        return isset($this->name[$this->index]);
    }

    public function rewind()
    {
        if ($this->debug)
            println(__METHOD__);
        $this->index = 0;
    }
}