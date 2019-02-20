<?php

// <<< 规定的标识符
// abc 是程序员定义的自定义定界符
// 两个abc 就相当于两个双引号
// 两个abc中间的内容就是定义的双引号中的字符串内容

//Heredoc是可以解析变量中的数据的

//自定义定界符一般使用三个单词
// EOD EOF CDATA

//Heredoc 第二种语法 起始自定义定界符使用双引号包裹
// <<<"自定义定界符"

//特别说明：结束自定义定界符，一定要在当前行的最起始位置设定，之前之后都不要添加多余空格或内容

$str = <<<abc

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.tab1{
			border-collapse:collapse;
			width:200px;
			height:100px;
		}
		.tab1 td{
			border:1px solid #000;
			text-align: center;
			vertical-align: middle;
			color:red;
		}
	</style>
</head>
<body>
<table class="tab1">
	<tr>
		<td>北京</td>
		<td>上海</td>
		<td>重庆</td>
		<td>天津</td>
	</tr>
	<tr>
		<td>北京</td>
		<td>上海</td>
		<td>重庆</td>
		<td>天津</td>
	</tr>
</table>
</body>
</html>

abc;

echo "$str";