<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-19 10:52:06
        Filename: Layout.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class Layout {

		public function __construct()
		{
			//TODO
		}

		public function get($name)
		{
			return new Dom($name);
		}

	}

?>
