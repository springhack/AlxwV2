<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-11-18 11:58:35
        Filename: Config/Config.main.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php
	$Config = array(
			'DB_HOST' => '127.0.0.1',
			'DB_USER' => 'root',
			'DB_PASS' => 'sksks',
			'DB_NAME' => 'build_vj',
			'AUTO_USER' => 'root',
			'AUTO_PASS' => 'sksks'
		);
	if (file_exists(dirname(__FILE__).'/Config.user.php'))
		require_once(dirname(__FILE__).'/Config.user.php');
?>
