<div style="display: none;" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <div itemprop="logo image" itemscope itemtype="https://schema.org/ImageObject">
        <img itemprop="url contentUrl" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.jpg" alt="logo" />
        <meta itemprop="width" content="6" />
        <meta itemprop="height" content="6" />
   </div>
   <meta itemprop="name" content="<?php bloginfo('name'); ?>" />
   <meta itemprop="address" content="Москва" />
   <meta itemprop="telephone" content="
8 (499) 521-70-15" />
</div>

<?php
$attachment_id = get_theme_mods('custom_logo'); // ID вложения

$image_attributes = wp_get_attachment_image_src( $attachment_id , 'full');
// вернулся массив array
?> 

<div itemscope itemtype="http://schema.org/BlogPosting">
<link itemprop="mainEntityOfPage" itemscope href="<?php echo get_permalink(); ?>" />
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<img alt="Логотип сайта" itemprop="image url" src="<?php echo $image_attributes[0] ?>"/>
<meta itemprop="width" content="<?php echo $image_attributes[1] ?>">
<meta itemprop="height" content="<?php echo $image_attributes[2] ?>">
</div>
<meta itemprop="telephone" content="8 (499) 521-70-15">
<meta itemprop="address" content="Россия, г.Москва, ул. Ботаническая, дом 3">
<meta itemprop="name" content="Студия ТопЗвук">
</div>
<meta itemprop="datePublished" content=" <?php echo get_the_date('Y'); ?>">
<meta itemprop="dateModified" content="<?php the_modified_date('Y'); ?>">
<span itemprop="author" itemscope itemtype="http://schema.org/Person">
<span itemprop="name"><?php the_author(); ?></span>
</span>
<div itemprop="articleBody">
<h1 itemprop="headline"><?php the_title(); ?></h1>
<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
<img itemprop="image url" alt="<?php the_title(); ?>" width="размеры в пикселях" height="размеры в пикселях" src="Ссылка на изображение"/>
<meta itemprop="width" content="размеры в пикселях">
<meta itemprop="height" content="размеры в пикселях">
</span>
<p><?php the_content(); ?></p>
</div>
</div>