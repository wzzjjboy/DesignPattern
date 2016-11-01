<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:55
 */

namespace designPattern\builder;


class MealBuilder
{
    public function prepareVegMeal()
    {
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());
        return $meal;
    }

    public function prepareNonVegMeal()
    {
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());
        return $meal;
    }
}