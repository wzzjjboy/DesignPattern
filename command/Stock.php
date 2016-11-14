<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 9:36
 */

namespace designPattern\command;


class Stock
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $quantity;

    public function __construct($name, $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }


    public function buy()
    {
        println("Stock[ Name: {$this->name}], Quantity: {$this->quantity} bought");
    }

    public function sell()
    {
        println("Stock[ Name: {$this->name}], Quantity: {$this->quantity} sold");
    }
}