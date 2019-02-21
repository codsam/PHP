<?php

// 数组
// 旧形式
// $arr = array(1,2,3,4,5);

// php7.0 以上版本的语法形式
$arr = [1,2,3,4,5,];
echo '<pre>';
var_dump($arr);
echo '</pre>';

// echo 只能输出标量类型的四种数据类型
// 输出数组等非标量类型的数据会报错
// echo $arr;

// 使用html标签 <pre></pre> 与php函数 print_r()配合使用

// print_r()以更容易理解的形式输出变量或者数据，可以输出任意数据类型的数值
// pre标签，标签中的内容，会以源码的格式输出在页面中

echo '<pre>';
print_r($arr);
echo '</pre>';