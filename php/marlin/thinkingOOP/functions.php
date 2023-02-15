<?php
function dd($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	die();
}

function connectionBD() {
	$pdo = new PDO("mysql:host=localhost;dbname=app3;", "root", "");
	return $pdo;
}