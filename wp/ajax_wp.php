<?php // ajax

//добавить переменную myajax.url во фронтенд
add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

	wp_localize_script('jquery', 'myajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  

};

// скрипт ajax
add_action('wp_footer', 'my_action_javascript', 99); // для фронта
function my_action_javascript() {
	?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		var data = {
			action: 'my_action',
			whatever: 1234
		};

		// 'ajaxurl' не определена во фронте, поэтому мы добавили её аналог с помощью wp_localize_script()
		jQuery.post( myajax.url, data, function(response) {
			console.log('Получено с сервера: ' + response);
		});
	});
	</script>
	<?php
}

// обработка WP
add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');

function my_action_callback() {
	$whatever = intval( $_POST['whatever'] );

	echo $whatever + 10;

	// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();
}; ?>