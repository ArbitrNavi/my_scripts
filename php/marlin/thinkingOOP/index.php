<?php
include "functions.php";
$db = include "database/start.php";
$posts = $db->getAll("posts");

$routes = [
	"/"      => "functions/homepage.php",
	"/about" => "functions/about.php",
];

$route = $_SERVER["REQUEST_URI"];

if (array_key_exists($route, $routes)) {
	include $routes[$route];
} else {
	dd(404);
}

//include "index.view.php";
?>