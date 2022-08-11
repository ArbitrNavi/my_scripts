<?php
function tablepress_add_jquery_and_my_scripts() {
	wp_enqueue_style('tablepress_style', plugins_url('ivan_mobile') . '/includes/moduls/shortcode_360/assets/css/shortcode_360.css');
}

add_action('wp_footer', 'tablepress_add_jquery_and_my_scripts');

//function ivan_tablepress_style() {
//	require_once plugin_dir_path(__FILE__) . 'assets/css/tablepress_style_root.php';
//}
//
//add_action('wp_footer', 'ivan_tablepress_style');
?>