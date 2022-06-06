<?php
if (get_field('tablepress_style_is_visible', 'options')) {
	require_once plugin_dir_path(__FILE__) . 'add_style_scripts.php';
	require_once plugin_dir_path(__FILE__) . 'setting.php';
}
?>