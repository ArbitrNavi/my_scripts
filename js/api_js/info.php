<?php
echo "send mail";

$rdir = str_replace("\\", "/", __DIR__);                    //Root Dir
require $rdir.'/PHPMailer/src/Exception.php';
require $rdir.'/PHPMailer/src/PHPMailer.php';
require $rdir.'/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//
//require './vendor/autoload.php';

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$yourEmail = 'borealiscap@yandex.ru'; // ваш email на яндексе
$password = '!borealiscap!21312'; // ваш пароль к яндексу или пароль приложения

// настройки SMTP
$mail->Mailer = 'smtp';
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $yourEmail; // ваш email - тот же что и в поле From:
$mail->Password = $password; // ваш пароль;
//
//
// формируем письмо

// от кого: это поле должно быть равно вашему email иначе будет ошибка
$mail->setFrom($yourEmail, 'borealiscap');

// кому - получатель письма
$mail->addAddress('it-1ivan@yandex.ru', 'Имя');  // кому

$mail->Subject = 'Проверка';  // тема письма

$mail->msgHTML("<html><body>
				<h1>Проверка связи!</h1>
				<p>Это тестовое письмо.</p>
				</body></html>");

$mail->SMTPDebug = 4;
if ($mail->send()) { // отправляем письмо
    echo 'Письмо отправлено!';
} else {
    echo 'Ошибка: ' . $mail->ErrorInfo;
}
?>