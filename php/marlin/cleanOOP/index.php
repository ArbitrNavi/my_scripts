<?php

include_once "Database.php";

$users = Database::getInstance()->query("SELECT * FROM users");
var_dump($users);