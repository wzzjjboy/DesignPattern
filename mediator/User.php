<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/17 8:59
 */

namespace designPattern\mediator;


class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function sendMessage($msg)
    {
        ChatRoom::sendMessage($this, $msg);
    }

}