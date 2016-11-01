<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:40
 */

namespace designPattern\builder;


abstract class Burger implements Item
{
    public function packing()
    {
        return new Wrapper();
    }

    abstract public function price();

}