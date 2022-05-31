<style>
	:root {
		--ml-height: <?php echo (get_field('ml-height', 'options'))?: "57"; ?>px;
		--ml-font-size: <?php echo (get_field('ml-font-size', 'options'))?: "14"; ?>px;
		--ml-text-transform: <?php echo (get_field('ml-text-transform', 'options'))?"uppercase": "none"; ?>;
		--ml-block-bg: <?php echo (get_field('ml-block-bg', 'options'))?: "#4a7895"; ?>;
		--ml-block-border-color: <?php echo (get_field('ml-block-border-color', 'options'))?: "rgb(0, 0, 0)"; ?>;
		--ml-btn-color: <?php echo (get_field('ml-btn-color', 'options'))?: "#ffffff"; ?>;
		--ml-btn-bg-color: <?php echo (get_field('ml-btn-bg-color', 'options'))?: "#4a7895"; ?>;
		--ml-btn-phone-bg-color: <?php echo (get_field('ml-btn-phone-bg-color', 'options'))?: "#D4382C"; ?>;
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




