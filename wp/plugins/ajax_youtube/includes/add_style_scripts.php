<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'css_youtube', plugins_url('ajax_youtube') . '/assets/css/gallery.css?2' );
	wp_enqueue_script( 'youtube_gallery', plugins_url('ajax_youtube') . '/assets/js/youtube_gallery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'gm_lazy', plugins_url('ajax_youtube') . '/assets/js/gm_lazy.js', array(), '1.0.0', true );
}
 ?>