<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:42
 */

namespace designPattern\filter;


class CriteriaSingle implements Criteria
{

    public function meetCriteria($persons)
    {
        $singlePersons = array();
        foreach ($persons as $index => $person) {
            if($person->getMaritalStatus() == 'SINGLE'){
                $singlePersons[$person->toString()] = $person;
            }
        }

        return $singlePersons;
    }
}