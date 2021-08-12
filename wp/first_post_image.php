<?php
//ВЫВОД ПЕРВОЙ КАРТИНКИ С ПОСТА
function first_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    if(empty($first_img)){
        $first_img = "/wp-content/themes/НАЗВАНИЕТЕМЫ/images/noimages.jpg";
// УКАЖИТЕ ПУТЬ К ИЗОБРАЖЕНИЮ, КОТОРОЕ БУДЕТ ВЫВОДИТСЯ ПО УМОЛЧАНИЮ.
    }
    return $first_img;
}
?>