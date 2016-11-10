<?php
/**
 * @description: 享元模式（Flyweight Pattern）主要用于减少创建对象的数量，以减少内存占用和提高性能。这种类型的设计模式属于结构型模式，它提供了减少对象数量从而改善应用所需的对象结构的方式
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/10 9:57
 */

namespace designPattern\flyweight;


include "../init.php";



function getRandomColor(){
    $colors = array( "Red", "Green", "Blue", "White", "Black");
    $key = intval(mt_rand(0, count($colors) - 1));
    return $colors[$key];
}

function getRandomX(){
    return mt_rand(1, 200);
}

function getRandomY(){
    return mt_rand(1, 200);
}

function getRandomRadius(){
    return mt_rand(1, 200);
}

for ($i = 0; $i<20; $i++){
    ShapeFactory::getCircle(getRandomColor())
        ->setRadius(getRandomRadius())
        ->setX(getRandomX())
        ->setY(getRandomY())
        ->draw();
}
