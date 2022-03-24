<?php 
// работа с изображениями в wp
add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
// set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150

add_image_size('name-thumb', 400, 400, false); // добавляем еще один размер картинкам 400x400 с обрезкой


// добавить возможность выбрать новый размер при вставке в запись
add_image_size('content', 750, 9999);

add_filter( 'image_size_names_choose', 'true_new_image_sizes' );

function true_new_image_sizes( $sizes ) {
	$addsizes = array(
		'content' => 'На всю ширину'
	);
	return array_merge( $sizes, $addsizes );
}
 ?>