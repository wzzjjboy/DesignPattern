<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:21
 */

namespace designPattern\abstractFactory;

abstract class AbstractFactory {
    abstract function getColor($color);
    abstract function getShape($shape) ;
}