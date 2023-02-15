<?php
include "functions.php";
include "database/QueryBuilder.php";

$pdo = connectionBD();
$db = new QueryBuilder($pdo);
$posts = $db->getAllPosts();

include "index.view.php";
?>