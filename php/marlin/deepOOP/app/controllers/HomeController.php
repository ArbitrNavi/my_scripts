<?php

namespace App\controllers;

use App\QueryBuilder;
use Aura\SqlQuery\Exception;
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
		$this->withdraw($vars);
		echo $this->templates->render('about', ['name' => 'Artur']);
	}

	public function withdraw($amount = 1) {
		$total = 10;

		try{
			$this->withdraw($vars['amount']);
		} catch (
			flash()->error($exeption->)
		)
		if ($amount > $total) {
			throw new Exception("Недостаточно средств");
		}
	}
}

