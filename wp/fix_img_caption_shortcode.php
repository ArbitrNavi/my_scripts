<?php
// Переопределите шорткод подписи img, чтобы исправить проблему 10px.
// Override img caption shortcode to fix 10px issue.
add_filter('img_caption_shortcode', 'fix_img_caption_shortcode', 10, 3);

function fix_img_caption_shortcode($val, $attr, $content = null) {
	extract(shortcode_atts(array(
		'id'    => '',
		'align' => '',
		'width' => '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) ) return $val;

	return '<div id="' . $id . '" class="wp-caption ' . esc_attr($align) . '" style="width: ' . (0 + (int) $width) . 'px">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

?>