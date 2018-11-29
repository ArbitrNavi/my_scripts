<?php 
/* код необходимо вставить в fynctions.php */
/* Дополнительные сортируемые колонки для постов в админке 
------------------------------------------------------------------------ */
// создаем новую колонку
add_filter('manage_submissions_posts_columns', 'add_submissions_column', 4);
function add_submissions_column( $columns ){
	// удаляем колонку Автор, теги, комментарии
	unset($columns['author']);
	unset($columns['tags']);
	unset($columns['comments']);


	$num = 3; // после какой по счету колонки вставлять новые

// создаем новые колонки
	$new_columns = array(
			'email' => 'email',
			'phone' => 'phone',
			'request' => 'request',
			'date_form' => 'date_form',
			'type' => 'type',
			'number_guests' => 'number_guests',
			'subscribe' => 'subscribe'
	);
	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );

};

// заполняем колонку данными -  wp-admin/includes/class-wp-posts-list-table.php
// даныне берем из произвольных полей
add_filter('manage_submissions_posts_custom_column', 'fill_views_column', 5, 2);
function fill_views_column( $colname, $post_id ){
	if( $colname === 'email' ){
		echo get_post_meta($post_id, 'email', 1);
	}

	if( $colname === 'phone' ){
		echo get_post_meta($post_id, 'phone', 1);
	}

	if( $colname === 'request' ){
		echo get_post_meta($post_id, 'request', 1);
	}

	if( $colname === 'date_form' ){
		echo get_post_meta($post_id, 'date', 1);
	}

	if( $colname === 'type' ){
		echo get_post_meta($post_id, 'type', 1);
	}

	if( $colname === 'number_guests' ){
		echo get_post_meta($post_id, 'number_guests', 1);
	}

	if( $colname === 'subscribe' ){
		echo get_post_meta($post_id, 'subscribe', 1);
	}
}

// подправим ширину колонки через css
// add_action('admin_head', 'add_submissions_column_css');
// function add_submissions_column_css(){
// 	if( get_current_screen()->base == 'edit')
// 		echo '<style type="text/css">.column-email{width:10%;}</style>';
// }

// добавляем возможность сортировать колонку
// add_filter('manage_edit-post_sortable_columns', 'add_views_sortable_column');
// function add_views_sortable_column($sortable_columns){
// 	$sortable_columns['email'] = 'views_views';

// 	return $sortable_columns;
// }
 ?>