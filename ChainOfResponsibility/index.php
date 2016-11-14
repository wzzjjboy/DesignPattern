<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 8:55
 */

namespace designPattern\ChainOfResponsibility;


include '../init.php';

class Index{
    public function __construct()
    {
        $loggerChain = $this->getChainOfLoggers();
        $loggerChain->logMessage(AbstractLogger::$info,
            "This is an information.");

        $loggerChain->logMessage(AbstractLogger::$debug,
            "This is an debug level information.");

        $loggerChain->logMessage(AbstractLogger::$error,
            "This is an error information.");
    }


    public function getChainOfLoggers()
    {
        $errorLogger = new ErrorLogger(AbstractLogger::$error);
        $fileLogger = new FileLogger(AbstractLogger::$debug);
        $consoleLogger = new ConsoleLogger(AbstractLogger::$info);
        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);
        return $errorLogger;
    }
}

new Index();