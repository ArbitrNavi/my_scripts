<?php
function arrayValue($array, $key = false) {//return null, for none key
	if (array_key_exists($key, $array)) {
		$result = $array[$key];
	} else {
		$result = 'null';
	}

	return $result;
}


//if (arrayValue($_SESSION,"testFalse") === "null") {
//	echo "Данных нет, поэтому ни чего выводить не будет";
//} else {
//	if (arrayValue($_SESSION,"testFalse")) {
//		echo "is TRUE";
//	} else {
//		echo "is FALSE";
//	}
//}


function connectBD(){
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);
	return $pdo;
}

function redirect($redirect)
{
	header("Location: {$redirect}");
	exit;
}

function add_user($email, $password)
{
	$pdo = connectBD();
	$sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
	$statement = $pdo->prepare($sql);
	$statement->execute([
		'email' => $email,
		'password' => $password,
	]);
}


function flesh_message($name, $message)
{
	$_SESSION[$name] = $message;
}

function login($email , $password){
	$pdo = new PDO('mysql:host=localhost;dbname=register','root', '');
	$sql = "SELECT email FROM authUsers WHERE email=:email";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email'=>$email]);
	$mail = $statement->fetch(PDO::FETCH_ASSOC);


	$sq = "SELECT password FROM authUsers WHERE password=:password ";
	$state = $pdo->prepare($sq);
	$state->execute(['password'=>$password]);
	$pass = $state->fetch(PDO::FETCH_ASSOC);


	if (!empty($mail) && !empty($pass)){
		$mysql = 'SELECT * FROM authUsers WHERE email=:email';
		$stat = $pdo->prepare($mysql);
		$stat->execute(['email'=>$email]);
		$user = $stat->fetch(PDO::FETCH_ASSOC);
		$_SESSION['user'] = $user;
		var_dump($_SESSION['user']);
		header('Location: /registerPHP/users.php');

		exit();
	}else{
		$_SESSION['incorrect'] = 'Неверный логин или пароль';
		header('Location: /registerPHP/page_login.php');
		exit();
	}
}

