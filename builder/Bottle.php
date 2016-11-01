<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:40
 */

namespace designPattern\builder;


class Bottle implements Packing
{

    public function pack()
    {
        return "Bottle";
    }
}