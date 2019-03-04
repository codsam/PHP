<?php

$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$newStr1 = $str[mt_rand(0,strlen($str) - 1)];
$newStr2 = $str[mt_rand(0,strlen($str) - 1)];
$newStr3 = $str[mt_rand(0,strlen($str) - 1)];
$newStr4 = $str[mt_rand(0,strlen($str) - 1)];
$newStr5 = $str[mt_rand(0,strlen($str) - 1)];
$newStr6 = $str[mt_rand(0,strlen($str) - 1)];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		div{
			background-color:#ddd;
			padding:10px;
			width:130px;
			font-size:22px;
		}
		.span1{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
		.span2{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
		.span3{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
		.span4{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
		.span5{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
		.span6{
			color:rgb(<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>,<?php echo mt_rand(0,255); ?>);
		}
	</style>
</head>
<body>
<div>
	<span class="span1"><?php echo $newStr1; ?></span>
	<span class="span2"><?php echo $newStr2; ?></span>
	<span class="span3"><?php echo $newStr3; ?></span>
	<span class="span4"><?php echo $newStr4; ?></span>
	<span class="span5"><?php echo $newStr5; ?></span>
	<span class="span6"><?php echo $newStr6; ?></span>
</div>
</body>
</html>