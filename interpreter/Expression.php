<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/15 9:00
 */

namespace designPattern\interpreter;


interface Expression
{
    /**
     * @param  string $context
     * @return bool
     */
    public function interpret($context);
}