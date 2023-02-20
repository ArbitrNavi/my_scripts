<?php
//var_dump($_POST);

include_once('functions.php');
$db = include_once('dataBase/start.php');

$db->create("posts",[
	"title"=>$_POST["title"],
]);

header("Location: index.php");