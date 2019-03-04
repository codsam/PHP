<?php

// 生成随机字符

//1,建立字符串
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
//2,获取其中某一个字符  []语法，其中输入字符的键位
//键位是php自动赋值的，从0开始的数值
//第一个字符的键位是0，最后一个字符的键位是 字符总个数-1
//
// 函数strlen() 获取字符串中字符的长度，如果字符串中只有英文和数字，那么就是字符个数
// 英文字母，数字，符号等都占一个长度，中文,utf-8编码格式占三个长度
//
// 随机提取字符，mt_rand()两个参数
//第一个是0  第一个字符的键位
//第二个是 strlen($arr)-1 最后一个字符的键位
//
//通过随机数，生成随机的键位，进而通过随机键位在字符串中获取随机字符
// $newStr = $str[mt_rand(0,strlen($str) - 1)];
// echo $newStr;

//如果需要6位验证码，只是需要将提取步骤重复6次，拼接成一个新的字符串
$newStr = $str[mt_rand(0,strlen($str) - 1)] . $str[mt_rand(0,strlen($str) - 1)] . $str[mt_rand(0,strlen($str) - 1)] . $str[mt_rand(0,strlen($str) - 1)] . $str[mt_rand(0,strlen($str) - 1)] . $str[mt_rand(0,strlen($str) - 1)];
echo $newStr;
/*
根据验证码的需要位数，多次提取随机字符，将随机字符通过字符串拼接符号 . 拼接为新的字符串，新的字符串就是随机验证码，其中因为随机数有可能重复，进而造成键位重复，最终导致验证码中有重复字符，
最后有解决方案
*/


/*随机键位  最小数值和最大数值
最小数值是第一个字符的键位 ... 0
最大数值是最后一个字符的键位 ... 字符总个数-1
字符个数通过函数 strlen() 获取
最后一个字符的键位 ... strlen($str) - 1
随机键位 mt_rand(a,strlen($str) - 1)
通过随机键位，提取相应的随机字符
$str[mt_rand(0,strlen($str) - 1)];
*/