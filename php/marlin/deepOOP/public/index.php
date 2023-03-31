<?php

use App\QueryBuilder;
use App\exeptions;

if (!session_id()) {
	session_start();
}

require_once "../vendor/autoload.php";

//if ($_SERVER['REQUEST_URI'] == '/php/marlin/deepOOP/public/home') {
//	require '../app/controlles/homepage.php';
//}

// Create new Plates instance
//$templates = new League\Plates\Engine('../app/views');
//flash()->message("Other text", "success");
//flash()->warning("text warning");
//echo $templates->render('homepage', ['name'=>'Artur']);
//echo $templates->render('about', ['name'=>'Artur']);

//d($_SERVER);
use Illuminate\Support\Arr;

$array = [
	["marlin" => ["course" => "HTML"]],
	["marlin" => ["course" => "PHP"]]
];

$result = Arr::pluck($array, 'marlin.course');
//var_dump($result);

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
	$r->addRoute('GET', '/php/marlin/deepOOP/public/home', ['App\controllers\HomeController', 'index']);
	//	$r->addRoute('GET', '/php/marlin/deepOOP/public/about', ['App\controllers\HomeController', 'about']);
//	$r->addRoute('GET', '/php/marlin/deepOOP/public/about/{amount:\d+}', ['App\controllers\HomeController', 'about']);
	$r->addRoute('GET', '/php/marlin/deepOOP/public/about', ['App\controllers\HomeController', 'about']);
	$r->addRoute('GET', '/php/marlin/deepOOP/public/verification', ['App\controllers\HomeController', 'email_verification']);
	$r->addRoute('GET', '/php/marlin/deepOOP/public/login', ['App\controllers\HomeController', 'login']);
});


// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
	$uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

d($routeInfo);
switch ($routeInfo[0]) {
	case FastRoute\Dispatcher::NOT_FOUND:
		// ... 404 Not Found
		break;
	case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
		$allowedMethods = $routeInfo[1];
		// ... 405 Method Not Allowed
		break;
	case FastRoute\Dispatcher::FOUND:
		$handler = $routeInfo[1];
		$vars = $routeInfo[2];
		$controller = new $handler[0];

		call_user_func([$controller, $handler[1]], $vars);


		break;
}