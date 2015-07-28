<?php ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<?= $this->Html->link(__('Joomla site'),FULL_BASE_URL,array('class'=>'navbar-brand')); ?>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><?= $this->Html->link(__('Users'),array('controller'=>'users','action'=>'index')); ?></li>
		</ul>
		<?php
			if($loggedIn==false)
			{
				echo $this->Form->create('User',array(
					'class'=>'navbar-form navbar-right',
					'url'=>array('controller'=>'users','action'=>'login'),
					'inputDefaults'=>array(
						'class'=>'form-control',
						'div'=>'form-group inline-form',
						'label'=>false,
						'wrapInput'=>false
					)
				));
				echo $this->Form->input('username',array('placeholder'=>'username'));
				echo $this->Form->input('password',array('placeholder'=>'password'));
				echo $this->Form->input('remember',array('div'=>'user-remember form-group','type'=>'checkbox','label'=>__('Remember me')));
				echo $this->Form->submit(__('Sign in'),array('class'=>'btn btn-success','div'=>false));
				echo $this->Form->end();
			}
			else
			{
				$signOutButton = $this->Html->link(__('Sign out'),array('controller'=>'users','action'=>'logout'),array('class'=>'navbar-right btn btn-success'));
				echo $this->Html->div('navbar-form navbar-right form-group',$signOutButton,array('escape'=>false));
			}
		?>
	</div><!--/.navbar-collapse -->
	</div>
</nav>