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

	public function create($table, $data) {
		$keys = implode(",", array_keys($data));
		$tags = ":" . implode(":,", array_keys($data));

		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
		$statement = $this->pdo->prepare($sql);
		$statement->execute($data);
	}

	public function getOne($table, $id) {
		$sql = "SELECT * FROM {$table} WHERE id=:id";
		$statement = $this->pdo->prepare($sql); //ЗАПРОС SELECT
		$statement->execute([
			"id" => $id,
		]); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function update($table, $data, $id) {
		$keys = array_keys($data);
		$string = '';
		foreach ($keys as $key) {
			$string .= $key . '=:' . $key . ',';
		}
		$keys = rtrim($string, ",");
		$data["id"] = $id;
		var_dump($keys);
		var_dump($data);
//		$sql = "UPDATE {$table} SET title=:title WHERE id=:id";
		$sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
		var_dump($sql);
		$statement = $this->pdo->prepare($sql);
		$statement->execute($data);
//		return $statement;
	}
}