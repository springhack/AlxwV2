<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-19 11:07:26
        Filename: Img.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class Img {
	
		public function __construct($img)
		{
			if (strstr($img, 'http://'))
				$this->path = $img
			else
				$this->path = dirname(__FILE__).'/../Resource/Image/'.$img.'.png';
		}

		public function getAbsPath()
		{
			
			$o_dir = getcwd();
			chdir(dirname($this->path));
			$n_dir = getcwd();
			chdir($o_dir);
			return $n_dir;
		}

		public function getBase64()
		{
			return base64_encode($this->getBinary());
		}

		public function getBinary()
		{
			return file_get_contents($thsi->path);
		}

	}

?>
