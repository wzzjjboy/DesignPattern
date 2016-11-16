<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/16 8:57
 */

namespace designPattern\iterator;


interface Container
{
    /**
     * @return Iterator
     */
    public function getIterator();
}