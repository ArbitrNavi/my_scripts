<?php
include "functions.php";

function getAllPosts() {

	$pdo = new PDO("mysql:host=localhost;dbname=app3;", "root", "");

	$statement = $pdo->prepare("SELECT * FROM posts"); //ЗАПРОС SELECT
	$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
	$posts = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER
	return $posts;
}

$posts = getAllPosts();
//dd($posts);

include "index.view.php";
?>