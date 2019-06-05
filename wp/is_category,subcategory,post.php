<?php

// определяем родительскую категорию
// Если нужно определить есть ли у данной категории где-то в родителях категория с ид 3, или же у какой-то из категорий записи есть в родителях категория с ид 3

// В functions.php добавляем:
// РАБОТАЕТ
 if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
};


// НЕ ПРОВЕРЯЛ
$cat_ans_id = 3;
if (cat_is_ancestor_of($cat_ans_id, $cat) || is_category($cat_ans_id) || in_category($cat_ans_id) || post_is_in_descendant_category($cat_ans_id)):
// ЕСЛИ ГДЕ-ТО В РОДИТЕЛЯХ ЕСТЬ КАТЕГОРИЯ 3
 endif; 


//Если это нужно определять только для страниц категорий, то в functions.php ничего добавлять не надо, а определить можно так:
if (cat_is_ancestor_of(3, $cat) or is_category(3)): 
// ЕСЛИ ГДЕ-ТО В РОДИТЕЛЯХ ЕСТЬ КАТЕГОРИЯ 3
endif; 

// Если нужно определять только на странице записи, то нужно добавить в functions.php то что писал выше, и определять так:
if (in_category(3) || post_is_in_descendant_category(3)) {
// ЕСЛИ ГДЕ-ТО В РОДИТЕЛЯХ ЕСТЬ КАТЕГОРИЯ 3
};

?>