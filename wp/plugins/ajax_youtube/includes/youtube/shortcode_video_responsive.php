<?php 
// вывод предварительной верстки, для обработки уже js
// функция выводит блоки по переданным id ютуб роликов

// пропорциональный размер видео
// возможные размеры: 16by9, 4by3, 2by1, 1by1

// выводит одиночное видео

function theme_video_resp_func($attrs){

switch ($attrs['size']) {
	case '16by9':
		$size = "16by9";
		break;
	case '4by3':
		$size = "4by3";
		break;
	case '2by1':
		$size = "2by1";
		break;
	case '1by1':
		$size = "1by1";
		break;
	
	default:
		$size = "16by9";
		break;
}

$result .= '<!-- 16:9 (отношение между шириной и высотой) -->
<div class="item-responsive item-' . $size . '">' . 
$result .= '<div class="youtube content_responsive"  id="'. trim($attrs["id"]) .'"></div>';
$result .= '</div>';

		return $result;
}

add_shortcode( 'theme_video_resp', 'theme_video_resp_func' );

?>