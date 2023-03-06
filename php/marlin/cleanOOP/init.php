<?php
session_start();
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
		'user_session'=> 'user',
	]
];

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
