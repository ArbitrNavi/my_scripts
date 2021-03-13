<?php
/*
Template Name: page_remove_posts
*/

//Удаление записей по ссылкам

$links_string = "
https://tz-video.ru/dogovor-na-okazanie-uslug-videosemki/
https://tz-video.ru/uslugi-i-tsenyi/
https://tz-video.ru/fotograf/
";

//var_dump($links_string);

$links_arr = explode(PHP_EOL, $links_string);//массив со ссылками
$links_arr = array_diff($links_arr, array(''));//удаляем пустые элементы

echo "<pre>";
var_dump($links_arr);

$i=1;
foreach ($links_arr as $item) {//перебор массива
    unset($postid, $post_delete);//очистить переменную
    $postid = url_to_postid( $item );//получить id по ссылке
    $post_delete = wp_delete_post($postid);//удалить пост по id
    echo $i . ') ' . $item . ' - ' . $postid . ' - ' . $post_delete . '<br>';
    $i++;
};

echo "</pre>";
?>