<?php
// Добавление страницы настроек в тему сайта wordpress с установленным плагином acf pro
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Мобильная версия',
		'menu_slug'  => 'mobile_block',
		'icon_url'   => 'dashicons-smartphone',
	));
};

?>