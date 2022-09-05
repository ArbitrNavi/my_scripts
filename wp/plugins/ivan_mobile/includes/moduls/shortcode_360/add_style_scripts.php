<?php
function shortcode_add_jquery_and_my_scripts() {
	wp_enqueue_style('shortcode_style', plugins_url('ivan_mobile') . '/includes/moduls/shortcode_360/assets/css/shortcode_360.css');
}

add_action('wp_footer', 'shortcode_add_jquery_and_my_scripts');
?>