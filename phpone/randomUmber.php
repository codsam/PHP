<?php

// 生成随机颜色
// 使用rgb()形成的颜色设置
// 数值是0-255之间的数字，使用php程序随机生成字体颜色
/*
<?php echo mt_rand();?>
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<span style="color:rgb(<?php echo mt_rand(0,255);?>,<?php echo mt_rand(0,255);?>,<?php echo mt_rand(0,255);?>);">123</span>
	<span style="color:rgb(<?php echo mt_rand(0,255);?>,<?php echo mt_rand(0,255);?>,<?php echo mt_rand(0,255);?>);">321</span>
</body>
</html>