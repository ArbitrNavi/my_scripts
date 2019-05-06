<?php 
// тайтл тукущей страницы, записи, категории
function site_h1(){
	if (is_category()) {
		echo single_cat_title();
	}elseif (is_single()) {
		$url = $_SERVER['REQUEST_URI'];
		$postid = url_to_postid($url);
		echo get_the_title( $postid );
	}elseif (is_front_page()) {
		the_field('title_block_video','options');
	}elseif (is_page()) {
		$url = $_SERVER['REQUEST_URI'];
		$postid = url_to_postid($url);
		echo get_the_title( $postid );
	}elseif (is_404()) {
		echo "Страница не найдена";
	};
};
?>