<?php

$int = 100;
// {}
// 为了防止变量与字符串中的其他内容冲突，影响输出
echo "我今天考了{$int}分";

// []
$str = 'abcdefg';
echo $str[2];