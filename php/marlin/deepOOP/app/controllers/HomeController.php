<?php

namespace App\controllers;

use App\QueryBuilder;
use League\Plates\Engine;

class HomeController
{
	private $templates;

	public function __construct() {
		$this->templates = new Engine('../app/views');
	}

	public function index($vars = null) {
		echo $this->templates->render('homepage', ['name' => 'Home']);
	}

	public function about($vars = null) {

		echo $this->templates->render('about', ['name' => 'Artur']);
	}
}

