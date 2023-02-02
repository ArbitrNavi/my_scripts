<?php $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);

$statement = $pdo->prepare("SELECT * FROM my_table"); //ЗАПРОС SELECT

//$statement->execute(); //подготовить запрос

//$users = $statement->fetchAll(PDO::FETCH_ASSOC); //получить ответ от бд

$nameCol2 = "email";
// получить пользователя с id 3
$statement = $pdo->prepare("SELECT {$nameCol2} FROM my_table WHERE id=:nomer");//шаблон запроса
//добавить переменные
$statement->execute([
	"nomer"=>12,
//	"key1" =>'id'
]);

//получить ответ
$users = $statement->fetchAll(PDO::FETCH_ASSOC);




echo "<pre>";
var_dump($users);
echo "</pre>";
?>