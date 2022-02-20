<?php
// Разбивка на блоки в цикле
$count_item = 0;//начало счетчика
$col_item = 2;//количество элементов в блоке
$col_start = '------------ start 1 block <br>'; //Начало блока
$col_end = '======= end 2 block<br>'; //Конец блока

for ($i = 0; $i < 10; $i++) {
	if ($count_item === 0) {
		echo $col_start;
		$count_item++;
	} elseif ($count_item === $col_item) {
		$count_item = 1;
		echo $col_end . $col_start;
	} else {
		$count_item++;
	}

	echo "test string:  i = $i, count = $count_item <br>";
}
echo $col_end;

?>