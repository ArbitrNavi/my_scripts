<div style="display: none;" itemprop="publisher" itemscope itemtype="<?php echo protocol();?>://schema.org/Organization">
  <div itemprop="logo" itemscope itemtype="<?php echo protocol();?>://schema.org/ImageObject">
    <meta itemprop="name" content="<?php echo seo_info('company') ?>">
    <img alt="<?php echo seo_info('company'); ?>" itemprop="image url" src="<?php echo seo_info('logo'); ?>" style="display: none;"/>
    <meta itemprop="width" content="<?php echo seo_info('logo_w'); ?>">
    <meta itemprop="height" content="<?php echo seo_info('logo_h'); ?>">
  </div>
  <meta itemprop="telephone" content="<?php echo seo_info('tel'); ?>">
  <meta itemprop="address" content="<?php echo seo_info('country'); ?>">
  <meta itemprop="name" content="<?php echo seo_info('company') ?>">
  <meta itemprop="url" content="<?php echo get_site_url(); ?>">
</div>