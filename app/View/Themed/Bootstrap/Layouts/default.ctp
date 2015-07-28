<?php ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Joomla Cake</title>

		<?php
			echo $this->Html->css(array(
				'bootstrap.min',
				'jumbotron'
			));
		?>

	</head>

  <body>

	<?= $this->element('navbar'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?= $this->fetch('header'); ?>

	<div class="container">
      <!-- Example row of columns -->
		<?= $this->Session->flash(); ?>
      
		<?= $this->fetch('content'); ?>

		<hr>

		<footer>
			<p>&copy; Company 2014</p>
		</footer>
	</div> <!-- /container -->
    
    <?php
		echo $this->Html->script(array(
			'jquery-1.11.3.min',
			'bootstrap.min'
		));
    ?>

  </body>
</html>
