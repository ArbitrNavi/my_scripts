<style>
	:root {
		--mobile-padding: <?php echo (get_field('mobile-padding', 'options'))?: "10"; ?>px;
		--mobile-bg: <?php echo (get_field('mobile-bg', 'options'))?: "#308ceb"; ?>;
		--mobile-color: <?php echo (get_field('mobile-color', 'options'))?: "#ffffff"; ?>;

		--mh-height: <?php echo (get_field('mh-height', 'options'))?: "60"; ?>px;

		--mh__logo-width: <?php echo (get_field('mh__logo-width', 'options'))?: "50"; ?>px;
		--mh__title-fontsize: <?php echo (get_field('mh__title-fontsize', 'options'))?: "26"; ?>px;
		--mh__description-fontsize: <?php echo (get_field('mh__description-fontsize', 'options'))?: "10"; ?>px;
		--mh__tel-fontsize: <?php echo (get_field('mh__tel-fontsize', 'options'))?: "18"; ?>px;
		--mh__email-fontsize: <?php echo (get_field('mh__email-fontsize', 'options'))?: "12"; ?>px;

		/* mobile-block */
		--mb-color-hover: <?php echo (get_field('mb-color-hover', 'options'))?: "rgba(2, 2, 2, 0.46)"; ?>;
		--mb-fontsize: <?php echo (get_field('mb-fontsize', 'options'))?: "16"; ?>px;

		--mb__text-fontsize: <?php echo (get_field('mb__text-fontsize', 'options'))?: "14"; ?>px;
		--mb__email-fontsize: <?php echo (get_field('mb__email-fontsize', 'options'))?: "12"; ?>px;
	}

	@media only screen and (max-width: <?php echo (get_field('mobile-width', 'options'))?: "1200"; ?>px) {
		body {
			padding-top: var(--mh-height);
		}

		body .mobile-header,
		body .mobile-block {
			display: block;
		}

	<?php echo (get_field('mobile-elements-hidden', 'options'))? get_field('mobile-elements-hidden', 'options') . "{display:none!important};" : null;  ?>

	}
</style>
<div class="mobile-header">
	<div class="mobile-header__wrap">
		<?php if (wp_get_attachment_image_url(get_field('mobile-header__logo', 'options'), 'full')) { ?>
			<div class="mobile-header__logo">
				<img src="<?php echo wp_get_attachment_image_url(get_field('mobile-header__logo', 'options'), 'full'); ?>" alt="Логотип" title="Логотип">
			</div>
		<?php } ?>
		<?php if (get_field('mobile-header__title', 'options')) { ?>
			<div class="mobile-header__name">
				<p class="mobile-header__title"><?php echo get_field('mobile-header__title', 'options'); ?></p>
				<?php echo (get_field('mobile-header__description', 'options')) ? "<p class='mobile-header__description'>" . get_field('mobile-header__description', 'options') . "</p>" : null; ?>
			</div>
		<?php } ?>
		<?php if (get_field('menu-header__tel', 'options') || get_field('menu-header__email', 'options')) { ?>
			<div class="menu-header__info">
				<?php if (get_field('menu-header__tel', 'options')) { ?>
					<a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('menu-header__tel', 'options')); ?>" class="menu-header__tel"><?php echo get_field('menu-header__tel', 'options'); ?></a>
				<?php } ?>
				<?php if (get_field('menu-header__tel', 'options')) { ?>
					<a href="mailto:<?php echo get_field('menu-header__email', 'options'); ?>" class="menu-header__email"><?php echo get_field('menu-header__email', 'options'); ?></a>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="menu-header__btn">
			<div class="menu-header__icons" id="burger-menu">
				<svg class="menu-header__icons-open" alt="меню" title="меню" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
					<path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>
				</svg>
				<svg class="menu-header__icons-close" alt="меню" title="меню" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">&lt;!&ndash;! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. &ndash;&gt;
					<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
				</svg>
			</div>
		</div>
	</div>
</div>
<div class="mobile-block" id="mobile-block">
	<div class="mobile-block__wrap">
		<?php
		wp_nav_menu([
				'container_class' => 'mobile-block__menu',
				'theme_location'  => 'mobile',
				'depth'           => 1, // количество уровней вложенности.mobile-block
				'items_wrap'      => '<ul class="mobile-block__list">%3$s</ul>'
		]);
		?>

		<div class="mobile-block__info">
			<?php // Check rows exists.
			if (have_rows('mobile-block__info', 'options')):
				while (have_rows('mobile-block__info', 'options')) : the_row();
					$text = get_sub_field('mobile-block__text');
					?>
					<p class="mobile-block__text"><?php echo $text; ?></p>
				<?php
				endwhile;
			endif; ?>
			<?php if (get_field('menu-header__tel', 'options') || get_field('menu-header__email', 'options')) { ?>
				<p class="mobile-block__text">
					<?php if (get_field('menu-header__tel', 'options')) { ?>
						<a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('menu-header__tel', 'options')); ?>" class="block__tel"><?php echo get_field('menu-header__tel', 'options'); ?></a>
					<?php } ?>
					<?php if (get_field('menu-header__tel', 'options')) { ?>
						<a href="mailto:<?php echo get_field('menu-header__email', 'options'); ?>" class="mobile-block__email"><?php echo get_field('menu-header__email', 'options'); ?></a>
					<?php } ?>
				</p>
			<?php } ?>
		</div>
	</div>
</div>