<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'css_youtube', plugins_url('ajax_youtube') . '/assets/css/gallery.css' );
	wp_enqueue_script( 'scripts_youtube', plugins_url('ajax_youtube') . '/assets/js/scripts.js', array(), '1.0.0', true );
}
 ?>