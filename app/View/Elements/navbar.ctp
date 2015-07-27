<?php ?>
<ul class="navbar">
	<li><?= $this->Html->link('Home','/'); ?></li>
	<li><?= $this->Html->link('Joomla Home',FULL_BASE_URL); ?></li>
	<li><?= $this->Html->link(__('Users'),array('controller'=>'users','action'=>'index')); ?></li>
</ul>