<?php
session_start();
require_once "init.php";
?>


<form action="" method="post">
	<?php echo Session::flash('success'); ?>
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" value="<?php echo Input::get('username'); ?>">
	</div>
	<div class="field">
		<label for="email">Email</label>
		<input type="text" name="email" value="<?php echo Input::get('email'); ?>">
	</div>
	<div class="field">
		<label for="password">Password</label>
		<input type="text" name="password">
	</div>
	<div class="field">
		<label for="password_again">Password again</label>
		<input type="text" name="password_again">
	</div>
	<input type="hidden1" name="token" value="<?php echo Token::generate() ?>">

	<div class="field">
		<button type="submit">Submit</button>
	</div>
</form>

