<?php
/**
 * @description:(观察者模式) 当对象间存在一对多关系时，则使用观察者模式（Observer Pattern）。比如，当一个对象被修改时，则会自动通知它的依赖对象。观察者模式属于行为型模式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:41
 */

namespace designPattern\observer;

include "../init.php";

class index
{
    public static function main()
    {
        $subject = new Subject();
        new BinaryObserver($subject);
        new OctalObserver($subject);
        new HexObserver($subject);
        println('change state:'. '10');
        $subject->setState('10');

        println('change state:'. '15');
        $subject->setState('15');
    }
}

index::main();