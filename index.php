<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 12:45:23
        Filename: index.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	//引入Alxw框架
	require_once("Library/Alxw.php");

	//默认路由规则
	Alxw::getInstance()->Router()->add('default', function () {
			echo '<center><h1>Hello, Alxw !</h1></center>';
		});

	//phpinfo规则
	Alxw::getInstance()->Router()->add('/php', function () {
			phpinfo();
		});

	//启动路由
	Alxw::getInstance()->Router()->run();

?>
