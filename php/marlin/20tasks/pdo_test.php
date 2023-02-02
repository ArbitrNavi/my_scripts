<?php $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);

$statement = $pdo->prepare("SELECT * FROM my_table"); //ЗАПРОС SELECT
$statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ
$users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER

echo "<pre>";
var_dump($users);
echo "</pre>";
?>