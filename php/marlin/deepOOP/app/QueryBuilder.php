<?php

namespace App;

use Aura\SqlQuery\QueryFactory;
use PDO;

class QueryBuilder
{
	public function getAll() {
		$queryFactory = new QueryFactory('mysql');
		$select = $queryFactory->newSelect();
		$select->cols(['*'])
			->from('posts');
		$pdo = new PDO("mysql:host=localhost;dbname=app3;", "root", "");
		$sql = $select->getStatement();
		$sth = $pdo->prepare($sql);
		$sth->execute($select->getBindValues());
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $result;

	}
}