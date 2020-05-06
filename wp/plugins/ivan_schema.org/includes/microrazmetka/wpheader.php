<?php $post_id = get_queried_object()->ID; ?>
<div style="display: none;" itemscope itemtype="<?php echo protocol();?>://schema.org/WPHeader">
	<meta itemprop="headline" content="<?php echo seo_info('title',$post_id); ?>">
	<meta itemprop="description" content="<?php echo seo_info('desc',$post_id); ?>">
	<meta itemprop="keywords" content="<?php echo seo_info('key',$post_id); ?>">
	<meta itemprop="copyrightYear" content="<?php echo seo_info('year',$post_id); ?>"/>"/>
	<meta itemprop="copyrightHolder" content="<?php echo get_site_url(); ?>"/>
</div>