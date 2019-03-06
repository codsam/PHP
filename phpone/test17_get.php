<?php

// 预定义变量 $_GET
// 专门接收前端以get方式传递的form表单的数据
// $_GET是数组
echo '<pre>';
print_r($_GET);
echo '</pre>';

$int1 = $_GET['name'];
$int2 = $_GET['pwd'];

echo $int1,' ',$int2;