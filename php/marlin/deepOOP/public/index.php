<?php
require_once "../vendor/autoload.php";

//if ($_SERVER['REQUEST_URI'] == '/php/marlin/deepOOP/public/home') {
//	require '../app/controlles/homepage.php';
//}

// Create new Plates instance
$templates = new League\Plates\Engine('../app/views');

//d($templates);
// Render a template
echo $templates->render('homepage', ['name'=>'Artur']);
//echo $templates->render('about', ['name'=>'Artur']);
