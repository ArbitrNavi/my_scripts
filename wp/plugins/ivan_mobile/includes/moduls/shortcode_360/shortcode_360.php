<?php
require_once plugin_dir_path( __FILE__ ) . 'add_style_scripts.php';

// регистринуем размер изображений
add_image_size( '480x241', 480, 241, true );
require_once plugin_dir_path( __FILE__ ) . 'setting.php';
?>