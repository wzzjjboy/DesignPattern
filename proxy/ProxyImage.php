<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/11 9:50
 */

namespace designPattern\proxy;


class ProxyImage implements Image
{
    private $fileName;
    /**
     * @var RealImage
     */
    private $realImage;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        if(is_null($this->realImage)){
            if(!file_exists($this->fileName)){
                println('file not exists', 1);
            }
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}