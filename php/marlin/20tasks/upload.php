<?php
session_start();
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
	$fileName = $_FILES['file']['name'][$i];
	$tmpName = $_FILES['file']['tmp_name'][$i];
	$arrListFiles[] = [uploadImg($fileName, $tmpName), $fileName];
}

//var_dump($arrListFiles);

$text = "text gallery";
$gallery = json_encode($arrListFiles);
var_dump($gallery);
function connectBD() {
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	$pdo = new PDO("mysql:host=localhost;dbname=marlin_php1;", "root", "", $options);
	return $pdo;
}

$pdo = connectBD();
$sql = "INSERT INTO my_table (text, gallery) VALUES (:text, :gallery)";
$statement = $pdo->prepare($sql);
$statement->execute([
	'text'    => $text,
	'gallery' => $gallery,
]);
$id = $pdo->lastInsertId();
$_SESSION["galleryID"] = $id;


echo "</pre>";

header("Location: task_19.php");

