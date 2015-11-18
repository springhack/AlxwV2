<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 20:40:19
        Filename: ../index.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	//引入Alxw框架
	require_once("Library/Alxw.php");

	//默认路由规则
	Alxw::getInstance()->Router()->add('default', function () {
			Alxw::getInstance()->ClassLoader('FNF');
		});

	//首页路由规则
	Alxw::getInstance()->Router()->add('/', function () {
			Alxw::getInstance()->ClassLoader('Index');
		});

	//phpinfo规则
	Alxw::getInstance()->Router()->add('/php', function () {
			phpinfo();
		});

	//启动路由
	Alxw::getInstance()->Router()->run();

?>
