<?php 
/**
 * Отключаем srcset и sizes для картинок в WordPress
 */

// Отменяем srcset
// выходим на раннем этапе, этот фильтр лучше чем 'wp_calculate_image_srcset'
add_filter('wp_calculate_image_srcset_meta', '__return_null' );

// Отменяем sizes - это поздний фильтр, но раннего как для srcset пока нет...
add_filter('wp_calculate_image_sizes', '__return_false',  99 );

// Удаляем фильтр, который добавляет srcset ко всем картинкам в тексте записи
remove_filter('the_content', 'wp_make_content_images_responsive' );

// Очищаем атрибуты из wp_get_attachment_image(), если по каким-то причинам они там остались...
add_filter('wp_get_attachment_image_attributes', 'unset_attach_srcset_attr', 99 );
function unset_attach_srcset_attr( $attr ){
	foreach( array('sizes','srcset') as $key )
		if( isset($attr[ $key ]) )    unset($attr[ $key ]);
	return $attr;
}
 ?>