<?php

// Преоброзовать строку в дату
$string = '05/07/2015'; // наша дата в string
$format = 'd/m/Y'; // формат даты

$date = DateTime::createFromFormat($format, $string); // получаем объект datetime

// Вывод даты в нужном формате
$dateFormat = $date->format('d.m.Y');
echo $dateFormat; //12.08.2020
?>