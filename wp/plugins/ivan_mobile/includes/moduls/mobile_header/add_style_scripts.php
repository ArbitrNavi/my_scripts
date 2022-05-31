<?php
function im_mh_add_jquery_and_my_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style('ivan_mobile_header', plugins_url('ivan_mobile') . '/includes/moduls/mobile_header/assets/css/ivan_mobile_header.css');
	wp_enqueue_script('ivan_mobile_header', plugins_url('ivan_mobile') . '/includes/moduls/mobile_header/assets/js/ivan_mobile_header.js', array(), '1.0.0', true);
}

add_action('wp_footer', 'im_mh_add_jquery_and_my_scripts');
?>