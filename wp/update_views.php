<?php 
// Добавить +1 к произвольному полю, делал для подсчета просмотров
function update_views($post_id='0'){
	$views = get_field('views',$post_id);
	$views++;
	update_post_meta( $post_id, 'views', $views );
};
?>