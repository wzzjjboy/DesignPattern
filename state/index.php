<?php
/**
 * @description: 在状态模式（State Pattern）中，类的行为是基于它的状态改变的。这种类型的设计模式属于行为型模式。
 * 在状态模式中，我们创建表示各种状态的对象和一个行为随着状态对象改变而改变的 context 对象。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/22 9:24
 */

namespace designPattern\state;

include '../init.php';

$context = new Context();

$startState = new StartState();

$stopState = new StopState();

$startState->doAction($context);
println((string)$startState);

$stopState->doAction($context);
println((string)$stopState);