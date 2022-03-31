<?php
//Вставить в functions.php для активации миниатюр постов

add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, false); //поставить true для обрезки под одному краю(сохрханение пропорций)
?>

<?php
//Проверка существования миниатюры и вставка либо ее, либо заглушки
if (has_post_thumbnail()) {
	the_post_thumbnail(array(200, 200), array("class" => "post_thumbnail"));
} else { ?>
	<img src="<?php echo get_template_directory_uri() . '/img/img_tmb.png'; ?>"/>
<?php }; ?>


<?php
//получение миниатюры изображения размером (thumb-94) или если нет - заглушки в папке темы '/img/new.png'
$img = (has_post_thumbnail()) ? get_the_post_thumbnail($post->ID, 'thumb-94', array("class" => "range__photo")) : '<img src="' . get_bloginfo('template_directory') . '/img/new.png' . '" class="range__photo"/>';
?>