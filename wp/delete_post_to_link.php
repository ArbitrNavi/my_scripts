<?php
/*
Template Name: page_remove_posts
v 1.2
*/

//Удаление записей по ссылкам
get_header();


$links_string = "
https://tz-video.ru/dogovor-na-okazanie-uslug-videosemki/
https://tz-video.ru/uslugi-i-tsenyi/
https://tz-video.ru/fotograf/
https://tz-video.ru/dekoratsii-dlya-fotosessii/
https://tz-video.ru/oborudovanie/
";

$links_arr = explode(PHP_EOL, $links_string);//массив со ссылками
$links_arr = array_diff($links_arr, array(''));//удаляем пустые элементы

echo "<table>";
$i = 1;
foreach ($links_arr as $item) {//перебор массива
    unset($postid, $post_delete);//очистить переменную
    $postid = url_to_postid($item);//получить id по ссылке
    $post_delete = wp_delete_post($postid);//удалить пост по id
    $resoult_post_delete = $post_delete ? 'удалено - ' . $post_delete->ID : 'не удалено или категория';

    echo '<tr><td>' . $i . ')</td><td>' . $item . '</td><td>' . $resoult_post_delete . '</td></tr>';
    $i++;
};

echo "</table>";

get_footer();
?>