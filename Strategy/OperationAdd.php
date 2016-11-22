<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:38
 */

namespace designPattern\strategy;


class OperationAdd implements Strategy
{

    public function doOperation($num1, $num2)
    {
        return $num1 + $num2;
    }
}