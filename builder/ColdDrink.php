<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:44
 */

namespace designPattern\builder;


abstract class ColdDrink implements Item
{
    public function packing()
    {
        return new Bottle();
    }

    abstract public function price();

}