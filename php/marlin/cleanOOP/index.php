<?php
session_start();
require_once "init.php";
//var_dump($_SESSION);
//unset($_SESSION);
$user = new User();
$anotherUser = new User(13);

if ($user->isLoggedIn()) {
	echo "Привет " . $user->data()->username;
} else {
	echo "Не авторизирован!";
}

?>