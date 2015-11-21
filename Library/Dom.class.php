<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-21 15:45:40
        Filename: Dom.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	//This script require 'simple_html_dom' under MIT License
	require_once(dirname(__FILE__).'/simple_html_dom.php');
	
	class Dom {
	
		public $HTML;
		public $Root;

		public function __construct($name)
		{
			if (strstr($name, 'http://'))
				$this->HTML = file_get_contents($name);
			else
				$this->HTML = file_get_contents(dirname(__FILE__).'/../Resource/Layout/'.$name.'.html');
			$this->Root = new simple_html_dom();
			$this->Root->load($this->HTML);
		}

		public function show()
		{
			echo $this->Root;
		}

		public function clear()
		{
			$this->Root->clear();
		}

	}

?>
