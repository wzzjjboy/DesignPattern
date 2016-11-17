<?php
/**
 * @description:中介者模式（Mediator Pattern）是用来降低多个对象和类之间的通信复杂性。这种模式提供了一个中介类，该类通常处理不同类之间的通信，并支持松耦合，使代码易于维护。中介者模式属于行为型模式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/17 8:58
 */

namespace designPattern\mediator;


include "../init.php";

$robert = new User("Robert");
$john = new User("John");

$robert->sendMessage("Hi! John!");
$john->sendMessage("Hello! Robert!");