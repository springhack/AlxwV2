<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-12-12 15:40:37
        Filename: Settings.class.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php

	class Settings {
		
		private $db;

		public function __construct()
		{
			$this->db = Alxw::getInstance()->DB();
			if ($this->db->query("show tables like 'Settings'")->num_rows() != 1)
			{
				$this->db->struct(array(
							'key' => 'text',
							'val' => 'text'
						))->create('Settings');
			}
		}

		public function get($key, $value)
		{
			$res = $this->db->from('Settings')->where('`key`=\''.$key.'\'')->select();
			$r = $res->fetch_one();
			if ($r != "")
				return $r['val'];
			return $value;
		}

		public function set($key, $value)
		{
			$res = $this->db->from('Settings')->where('`key`=\''.$key.'\'')->select();
			if ($res->num_rows() > 0)
				$this->db->set(array(
							'val' => $value
						))->where('`key`=\''.$key.'\'')->update('Settings');
			else
				$this->db->value(array(
							'key' => $key,
							'val' => $value
						))->insert('Settings');
		}

	}

?>
