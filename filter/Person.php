<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:21
 */

namespace designPattern\filter;


class Person
{
    /**
     * @var string 姓名
     */
    private $name;

    /**
     * @var string 姓别
     */
    private $gender;

    /**
     * @var string 婚姻状态
     */
    private $maritalStatus;

    public function __construct($name, $gender, $maritalStatus)
    {
        $this->name = $name;
        if(!in_array($this->gender = strtoupper($gender), array('FEMALE', 'MALE'))){
            throw new \Exception('wrong gender :' . $gender);
        }

        if(!in_array($this->maritalStatus = strtoupper($maritalStatus), array('SINGLE', 'MARRIED'))){
            throw new \Exception('wrong marital status :' . $maritalStatus);
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    public function __toString()
    {
        return md5(serialize($this));
    }

    public function toString()
    {
        return (string)$this;
    }

}