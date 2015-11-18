<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 20:50:28
        Filename: ../Library/Dom.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	//This script require 'simple_html_dom' under MIT License
	require_once(dirname(__FILE__).'/simple_html_dom.php');
	
	class Dom {
	
		public $Document;
		public $LayoutHTML;

		public function __construct($name)
		{
			if (strstr($name, 'http://'))
				$this->LayoutHTML = file_get_contents($name);
			else
				$this->LayoutHTML = file_get_contents(dirname(__FILE__).'/../Resource/Layout/'.$name.'.html');
			$this->Document = new simple_html_dom();
			$this->Document->load($this->LayoutHTML);
		}

		public function show()
		{
			echo $this->Document;
		}

	}

?>
