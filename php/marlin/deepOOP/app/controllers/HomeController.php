<?php

namespace App\controllers;

use App\exeptions\NotEnoughMoneyException;
use App\QueryBuilder;
use Aura\SqlQuery\Exception;
use League\Plates\Engine;
use Tamtamchik\SimpleFlash\flash;

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
		try {
			$this->withdraw($vars['amount']);
		} catch (NotEnoughMoneyException $exception) {
			flash()->error($exception->getMessage());
		}
		echo $this->templates->render('about', ['name' => 'Artur2']);
	}

	public function withdraw($amount) {
		$total = 10;
		if ($amount > $total) {
			var_dump("Должна быть ошибка");
			var_dump($amount);
			throw new NotEnoughMoneyException("Недостаточно средств");

		}
	}
}

