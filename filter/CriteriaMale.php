<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:25
 */

namespace designPattern\filter;


class CriteriaMale implements Criteria
{

    public function meetCriteria($persons)
    {
        $malePersons = array();
        foreach ($persons as $person){
            if ($person->getGender() == 'MALE') {
                $malePersons[$person->toString()] = $person;
            }
        }

        return $malePersons;
    }
}