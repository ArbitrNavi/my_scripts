<?php
// функция подставки id видео в шорткод из страницы опций acf

// [theme_video_shablon metka="reklama"]
function func_theme_video_shablon($attrs) {
	//Вставляем указанную пропорцию видео
	//	if (isset($attrs) && array_key_exists('size', $attrs)) {
	//		$size = " size=\"" . $attrs['size'] . "\"";
	//	} else {
	//		$size = "";
	//	}

	$id_video = [];//массив с id роликов
	// проверяем есть ли в повторителе данные
	if (have_rows('all_shortkod', 'option')):
		// перебираем данные
		while (have_rows('all_shortkod', 'option')) : the_row();

			// отображаем вложенные поля
			$metka_field = get_sub_field('metka');//id шорткода
			$all_video = get_sub_field('all_video');//повторитель со сборником видео

			if ($attrs['metka'] == $metka_field || $attrs['metka'] == "all") { //совпадение с меткой

				// видео внутри
				foreach ($all_video as $value) {
					$id_video[] = YoutubeCode($value['video']);//id video помещаем в новый массив
				}
				// .видео внутри

				$id_video_str = implode(",", $id_video);//преобразуем массив в строку и разделяем запятой

			}//.совпадение с меткой

			$attr_for_shortcode = '';
			foreach ($attrs as $index => $attr) {
				if ($index !== 'id' && $index !== 'ids' && $index !== 'metka') {
					$attr_for_shortcode .= $index . '="' . $attr . '" ';
				}
			}
		endwhile;
	endif;

	if (count($id_video) == 1) {
		return (do_shortcode('[theme_video_resp id="' . $id_video_str . '" . ' . $attr_for_shortcode . ']'));
	} else {
		return (do_shortcode('[theme_video ids="' . $id_video_str . '" . ' . $attr_for_shortcode . ']'));
	}
}

//func_theme_video_shablon

add_shortcode('theme_video_shablon', 'func_theme_video_shablon');

?>