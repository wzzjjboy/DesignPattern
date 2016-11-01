<?php
namespace designPattern\factory;

/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 17:43
 */

include "../init.php";

$shapeFactory = new ShapeFactory();
$shapeFactory->getShape('Circle')->draw();
$shapeFactory->getShape('Rectangle')->draw();
$shapeFactory->getShape('Square')->draw();