<?php
//https://wp-kama.ru/handbook/codex/hooks
//Добавил фильтр к фильтру

//Исходный вариант из tablepress

$name_html_tag = apply_filters( 'tablepress_print_name_html_tag', 'h3', $this->table['id'] )

// применил фильтр
add_filter( 'tablepress_print_name_html_tag', 'tablepress_print_name_html_tag_function', 10, 1 );
function tablepress_print_name_html_tag_function( $str ){
	$str = 'h5';
	return $str;
}

//теперь вместео h3 будет h5
?>