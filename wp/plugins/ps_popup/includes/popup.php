<div class="popup_zvuk" id="popup_zvuk">
	<div class="pz_container">
		<!-- close -->
		<p class="pz_close" id="popup_zvuk_close">X</p>
		<!-- .close -->
		<!-- верхняя строка -->
		<div class="pz_top">
			<div class="pz_title_left">
				<i class="fa fa-youtube-play" aria-hidden="true"></i><p><?php the_field('ps_text_top_left','options'); ?></p>
			</div>
			<div class="pz_title_center">
				<p class="pz_t_top"><?php the_field('ps_title','options'); ?></p>
				<p class="pz_t_bottom"><?php the_field('ps_sub_title','options'); ?></p>
			</div>
			<div class="pz_title_right"><?php the_field('ps_text_top_right','options'); ?></div>
		</div>
		<!-- контент попапа-->
		<div class="pz_content">

			<?php 		$rows = get_field('ps_video','options');
if($rows)
foreach($rows as $key=>$row)
	{
		?>
			<!-- pz_item -->
			<div class="pz_item">
				<div class="pz_video">
					<iframe src="https://www.youtube.com/embed/<?php echo $row['video_id']; ?>?autoplay=0&enablejsapi=1&amp;autohide=1" frameborder="0" id="pz_video_1"></iframe>
				</div>
				<p class="pz_item_title"><?php echo $row['title']; ?></p>
			</div>
			<!-- .pz_item -->
<?php 	} ?>

		</div>
		<!-- .контент попапа-->

		<div class="pz_bottom">
			<p class="pz_b_left"><?php the_field('ps_text_bottom_left','options'); ?></p>
			<a href="<?php the_field('ps_bottom_link_1','options'); ?>" class="pz_b_right"><?php the_field('ps_bottom_text_link_1','options'); ?></a>
			<a href="<?php the_field('ps_bottom_link_2','options'); ?>" class="pz_b_right"><?php the_field('ps_bottom_text_link_2','options'); ?></a>
		</div>

	</div>
</div>

<div class="pz_button" id="pz_button">
	
</div>