<?php
require_once "init.php";
//var_dump($_SESSION);
//unset($_SESSION);
$user = new User();
//$anotherUser = new User(13);

echo "<br>";
echo Session::flash('success');

if ($user->isLoggedIn()) {
	echo "Привет " . $user->data()->username;
	echo '<p><a href="logout.php">Выйти</a></p>';
	echo '<p><a href="update.php">Обновить имя</a></p>';
	echo '<p><a href="changepassword.php">Изменить пароль</a></p>';
} else {
	echo "Не авторизирован!";
	echo '<a href="registration.php">Регистрация</a><br>';
	echo '<a href="login.php">Войти</a>';
}
?>


