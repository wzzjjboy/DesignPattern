<?php
/**
 * @description: 组合模式（Composite Pattern），又叫部分整体模式，是用于把一组相似的对象当作一个单一的对象。组合模式依据树形结构来组合对象，用来表示部分以及整体层次。这种类型的设计模式属于结构型模式，它创建了对象组的树形结构。
 * 这种模式创建了一个包含自己对象组的类。该类提供了修改相同对象组的方式。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/8 9:17
 */

namespace designPattern\composite;


include "../init.php";
$CEO = new Employee("John","CEO", 30000);

$headSales = new Employee("Robert","Head Sales", 20000);
$headMarketing = new Employee("Michel","Head Marketing", 20000);

$clerk1 = new Employee("Laura","Marketing", 10000);
$clerk2 = new Employee("Bob","Marketing", 10000);

$salesExecutive1 = new Employee("Richard","Sales", 10000);
$salesExecutive2 = new Employee("Rob","Sales", 10000);


$CEO->add($headSales);
$CEO->add($headMarketing);

$headSales->add($salesExecutive1);
$headSales->add($salesExecutive2);

$headMarketing->add($clerk1);
$headMarketing->add($clerk2);

//打印该组织的所有员工
println($CEO->toString());
foreach ($CEO->getSubordinates() as $headEmployee) {
  println($headEmployee->toString());
    foreach ($headEmployee->getSubordinates() as $employee) {
      println($employee->toString());
  }
}