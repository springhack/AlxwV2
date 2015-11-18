<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 17:04:54
        Filename: Router.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class Router {
	
		private $method;
		private $rules;
		private $url;
	
		public function __construct()
		{
			$this->method = $_SERVER['REQUEST_METHOD'];
			$this->url = str_replace(str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);
		}
	
		public function add($route, $callback)
		{
			$this->rules[$route] = $callback;
		}
	
		public function run()
		{
			$is_match = false;
			foreach($this->rules as $route => $callback)
			{
				if('default' === $route)
					continue;
				if($route == $this->url)
				{
					$is_match = true;
					$callback();
					break;
				}
			}
			if(!$is_match)
			{
				$arr = explode('/', $this->url);
				if ($arr[1] === 'Activity' && isset($arr[2]))
					Alxw::getInstance()->ClassLoader($arr[2]);
				else
					$this->rules['default']();
			}
		}

	}

?>
