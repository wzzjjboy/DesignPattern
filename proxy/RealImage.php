<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/11 9:47
 */

namespace designPattern\proxy;


class RealImage implements Image
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($this->fileName);
    }


    public function display()
    {
        println("Displaying {$this->fileName}");
    }

    private function loadFromDisk($fileName){
        println("Loading {$fileName}" );
    }
}