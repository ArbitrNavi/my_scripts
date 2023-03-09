<?php
//Чтобы добавить колонку с датой изменения для произвольного типа записи на странице `edit.php` в админке WordPress и добавить сортировку по этой дате, необходимо выполнить следующие шаги:

function add_custom_column_head($columns) {
	$columns['modified_date'] = 'Modified Date';
	return $columns;
}
add_filter('manage_edit-faq_columns', 'add_custom_column_head'); // замените "your-post-type" на название вашего произвольного типа записи

function add_custom_column_content($column_name, $post_id) {
	if ($column_name == 'modified_date') {
		echo get_the_modified_time('d.m.Y H:i:s', $post_id);
	}
}
add_action('manage_faq_posts_custom_column', 'add_custom_column_content', 10, 2); // замените "your-post-type" на название вашего произвольного типа записи

function add_custom_column_sortable($columns) {
	$columns['modified_date'] = 'modified_date';
	return $columns;
}
add_filter('manage_edit-faq_sortable_columns', 'add_custom_column_sortable'); // замените "your-post-type" на название вашего произвольного типа записи

function custom_column_orderby($query) {
	if (!is_admin()) {
		return;
	}

	$orderby = $query->get('orderby');

	if ($orderby == 'modified_date') {
		$query->set('orderby', 'modified');
	}
}
add_action('pre_get_posts', 'custom_column_orderby');
