<div style="display: none;" itemscope itemtype="<?php echo protocol();?>://schema.org/WPFooter">
    <meta itemprop="name" content="<?php echo seo_info('title',$post->ID); ?>"/>
    <meta itemprop="description" content="<?php echo seo_info('desc',$post->ID); ?>"/>
    <meta itemprop="keywords" content="<?php echo seo_info('key',$post->ID); ?>"/>
    <meta itemprop="copyrightYear" content="<?php echo seo_info('year',$post->ID); ?>"/>
    <meta itemprop="copyrightHolder" content="<?php echo get_site_url(); ?>"/>
</div>