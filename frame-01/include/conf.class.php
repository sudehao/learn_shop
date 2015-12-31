<?php

/*
file conf.class.php
配置文件读写类
*/

class conf {
	protected static $ins = NULL;
	protected $data = array();

	// 一次性把配置文件信息$_CFG，读进来，赋给data属性，
	// 这样以后就不再管配置文件了。
	// 再要配置文件的值时，直接从data属性找
	final protected function __construct() {
		include(ROOT.'include/config.inc.php');
		$this->data = $_CFG;
	}

	final protected function __clone() {

	}

	public static function getIns() {
		if(self::$ins instanceof self) {
			return self::$ins;
		} else {
			self::$ins = new self();
			return self::$ins;
		}
	}

	// 用 __get 魔术方法 读取$data数组中的数据
	public function __get($key) {
		if(array_key_exists($key, $this->data)){
			return $this->data[$key];
		} else {
			return NULL;
		}
	}

	// 用 __set 魔术方法，在运行期，动态增加或改变配置选项
	public function __set($key, $value) {
		$this->data[$key] = $value;
	}
}


$conf = conf::getIns();

/*
// 测试读取配置文件 config.inc.php 文件通过
print_r($conf);
*/


/*
// 测试魔术方法 __get 读取$data数组中的数据通过
echo $conf->host, '<br />';
echo $conf->user, '<br />';
*/

/*
// 测试 __set 魔术方法，动态的追加选项
$conf->template_dir = 'D:/www/smarty';
echo $conf->template_dir;
*/







?>