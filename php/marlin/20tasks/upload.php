<?php
echo "<pre>";
var_dump($_POST);

var_dump($_FILES);


// 1. название
// 2. сохранить
$imgName = $_FILES["file"]["name"];
$imgNameInfo = pathinfo($imgName);
$imgNameType = $imgNameInfo["extension"];
$newNameImg = uniqid() . "." . $imgNameType;
var_dump($newNameImg);


$result = move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $newNameImg);
var_dump($result);

echo "</pre>";