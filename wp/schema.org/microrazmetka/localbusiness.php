<div style="display: none;" class="schema_block schema_organization">
  <div typeof="schema:LocalBusiness">
    <a class="schema_url" target="_blank" property="schema:url" href="<?php echo get_site_url(); ?>">
      <div class="schema_name" property="schema:name"><?php echo seo_info('company'); ?></div>
    </a>
    <span property="schema:priceRange" content="от <?php echo seo_info('price_min') ?> до <?php echo seo_info('price_max'); ?>"><?php echo seo_info('price_min') ?> до <?php echo seo_info('price_max'); ?>>
    <div class="schema_description" property="schema:description"><?php echo seo_info('desc_default'); ?></div>
    <div property="schema:address" typeof="schema:PostalAddress">
      <div class="street" property="schema:streetAddress"><?php echo seo_info('adress'); ?></div>
      <div class="city_state">
        <span class="locale" property="schema:addressLocality"><?php echo seo_info('adress_sity'); ?> </span>,<span class="region" property="schema:addressRegion"><?php echo seo_info('adress_region'); ?></span>
      </div>
      <div class="country" property="schema:addressCountry">RU Российская Федерация</div>
    </div>
    <div class="email" property="schema:email"><?php echo seo_info('email'); ?></div>
    <div class="phone" property="schema:telephone">Phone: <?php echo seo_info('tel'); ?></div>
    <div class="image" property="schema:image"><?php echo seo_info('logo'); ?></div>
  </div>
</div>