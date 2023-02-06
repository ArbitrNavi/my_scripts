<?php session_start();
include_once "functions.php";
if ( arrayValue($_POST, "email") === 'null' || arrayValue($_POST, 'password') === 'null') {
	redirect('../page_register.php');
	die();
} else {
	$email = $_POST["email"];
	$password = $_POST["password"];
}

$sqlDataWhere = [
	"email" => $email,
];

$pdo = connectBD();

$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email"); //ЗАПРОС SELECT
//$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password;"); //ЗАПРОС SELECT
$statement->execute($sqlDataWhere); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
$users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER


if ($users) {
	$_SESSION["is_create_user"] = false;

	redirect('/page_register.php');
} else {
	add_user($email, $password);

	$_SESSION["is_create_user"] = true;

	redirect('/page_login.php');
}



//echo "<pre>";
//echo "POST ";
//var_dump($_POST);
//echo "DB ";
//var_dump($users);
//echo "SESSION ";
//var_dump($_SESSION);
//echo "</pre>";

?>