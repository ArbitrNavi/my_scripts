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
$countElements = 120;
for ($i = 1; $i <= $countElements; $i++) {
	$arrPosts[$i] = [];
}

function perebor($arrPosts = false, $countLinks = 4) {
	if ($arrPosts) {
		foreach ($arrPosts as $index => $item) {
			$arrPostsLinks[$index] = ["ids" => [], "repeat" => 0,];
		}

		$i = 0;
		foreach ($arrPosts as $idParent => $arrPost) {
			$numberElement = 0;

			foreach ($arrPosts as $idChild => $arrPost2) {
				if (count($arrPostsLinks[$idParent]["ids"]) < $countLinks) {
					if ($i <= $countLinks) {  // 3 < 4 начальный перебор
						if ($idParent <> $idChild) {
							if ($arrPostsLinks[$idChild]["repeat"] < $countLinks) {
								$arrPostsLinks[$idChild]["repeat"]++;
								$arrPostsLinks[$idParent]["ids"][] = $idChild;
							}
						}
					} elseif ($numberElement < $countLinks) { //3 > 4 смешивание
						$thisId = $arrPostsLinks[$idChild]["ids"][$numberElement];
						if (in_array($thisId, $arrPostsLinks[$idParent]["ids"])) {
						} else {
							$arrPostsLinks[$idChild]["ids"][$numberElement] = $idParent;//заменил значение
							$arrPostsLinks[$idParent]["ids"][$numberElement] = $thisId;//добавил значение
							$arrPostsLinks[$idParent]["repeat"]++;
							$numberElement++;
						}
					}
				}
			}
			$i++;
		}
		return $arrPostsLinks;
	} else {
		return false;
	}
}

//get_vd($arrPosts);
get_pr(perebor($arrPosts, 4));
