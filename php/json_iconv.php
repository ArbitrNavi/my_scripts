<?php

$arrJSON = json_encode($arrACF, JSON_UNESCAPED_UNICODE);// JSON code с русскими буквами
/*получение данных через GET запрос, JSON, АССОЦИАТИВНЫЙ МАССИВ, КИРИЛИЦА*/
$data_arr = $_GET['data_arr']; //получили GET
$data_arr=json_decode($data_arr, true); //извлекли массив из JSON

// return iconv("UTF-8", "cp1251",$n);// смена кодировки

// Перебор массива, так как ассоциативный, пришлось использовать для каждого ключа отдельно

foreach ($data_arr['info'] as &$value) {//перебор массива с записыванием новых значений
	$value=iconv("UTF-8", "cp1251",$value); //заменяем кодировку
};

foreach ($data_arr['work'] as &$data_arr_wokr) {//перебор массива с записыванием новых значение
	foreach ($data_arr_wokr as &$value) {//перебор подмассива, так как каждое значение состояло из 4 значений
		$value=iconv("UTF-8", "cp1251",$value);//заменяем кодировку
	};
};
 ?>