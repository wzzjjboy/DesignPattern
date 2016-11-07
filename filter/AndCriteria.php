<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:44
 */

namespace designPattern\filter;


class AndCriteria implements Criteria
{
    private  $criteria;
    private  $otherCriteria;

    public function __construct(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $otherCriteria;
    }


    public function meetCriteria($persons)
    {
        $firstCriteria = $this->criteria->meetCriteria($persons);
        return $this->otherCriteria->meetCriteria($firstCriteria);
    }
}