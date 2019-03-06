<?php

// 前端使用post方式传递数据，php程序必须使用预定义变量$_POST接收数据，其他都与get方式相同
echo '<pre>';
print_r($_POST);
echo '</pre>';

$int1 = $_POST['name'];
$int2 = $_POST['pwd'];
$type = $_POST['type'];

echo $int1,' ',$int2,' ',$type;

echo "<hr>";

//switch语句()当作写需要判断的变量
// case当中写的是变量的不同数值，switch语句会根据变量的不同数值对程序进行定位，而不是逐一的判断，如果是数值的话，效率高于if语句
// 根据case进行定位之后，执行当前定位位置的执行体，会执行之后所有的执行体，除非遇到break语句
// break语句：终止语句，专门执行程序终止的语句
// default 相当于if语句中的else,也是当数值不满足于所有定位的内容，执行default当中的执行体
// default一般也是处理非法数据形式的内容，也是处理非法数值

/*

if与switch

如果是条件，是嵌套，用if
如果是数值判断，用switch

*/

switch ($type) {
	case '0':
		echo $int1 , '+' , $int2 , '=' , $int1 + $int2;
		break;
	case '1':
		echo $int1, '-' , $int2, '=', $int1 - $int2;
		break;
	case '2':
		echo $int1, '*' , $int2, '=', $int1 * $int2;
		break;
	case '3':
		if($int2 == 0){
		// 除数如果为0，需要终止程序
		// 使用 die()函数 或 exit()
		// 作用：终止程序，并且输出小括号中的内容
		exit('除数不能为0，请重新输入');
		}
		echo $int1, '/' , $int2, '=', $int1 / $int2;

	default:
		# code...
		echo "计算方式有无，请重新输入";
		break;
}