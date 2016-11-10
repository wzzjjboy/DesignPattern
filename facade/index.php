<?php
/**
 * @description: 外观模式（Facade Pattern）隐藏系统的复杂性，并向客户端提供了一个客户端可以访问系统的接口。这种类型的设计模式属于结构型模式，它向现有的系统添加一个接口，来隐藏系统的复杂性。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:34
 */

namespace designPattern\facade;


include "../init.php";

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawRectangle();
$shapeMaker->drawSquare();
