<?php require_once "init.php"; ?>
<form action="" method="post">
	<?php echo Session::flash('success'); ?>
	<div class="field">
		<label for="email">Email</label>
		<input type="text" name="email" value="<?php echo Input::get('email'); ?>">
	</div>
	<div class="field">
		<label for="password">Password</label>
		<input type="text" name="password">
	</div>
	<input type="hidden1" name="token" value="<?php echo Token::generate() ?>">

	<div class="field">
		<button type="submit">Submit</button>
	</div>
</form>