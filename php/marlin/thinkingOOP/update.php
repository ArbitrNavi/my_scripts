<?php
include "functions.php";
$db = include "database/start.php";
$id = $_GET["id"];
$post = $db->update("posts",$_POST, $id);

dd($post);
?>
