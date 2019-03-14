<?php 
// работа с изображениями в wp
add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
// set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150

add_image_size('name-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

 ?>