<?php 
// Данный код вставляем в файл functions.php для активного шаблона.

// Суть функции в следующем — если у категории есть родительская категория ($category->category_parent > 0), то задействуем наш код. Получаем данные родительской категории, ее slug и id. Формируем список возможных файлов шаблонов, в том числе и стандартные category-{slug}.php, category-{id}.php, category.php и добавляем к ним еще два возможных варианта — subcategory-{slug}.php и subcategory-{id}.php. 

// locate_template функция делает грязную работу за нас — проверяет наличие файлов из списка, который передали и возвращает полный путь первого найденного. 

// Данный код работает только на 1 уровень подкатегорий. Можно модифицировать код, использовав функцию get_category_parents, но это породит дополнительные запросы к БД и обращениям к файловой системе и рекомендуется к использованию в случае действительной необходимости.

add_action('category_template', 'delfi_load_cat_parent_template');
function delfi_load_cat_parent_template($template) {
    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );
	if($category->category_parent > 0) {
		$templates = array();
			
		if(!is_wp_error($category)) {
			$templates[] = "category-{$category->slug}.php";
		}
		$templates[] = "category-$cat_ID.php";
		
		$parentCategory = get_category($category->category_parent);
		if(!is_wp_error($parentCategory)) {
			$templates[] = "subcategory-{$parentCategory->slug}.php";
			$templates[] = "subcategory-{$parentCategory->term_id}.php";
		}
		
		$templates[] = "category.php";
		$template = locate_template($templates);
	}
    return $template;
}
 ?>