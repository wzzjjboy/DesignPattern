<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:46
 */

namespace designPattern\builder;


class ChickenBurger extends Burger
{

    public function price()
    {
        return 50.00;
    }

    public function name()
    {
        return "Chicken Burger";
    }
}