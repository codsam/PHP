<?php

//检查变量是否是NULL is_null()

//此处NULL的范围

//未定义的变量，定义未赋值的变量，被销毁的变量，赋值为null的变量
//只有赋值为null不会报错，其他三种情况会报错
//上述四种情况，会被判定为null

$var = '';
var_dump(is_null($var));

//变量不存在，会报错，返回值为true
$int;
var_dump(is_null($int));


//检查变量是否被设置，并且数值不是null  isset()
//设置：就是检查变量是否存在
//true 变量存在，并且存储的数值不为null
//变量存在：变量正常被声明被赋值
//  未定义，定义未赋值，被销毁都视为不存在
//isset() 遇到变量不存在的情况，不会报错
// 变量不存在，不会报错，返回值为false
$int;
var_dump(isset($int));

// 赋值为null，返回值是false
$int = null;
var_dump(isset($int));

//变量存在，存储数据不是null，返回值是true
$int = 100;
var_dump(isset($int));

//总结 is_null   isset
//
//运行机制
//is_null()直接判断变量的数据类型
//isset()先在内存中查找变量是否存在，再判断变量存储数据的数据类型
//
//报错机制
//因为运行机制不同，造成报错机制不同
//is_null() 对于未定，定义未赋值，被销毁的变量会报错
//isset()不会报错
//
//返回值
//is_null()和isset() 对于同一个变量，返回值正好相反


//检查变量是否是'空'  empty()
//empty()函数中，'空'的定义范围更广,包括了一下几种，这些返回值都是true
//null
//false
//''  空字符串
//'0'  字符串0
//0  数字0
//0.0  数字0.0
//空数组空对象空函数等
$var = '';

//is_null()判定为true的情况只有四种，不暴恐空字符串，返回false
var_dump(is_null($var));

//empty()判定为'空'返回值为true的定义更广泛，包含空字符串
var_dump(empty($var));


//总结
//is_null()
//四种情况判定为true，其他都是false
//有三种情况会报错
//
//isset()
//变量存在，并且存储数值不为null，判定为true，不会报错，结果与is_null()正好相反
//
//empty()是范围更广的'空'
//判定为true的情况
//null
//false
//''  空字符串
//'0'  字符串0
//0  数字0
//0.0  数字0.0
//空数组 空对象 空函数等