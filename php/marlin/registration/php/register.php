<?php session_start();

if (isset($_POST["email"]) || isset($_POST["password"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
} else {
	header('Location: ../page_register.php');
	die();
}

$sqlDataWhere = [
	"email" => $email,
];

$sqlDataInsert = [
	"email"    => $email,
	"password" => $password,
];

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);

$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email"); //ЗАПРОС SELECT
//$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password;"); //ЗАПРОС SELECT
$statement->execute($sqlDataWhere); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
$users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER


if ($users) {
	$is_create_user = false;
} else {
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$statement = $pdo->prepare($sql);
	$statement->execute($sqlDataInsert);

	$is_create_user = true;
}

$_SESSION["is_create_user"] = $is_create_user;


//echo "<pre>";
//echo "POST ";
//var_dump($_POST);
//echo "DB ";
//var_dump($users);
//echo "SESSION ";
//var_dump($_SESSION);
//echo "</pre>";

header('Location: ../page_register.php');
?>