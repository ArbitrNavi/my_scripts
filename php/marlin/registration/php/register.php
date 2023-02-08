<?php session_start();
include_once "functions.php";

if (arrayValue($_POST, "email") === 'null' || arrayValue($_POST, 'password') === 'null') {
	redirect('../page_register.php');
	die();
} else {
	$email = $_POST["email"];
	$password = $_POST["password"];
}

if (add_user($email, $password)) {
	$_SESSION["is_create_user"] = false;

	redirect('../page_register.php');
} else {
	$_SESSION["is_create_user"] = true;

	redirect('../page_login.php');
}


//echo "<pre>";
//echo "POST ";
//var_dump($_POST);
//echo "DB ";
//var_dump($users);
//echo "SESSION ";
//var_dump($_SESSION);
//echo "</pre>";

?>