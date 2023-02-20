<?php
include_once projectDir() . "/functions.php";
$db = include_once projectDir() . "/database/start.php";
$id = $_GET["id"];
$post = $db->getOne("posts", $id);
?>

<h1><?php echo $post["title"]; ?></h1>