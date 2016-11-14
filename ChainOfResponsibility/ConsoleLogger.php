<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 9:02
 */

namespace designPattern\ChainOfResponsibility;


class ConsoleLogger extends AbstractLogger
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
        println("Console::Logger: {$message}");
    }
}