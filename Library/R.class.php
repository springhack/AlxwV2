<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-19 10:37:35
        Filename: R.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class R {
		
		private $layout;
		private $image;
		private $misc;

		public function __construct()
		{
			$this->layout = new Layout();
			$this->image = new Image();
			$this->misc = new Misc();
		}

		public function Layout()
		{
			return $this->layout;
		}

		public function Image()
		{
			return $this->image;
		}

		public function Misc()
		{
			return $this->misc;
		}

	}

?>
