<?php 
	// правильный способ подключить стили и скрипты
	add_action( 'wp_enqueue_scripts', 'css_p3d' );

	function css_p3d() {
		wp_enqueue_style( 'css_p3d',plugins_url('../assets/css/style.css?1', __FILE__) );
	};
?>