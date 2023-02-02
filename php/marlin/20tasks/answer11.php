<?php
session_start();

$date = date("Y-m-d H:i:s");
$text = "Дата создания arr: " . $date;
$email = $_POST["email"];

$arrData = [
	'text'  => $text,
	'email' => $email,
];

$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "");

//добавить запись в БД
//$sql = "INSERT INTO my_table (text, email) VALUES (:text, :email)";
//$statement = $pdo->prepare($sql);
//$statement->execute($arrData);


//получить все записи из бд
$statement = $pdo->prepare("SELECT * FROM my_table"); //ЗАПРОС SELECT
$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
$users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER

//echo "<pre>";
//var_dump($email);
//print_r($users);
//echo "</pre>";


//получить нужную выборку
$statement = $pdo->prepare("SELECT * FROM my_table WHERE email=:email");
$statement->execute(["email" => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);


echo "пользователи с текущим email: " . $email . "<br>";

//есть ли текущий элемент в БД
if ($user) {
	$textInfo = "пользователь уже существует " . $email;
	$userStatus = false;
	$_SESSION["isAddUser"] = false;
} else {
	$textInfo = "создали нового пользователя" . $email;

	$sql = "INSERT INTO my_table (text, email) VALUES (:text, :email)";
	$statement = $pdo->prepare($sql);
	$statement->execute($arrData);
	$userStatus = true;
	$_SESSION["isAddUser"] = true;

}

echo $textInfo;


var_dump($_SESSION);


$_SESSION["addUser"][] = [
	"email"      => $email,
	"userStatus" => $userStatus,
];

header('Location: /20tasks/task_11.php');