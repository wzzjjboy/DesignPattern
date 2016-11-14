<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/14 9:41
 */

namespace designPattern\command;


class SellStock implements Order
{
    /**
     * @var Stock
     */
    private $stock;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
    }

    public function execute()
    {
        $this->stock->sell();
    }
}