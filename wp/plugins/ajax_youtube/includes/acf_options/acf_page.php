<?php
// Добавление страницы настроек в тему сайта wordpress с установленным плагином acf pro
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Шаблонные шорткоды видео',
		'menu_slug'  => 'shortkod_shablon',
		'icon_url'   => 'dashicons-playlist-video',
	));
};

?>