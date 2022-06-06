<?php
// фильтр для заголовков таблицы
add_filter('tablepress_print_name_html_tag', 'tablepress_print_name_html_tag_function', 10, 1);
function tablepress_print_name_html_tag_function($str) {
	$str = 'h3';
	return $str;
}

// фильтр для описания таблицы
add_filter('tablepress_print_description_html_tag', 'tablepress_print_description_html_tag_function', 10, 1);
function tablepress_print_description_html_tag_function($str) {
	$str = 'span';
	return $str;
}

// добавление таблице обертки и контейнера для заголовков
add_filter('tablepress_table_output', 'tablepress_table_output_function', 10, 1);
function tablepress_table_output_function($table) {
	$tablepress__header_tag = 'div';
	$tablepress__header_class = 'tablepress__header';
	$tablepress__header_start = '<' . $tablepress__header_tag . ' class="' . $tablepress__header_class . '">';
	$tablepress__header_end = '</' . $tablepress__header_tag . '>';

	$is_table_name = substr_count($table, '"tablepress-table-name');
	$is_table_description = substr_count($table, '"tablepress-table-description');

	$replacement = $tablepress__header_start . '${0}' . $tablepress__header_end;
	$subject = $table;
	if ($is_table_name && $is_table_description) {
		$pattern = '/^[\W\w]*?<\/span>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} elseif ($is_table_name) {
		$pattern = '/^[\W\w]*?<\/h3>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} elseif ($is_table_description) {
		$pattern = '/^[\W\w]*?<\/span>/i';
		$return_table = preg_replace($pattern, $replacement, $subject);
	} else {
		$return_table = $table;
	}

	$return_table = '<div class="tablepress__wrap test">' . $return_table . '</div>';

	$resoult = $return_table;
	return $resoult;
} ?>