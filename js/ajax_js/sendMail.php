<?php
// Отправка почты email

// извлекаем пост запросы
$name = $_POST['name'];
$tel = $_POST['phone'];
$message = $_POST['message'];

// убираем спец символы
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);

// декодирует любые кодирования
$name = urldecode($name);
$tel = urldecode($tel);
$message = urldecode($message);

// убираем отступы вначале и конце
$name = trim($name);
$tel = trim($tel);
$message = trim($message);

// Даные письма
$komy = "silver26ru@gmail.com";
$ot_kogo = "info@dynamicssoft.ru";
$tema = "Поговорим о Вашем проекте?";

$content = "Имя:<b>"
	. $name
	. ".</b><br> Телефон: <b>"
	. $tel . "</b><br>Сообщение: <b>"
	. $message . ".</b><br>";


// если переменные пустые
if (empty($name) || empty($tel)) {
	echo "Отправка сообщения не удалась";
	exit;
} else {
	// echo "Имя: ".$name;
	// echo "\n\r";
	// echo "Телефон: ".$tel;
	// echo "\n\r";
	// echo "message: ".$message;
	// echo "\n\r";

	// если отправка прошла без проблем
	if (
		// отправка почты
	mail(
		$komy,
		$tema,
		$content,
		"From: $ot_kogo\r\nReply-to:$ot_kogo\r\nContent-type:text/html;charset=utf-8\r\n")
	) {
		echo "Заявка успешно отправлена";
		exit;
	} else {
		echo "при отправке сообщения возникли ошибки";
	};
};
?>