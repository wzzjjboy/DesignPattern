<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/15 9:00
 */

namespace designPattern\interpreter;


class TerminalExpression implements Expression
{
    /**
     * @var string
     */
    private $data;

    /**
     * TerminalExpression constructor.
     * @param string $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function interpret($context)
    {
        return stripos($context, $this->data) !== false;
    }
}