<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/15 9:05
 */

namespace designPattern\interpreter;


class AndExpression implements Expression
{
    /**
     * @var Expression
     */
    private $expr1;

    /**
     * @var Expression
     */
    private $expr2;

    public function __construct(Expression $e1, Expression $e2)
    {
        $this->expr1 = $e1;
        $this->expr2 = $e2;
    }

    public function interpret($context)
    {
        return $this->expr1->interpret($context) && $this->expr2->interpret($context);
    }
}