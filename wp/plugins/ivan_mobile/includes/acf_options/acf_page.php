<?php
// Добавление страницы настроек в тему сайта wordpress с установленным плагином acf pro

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Иван модули',
		'icon_url'   => 'dashicons-universal-access',
		'menu_slug'  => 'ivan__moduls',
		'capability' => 'edit_posts',
		'redirect'   => false
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Мобильная версия',
		'menu_slug'   => 'ivan__mobile_block',
		'parent_slug' => 'ivan__moduls',
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Настройка таблицы(tablepress)',
		'menu_slug'   => 'ivan__tablepress',
		'parent_slug' => 'ivan__moduls',
	));

}

?>