<?php
/*
Template Name: page_remove_posts
v 1.2
*/

//Удаление записей по ссылкам
get_header();

//Вставить ссылки в эту переменную, потом построчно сама разобьет
$links_string = "

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

    echo '<tr><td>' . $i . ') </td><td style="max-width:500px;word-break:break-all;">' . $item . '</td><td>' . $resoult_post_delete . '</td></tr>';
    $i++;
};

echo "</table>";

get_footer();
?>