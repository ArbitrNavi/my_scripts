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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CreativeWork",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo get_permalink($post_id); ?>"
  },
  "headline": "<?php echo addslashes(get_the_title($post_id)); ?>",
  "description": "<?php echo iconv_substr(addslashes(strip_tags($this_post_content)), 0 , 180 , "UTF-8" ); ?>...",
  "image": "<?php echo $arr_thumbnail['src']; ?>",  
  "author": {
    "@type": "Person",
    "name": "Администратор"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo get_bloginfo('name'); ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo seo_info('logo'); ?>"
    }
  },
  "datePublished": "<?php echo get_the_date('Y-m-d'); ?>",
  "dateModified": "<?php the_modified_date('Y-m-d'); ?>"
}
</script>