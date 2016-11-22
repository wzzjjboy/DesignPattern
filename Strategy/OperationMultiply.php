<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:39
 */

namespace designPattern\strategy;


class OperationMultiply implements Strategy
{

    public function doOperation($num1, $num2)
    {
        return $num1 * $num2;
    }
}