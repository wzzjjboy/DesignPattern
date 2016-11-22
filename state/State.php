<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:26
 */

namespace designPattern\state;


interface State
{
    public function doAction(Context $context);
}