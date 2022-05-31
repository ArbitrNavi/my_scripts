<style>
	:root {
		--ml-height: <?php echo (get_field('ml-height', 'options'))?: "57"; ?>px;
		--ml-font-size: <?php echo (get_field('ml-font-size', 'options'))?: "14"; ?>px;
		--ml-text-transform: <?php echo (get_field('ml-text-transform', 'options'))?"uppercase": "none"; ?>;
		--ml-block-bg: <?php echo (get_field('ml-block-bg', 'options'))?: "#4a7895"; ?>;
		--ml-block-border-color: <?php echo (get_field('ml-block-border-color', 'options'))?: "rgb(0, 0, 0)"; ?>;
		--ml-btn-color: <?php echo (get_field('ml-btn-color', 'options'))?: "#ffffff"; ?>;
		--ml-btn-bg-color: <?php echo (get_field('ml-btn-bg-color', 'options'))?: "#4a7895"; ?>;
		--ml-btn-phone-color: <?php echo (get_field('ml-btn-phone-color', 'options'))?: "#ffffff"; ?>;
		--ml-btn-phone-bg-color: <?php echo (get_field('ml-btn-phone-bg-color', 'options'))?: "#D4382C"; ?>;
	}

	body .mobail-line__cont a.mobail-line__link_phone:after {
		background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='<?php echo (get_field('ml-btn-phone-color', 'options'))?: "%23ffffff"; ?>' d='M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z'/%3E%3C/svg%3E");
	<?php echo (get_field('ml-btn-phone-is_icon', 'options'))?: "display:none;"; ?>
	}

	@media (max-width: <?php echo (get_field('mobile_line_width_between', 'options'))?: "580"; ?>px) {
		.mobail-line__cont {
			justify-content: space-between;
		}

		.mobail-line__cont a {
			padding: 0 10px;
		}
	}

	@media (max-width: <?php echo (get_field('mobile_line_width_visible', 'options'))?: "1200"; ?>px ) {
		body {
			padding-bottom: var(--ml-height);
		}

		body .mobail-line {
			display: block;
		}

	<?php echo (get_field('mobile_line-elements-hidden', 'options'))? get_field('mobile_line-elements-hidden', 'options') . "{display:none!important};" : null;  ?>

	}

</style>
<?php
if (have_rows('mobile_line', 'options')):?>
	<div class="mobail-line">
		<ul class="mobail-line__cont">
			<?php while (have_rows('mobile_line', 'options')) : the_row();
				$title = get_sub_field('title');
				$link = get_sub_field('link');
				$bg_color = (get_sub_field('bg_color')) ? "background:" . get_sub_field('bg_color') . ";" : null;
				$text_color = (get_sub_field('text_color')) ? "color:" . get_sub_field('text_color') . ";" : null;
				$phone = preg_replace('/[^0-9]/', '', $link);

				if (iconv_strlen($phone) > 9) { ?>
					<li>
						<a class="mobail-line__link mobail-line__link_phone" href="tel:<?php echo $phone; ?>"><?php echo $title; ?></a>
					</li>
				<?php } else { ?>
					<li>
						<a class="mobail-line__link" <?php echo ($bg_color || $text_color) ? "style=\"" . $bg_color . $text_color . "\"" : null; ?> href="<?php echo $link; ?>"><?php echo $title ?></a>
					</li>
				<?php }
				?><?php endwhile; ?>
		</ul>
	</div>
<?php
endif;
?>




