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
