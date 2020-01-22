<?php 
// вывод предварительной верстки, для обработки уже js
// [theme_video ids="qZnuI1Zrdbs, akweI7-LaWc"]
// функция выводит блоки по переданным id ютуб роликов
function theme_video_func($attrs){
		$attrs = shortcode_atts(array(
			'wrap' => 'div',
			'ids' => '',
			'wrap_classes' => 'theme-video-wrap'
		), $attrs);

		if(!empty($attrs['wrap'])) $result = '<'. $attrs['wrap'] . (!empty($attrs['wrap_classes']) ? ' class="'. $attrs['wrap_classes'] .'"' : '') .'>';

		$ids = explode(',', $attrs['ids']);

		foreach($ids as $id){
			$result .= '<div class="youtube" id="'. trim($id) .'"></div>';
			//$result .= '<iframe src="https://www.youtube.com/embed/'. trim($id) .'?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}

		if(!empty($attrs['wrap'])) $result .= '</'. $attrs['wrap'] .'>';

		return $result;
}

add_shortcode( 'theme_video', 'theme_video_func' );

?>