<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 16/11/1 下午10:49
 */

namespace designPattern\builder;


class Meal
{
    /**
     * @var Item[]
     */
    private $items;

    public function addItem(Item $item){
        $this->items[] = $item;
    }

    public function getCost()
    {
        $cost = 0.00;
        foreach ($this->items as $item){
            $cost += $item->price();
        }
        return $cost;
    }

    public function showItems()
    {
        foreach ($this->items as $item){
            println("Item : {$item->name()}");
            println("packing : {$item->packing()->pack()}" );
            println("price : {$item->price()}");
        }
    }
}