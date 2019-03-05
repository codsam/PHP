<?php

// 判断是奇数还是偶数
$int1 = mt_rand(50,120);
if($int1%2 == 0){
	echo "{$int1} 是偶数";
}else{
	echo "{$int1} 是奇数";
}

echo "<hr>";

// 判断是否同时被2 3 5整除
$int2 = mt_rand(50,120);
if($int2%2 == 0 && $int2%3 == 0 && $int2%5 == 0){
	echo "{$int2} 同时被 2 3 5 整除";
}else{
	echo "{$int2} 不能同时被 2 3 5 整除";
}
echo "<br>";
/* or */
if($int2%30 == 0 ){
	echo "{$int2} 同时被 2 3 5 整除";
}else{
	echo "{$int2} 不能同时被 2 3 5 整除";
}

echo "<hr>";

//判断在300-500之间
$int3 = mt_rand(1,1000);
if ($int3 > 300 && $int3 < 500) {
	echo "{$int3}在300-500之间";
}else{
	echo "{$int3}不在300-500之间";
}
echo "<br>";
/* or */
// 判断300-500之外的（逻辑运算符 ||）
if ( ($int3<300 || $int3>500) ) {
	echo "{$int3}不在300-500之间";
}else{
	echo "{$int3}在300-500之间";
}

echo "<hr>";
// 判断
/*
随机生成一个 1000-9999 的数值
判断该数值
1，可以被4整除，并且不能被100整除
2，或者可以被400整除
*/
$int4 = mt_rand(1000,9999);
if (($int4%4 == 0 && $int4%100 != 0) || ($int4%400 == 0)) {
	echo "{$int4}年是闰年";
} else {
	echo "{$int4}年是平年";
}
