<!-- article_php -->
<?php 
	if (is_single() || is_page()) {
	$post_id = get_queried_object()->ID; 
	$this_post = get_post($post_id);
	$this_post_content = get_post($post_id)->post_content;
 ?>
<div style="display: none;">
	<div itemscope itemtype="<?php echo protocol();?>://schema.org/BlogPosting">
	<link itemprop="mainEntityOfPage" itemscope href="<?php echo get_permalink($post_id); ?>" />
	<div itemprop="publisher" itemscope itemtype="<?php echo protocol();?>://schema.org/Organization">
	<div itemprop="logo" itemscope itemtype="<?php echo protocol();?>://schema.org/ImageObject">
	<img alt="Логотип сайта" itemprop="image url" src="<?php echo seo_info('logo'); ?>"/>
	<meta itemprop="width" content="<?php echo seo_info('logo_w') ?>">
	<meta itemprop="height" content="<?php echo seo_info('logo_h') ?>">
	</div>
	<meta itemprop="telephone" content="<?php echo seo_info('tel'); ?>">
	<meta itemprop="address" content="<?php echo seo_info('adress'); ?>">
	<meta itemprop="name" content="<?php echo seo_info('company'); ?>">
	</div>
	<meta itemprop="datePublished" content=" <?php echo get_the_date('Y'); ?>">
	<meta itemprop="dateModified" content="<?php the_modified_date('Y'); ?>">
	<span itemprop="author" itemscope itemtype="<?php echo protocol();?>://schema.org/Person">
	<span itemprop="name">Админ</span>
	</span>
	<div itemprop="articleBody">
	<span itemprop="headline"><?php echo seo_info('title'); ?></span>
	<span itemprop="image" itemscope itemtype="<?php echo protocol();?>://schema.org/ImageObject">
	<?php 
	// Если есть миниатюра
	if( has_post_thumbnail($post_id) ) {
		$thumbnail_id  = get_post_thumbnail_id( $post_id );
		$image_attributes = wp_get_attachment_image_src( $thumbnail_id );
		$arr_thumbnail = array(
			'src' => $image_attributes[0], 
			'width' => $image_attributes[1], 
			'height' => $image_attributes[2], 
		);
		// если миниатюры нет - выводим лого
	}else {
		$arr_thumbnail = array(
			'src' => seo_info('logo'), 
			'width' => seo_info('logo_w'), 
			'height' => seo_info('logo_h'), 
		);
	};
	?>
	<img itemprop="image url" alt="<?php get_the_title($post_id); ?>" width="<?php echo $arr_thumbnail['width']; ?>" height="<?php echo $arr_thumbnail['height']; ?>" src="<?php echo $arr_thumbnail['src']; ?>"/>
	<meta itemprop="width" content="<?php echo $arr_thumbnail['width'] ?>">
	<meta itemprop="height" content="<?php echo $arr_thumbnail['height'] ?>">
	</span>
	<p><?php echo $this_post_content; ?></p>
	</div>
	</div>
</div>
<?php }; ?>