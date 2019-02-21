<?php

// 获取当前行
echo __LINE__;

// 获取当前文件夹路径
echo __DIR__;

// 获取当前文件夹路径及文件名称
echo __FILE__;

// 获取当前函数名称
function ab(){
	echo __FUNCTION__;
}
ab();