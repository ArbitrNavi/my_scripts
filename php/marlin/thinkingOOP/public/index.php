<?php
include "../functions.php";
$routes = [
	"/home"   => "functions/homepage.php",
	"/about"  => "functions/about.php",
	"/edit"   => "edit.php",
	"/create" => "create.php",
	"/show"   => "show.php",
];

$route = $_SERVER["REQUEST_URI"];
//dd($route);

if (array_key_exists($route, $routes)) {
	include "../" . $routes[$route];
} else {
	echo(404);
}
?>