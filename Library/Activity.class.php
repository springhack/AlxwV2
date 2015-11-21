<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-21 16:00:05
        Filename: Activity.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php
	class Activity {
		
		private $Document;
		private $HTML;

		public function onCreate(){}
		public function onFinish(){}

		protected function setLayout($layout)
		{
			$this->Document = Alxw::getInstance()->R()->Layout()->get($layout);
			$this->HTML = $this->Document->HTML;
		}

		protected function getDocument()
		{
			return $this->Document;
		}

		protected function getHTML()
		{
			return $this->HTML;
		}

		function __construct()
		{
			$this->Document = '';
			$this->HTML = '';
			$this->onCreate();
		}

		function __destruct()
		{
			$this->onFinish();
			if ($this->Document !== '')
			{
				$this->Document->show();
				$this->Document->clear();
			}
		}

	}
?>
