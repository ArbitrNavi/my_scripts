<?php

register_nav_menus(
	array(
		'header_1' => 'Шапка 1',
	)
);

function do_excerpt( $string, $word_limit = 30 ) {
	$words = explode( ' ', $string, ( $word_limit + 1 ) );
	if ( count( $words ) > $word_limit ) {
		array_pop( $words );
	}

	return implode( ' ', $words ) . ' ...';
}


add_theme_support( 'post-thumbnails' ); // включаем поддержку миниатюр
set_post_thumbnail_size( 170, 170 ); // задаем размер миниатюрам 250x150

include get_stylesheet_directory() . "/inc/WP_List_Table.php";
include get_stylesheet_directory() . "/inc/workBd.php";


add_action( 'wp_footer', 'add_scripts' ); // приклеем ф-ю на добавление скриптов в футер
if ( ! function_exists( 'add_scripts' ) ) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_scripts() { // добавление скриптов
		if ( is_admin() ) {
			return false;
		} // если мы в админке - ничего не делаем
		wp_enqueue_script( 'main_ajax', get_stylesheet_directory_uri() . '/assets/js/main.js?' . date( "U" ), '', '', true ); // и скрипты шаблона
	}
}


add_action( 'wp_ajax_post_like', 'post_like_callback' );
add_action( 'wp_ajax_nopriv_post_like', 'post_like_callback' );

function post_like_callback() {
	workBd::addData( $_REQUEST["post_ID"], $_REQUEST["post_like"], $_REQUEST["post_dislike"], $_REQUEST["client_IP"] );
	echo "is WORK";
	wp_die();
}


wp_enqueue_script( 'myHandle', 'pathToJS' );

wp_localize_script(
	'myHandle',
	'ajax_obj',
	array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'userIP'  => $_SERVER["REMOTE_ADDR"],
	)
);