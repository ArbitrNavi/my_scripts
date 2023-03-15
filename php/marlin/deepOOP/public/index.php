<?php

require_once "../vendor/autoload.php";
use Aura\SqlQuery\QueryFactory;

$queryFactory = new QueryFactory('mysql');
$select = $queryFactory->newSelect();
$select->cols(['*'])
	->from('posts');
//die;
// a PDO connection
$pdo = new PDO("mysql:host=localhost;dbname=app3;","root","");


// prepare the statement
echo "<br>";

$sql = $select->getStatement();
//$sql = "SELECT id FROM \"posts\"";
//$sql = "SELECT id FROM posts";

var_dump($sql);
$sth = $pdo->prepare($sql);

// bind the values and execute
$sth->execute($select->getBindValues());
var_dump($select->getBindValues());

// get the results back as an associative array
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

echo "<hr>";
var_dump($result);