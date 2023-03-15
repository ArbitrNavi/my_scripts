<?php
require_once "../vendor/autoload.php";
use App\QueryBuilder;
$db = new QueryBuilder();


$result = $db->getAll('posts');

$data = [
	"title"=>"Новый заголовок " . date('U')
];
echo "<hr>";
echo "<hr>";

$db->insert($data, 'posts');

var_dump($result);