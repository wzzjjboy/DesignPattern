<?php
/**
 * @description:
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/17 8:59
 */

namespace designPattern\mediator;


class ChatRoom
{
    public static function sendMessage(User $user, $msgContent)
    {
        println("[" . date('y-m-d H:i:s') ."][{$user->getName()}] say:". $msgContent);
    }
}