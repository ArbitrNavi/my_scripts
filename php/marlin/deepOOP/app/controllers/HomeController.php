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
		$db = new QueryBuilder();
				$posts = $db->getAll('posts');
		echo $this->templates->render('homepage', ['postInView' => $posts]);
	}

	public function about($vars = null) {

		echo $this->templates->render('about', ['name' => 'Artur']);
	}
}

