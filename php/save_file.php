<?php 
// Сохранение файлов, в том числе и картинок
// будет работать если в php.ini параметр allow_url_fopen равен 1:
	$url = 'http://img.yandex.net/i/www/logo.png';
	$path = 'logo.png';
	file_put_contents($path, file_get_contents($url));
?>