<?php

// 1,进一取整法，向上取整
// 如果小数部分都是0，结果不会进一
// 5.0000  还是 5
$int = 5.0;
echo ceil($int);


// 2，舍去取整法
$int = 8.0999;
echo floor($int);


// 3，四舍五入取整
// 1，需要取整的对象
// 2，设定保留的小数位数，默认保留0位小数
$int = 5.1265486;
echo round($int);

// 设定第二个参数吗，为保留小数的位数
echo round($int,2);

// 第三个参数
// 只针对一位小数，并且小数数值为5的小数起作用
//
// 第二个参数必须设定为0，也就是不保留小数部分
//
// 作用：设定四舍五入的形式
//
// 第三个参数的额数值为4个常量
//
// PHP_ROUND_HALF_UP  小数部分进一
// PHP_ROUND_HALF_DOWN  小数部分舍弃
// PHP_ROUND_HALF_EVEN  整数部分取最接近的偶数
// PHP_ROUND_HALF_ODD  整数部分取最接近的奇数
$int = 7.5;
//小数部分进一
echo round($int,0,PHP_ROUND_HALF_UP);
// 小数部分舍弃
echo round($int,0,PHP_ROUND_HALF_DOWN);
// 整数部分取最接近的偶数
echo round($int,0,PHP_ROUND_HALF_EVEN);
// 整数部分取最接近的奇数
echo round($int,0,PHP_ROUND_HALF_ODD);