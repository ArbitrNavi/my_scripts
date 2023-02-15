<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getAll($table) {
		$sql = "SELECT * FROM {$table}";
		$statement = $this->pdo->prepare($sql); //ЗАПРОС SELECT
		$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
}