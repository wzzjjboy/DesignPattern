<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:59
 */

namespace designPattern\singleton;


class SingleObject
{
    public static $instance = null;

    private function __construct(){}

    public static function instance()
    {
        if(is_null(self::$instance)){
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function doSomeThing()
    {
        println("hello php!");
    }
}