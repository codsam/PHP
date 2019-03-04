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