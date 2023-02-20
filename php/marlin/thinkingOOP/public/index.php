<?php
include "../functions.php";
$routes = [
	"/"       => "index.php",
	"/about"  => "functions/about.php",
	"/edit"   => "edit.php",
	"/create" => "create.php",
	"/show"   => "show.php",
];

$route = $_SERVER["REQUEST_URI"];

if (array_key_exists($route, $routes)) {
	include "../" . $routes[$route];
} else {
	echo(404);
}
?>