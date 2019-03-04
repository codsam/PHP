<?php

/*
随机生成数字 1 - 1000
如果该数字是奇数就是输出奇数，如果是偶数，就输出偶数

偶数，被2整除
*/
$int = mt_rand(1,1000);
if($int%2 == 0){
	echo "{$int} 是偶数";
}else{
	echo "{$int} 是奇数";
}

// 判断随机生成的数值能否被3整除
$int = mt_rand(1,1000);

if($int%3 == 0){
	echo "{$int} 是可以被3整除";
}else{
	echo "{$int} 是不可以被3整除";
}

/*or*/

if($int%3 != 0){
	echo "{$int} 是不能被3整除";
}else{
	echo "{$int} 是能被3整除";
}