<?php
/*
file init.php
作用：框架初始化
*/

//===初始化当前的绝对路径===
// __FILE__ 输出文件的绝对路径
// dirname() 切割一个文件路径，去掉最后一个/、\后面的部分。
// str_replace() 替换字符串函数
// 换成正斜线是因为 win/linux都支持正斜线，而linux不支持反斜线
// define('ROOT', xx ) 将绝对目录存为常量
define('ROOT', str_replace('\\', '/',dirname(dirname(__FILE__))) .'/');
/*
echo __FILE__;
echo dirname('D:\www\index.php');
*/

require(ROOT .'include/db.class.php');    // 引入db.class.php数据库类文件
require(ROOT .'include/conf.class.php');  // 引入conf.class.php 配置类文件


//===设置报错级别===
define('DEBUG', true);   // 定义一个DEBUG常量

if(defined('DEBUG')) { // 判断常量DEBUG，为真是开发环境，报错级别为最高的E_ALL，报所有错误。
	error_reporting(E_ALL);
} else {  // 为假 则报错级别调为最低的0，用于生产环境。
	error_reporting(0);
}

// 过滤参数，用递归的方式过滤$_GET，$__POST，$__COOKIE，暂时不会



























?>