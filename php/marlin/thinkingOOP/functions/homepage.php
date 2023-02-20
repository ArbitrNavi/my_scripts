<?php
include_once "../functions.php";
$db = include_once "../database/start.php";
$posts = $db->getAll("posts");
include "../index.view.php";
?>