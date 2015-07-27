<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('remember',array('type'=>'checkbox','label'=>__('Remember me')));
	echo $this->Form->submit('Login');
	echo $this->Form->end();
?>