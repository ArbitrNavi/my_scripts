<?php
include_once "../functions.php";
$routes = [
	"/home"   => "functions/homepage.php",
	"/about"  => "functions/about.php",
	"/edit"   => "edit.php",
	"/create" => "create.php",
	"/show"   => "show.php",
];

$route = $_SERVER["REQUEST_URI"];
//dd($route);
//dd(projectDir());

if (array_key_exists($route, $routes)) {
	include_once "../" . $routes[$route];
} else {
//	include_once "../" . $routes["/home"];
		echo("Вы ввели несуществующий адресс");
}
?>