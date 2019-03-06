<?php

// 预定义变量 $_GET
// 专门接收前端以get方式传递的form表单的数据
// $_GET是数组
echo '<pre>';
print_r($_GET);
echo '</pre>';

$int1 = $_GET['name'];
$int2 = $_GET['pwd'];
$type = $_GET['type'];

echo $int1,' ',$int2,' ',$type;

echo "<hr>";

//需要更具数据来执行计算
if( $type == 0 ){
	// 需要执行两个数据的加法
	echo $int1 , '+' , $int2 , '=' , $int1 + $int2;
}elseif($type == 1){
	echo $int1, '-' , $int2, '=', $int1 - $int2;
}
elseif($type == 2){
	echo $int1, '*' , $int2, '=', $int1 * $int2;
}
elseif($type == 3){
	if($int2 == 0){
		// 除数如果为0，需要终止程序
		// 使用 die()函数 或 exit()
		// 作用：终止程序，并且输出小括号中的内容
		die('除数不能为0，请重新输入');
	}
	echo $int1, '/' , $int2, '=', $int1 / $int2;
}