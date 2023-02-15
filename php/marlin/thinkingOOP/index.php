<?php
include "functions.php";
include "database/QueryBuilder.php";
include "database/Connection.php";

$pdo = Connection::make();

$db = new QueryBuilder($pdo);
$posts = $db->getAllPosts();

include "index.view.php";
?>