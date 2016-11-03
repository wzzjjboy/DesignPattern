<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/3 17:36
 */

namespace designPattern\bridge;


interface DrawAPI
{
    public function drawCircle($radius, $x, $y);
}