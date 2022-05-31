<?php
function im_ml_add_jquery_and_my_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style('ivan_mobile_line', plugins_url('ivan_mobile') . '/includes/moduls/mobile_line/assets/css/ivan_mobile_line.css');
}

add_action('wp_footer', 'im_ml_add_jquery_and_my_scripts');
?>