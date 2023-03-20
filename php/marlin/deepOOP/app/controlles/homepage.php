<?php

use App\QueryBuilder;

//echo "this homepage.php";

$db = new QueryBuilder();


echo "<pre>";
var_dump($db->getAll('posts'));

$data = [
	"title"=>"Новый заголовок " . date('U')
];
echo "<hr>";
echo "<hr>";

$db->insert($data, 'posts');