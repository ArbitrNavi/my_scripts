<?php
//Удалить старые ссылки на записях, нужно авторизоваться и в названии сайта добавить remove_wp_old_slug
if (isset($_GET['remove_wp_old_slug']) && is_user_logged_in()) {
	$allposts = get_posts('numberposts=-1&post_type=post&post_status=any');

	foreach ($allposts as $postinfo) {
		delete_post_meta($postinfo->ID, '_wp_old_slug');
	}
} ?>

