<?php
/**
 * @description: 在代理模式（Proxy Pattern）中，一个类代表另一个类的功能。这种类型的设计模式属于结构型模式。
 * 在代理模式中，我们创建具有现有对象的对象，以便向外界提供功能接口。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/11 9:29
 */

namespace designPattern\proxy;


include '../init.php';

//$image = new RealImage('abc.jpg');
$image = new ProxyImage('abc.jpg');

$image->display();


