<?php
session_start();
require_once "functions.php";
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$id = add_user($email, $password);
	echo $id;
	echo "true";
	flesh_message("create", null);
	redirect("../users.php");
} else {
	echo "none";
	$id = false;
	flesh_message("create", "Не удалось зарегистрироваться, повторите попытку ввода email и пароля");
	redirect("../create_user.php");
	die();
}

if ($id) {
	setUserField($id, "works", $_POST["works"]);
	setUserField($id, "phone", $_POST["phone"]);
	setUserField($id, "address", $_POST["address"]);
	setUserField($id, "name", $_POST["name"]);
	setUserField($id, "status", $_POST["status"]);
	setUserField($id, "avatar", $_POST["avatar"]);
	setUserField($id, "vk", $_POST["vk"]);
	setUserField($id, "telegram", $_POST["telegram"]);
	setUserField($id, "instagram", $_POST["instagram"]);
}

