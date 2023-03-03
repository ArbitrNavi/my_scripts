<?php
session_start();
require_once "init.php";
var_dump($_SESSION);
//unset($_SESSION);
$user = new User();
echo $user->data()->email;
$anotherUser = new User(14);

if ($user->isLoggedIn()) {
	// +
} else{
    // -
}

?>