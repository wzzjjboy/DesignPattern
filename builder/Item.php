<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:37
 */

namespace designPattern\builder;


interface Item
{
    /**
     * @return string
     */
    public function name();

    /**
     * @return Packing
     */
    public function packing();

    /**
     * @return float
     */
    public function price();
}