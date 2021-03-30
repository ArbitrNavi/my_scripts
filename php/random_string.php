<?php
//Генерировать случайные строки
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($permitted_chars), 0, 10);
// Output: 54esmdr0qf

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
echo 'video-'.substr(str_shuffle($permitted_chars), 0, 16).'.mp4';
// Output: video-g6swmAP8X5VG4jCi.mp4

?>