<?php
echo "<pre>";

var_dump($_FILES);

function uploadImg($fileName, $tmp) {
	// 1. название
	$imgName = $fileName;
	$imgNameInfo = pathinfo($imgName);
	$imgNameType = $imgNameInfo["extension"];
	$newNameImg = uniqid() . "." . $imgNameType; //63ea0f1bc1659.jpg

	// 2. сохранить
	$result = move_uploaded_file($tmp, 'uploads/' . $newNameImg);
	if ($result) {
		$result = $newNameImg;
	}
	return $result;
}

$arrListFiles = [];
$countArrayFiles = count($_FILES['file']['name']);//3
for ($i = 0; $i < $countArrayFiles; $i++) {
	//	var_dump($_FILES['file']['name'][$i], $_FILES['file']['tmp_name'][$i]);
	$fileName = $_FILES['file']['name'][$i];
	$tmpName = $_FILES['file']['tmp_name'][$i];
	$arrListFiles[] = uploadImg($fileName, $tmpName);
}


var_dump($arrListFiles);
echo "</pre>";


//array(1) {
//	["file"]=>
//  array(5) {
//		["name"]=>
//    string(41) "al-elmes-ulhxwq8reao-unsplash-scaled.jpeg"
//		["type"]=>
//    string(10) "image/jpeg"
//		["tmp_name"]=>
//    string(45) "/Applications/XAMPP/xamppfiles/temp/phpSE8pfF"
//		["error"]=>
//    int(0)
//	["size"]=>
//    int(354978)
//  }
//}

//array(1) {
//	["file"]=>
//  array(5) {
//		["name"]=>
//    array(1) {
//			[0]=>
//      string(41) "al-elmes-ulhxwq8reao-unsplash-scaled.jpeg"
//    }
//    ["type"]=>
//    array(1) {
//			[0]=>
//      string(10) "image/jpeg"
//    }
//    ["tmp_name"]=>
//    array(1) {
//			[0]=>
//      string(45) "/Applications/XAMPP/xamppfiles/temp/phpLrQCj9"
//    }
//    ["error"]=>
//    array(1) {
//			[0]=>
//      int(0)
//    }
//    ["size"]=>
//    array(1) {
//			[0]=>
//      int(354978)
//    }
//  }
//}
