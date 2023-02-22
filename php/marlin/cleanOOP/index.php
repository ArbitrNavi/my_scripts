<?php

include_once "Database.php";
//Database::getInstance()->insert('users', [
//	'username' => 'Marlin',
//	'password' => 'pass',
//]);
Database::getInstance()->update('users', 5, [
	'username' => 'Marlin2',
	'password' => 'pass2',
]);

$users = Database::getInstance()->get('users', ['password', '=', '123']);
//Database::getInstance()->delete('users', ['username', '=', 'name2']);


if ($users->error()) {
	echo "This Error";
} else {
	foreach ($users->result() as $user) {
		echo $user["id"] . ". " . $user["username"] . "<br>";
	}
}

