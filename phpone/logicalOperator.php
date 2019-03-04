<?php

// 逻辑运算符
// 1，&& 逻辑与  表示两个条件同时成立，返回值为true
//
// 两个true，结果为true
// 只要有false,结果为false
//
// 判断一个数值，是否可以被3和5整除
// 同时被4 5，都可以整除
// 只要有一个是false，整个结果就是false
$int = mt_rand(1,1000);
if($int%3==0 && $int%5==0){
	echo "{$int} 可以被3和5整除";
}else{
	echo "{$int} 不可以被3和5整除";
}


// 2，|| 逻辑或  表示两个条件有一个成立，结果就是true
//
// 两个都是false，结果才是false
// 有一个为true，结果就是true
//
//判断一个数值是否可以被3或5整除
$int = mt_rand(1,1000);
if($int%3==0 || $int%5==0){
	echo "{$int} 可以被3或5整除";
}else{
	echo "{$int} 不可以被3和5整除";
}


// ! 逻辑非 对比较或者判断的结果取反
//
//注意问题：需要将取反的对象使用()包裹，防止取反出现错误
// !(5 > 3); 对5大于3的结果取反
// !5>3 对5取反，比较是否大于3


// 逻辑异或 x0r  两个结果相同，结果是false，结果不同返回true
// 
var_dump(true xor true);
var_dump(false xor false);
var_dump(false xor true);