<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-12-12 15:17:23
        Filename: Alxw.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	//Alxw框架主程序,单例模式
	require_once(dirname(__FILE__).'/../Config/Config.main.php');

	//自动载入模块
	function __autoload($class)
	{
		$file = dirname(__FILE__)."/".$class.".class.php";
		if (file_exists($file))
			require_once($file);
		else
			trigger_error('Class not found!', E_USER_ERROR);
	}

	//Alxw主类
	class Alxw {

		//保存实例的静态成员
		private static $_instance;
		private $router;
		private $db;
		private $r;

		//private构造，防止外部构造
		private function __construct()
		{
			$this->db = null;
			$this->r = null;
			$this->router = null;
			//TODO
		}

		//__conle防止被克隆
		public function __clone()
		{
			trigger_error('Denied to clone!', E_USER_ERROR);
		}

		//自动加载额外扩展
		public function __call($m, $a)
		{
			$this->extend($m);
			if (isset($this->$m))
				return $this->$m;
			return false;
		}

		//获取实例
		public static function getInstance()
		{
			if (!(self::$_instance instanceof self))
				self::$_instance = new self;
			return self::$_instance;
		}

		//获取路由实例
		public function Router()
		{
			if (!$this->router)
				$this->router = new Router();
			return $this->router;
		}

		//获取数据库实例
		public function DB()
		{
			if (!$this->db)
				$this->db = new MySQL();
			return $this->db;
		}

		//获取资源实例
		public function R()
		{
			if (!$this->r)
				$this->r = new R();
			return $this->r;
		}

		//载入额外扩展
		public function extend($mod)
		{
			if (isset($this->$mod))
				return;
			if (file_exists(dirname(__FILE__).'/../Extension/'.$mod.'.class.php'))
				require_once(dirname(__FILE__).'/../Extension/'.$mod.'.class.php');
			$this->$mod = new $mod();
		}

		//载入Class
		public function CLassLoader($class)
		{
			if (file_exists(dirname(__FILE__).'/../Class/'.$class.'.class.php'))
				require_once(dirname(__FILE__).'/../Class/'.$class.'.class.php');
			new $class();
		}

	}
?>
