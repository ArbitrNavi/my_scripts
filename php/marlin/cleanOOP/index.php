<?php

include_once "Database.php";

$users = Database::getInstance()->query("SELECT * FROM users");
foreach ($users as $user) {
	echo $user["id"] . ". " . $user["username"] . "<br>";
}