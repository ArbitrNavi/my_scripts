<?php session_start();

$email = "nikolay@test.test3";
$password = "1112";

$sqlData = [
	"email"    => $email,
	"password" => $password,
];

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);

$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password;"); //ЗАПРОС SELECT
$statement->execute($sqlData); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
$users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER


if ($users) {
	$userStatus = false;
} else {
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$statement = $pdo->prepare($sql);
	$statement->execute($sqlData);
	$userStatus = true;

}
$_SESSION["is_create_user"] = $userStatus;


echo "<pre>";
var_dump($users);
var_dump($_SESSION);
echo "</pre>";
?>