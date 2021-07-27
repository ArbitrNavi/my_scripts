<?php

// Преоброзовать строку в дату
$string = '05/07/2015'; // наша дата в string
$format = 'd/m/Y'; // формат даты

$date = DateTime::createFromFormat($format, $string); // получаем объект datetime

// Вывод даты в нужном формате
$dateFormat = $date->format('d.m.Y');
echo "Установленная из строки дата: " .  $dateFormat; //12.08.2020
echo "<hr>";
echo "текущая дата: " . date("d.m.Y");
echo "<hr>";
echo "+30 дней: " . date("d.m.Y", strtotime('+30 day')); //возвращает готовую строку
echo "<hr>";

//возвращает объект даты +30 дней
$data_next = new DateTime();
$data_next->add(new DateInterval('P30D'));
var_dump($data_next);

// Предположим, что текущая дата March 10th, 2001, 5:16:18 pm

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day z ');  // 05-16-17, 10-03-01, 1631 1618 6 Fripm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // It is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 15:16:08 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:17 m is month
$today = date("H:i:s");                         // 17:16:17

?>