<?php
/**
 * @description: 备忘录模式（Memento Pattern）保存一个对象的某个状态，以便在适当的时候恢复对象。备忘录模式属于行为型模式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/21 9:19
 */

namespace designPattern\memento;

include '../init.php';

class index
{
    public static function main()
    {
        /** @var Originator $originator */
        $originator = new Originator();
        /** @var CareTaker $careTaker */
        $careTaker = new CareTaker();
        $originator->setState("State #1");
        $originator->setState("State #2");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #3");
        $careTaker->add($originator->saveStateToMemento());
        $originator->setState("State #4");

        println("Current State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(0));
        println("First saved State: " . $originator->getState());
        $originator->getStateFromMemento($careTaker->get(1));
        println("Second saved State: " . $originator->getState());
    }
}

index::main();