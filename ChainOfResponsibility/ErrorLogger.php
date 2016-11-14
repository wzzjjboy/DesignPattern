<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 9:04
 */

namespace designPattern\ChainOfResponsibility;


class ErrorLogger extends AbstractLogger
{

    /**
     * ConsoleLogger constructor.
     * @param int $level
     */
    public function __construct($level)
    {
        $this->level = $level;
    }


    protected function write($message)
    {
        println("Error ::Logger: {$message}");
    }
}