<?php 
// Данные из плагина yeoast
// v 1.1 07.02.2018
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


function seo_info($type='',$postID=''){

// добавляемые данные
$add_title_page = ' - Веб студия';
$add_title_post = '';

$add_desc_page = 'Веб-студия Team Web Studio: разработка и создание сайтов, продвижение сайтов, SEO, SMM, веб-дизайн. Интернет магазины, Landing Page, многостраничные сайты.';
$add_desc_post = ' Веб-студия Team Web Studio: разработка и создание сайтов, продвижение сайтов, SEO, SMM, веб-дизайн. Интернет магазины, Landing Page, многостраничные сайты.';

$desc_default = '';
$key_default = 'Веб-студия, web-студия, создание сайтов, продвижение сайтов, SEO, SMM, веб-дизайн, лендинг, одностраничник, сайт интернет-магазина, сайт-визитка, сайт под ключ, сайт на заказ, сео оптимизация, сео продвижение, дизайн сайтов, разработка дизайна, разработка сайтов, изготовление сайтов, разработка интернет магазина, создание интернет магазина, разработка на битрикс, Bitrix, создание сайтов на Bitrix, landing page, корпоративный портал, программирование, веб разработки, интернет маркетинг, реклама в интернете, контекстная реклама, гугл реклама, настройка yandex, настройка google, яндекс реклама, оптимизация сайтов, поисковая оптимизация, wordpress, вордпрес разработка сайтов, 1с битрикс, 1-C Bitrix, раскрутка сайтов, сайт под ключ, создание сайтов под ключ, изготовление интернет магазина, смм, раскрутка в социальных сетях, продвижение в социальных сетях';

// получение сео данных 
if ( is_category() ){
	// категория
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;

	$my_title = get_wpseo_meta_tax('title',$term_id,'category');
	$my_description = get_wpseo_meta_tax('desc',$term_id,'category');
	$my_key = get_wpseo_meta_tax('focuskw',$term_id,'category');

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
	$my_key = $my_title . $key_default;
};

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

?>