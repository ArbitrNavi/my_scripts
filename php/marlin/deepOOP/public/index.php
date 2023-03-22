<?php
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

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
	$r->addRoute('GET', '/php/marlin/deepOOP/public/users', ['App\controllers\HomeController', 'index']);
	// {id} must be a number (\d+) //user/1
	$r->addRoute('GET', '/php/marlin/deepOOP/public/user/{id:\d+}', 'get_user_handler');
	// The /{title} suffix is optional
	$r->addRoute('GET', '/php/marlin/deepOOP/public/articles/{id:\d+}[/{title}]', 'get_article_handler');
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
		$vars[]="123ASDF";

		//		d($handler[0]);

		call_user_func([$handler[0], $handler[1]], $vars);

//		$controller = new $handler[0];
//		$controller->index();
		break;
}

function get_all_users_handler() {
	echo "Вы на странице пользователей";
}

function get_user_handler() {}