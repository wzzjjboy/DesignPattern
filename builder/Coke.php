<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:47
 */

namespace designPattern\builder;


class Coke extends ColdDrink
{

    public function price()
    {
        return 30.00;
    }

    public function name()
    {
        return "Coke";
    }
}