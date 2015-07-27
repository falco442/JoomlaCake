<?php
	class User extends AppModel
	{
		public $useDbConfig = 'joomla';
		public $displayField = 'username';
		public $order = 'registerDate';
	}
?>