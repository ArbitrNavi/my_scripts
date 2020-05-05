<?php 
// Ставим 404 ответ на мусорные страницы, определяемые по get запросу
add_action('init', 'ajax_auth_init');
function ajax_auth_init()
{
if(is_user_logged_in()) return;
	if(
		isset($_GET['p']) || 
		isset($_GET['C']) ||
		isset($_GET['elementor-preview']) ||
		isset($_GET['elementor_library'])
	) 
	{ 
		wp_redirect( home_url( '/404/' ) );
	    exit(); 
	};
};

?>