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


		echo "<hr>";

		$auth = new \Delight\Auth\Auth($db->pdo);

		try {
			$userId = $auth->register('testone@mail.ru', 'testone', 'testone', function ($selector, $token) {
				echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
				echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
				echo '  For SMS, consider using a third-party service and a compatible SDK';
			});

			echo 'We have signed up a new user with the ID ' . $userId;
		}
		catch (\Delight\Auth\InvalidEmailException $e) {
			die('Invalid email address');
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
			die('Invalid password');
		}
		catch (\Delight\Auth\UserAlreadyExistsException $e) {
			die('User already exists');
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
			die('Too many requests');
		}


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

