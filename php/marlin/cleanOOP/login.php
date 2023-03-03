<?php
session_start();
require_once "init.php";

if (Input::exists()) {
	if (Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, [
				'email'    => [
						'required' => true,
						'email'    => true,
				],
				'password' => [
						'required' => true,
				],
		]);

		if ($validation->passed()) {
			echo "OK";
		} else {
			foreach ($validation->errors() as $error) {
				echo $error . '<br>';
			}
		}
	}

}

?>
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