<?php 
// Добавление страницы настроек в тему сайта wordpress с установленным плагином acf pro
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Панорама 3D',
		'menu_title'	=> 'Панорама 3D',
		'menu_slug' 	=> 'panorama_3d',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));
	
};

?>