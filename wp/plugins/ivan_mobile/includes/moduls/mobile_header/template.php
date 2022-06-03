<style>
	:root {
		--mobile-padding: <?php echo (get_field('mobile-padding', 'options'))?: "10"; ?>px;
		--mobile-bg: <?php echo (get_field('mobile-bg', 'options'))?: "#308ceb"; ?>;
		--mobile-color: <?php echo (get_field('mobile-color', 'options'))?: "#ffffff"; ?>;
		--mobile-textalign: <?php echo (get_field('mobile-textalign', 'options'))?"left": "right"; ?>;

		--mh-height: <?php echo (get_field('mh-height', 'options'))?: "60"; ?>px;

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
		<?php if (get_field('mobile-header__info_is-visible', 'options') && (get_field('menu-header__tel', 'options') || get_field('menu-header__email', 'options'))) { ?>
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
				<svg class="menu-header__icons-open" alt="меню" title="меню" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 846.66 846.66">
					 <path class="black" d="M-0 71.63c0,-38.9 27.08,-70.45 60.48,-70.45l725.7 0c33.46,0 60.48,31.55 60.48,70.45 0,38.97 -27.02,70.46 -60.48,70.46l-725.7 0c-33.4,0 -60.48,-31.49 -60.48,-70.46zm0 352.29c0,-38.98 27.08,-70.46 60.48,-70.46l725.7 0c33.46,0 60.48,31.48 60.48,70.46 0,38.97 -27.02,70.45 -60.48,70.45l-725.7 0c-33.4,0 -60.48,-31.48 -60.48,-70.45zm786.18 422.73l-725.7 0c-33.4,0 -60.48,-31.48 -60.48,-70.45 0,-38.97 27.08,-70.46 60.48,-70.46l725.7 0c33.46,0 60.48,31.49 60.48,70.46 0,38.97 -27.02,70.45 -60.48,70.45z"/>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" class="menu-header__icons-close" alt="меню" title="меню" xml:space="preserve" width="100%" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 846.66 846.66">
					<path class="fil0" d="M813.85 692.98c32.28,32.28 32.28,84.57 0,116.85 -16.02,16.13 -37.19,24.14 -58.35,24.14 -21.16,0 -42.3,-8.07 -58.42,-24.2l-272.1 -271.97 -272.07 271.91c-16.15,16.25 -37.29,24.26 -58.45,24.26 -21.15,0 -42.25,-8.01 -58.41,-24.26 -32.28,-32.28 -32.28,-84.57 0,-116.85l272.15 -272.15 -272.15 -272.03c-32.28,-32.27 -32.28,-84.57 0,-116.84 32.27,-32.28 84.57,-32.28 116.84,0l272.09 272.29 272.15 -272.15c32.28,-32.28 84.57,-32.28 116.85,0 32.27,32.27 32.27,84.57 0,116.84l-272.15 272.15 272.02 272.01z"/>
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