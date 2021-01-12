<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage this_my_theme
 */
get_header(); // подключаем header.php ?> 
<section>
	<div class="container">
		<div class="row">
			<div class="">
				<h1><?php printf('Поиск по строке: %s', get_search_query()); // заголовок поиска ?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>