<?php
include_once"functions.php";
$db = include_once"database/start.php";
$id = $_GET["id"];
$post = $db->update("posts",$_POST, $id);

header("Location: index.php");
?>
