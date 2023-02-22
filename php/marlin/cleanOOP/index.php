<?php

include_once "Database.php";

$users = Database::getInstance()->get('users', ['username', '=', 'name1']);
//Database::getInstance()->delete('users', ['username', '=', 'name2']);

//var_dump($users->error());

if ($users->error()) {
	echo "This Error";
} else {
	foreach ($users->result() as $user) {
		echo $user["id"] . ". " . $user["username"] . "<br>";
	}
}