<?php

/**
 * 工厂模式（Factory Pattern）是 Java 中最常用的设计模式之一。这种类型的设计模式属于创建型模式，它提供了一种创建对象的最佳方式。
 * 在工厂模式中，我们在创建对象时不会对客户端暴露创建逻辑，并且是通过使用一个共同的接口来指向新创建的对象。
 */

interface Shape{
    public function draw();
}

class Rectangle implements Shape {

    public function draw()
    {
        echo "Inside Rectangle::draw() method.\n";
    }
}

class Square implements Shape {
    public function draw()
    {
        echo "Inside Square::draw() method.\n";
    }
}

class Circle implements Shape {
    public function draw()
    {
        echo "Inside Circle::draw() method. \n";
    }
}

class ShapeFactory {
    public function getShape($shapeType)
    {
        switch (strtolower($shapeType)){
            case "circle": $class = new Circle();break;
            case "rectangle": $class = new Rectangle();break;
            case "square": $class = new Square();break;
            default:$class = null;
        }
        return $class;
    }
}

$shapeFactory = new ShapeFactory();
$shapeFactory->getShape('Circle')->draw();
$shapeFactory->getShape('Rectangle')->draw();
$shapeFactory->getShape('Square')->draw();