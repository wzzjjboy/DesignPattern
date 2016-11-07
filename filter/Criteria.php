<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:24
 */

namespace designPattern\filter;


interface Criteria
{
    /**
     * @param Person[] $persons
     * @return mixed
     */
    public function meetCriteria($persons);
}