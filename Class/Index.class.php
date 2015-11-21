<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-21 15:37:36
        Filename: ../Class/Index.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php
	
	class Index extends Activity {
		
		public function onCreate()
		{
			$this->setLayout('index');
			$this->getDocument()->Root->find('title')[0]->innertext = '首页';
			$this->getDocument()->Root->find('body')[0]->innertext = '<center><h1>Hello, Alxw !</h1></center>';
		}

	}

?>
