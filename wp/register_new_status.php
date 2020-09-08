<?php 
// регистрирует новый статус для записи
function true_status_custom(){
	register_post_status( 'archive', array(
		'label'                     => 'Архив',
		'label_count'               => _n_noop( 'Архив <span class="count">(%s)</span>', 'Архивы <span class="count">(%s)</span>' ),
		'public'                    => true,
		'show_in_admin_status_list' => true // если установить этот параметр равным false, то следующий параметр можно удалить
	) );
}
add_action( 'init', 'true_status_custom' );

// добавляем на страницу редактирования
function true_append_post_status_list(){
	global $post;
	$optionselected = '';
 	$statusname = '';
	if( $post->post_type == 'post' ){ // если хотите, можете указать тип поста, для которого регистрируем статус, а можете и вовсе избавиться от этого условия
		if($post->post_status == 'archive'){ // если посту присвоен статус архива
			$optionselected = ' selected="selected"';
			$statusname = "$('#post-status-display').text('Архивировано');";
		}
		/*
		 * Код jQuery мы просто выводим в футере
		 */
		echo "<script>
		jQuery(function($){
			$('select#post_status').append('<option value=\"archive\"$optionselected>Архив</option>');
			$statusname
		});
		</script>";
	}
}
add_action('admin_footer-post-new.php', 'true_append_post_status_list'); // страница создания нового поста
add_action('admin_footer-post.php', 'true_append_post_status_list'); // страница редактирования поста

// метка
function true_status_display( $statuses ) {
	global $post;
	if( get_query_var( 'post_status' ) != 'archive' ){ // проверка, что мы не находимся на странице всех постов данного статуса
		if($post->post_status == 'archive'){ // если статус поста - Архив
			return array('Архив');
		}
	}
	return $statuses;
}
 
add_filter( 'display_post_states', 'true_status_display' );
 ?>