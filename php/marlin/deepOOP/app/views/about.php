<?php $this->layout('layout',
		[
				'title' => 'User Profile 2',
				'type'  => 'this is category'
		]) ?>

<h1>About page</h1>

<p>Hello, <b><?= $this->e($name);?></b></p>