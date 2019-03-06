<?php

// switch语句
// 在根据变量的数值进行判断时，使用switch语句
// 根据变量的数值，进行执行程序的定位
// 定位之后会执行所有的程序，直到遇到break语句终止
// default，与else的作用相同，作非法数据情况的处理

$num = mt_rand(1,5);
switch ($num) {
	case 1:
		echo "数值是{$num}" , '可口可乐';
		break;
	case 2:
		echo "数值是{$num}" , '非常可乐';
		break;
	case 3:
		echo "数值是{$num}" , '大众可乐';
		break;
	case 4:
		echo "数值是{$num}" , '好可乐';
		break;
	
	default:
		echo "数值是{$num}" , '没有这种可乐，请重新输入';
		break;
}

/*

if与switch
如果是条件，是嵌套，用if
如果是数值判断，用switch

*/