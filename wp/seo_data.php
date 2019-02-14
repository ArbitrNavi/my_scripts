<?php 
// Данные из плагина yeoast
// v 1.1 07.02.2018
// require_once 'includes/seo_data.php';

// подключение в тему
// include get_template_directory() . '/includes/microrazmetka/wpfooter.php';

// подключениев functions.php
// require_once 'includes/seo_data.php';

/**
* Возвращает seo данные, сохранённые для таксономий плагином Yoast SEO
*
* @param    string  $seo_item   метаполе, которое требуется получить (title, desc, linkdex, content_score, focuskw)
* @param    integer $id_tax     ID таксономии
* @param    string  $tax_type   тип таксономии (category, post_tag и другие)
*
* @return   string|boolean      данные из указанного метаполя или false, если с такими данными записи нет
*/
function get_wpseo_meta_tax( $seo_item, $id_tax, $tax_type){
	if ( !$seo_item || !$id_tax || !$tax_type )
	    return false;
	$seo_seo_items = get_option('wpseo_taxonomy_meta');
	if ( empty($seo_seo_items[$tax_type][$id_tax]['wpseo_'.$seo_item]) )
	    return false;
	return $seo_seo_items[$tax_type][$id_tax]['wpseo_'.$seo_item];
};

// выбор протокола http или https
function protocol(){
	return 'https';
};

function seo_info($type='',$postID=''){

// добавляемые данные
	// к названии страницы
$add_title_page = '';
	// к названии записи
$add_title_post = '';

	// к описании страницы
$add_desc_page = '';
	// к описании записи
$add_desc_post = '';

	// описание по умолчанию, если выбранное пусто
$desc_default = '';
	// добавляем к текущиму кейвордсу
$key_default = '';

// получение сео данных 
if ( is_category() ){
	// категория
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;

	$term = get_term($term_id, $taxonomy);
	$name = $term->name;

	$my_title = get_wpseo_meta_tax('title',$term_id,'category');
	$my_title = str_replace('%%term_title%%', $name, $my_title);

	$my_description = get_wpseo_meta_tax('desc',$term_id,'category');
	$my_description = str_replace('%%term_title%%', $name, $my_description);

	$my_key = get_wpseo_meta_tax('focuskw',$term_id,'category');
	$my_key = str_replace('%%term_title%%', $name, $my_key);

}elseif( is_page() ){
// страница
	$my_title  = get_post_meta($postID, "_yoast_wpseo_title", true);
	$my_description  = get_post_meta($postID, "_yoast_wpseo_metadesc", true);
	$my_key  = get_post_meta($postID, "_yoast_wpseo_focuskw", true);

	if (!$my_title) {
		$my_title  = get_the_title($postID) . $add_title_page;
	};

	if (!$my_description) {
			$my_description = $add_desc_page;
	};	

}else{

	// запись
	$my_title  = get_post_meta($postID, "_yoast_wpseo_title", true);
	$my_description  = get_post_meta($postID, "_yoast_wpseo_metadesc", true);
	$my_key  = get_post_meta($postID, "_yoast_wpseo_focuskw", true);
	
	// описание по умолчанию
	if (!$my_description){
		$my_description = $add_desc_post;
	};
};

if (!$my_title) {
	$my_title  = get_the_title($postID);
};

// описание по умолчанию
if (!$my_description){
	$my_description = $desc_default;
};

// ключ по умолчанию
if (!$my_key) {
	$my_key = $my_title;
};


$my_key .= $key_default;

$resoult = '';

if ($type === 'title') {
	$resoult = $my_title;
}elseif($type === 'desc') {
	$resoult = $my_description;
}elseif($type === 'key') {
	$resoult = $my_key;
};

return $resoult;

};//seo_info



// add_action( 'wp_footer', 'my_popup', 30 );
// function my_popup(){
		// include get_template_directory() . '/microrazmetka/wpfooter.php';
// };


?>