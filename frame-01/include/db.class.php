<?php
/*
file db.class.php
数据库类

初期不还不确定使用什么数据库，所以先写好一些接口。
*/

abstract class db {

	/*
	连接数据库：
	parms $h 服务器地址
	parms $u 用户名
	parms $p 密码
	return bool
	*/
	public abstract function connect($h, $u, $p);

	/*
	发送查询
	parms $sql 发送的sql语句
	return mixed bool/resource
	*/
	public abstract function query($sql);

	/*
	查询多行数据
	parms $sql select型语句
	return array/bool
	*/
	public abstract function getAll();

	/*
	查询单行数据
	parms $sql select型语句
	return array/bool
	*/
	public abstract function getOne();

	/*
	查询单个数据
	parms $sql select型语句
	return array/bool
	*/
	public abstract function getRow();

	/*
	自动执行insert/update语句
	parms $sql select型语句
	return array/bool
	*/
	public abstract function autoExecute($table, $date, $act='insert', $where='');


}









?>