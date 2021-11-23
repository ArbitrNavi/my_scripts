<?php
// Вывод пропорционального размера видео роликов ютуба
// возможные размеры: 16by9, 4by3, 2by1, 1by1
// [theme_video_resp id="qZnuI1Zrdbs" size="16by9"]

// выводит одиночное видео

function theme_video_resp_func( $attrs ) {

// Определяем размер
	switch ( $attrs['size'] ) {
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

	$result = '<div class="item-responsive item-' . $size . '">';
	$result .= '<div class="ay_youtube content_responsive"  id="' . trim( $attrs["id"] ) . '" style="background-image:url(https://i.ytimg.com/vi/' . trim( $attrs["id"] ) . '/hqdefault.jpg)">'
	           . '<div class="play ay_play"></div>'
	           . '</div>';
	$result .= '</div>';

	return $result;
}

add_shortcode( 'theme_video_resp', 'theme_video_resp_func' );
?>