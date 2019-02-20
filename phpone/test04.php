<?php

// Nowdoc 与 Heredoc 语法很像
//区别在于起始定界符需要使用双引号包裹
//Nowdoc不能解析变量

$str = <<<"abc"

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