<?php
/**
 * @description:建造者模式（Builder Pattern）使用多个简单的对象一步一步构建成一个复杂的对象。这种类型的设计模式属于创建型模式，它提供了一种创建对象的最佳方式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/1 18:10
 */

namespace designPattern\builder;

include "../init.php";

$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
println("Veg Meal");
$vegMeal->showItems();
println("Total Cost: " . $vegMeal->getCost());

$nonVegMeal = $mealBuilder->prepareNonVegMeal();
println("\n\nNon-Veg Meal");
$nonVegMeal->showItems();
println("Total Cost: " . $nonVegMeal->getCost());


