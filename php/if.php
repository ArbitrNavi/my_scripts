<?php 
// Оператор if
echo ($age < 18) ? 'Ребенок' : 'Взрослый';

// В PHP 7 был введен новый оператор нулевого коалесцирования (??), который можно использовать в качестве сокращенного обозначения тройного оператора в сочетании с функцией isset().

// Чтобы лучше понять, как это работает, рассмотрим приведенный ниже код. Он извлекает значение $_GET[‘имя’]. Если оно не существует или равно NULL, возвращается ‘anonymous‘.

$name = isset($_GET['имя']) ? $_GET['имя'] : 'anonymous';

$name = $_GET['имя'] ?? 'anonymous';
 ?>