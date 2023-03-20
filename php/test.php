<?php
//echo "<pre>";
//$toReturn = array(
//	0 => array(
//		false,
//		'',
//		'',
//		'',
//	),
//	1 => array(
//		false,
//		'',
//		'',
//		'',
//	),
//
//);
//
//$toReturn += array(
//	2 => array(
//		false,
//		'',
//		'',
//		'2',
//	),
//
//);
////var_dump($toReturn);
//
////$count_item = 0;//начало счетчика
////$col_item = 3;//количество элементов в блоке
////$col_start = '------------ start 1 block <br>'; //Начало блока
////$col_end = '======= end 2 block<br>'; //Конец блока
////
////for ($i = 0; $i < 10; $i++) {
////	if ($count_item === 0) {
////		echo $col_start;
////		$count_item++;
////	} elseif ($count_item === $col_item) {
////		$count_item = 1;
////		echo $col_end . $col_start;
////	} else {
////		$count_item++;
////	}
////
////	echo "test string:  i = $i, count = $count_item <br>";
////}
////echo $col_end;
//
//$array = array(
//	"key1" => "value1",
//	"bool" => "true",
//);
//
////var_dump($array);
////var_dump(array_key_exists("key1",$array));
//
////$string_bool = 'false';
////$string_bool = 'true';
//
//var_dump(filter_var($array["bool"], FILTER_VALIDATE_BOOLEAN));
//var_dump(json_decode($array["bool"]));
//
//$var_text = "text-1";
//$var_text .= "text-2";
//
//var_dump($var_text);
//
////echo date("U");
//if (true && (true || false)) {
//	echo "true";
//} else {
//	echo "false";
//}
//
//
//echo "<hr>";
//$var1 = 'var1';
//
//function testvar() {
//	$var2 = 'var2';
//	print_r($var1);
//	print_r($var2);
//}
//
//testvar();
//
//echo "<hr>";
//echo "<hr>";
//
//function get_num_ending($number, $ending_array) {
//	$number = $number % 100;
//	if ($number >= 11 && $number <= 19) {
//		$ending = $ending_array[2];
//	} else {
//		$i = $number % 10;
//		switch ($i) {
//			case (1):
//				$ending = $ending_array[0];
//				break;
//			case (2):
//			case (3):
//			case (4):
//				$ending = $ending_array[1];
//				break;
//			default:
//				$ending = $ending_array[2];
//		}
//	}
//
//	return $ending;
//}
//
//for ($i = 0; $i < 15; $i++) {
//	echo $i . ' ' . get_num_ending($i, array('занятие', 'занятия', 'занятий'));
//	echo "<br>";
//}
//
//var_dump(is_numeric());
//
//$testBoolean = [];
//
//var_dump($testBoolean);
//var_dump((bool) $testBoolean);
//
//$stringArr = 'Взрослый / Детский: Детский, 2 этап: Название кружка: Студия "Ателье для кукол", Длительность: 120, 3 этап: Выберите ФИО педагога: Лесовая Е.К.';
//$stringArr = explode(',',$stringArr)[1];//разбили строку на массив и выбрали элемент с индексом 1
//$stringArr = substr($stringArr,13); //удалили вначале 13 знаков
//var_dump($stringArr);
//
//var_dump((bool)$noneVar);
//
//var_dump(!empty(null));
//
//
//
//if (false || (!false && !false)){
//	echo "138 true";
//
//}else {
//	echo "141 false";
//}
//
//echo "<hr>";
//
//var_dump((boolean)[]);
//
//
//$arr = array(
//	"index"=> "value",
//	"index2"=> "value2",
//);
//
//print_r($arr);
//$arrACF = array(
//	'key' => 'group_62b2c0acee323',
//	'title' => 'theme Главная страница',
//	'location' => array(
//		array(
//			array(
//				'param' => 'options_page',
//				'operator' => '==',
//				'value' => 'theme_setting',
//			),
//		),
//	),
//	'menu_order' => 0,
//	'position' => 'normal',
//);
//$arrJSON = json_encode($arrACF, JSON_UNESCAPED_UNICODE);
//print_r($arrJSON);
//echo "</pre>";
//
//
//var_dump(false["id"] == "999");
//
//var_dump("      ");
//
//
//echo "<pre>";
//$userGallery = [];
//$userGallery[] = ["63ea0f1bc1659.jpg", "Оригинальное название файла"];
//$userGallery[] = ["63ea0f1bc1652.jpg", "Оригинальное название файла"];
//$userGallery[] = ["63ea0f1bc1619.jpg", "Оригинальное название файла"];
//
//$jsonArr = json_encode($userGallery);
//echo($jsonArr);// insert BD
//echo "<br";
////
//$decodeJsonArray = json_decode($jsonArr);
//var_dump($decodeJsonArray); //select BD
////
////unset($decodeJsonArray[1]);
////var_dump($decodeJsonArray);
////foreach ($decodeJsonArray as $index => $item) {
////	echo "Ключ = " . $index . ", файл = " . $item . "<br>";
////};
//
//$otherJson = '';
//
//var_dump(json_decode($otherJson));
//echo "</pre>";
//}

if (!function_exists('get_pr')) {
	/**
	 * Debug function print_r
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_pr($var, $die = true) {
		echo '<pre>';
		print_r($var);
		echo '</pre>';
		if ($die) {
			die();
		}
	}
}
if (!function_exists('get_vd')) {
	/**
	 * Debug function var_dump
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_vd($var, $die = true) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
		if ($die) {
			die();
		}
	}
}


$linkJivo = '<script src="//code.jivo.ru/widget/Acvps8ENgs" async></script>';

if (strpos($linkJivo, "jivo")) {
	echo "Есть слово";
} else {
	echo "Нет слова";
}

function UR_exists($url = false) {
	if ($url) {
		$headers = get_headers($url);
		return stripos($headers[0], "200 OK") ? true : false;
	}
	return false;
}

var_dump(UR_exists(null));

echo "<br>";

echo __LINE__;

$testArray = array(
		"key1"  => "value1",
		"key12" => "value2",
);

echo "<br>";

//var_dump($testArray->key1);

$startEnd = "<>";

for ($i = 1; $i < 8; $i++) {
	echo "<br>";
	echo $i;

	if ($i % 3 == 0) {
		echo $startEnd;
	}

}
?>
<hr>
<hr>
<hr>

<?php
var_dump($_POST);

$text = "abcd";
var_dump($text[1]);
?>

<form action="" method="post">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>

<?php
function find_second_most_frequent($string) {
	$char_count = array();

	// создаем ассоциативный массив для хранения количества вхождений символов
	for ($i = 0; $i < strlen($string); $i++) {
		$char = $string[$i];
		if (isset($char_count[$char])) {
			$char_count[$char]++;
		} else {
			$char_count[$char] = 1;
		}
	}

	// сортируем массив в обратном порядке по количеству вхождений
	arsort($char_count);

	// возвращаем второй по встречаемости символ
	$keys = array_keys($char_count);
	if (count($keys) > 1) {
		return $keys[1];
	}
	return null;
}

var_dump(find_second_most_frequent("abccdccefffgihhhhhj"));


function roman_to_arabic($roman_numeral) {
	$roman_dict = array(
			'I'  => 1,
			'IV' => 4,
			'V'  => 5,
			'IX' => 9,
			'X'  => 10,
			'XL' => 40,
			'L'  => 50,
			'XC' => 90,
			'C'  => 100,
			'CD' => 400,
			'D'  => 500,
			'CM' => 900,
			'M'  => 1000);
	$result = 0;
	$i = 0;
	while ($i < mb_strlen($roman_numeral)) {
		if (($i + 1 < mb_strlen($roman_numeral)) && (array_key_exists(mb_substr($roman_numeral, $i, 2), $roman_dict))) {
			$result += $roman_dict[mb_substr($roman_numeral, $i, 2)];
			$i += 2;
		} else {
			$result += $roman_dict[mb_substr($roman_numeral, $i, 1)];
			$i += 1;
		}
	}
	return $result;
}

print(roman_to_arabic('MMMCDXIX')); // Output: 1419



function getUserCityByIP($ipAddress, $apiKey) {
	$url = 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address';
	$data = array('ip' => $ipAddress);
	$headers = array(
			'Content-Type: application/json',
			'Authorization: Token ' . $apiKey,
	);
	$options = array(
			'http' => array(
					'method' => 'POST',
					'header' => implode("\r\n", $headers),
					'content' => json_encode($data),
					'ignore_errors' => true,
			),
			'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
			),
	);
	$context = stream_context_create($options);
	$response = file_get_contents($url, false, $context);
	if ($response === false) {
		return null;
	} else {
		$json = json_decode($response, true);
		if (isset($json['location']['data']['city'])) {
			return $json['location']['data']['city'];
		} else {
			return null;
		}
	}
}

?>

