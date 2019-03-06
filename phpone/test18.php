<?php

// 字符串大小写函数

//strtoupper()  所有字符大写
$str1 = 'hellow word and hellow anybody';
echo strtoupper($str1),"<hr>";

//strtolower()  所有字符小写
$str2 = 'hellow word and hellow anybody';
echo strtolower($str2),"<hr>";

//ucfirst()  首单词的首字母大写
$str3 = 'hellow word and hellow anybody';
echo ucfirst($str3),"<hr>";

//lcfirst()  首单词的首字符小写
$str4 = 'HELLOW WORD AND HELLOW ANYBODY';
echo lcfirst($str4),"<hr>";

//ucwords()  所有单词的首字符大写
$str5 = 'hellow word and hellow anybody';
echo ucwords($str5),"<hr>";