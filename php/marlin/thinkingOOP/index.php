<?php
include "functions.php";
include "database/QueryBuilder.php";
include "database/Connection.php";

$connection = new Connection();
$pdo = $connection->make();

$db = new QueryBuilder($pdo);
$posts = $db->getAllPosts();

include "index.view.php";
?>