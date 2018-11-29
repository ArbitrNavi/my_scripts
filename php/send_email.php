<?php
// Отправка почты email

// извлекаем пост запросы
$name = $_POST['name'];
$tel = $_POST['phone'];
$email = $_POST['email'];

// убираем спец символы
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

// декодирует любые кодирования
$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);

// убираем отступы вначале и конце
$name = trim($name);
$tel = trim($tel);
$email = trim($email);

// Даные письма
$komy = "Dnis0847@yandex.ru";
$ot_kogo = "info@site.ru";
$tema = "Заявка с сайта";
$content = "Имя:<b>".$name.".</b><br> Телефон: <b>".$tel."</b><br>E-mail: <b>" .$email.".</b><br>"


// если переменные пустые
if (empty($name) || empty($tel)) {
	echo "Отправка сообщения не удалась<hr>";
		exit;
}else{
	// echo "Имя: ".$name;
	// echo "\n\r";
	// echo "Телефон: ".$tel;
	// echo "\n\r";
	// echo "email: ".$email;
	// echo "\n\r";

	// если отправка прошла без проблем
	if (
		// отправка почты
		mail(
			$komy, 
			$tema, 
			$content,
			"From: $ot_kogo\r\nReply-to:$ot_kogo\r\nContent-type:text/html;charset=utf-8\r\n")
	){
	    echo "Заявка успешно отправлена";
		exit; 
	} else { 
	    echo "при отправке сообщения возникли ошибки";
	};
};
?>