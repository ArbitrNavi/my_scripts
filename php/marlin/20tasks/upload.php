<?php
echo "<pre>";

var_dump($_FILES);

function uploadImg($fileName, $tmp) {
	// 1. название
	$imgName = $fileName;
	$imgNameInfo = pathinfo($imgName);
	$imgNameType = $imgNameInfo["extension"];
	$newNameImg = uniqid() . "." . $imgNameType;

	// 2. сохранить
	$result = move_uploaded_file($tmp, 'uploads/' . $newNameImg);
	return $result;
}

var_dump($_FILES['file']['name'][0], $_FILES['file']['tmp_name'][0]);
uploadImg($_FILES['file']['name'][0], $_FILES['file']['tmp_name'][0]);


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
