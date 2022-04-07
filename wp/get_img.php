<?php
//Получение url картинки из произвольного поля в повторителе по id картинки
//$name_field_image_id - имя произвольного поля в повторителе,
//$img_size - размер для получения
//$img_default - изображение по умолчанию

function get_url_img_is_sub_field($name_field_image_id, $img_size = 'full', $img_default = '') {

	if (get_sub_field($name_field_image_id)) {
		$resoult = wp_get_attachment_image_url(get_sub_field($name_field_image_id), $img_size);
	} else {
		$resoult = $img_default;
	}

	return $resoult;
} ?>