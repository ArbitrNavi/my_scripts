<?php
include "functions.php";
include "database/QueryBuilder.php";

$pdo = connectionBD();
$db = new QueryBuilder();
$posts = $db->getAllPosts($pdo);

include "index.view.php";
?>