<?php 
// получить ссылку на ютуб видео при сохранении в поле "медиа" acf
function get_src_acf_media($post_id='0', $meta_key){
	// получим HTML iframe
	$iframe = get_field($meta_key, $post_id);
	// используем preg_match чтобы найти iframe src
	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];

	return $src;
};
 ?>