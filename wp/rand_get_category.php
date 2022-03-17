<?php
//Получение случайных категорий
$catID = get_the_category()[0]->term_id;//id текущей категории

//фильтр категорий
$categories = get_categories([
	'taxonomy'     => 'category',
	'type'         => 'post',
	'child_of'     => 0,
	'parent'       => '',
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => $catID,
	'include'      => '',
	'number'       => '',
	'pad_counts'   => false,
]);

shuffle($categories);// смешиваем все категории
$categories = array_slice($categories, 0, 5);// обрезаем количество до 5
?>