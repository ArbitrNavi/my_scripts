<?php
// конвертер из объекта в массив, поддерживает ассоциативные массивы
//Вы можете быстро преобразовать глубоко вложенные объекты в ассоциативные массивы, опираясь на поведение функций кодирования / декодирования JSON:

$array = json_decode(json_encode($object), true);