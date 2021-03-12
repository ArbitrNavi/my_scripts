<?php
//Удаление записей по ссылкам

$links_string = "
https://tz-video.ru/dogovor-na-okazanie-uslug-videosemki/
https://tz-video.ru/uslugi-i-tsenyi/
https://tz-video.ru/fotograf/
";

//var_dump($links_string);

$links_arr = explode(PHP_EOL, $links_string);
$links_arr = array_diff($links_arr, array(''));

echo "<pre>";
var_dump($links_arr);
echo "</pre>";
