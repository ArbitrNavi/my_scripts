<?php wp_enqueue_script( 'myHandle', 'pathToJS' );

wp_localize_script(
	'myHandle',
	'ajax_obj',
	array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
); ?>