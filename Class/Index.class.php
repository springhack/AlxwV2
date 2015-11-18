<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 21:08:25
        Filename: Index.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php
	
	class Index {
		
		private $dom;

		public function __construct()
		{
			$this->dom = Alxw::getInstance()->R()->Layout()->get('index');
			$this->dom->Document->find('title')[0]->innertext = '首页';
			$this->dom->Document->find('body')[0]->innertext = '<center><h1>Hello, Alxw !</h1></center>';
			$this->dom->show();
		}

	}

?>
