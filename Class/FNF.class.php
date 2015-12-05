<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-26 20:09:27
        Filename: Class/FNF.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class FNF {
		
		private $dom;

		public function __construct()
		{
			$this->dom = Alxw::getInstance()->R()->Layout()->get('404');
			$this->dom->show();
		}

	}

?>
