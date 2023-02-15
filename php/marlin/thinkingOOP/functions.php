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

function getAllPosts($pdo) {
	$statement = $pdo->prepare("SELECT * FROM posts"); //ЗАПРОС SELECT
	$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
	$posts = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER
	return $posts;
}