<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-12-06 03:12:22
        Filename: Config.main.php
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
