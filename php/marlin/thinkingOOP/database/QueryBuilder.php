<?php

class QueryBuilder
{
	function getAllPosts($pdo) {
		$statement = $pdo->prepare("SELECT * FROM posts"); //ЗАПРОС SELECT
		$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
		$posts = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER
		return $posts;
	}
}