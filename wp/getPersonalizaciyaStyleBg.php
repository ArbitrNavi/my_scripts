<?php
//получить стиль фона
//сначала из рубрики родительской, потом страницы опций, а потом по умолчанию

function getPersonalizaciyaStyleBg($fieldCat = false, $fieldOptions = false, $dataDefault = false) {
	if (getField($fieldCat, true)) {//изображение из рубрики
		$faceBgImgId = getField($fieldCat, true);
		$bg_faces_url = wp_get_attachment_image_url($faceBgImgId, 'full');
	} elseif (get_field($fieldOptions, 'options')) {//изображение со страницы настроек темы
		$bg_faces_url = wp_get_attachment_image_url(get_field($fieldOptions, 'options'), 'full');
	} elseif($dataDefault){//изображение по умолчанию
		$bg_faces_url = $dataDefault;
	} else{
		$bg_faces_url = null;
	}

	$bg_faces = ($bg_faces_url) ? "background: url(\"" . $bg_faces_url . "\") center top / cover;" : null;
	return $bg_faces;
}
?>
.faces {
	background: url("http://tz-sound.loc/wp-content/themes/wp_theme_tzsound/img/face.jpg") center top / cover;
}

