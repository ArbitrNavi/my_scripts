<?php

include_once "Database.php";

$users = Database::getInstance()->query("SELECT * FROM users");


//var_dump($users->error());

if ($users->error()) {
	echo "This Error";
} else {
	foreach ($users->result() as $user) {
		echo $user["id"] . ". " . $user["username"] . "<br>";
	}
}
