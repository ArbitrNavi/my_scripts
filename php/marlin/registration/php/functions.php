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


function connectBD() {
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);
	return $pdo;
}

function redirect($redirect) {
	header("Location: {$redirect}");
	exit;
}

function add_user($email, $password) {
	if (!isExistsEmail($email)) {
		$pdo = connectBD();
		$sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
		$statement = $pdo->prepare($sql);
		$statement->execute([
			'email'    => $email,
			'password' => $password,
		]);
		$id = $pdo->lastInsertId();

		return $id;
	}
	return false;
}

function flesh_message($name, $message) {
	$_SESSION[$name] = $message;
}

function login($email, $password) {
	$pdo = connectBD();
	$sql = "SELECT email FROM users WHERE email=:email AND password=:password";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email' => $email, 'password' => $password]);
	$user = $statement->fetch(PDO::FETCH_ASSOC);


	if ($user) {
		$mysql = 'SELECT * FROM users WHERE email=:email';
		$stat = $pdo->prepare($mysql);
		$stat->execute(['email' => $email]);
		$user = $stat->fetch(PDO::FETCH_ASSOC);
		$_SESSION['user'] = $user;
		//		var_dump($_SESSION['user']);
		redirect('../users.php');

		exit();
	} else {
		flesh_message('incorrect', 'Неверный логин или пароль');
		redirect('../page_login.php');
		exit();
	}
}

function isExistsEmail($email) {
	$pdo = connectBD();
	$sql = "SELECT email FROM users WHERE email=:email";
	$statement = $pdo->prepare($sql);
	$statement->execute(['email' => $email]);
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	return $result;
}


function get_users() {
	$pdo = connectBD();
	$sql = "SELECT * FROM users";
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$users = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $users;
}

function log_in() {
	$_SESSION["user"] = [
		"id"    => 1,
		"name"  => "admin",
		"email" => "admin@test.loc",
	];
}

log_in();

function thisUser() {
	if (isLogin()) {
		return $_SESSION["user"];
	}
	return false;
}

function isCurrentUser($user) {
	if (thisUser()["id"] == $user["id"]) {
		return true;
	}
	return false;
}

function isAdmin() {
	if (isLogin() && thisUser()["id"] == "1") {
		return true;
	}
	return false;
}

function log_out() {
	unset($_SESSION["user"]);
}

function isLogin() {
	if (isset($_SESSION["user"])) {
		return true;
	}
	return false;
}

function is_not_login() {
	return !isLogin();
}

function setUserField($userID = false, $field = false, $value = null) {
	if ($userID && $field) {
		$arrSQL = [
			"id"    => $userID,
			"value" => $value
		];
		$pdo = connectBD();

		$sql = "UPDATE users SET {$field}=:value WHERE id=:id";

		$statement = $pdo->prepare($sql);
		$result = $statement->execute($arrSQL);

		return $result;
	} else {
		return false;
	}
}

function getUserField($userID = false, $field = false) {
	if ($userID && $field) {
		$arrSQL = [
			"id" => $userID,
		];

		$pdo = connectBD();
		$sql = "SELECT {$field} FROM users WHERE id=:id";
		$statement = $pdo->prepare($sql);
		$statement->execute($arrSQL);

		$thisField = $statement->fetchAll(PDO::FETCH_ASSOC);
		$thisField = $thisField[0][$field];

		return $thisField;
	} else {
		return false;
	}
}