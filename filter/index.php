<?php
/**
 * @description: 过滤器模式（Filter Pattern）或标准模式（Criteria Pattern）是一种设计模式，这种模式允许开发人员使用不同的标准来过滤一组对象，通过逻辑运算以解耦的方式把它们连接起来。这种类型的设计模式属于结构型模式，它结合多个标准来获得单一标准。
 * @author: wzzjjboy@126.com
 * DateTime: 2016/11/7 10:21
 */

namespace designPattern\filter;

include '../init.php';

$persons = array();
$persons[] = new Person('alan', 'Male', 'Single');
$persons[] = new Person("Robert","Male", "Single");
$persons[] = new Person("John","Male", "Married");
$persons[] = new Person("Laura","Female", "Married");
$persons[] = new Person("Diana","Female", "Single");
$persons[] = new Person("Mike","Male", "Single");
$persons[] = new Person("Bobby","Male", "Single");

$male = new CriteriaMale();
$female = new CriteriaFemale();
$single = new CriteriaSingle();
$singleMale = new AndCriteria($single, $male);
$singleOrFemale = new OrCriteria($single, $female);

println('Males:');
println($male->meetCriteria($persons));

println('Female:');
println($female->meetCriteria($persons));

println('Single Male:');
println($singleMale->meetCriteria($persons));

println('Single or female:');
println($singleOrFemale->meetCriteria($persons));









