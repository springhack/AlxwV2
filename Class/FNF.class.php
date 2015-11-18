<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 20:49:57
        Filename: FNF.class.php
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
