<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:48
 */

namespace designPattern\builder;


class Pepsi extends ColdDrink
{

    public function price()
    {
        return 35.00;
    }

    public function name()
    {
        return "Pepsi";
    }
}