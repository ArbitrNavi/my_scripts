<?php
function mayak_filter_image($content) {
$ar_mk	= '!<img (.*?) width="(.*?)" height="(.*?)" (.*?)/>!si';
$br_mk = '<span itemprop="image" itemscope itemtype="<?php echo protocol();?>://schema.org/ImageObject"><img itemprop="url contentUrl" \\1 width="\\2" height="\\3" \\4/><meta itemprop="width" content="\\2"><meta itemprop="height" content="\\3"></span>';
$content = preg_replace($ar_mk, $br_mk, $content);
	return $content;
}
add_filter('the_content', 'mayak_filter_image');
 ?>