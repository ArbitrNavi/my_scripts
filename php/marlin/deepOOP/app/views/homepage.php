<?php $this->layout('layout',
		[
				'title' => 'User Profile 2',
				'type'  => 'this is category'
		]) ?>

<h1>User Profile</h1><p>Hello, <?= $this->e($name); ?></p>