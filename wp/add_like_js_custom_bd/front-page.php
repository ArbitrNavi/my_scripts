<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header(); ?>
	<div class="wrap">

		<main>
			<section class="section-content">
				<p class="title">Статьи</p>

				<div class="category-posts">
					<div class="category-posts__posts">
						<?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								?>
								<div class="category-posts__posts post-line">
									<div class="post-line__thumb">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thumb.jpg" alt="">
										<?php }; ?>
									</div>
									<div class="post-line__info">
										<a href="<?php the_permalink(); ?>" class="post-line__title"><?php the_title() ?></a>
										<p class="post-line__excerpt"><?php echo do_excerpt( get_the_content(), 5 ); ?></p>
										<div class="post-line__footer">
											<p class="post-line__author">Автор: <span><?php the_author() ?></span></p>
											<div class="rating post-line__rationg" data-postID="<?php the_ID(); ?>">
												<a href="#" data-like="like" class="rating__edit rating__edit_up">+</a>
												<span class="rating__total"><?php echo workBd::getPostLike(get_the_ID()) ?></span>
												<a href="#" data-like="dislike" class="rating__edit rating__edit_down">-</a>
											</div>
										</div>
									</div>
								</div>

								<?php
							}
						} // постов нет
						else {
							echo "<h2>Записей нет.</h2>";
						}

						?>
					</div>

					<div class="category-posts__pagination pagination">
						<?php echo paginate_links(
								array(
										'prev_text' => '&larr; Назад',
										'next_text' => 'Вперед &rarr;',
								)
						); ?>
					</div>
				</div>


			</section>
			<nav class="sidebar">
				<p class="title">Sidebar</p>
			</nav>
		</main>

	</div>
<?php get_footer();