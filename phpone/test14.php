<?php

// 三目运算符
// exp1 ? exp3 : exp3;
// 执行原理：
// 当exp1 也就是表达式1 结果 为true时，执行exp2表达式
// 当exp1 也就是表达式1 结果 为false时，执行exp3表达式
/*

if(exp1){
	exp2
}else{
	exp3
}

(简单的if...else语句，项目中要求写成三目形式)

*/

//随机生成一个数值，判断其是否是偶数
// $int = mt_rand(1,100);
// if($int%2 == 0){
// 	echo "{$int} 是偶数";
// }else{
// 	echo "{$int} 是奇数";
// }
//三目
$int = mt_rand(1,100);
$int % 2 == 0 ? $str = "{$int} 是偶数" : $str = "{$int} 是奇数";
echo $str;

// 输出形式
// 三目运算符中，表达式2，表达式3，当中不能直接写echo
// 输出形式的语法
echo $int % 2 == 0 ? "{$int} 是偶数" : $str = "{$int} 是奇数";

// 赋值形式
$str = $int % 2 == 0 ? '偶数' : '奇数';


echo "<hr>";

// 三目运算符简写形式
// exp1 ?: exp2;
// 当 exp1 结果为 true 时，继续执行 exp1
// 当 exp1 结果为 false 时，继续执行 exp2
$int3 = '';//空字符串会自动转换为布尔值false
/*
判断：表达式1的结果 会自动转化为布尔值
true时 执行 表达式1 本身的内容
false 执行 表达式2 本身内容
*/
$num = $int3 ?: 200;//$int3自动转化为false，执行表达式2，给变量赋值200
echo $num;
//
echo "<br>";
// exp1 ?? exp2;
// 当 exp1 结果不为 null 时，继续执行 exp1
// 当 exp1 结果为 null 时，继续执行 exp2
$int1 = null;//只有当表达式1的数值为null时，才会执行表达式2，''空字符串不是null
$num1 = $int1 ?? 200;//exp1 ?? exp2 问号的作用是给变量添加默认值，实际项目中有些执行结果或有些变量是没有被赋值或赋值为null的，在之后的执行过程中需要默认值数值执行；这个200就是实际项目中给添加的默认值
echo $num1;
