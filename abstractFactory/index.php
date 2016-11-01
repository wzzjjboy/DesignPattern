<?php
namespace designPattern\abstractFactory;


/**
 * @description: 抽象工厂模式（Abstract Factory Pattern）是围绕一个超级工厂创建其他工厂。该超级工厂又称为其他工厂的工厂。这种类型的设计模式属于创建型模式，它提供了一种创建对象的最佳方式
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 16:51
 */

include "../init.php";

$shapeFactory = FactoryProducer::getFactory('shape');
$shapeFactory->getShape('circle')->draw();
$shapeFactory->getShape('square')->draw();
$shapeFactory->getShape('rectangle')->draw();

$colorFactory = FactoryProducer::getFactory('color');
$colorFactory->getColor('green')->fill();
$colorFactory->getColor('blue')->fill();