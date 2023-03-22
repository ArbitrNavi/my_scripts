<?php

namespace App\controllers;

use App\QueryBuilder;
use League\Plates\Engine;

class HomeController
{
	private $templates;

	public function __construct() {
		//		$this->templates = new Engine('../app/views');
		$this->templates = '123';
	}

	public function index($vars = null) {
		var_dump($this->templates);

		$templates = new Engine('../app/views');
		echo $templates->render('homepage', ['name' => 'Artur']);
		//echo $this->templates->render('homepage', ['name' => 'Artur']);
	}

	public function about($vars = null) {
		echo $this->templates->render('about', ['name' => 'Artur']);
	}
}

