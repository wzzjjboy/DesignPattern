<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:42
 */

namespace designPattern\strategy;


class Context
{
    /**
     * @var Strategy
     */
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }


    /**
     * @param integer $num1
     * @param integer $num2
     * @return integer
     */
    public function executeStrategy($num1, $num2)
    {
        return $this->strategy->doOperation($num1, $num2);
    }
}