<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 9:42
 */

namespace designPattern\command;


class Broker
{
    /**
     * @var Order[]
     */
    public $orderList = array();

    public function takeOrder(Order $order)
    {
        $this->orderList[] = $order;
    }

    public function placeOrder()
    {
        foreach ($this->orderList as $orderItem){
            $orderItem->execute();
        }
        $this->orderList = array();
    }
}