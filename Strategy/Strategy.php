<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:37
 */

namespace designPattern\strategy;


interface Strategy
{
    /**
     * @param integer $num1
     * @param integer $num2
     * @return integer mixed
     */
    public function doOperation($num1, $num2);
}