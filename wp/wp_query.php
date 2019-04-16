<?php // задаем нужные нам критерии выборки данных из БД
$args = array(
	'posts_per_page' => 5,
	'orderby' => 'comment_count'
);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
} else {
	// Постов не найдено
}
// Возвращаем оригинальные данные поста. Сбрасываем $post.
wp_reset_postdata();
 ?>