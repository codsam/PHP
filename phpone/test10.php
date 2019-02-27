<?php

//特点：都只能有一个参数，根据检查类型，符合的返回true，不符合返回false

//检查是否是整数 is_int()
//检查变量，如果存储数据为整数，返回true，否则返回false
$var = 'abc';
var_dump(is_int($var));

//检查是否是浮点数 is_float()
$var = 100;
var_dump(is_float($var));

//检查是否是数值 is_numeric()
//整数，浮点数，存数字的字符串
//虽然是字符串，但是是纯数字的字符串，返回值也是true
//不是纯数字的字符串，返回值是false
$var = '1000';
var_dump(is_numeric($var));

//检查是否是布尔类型 is_bool()
$var = 0;
var_dump(is_bool($var));

//检查是否是字符串 is_string()
$var = '01f';
var_dump(is_string($var));

//检查是否是标量类型 is_scalar()
//标量类型有：布尔类型，整数类型，浮点数类型，字符串类型
//数组不是标量类型
$var = [1,2,3];
var_dump(is_scalar($var));

//检查是否是数组 is_array()
$var = [1,2,3];
var_dump(is_array($var));

//检查是否是对象 is_boject()

//检查是否是资源类型 is_resource()