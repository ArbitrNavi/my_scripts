<?php

/*
Plugin Name: Smart Small Social
Description: Smart Small Social - набор инструментов для работы с социальными сетями. Плагин прост в использовании и не грузит вашу систему управления.
Author: Indik
Version: 0.1
*/

define('INCLUDES_PATH', 'includes/');
define('STYLES_URL', plugin_dir_url(__FILE__) .'assets/styles/');
define('LIBRARIS_URL', plugin_dir_url(__FILE__) .'assets/libraris/');

if(is_admin()){
	require_once INCLUDES_PATH .'castomizer.php';
}
else{
	require_once INCLUDES_PATH .'social.class.php';

	new SS_Social();
}

?>