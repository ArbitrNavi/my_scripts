<?php

namespace App\controllers;

use App\QueryBuilder;

class HomeController
{

	public function index($vars) {
//		echo "123";
		d($vars);
		exit;
		$db = new QueryBuilder();

		$db->update([
			'title' => 'new poset form query factory package2;'
		], 2, "posts");
	}
}

