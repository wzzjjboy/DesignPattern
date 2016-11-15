<?php
/**
 * @description: 解释器模式（Interpreter Pattern）提供了评估语言的语法或表达式的方式，它属于行为型模式。这种模式实现了一个表达式接口，该接口解释一个特定的上下文。这种模式被用在 SQL 解析、符号处理引擎等
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/15 8:58
 */

namespace designPattern\interpreter;


include '../init.php';

class Index
{
    private static function getMaleExpression()
    {
        $robert = new TerminalExpression("Robert");
        $john = new TerminalExpression("John");
        return new OrExpression($robert, $john);
    }

    private static function getMarriedWomanExpression()
    {
        $julie = new TerminalExpression("Julie");
        $married = new TerminalExpression("Married");
        return new AndExpression($julie, $married);
    }

    public static function main()
    {
        $isMale = self::getMaleExpression();
        $isMarriedWoman = self::getMarriedWomanExpression();

        println("John is male? " . $isMale->interpret("John"));
        println("Julie is a married women? " .
          $isMarriedWoman->interpret("Married Julie"));
    }
}

Index::main();