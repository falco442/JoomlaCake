<?php
	class User extends AppModel
	{
		public $tablePrefix = 'gfn4d_';
		public $useTable = 'users';
		public $displayField = 'username';
		public $order = 'registerDate';
	}
?>