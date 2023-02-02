<?php

//$text = $_POST['text'];
$text = "string2-" . date("U");
$email = "mail@mail.loc";
//$text = "test 5";
echo $text;

$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "");
$sql = "INSERT INTO my_table (text, email) VALUES (:text, :email)";
$statement = $pdo->prepare($sql);
$statement->execute(
	[
		'text'  => $text,
		'email' => $email,
	]
);
