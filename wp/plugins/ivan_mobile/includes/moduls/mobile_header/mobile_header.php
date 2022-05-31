<?php if (get_field('mobile_menu_is_visible', 'options')) {
	require_once plugin_dir_path(__FILE__) . 'add_style_scripts.php';

	function ivan_mobile_header() {
		require_once plugin_dir_path(__FILE__) . 'template.php';
	}

	add_action('wp_footer', 'ivan_mobile_header');
}
?>