<?php
$db = include_once projectDir() . "/database/start.php";
$posts = $db->getAll("posts");
include_once projectDir() . "/index.view.php";
?>