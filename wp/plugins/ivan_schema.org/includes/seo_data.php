<?php 
// Данные из плагина yeoast
// v 1.1 07.02.2018
// require_once 'includes/seo_data.php';
// подключение в тему
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/wpfooter.php';
// подключениев functions.php
// require_once 'includes/seo_data.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/wpheader.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/organization.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/website.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/localbusiness.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/wpsidebar.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/wpfooter.php';
// include plugin_dir_path( __FILE__ ) . '/microrazmetka/article.php';
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
	return get_field('shema_protocol','options');
};
function seo_info($type='',$postID=''){
// зависимости от сео плагина, пока что выбирается вручную
// yeast || all_seo
$seo_plagin = get_field('shema_seo_plugin','options');

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
$desc_default = get_field('shema_description','options');
	// добавляем к текущиму кейвордсу
$key_default = '';
if ($seo_plagin=== 'yeast') {
	
// получение сео данных 
if ( is_category() ){
	// категория
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id; //26

	$term = get_term($term_id, $taxonomy);
	$name = $term->name;

	// $my_title = $term_id;
	$my_title = $name;//+

	// $my_title = get_wpseo_meta_tax('title',$term_id,'category');// - выводит тайтл записи
	// $my_title = str_replace('%%term_title%%', $name, $my_title);

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
// данные от yeast
}elseif ($seo_plagin==='all_seo') {
	// запись
	$my_title  = get_post_meta($postID, "_aioseop_title", true);
	$my_description  = get_post_meta($postID, "_aioseop_description", true);
	$my_key  = get_post_meta($postID, "_aioseop_keywords", true);
	
	// описание по умолчанию
	if (!$my_description){
		$my_description = $add_desc_post;
	};
	
};//выбор seo плагина
if (!$my_title) {
	$my_title  = get_field('shema_title','options');
};
// если косячное название типа %%title%% вставляем тайтл страницы
if ($my_title == '%%title%%') {
	$my_title = wp_get_document_title();
}
// описание по умолчанию
if (!$my_description){
	$my_description = $desc_default;
};
// ключ по умолчанию
// if (!$my_key) {
// 	$my_key = $my_title;
// };
$my_key .= $key_default;
$resoult = '';
if ($type === 'title') {
	$resoult = $my_title;
	
}elseif($type === 'desc') {
	$resoult = $my_description;
	
}elseif($type === 'key') {
	$resoult = $my_key;
	
}elseif($type === 'year') {
	$resoult = get_field('shema_year','options');
	
}elseif($type === 'logo') {
	$resoult = image_downsize( get_field('shema_logo','options')['ID'], 'full' )['0'];
	
}elseif($type === 'logo_w') {
	$resoult = image_downsize( get_field('shema_logo','options')['ID'], 'full' )['1'];
	
}elseif($type === 'logo_h') {
	$resoult = image_downsize( get_field('shema_logo','options')['ID'], 'full' )['2'];
	
}elseif($type === 'tel') {
	$resoult = get_field('shema_tel','options');

}elseif($type === 'email') {
	$resoult = get_field('shema_email','options');
	
}elseif($type === 'adress') {
	$resoult = get_field('shema_adress','options');
	
}elseif($type === 'country') {
	$resoult = get_field('shema_country','options');
	
}elseif($type === 'adress_sity') {
	$resoult = get_field('shema_adress_sity','options');
	
}elseif($type === 'adress_region') {
	$resoult = get_field('shema_adress_region','options');
		
}elseif($type === 'index') {
	$resoult = get_field('index','options');
	
}elseif($type === 'company') {
	$resoult = get_field('shema_company','options');
	
}elseif($type === 'price_min') {
	$resoult = get_field('shema_price_min','options') . ' ' . get_field('shema_value','options');
	
}elseif($type === 'price_max') {
	$resoult = get_field('shema_price_max','options') . ' ' . get_field('shema_value','options');

}elseif($type === 'desc_default') {
	$resoult = $desc_default;

};

	return $resoult;
};//seo_info

// add_action( 'wp_footer', 'my_popup', 30 );
// function my_popup(){
		// include plugin_dir_path( __FILE__ ) . '/microrazmetka/wpfooter.php';
// };

// вставляем все шаблоны микроразметки в одну функцию
function footer_schema(){
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/webpage.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/organization.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/localbusiness.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/wpsidebar.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/website.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/wpheader.php';
	include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/wpfooter.php';

	if (is_single() || is_page()) {
		$post_id = get_queried_object()->ID; 
		$this_post = get_post($post_id);
		$this_post_content = get_post($post_id)->post_content;
		include plugin_dir_path( __FILE__ ) . '/microrazmetka/jsonld/article.php';
	};
};

// выполняем функцию перед wp_footer
add_action('wp_footer','footer_schema');
?>