<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 8:55
 */

namespace designPattern\ChainOfResponsibility;


abstract class AbstractLogger
{
    /**
     * @var int
     */
    public static $info;
    
    /**
     * @var int
     */
    public static $debug;
    
    /**
     * @var int
     */
    public static $error;
    
    /**
     * @var int
     */
    public $level;

    /**
     * @var AbstractLogger
     */
    public $nextLogger;

    public function setNextLogger(AbstractLogger $abstractLogger)
    {
        $this->nextLogger = $abstractLogger;
    }

    /**
     * @param int $level
     * @param string $message
     */
    public function logMessage($level, $message)
    {
        if ($this->level <= $level){
            $this->write($message);
        }
        if ($this->nextLogger != null){
            $this->nextLogger->logMessage($level, $message);
        }
    }


    /**
     * @param string $message
     * @return void
     */
    abstract protected function write($message);
}