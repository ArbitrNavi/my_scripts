<?php
include "functions.php";

$pdo = connectionBD();
$posts = getAllPosts($pdo);
//dd($posts);

include "index.view.php";
?>