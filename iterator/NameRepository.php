<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/16 8:58
 */

namespace designPattern\iterator;


class NameRepository implements Container
{

    public $name = array("Robert" , "John" ,"Julie" , "Lora");

    public function getIterator($debug = false)
    {
        $iterator = new NameIterator($this->name, $debug);
        return $iterator;
    }
}