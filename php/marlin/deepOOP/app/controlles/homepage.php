<?php

use App\QueryBuilder;

//echo "this homepage.php";

$db = new QueryBuilder();


echo "<pre>";
var_dump($db->getAll('posts'));

$data = [
//	"id"    => 36,
	"title" => "Новый заголовок update " . date('U')
];

//$db->update($data, 36, 'posts');


$db->delete(48, 'posts');
//$db->insert($data, 'posts');

echo "<hr>";
echo "<hr>";