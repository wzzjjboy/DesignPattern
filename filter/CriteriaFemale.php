<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:40
 */

namespace designPattern\filter;


class CriteriaFemale implements Criteria
{

    public function meetCriteria($persons)
    {
        $femalePersons = array();
        foreach ($persons as $index => $person) {
            if($person->getGender() == 'FEMALE'){
                $femalePersons[$person->toString()] = $person;
            }
        }

        return $femalePersons;
    }
}