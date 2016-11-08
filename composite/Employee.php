<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/8 9:18
 */

namespace designPattern\composite;


class Employee
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $dept;
    /**
     * @var float
     */
    private $salary;
    /**
     * @var Employee[]
     */
    private $subordinates = array();

    public function __construct($name, $dept, $salary)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $salary;
    }


    public function add(Employee $employee)
    {
        $key = (string)$employee;
        if(!array_key_exists($key, $this->subordinates)){
            $this->subordinates[$key] = $employee;
        }
    }

    public function remove(Employee $employee)
    {
        $key = (string)$employee;
        if (array_key_exists($key, $this->subordinates)){
            unset($this->subordinates[$key]);
        }
    }

    /**
     * @return Employee[]
     */
    public function getSubordinates()
    {
        return $this->subordinates;
    }

    public function toString()
    {
        return "[Employee: [ Name: {$this->name}, dept: {$this->dept}, salary: {$this->salary}]]";
    }

    public function __toString()
    {
        return md5($this->toString());
    }
}