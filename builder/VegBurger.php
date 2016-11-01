<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:45
 */

namespace designPattern\builder;


class VegBurger extends Burger
{

    public function price()
    {
        return 25.00;
    }

    public function name()
    {
        return "Veg Burger";
    }
}