<?php
include_once "Clases/Config.php";
include_once "Clases/Database.php";
include_once "Clases/Validate.php";
include_once "Clases/Input.php";
include_once "Clases/Token.php";
include_once "Clases/Session.php";
include_once "Clases/User.php";
include_once "Clases/Redirect.php";

$GLOBALS["config"] = [
	'mysql'   => [
		"host"      => "localhost",
		"username"  => "root",
		"password"  => "",
		"database"  => "marlin_cleanoop",
		"something" => [
			"no" => [
				"foo" => [
					"bar" => "baz"
				]
			]
		]
	],
	'session' => [
		'token_name' => 'token',
	]
];

if (Input::exists()) {
	if (Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, [
			'username'       => [
				'required' => true,
				'min'      => 2,
				'max'      => 15,
				'unique'   => 'users'
			],
			'email'          => [
				'required' => true,
				'email'    => true,
				'unique'   => 'users'
			],
			'password'       => [
				'required' => true,
				'min'      => 3,
			],
			'password_again' => [
				'required' => true,
				'matches'  => 'password'
			],
		]);


		//	var_dump($validation->errors());

		if ($validation->passed()) {

			$user = new User();
			$user->create([
				'username' => Input::get('username'),
				'email'    => Input::get('email'),
				'password' => password_hash(Input::get('password'), PASSWORD_DEFAULT)
			]);

			Session::flash('success', 'user register done');
			//			header('Location: test.php');
		} else {
			foreach ($validation->errors() as $error) {
				echo $error . '<br>';
			}
		}
	}

}


//Database::getInstance()->insert('users', [
//	'username' => 'Marlin',
//	'password' => 'pass',
//]);
//Database::getInstance()->update('users', 5, [
//	'username' => 'Marlin2',
//	'password' => 'pass2',
//]);



$users = Database::getInstance()->get('users', ['username', '=', 'Marlin']);
//Database::getInstance()->delete('users', ['username', '=', 'name2']);


//if ($users->error()) {
//	echo "This Error";
//} else {
//	foreach ($users->result() as $user) {
//		echo $user["id"] . ". " . $user["username"] . "<br>";
//		//		echo $user . "<br>";
//	}
//}
//Redirect::to(404);


//var_dump($_SESSION);
