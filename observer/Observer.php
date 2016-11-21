<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:51
 */

namespace designPattern\observer;


abstract class  Observer
{
    /**
     * @var Subject
     */
    protected  $subject;

    abstract public function update();
}