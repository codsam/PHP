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