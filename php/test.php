<?php
echo "<pre>";
$toReturn = array(
	0 => array(
		false,
		'',
		'',
		'',
	),
	1 => array(
		false,
		'',
		'',
		'',
	),

);

$toReturn += array(
	2 => array(
		false,
		'',
		'',
		'2',
	),

);
//var_dump($toReturn);

//$count_item = 0;//начало счетчика
//$col_item = 3;//количество элементов в блоке
//$col_start = '------------ start 1 block <br>'; //Начало блока
//$col_end = '======= end 2 block<br>'; //Конец блока
//
//for ($i = 0; $i < 10; $i++) {
//	if ($count_item === 0) {
//		echo $col_start;
//		$count_item++;
//	} elseif ($count_item === $col_item) {
//		$count_item = 1;
//		echo $col_end . $col_start;
//	} else {
//		$count_item++;
//	}
//
//	echo "test string:  i = $i, count = $count_item <br>";
//}
//echo $col_end;

$array = array(
	"key1" => "value1",
	"bool" => "true",
);

//var_dump($array);
//var_dump(array_key_exists("key1",$array));

//$string_bool = 'false';
//$string_bool = 'true';

var_dump(filter_var($array["bool"], FILTER_VALIDATE_BOOLEAN));
var_dump(json_decode($array["bool"]));

$var_text = "text-1";
$var_text .= "text-2";

var_dump($var_text);

//echo date("U");
if (true && (true || false)) {
	echo "true";
} else {
	echo "false";
}


echo "<hr>";
$var1 = 'var1';

function testvar() {
	$var2 = 'var2';
	print_r($var1);
	print_r($var2);
}

testvar();

echo "<hr>";
echo "<hr>";

function get_num_ending($number, $ending_array) {
	$number = $number % 100;
	if ($number >= 11 && $number <= 19) {
		$ending = $ending_array[2];
	} else {
		$i = $number % 10;
		switch ($i) {
			case (1):
				$ending = $ending_array[0];
				break;
			case (2):
			case (3):
			case (4):
				$ending = $ending_array[1];
				break;
			default:
				$ending = $ending_array[2];
		}
	}

	return $ending;
}

for ($i = 0; $i < 15; $i++) {
	echo $i . ' ' . get_num_ending($i, array('занятие', 'занятия', 'занятий'));
	echo "<br>";
}

var_dump(is_numeric());

$testBoolean = [];

var_dump($testBoolean);
var_dump((bool) $testBoolean);

$stringArr = 'Взрослый / Детский: Детский, 2 этап: Название кружка: Студия "Ателье для кукол", Длительность: 120, 3 этап: Выберите ФИО педагога: Лесовая Е.К.';
$stringArr = explode(',',$stringArr)[1];//разбили строку на массив и выбрали элемент с индексом 1
$stringArr = substr($stringArr,13); //удалили вначале 13 знаков
var_dump($stringArr);

var_dump((bool)$noneVar);

var_dump(!empty(null));



if (false || (!false && !false)){
	echo "138 true";

}else {
	echo "141 false";
}

echo "<hr>";

var_dump((boolean)[]);


$arr = array(
	"index"=> "value",
	"index2"=> "value2",
);

print_r($arr);
$arrACF = array(
	'key' => 'group_62b2c0acee323',
	'title' => 'theme Главная страница',
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme_setting',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
);
$arrJSON = json_encode($arrACF, JSON_UNESCAPED_UNICODE);
print_r($arrJSON);
echo "</pre>";


var_dump(false["id"] == "999");