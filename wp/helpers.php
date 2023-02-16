<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}


if (!function_exists('get_pr')) {
	/**
	 * Debug function print_r
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_pr($var, $die = true) {
		echo '<pre>';
		print_r($var);
		echo '</pre>';
		if ($die) {
			die();
		}
	}
}
if (!function_exists('get_vd')) {
	/**
	 * Debug function var_dump
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_vd($var, $die = true) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
		if ($die) {
			die();
		}
	}
}
if (!function_exists('get_num_ending')) {
	/**
	 * Склонения числительных
	 *
	 * @param $number
	 * @param $ending_array
	 *
	 * @return mixed
	 */
	function get_num_ending($number, $ending_array) {
		$number = $number % 100;
		if ($number >= 11 && $number <= 19) {
			$ending = $ending_array[2];
		} else {
			$i = $number % 10;
			switch ($i) {
				case (1):
					$ending = $ending_array[0];
					break;
				case (2):
				case (3):
				case (4):
					$ending = $ending_array[1];
					break;
				default:
					$ending = $ending_array[2];
			}
		}

		return $ending;
	}
}


function js_log($data) {
	echo "<script>console.log('" . $data . "');</script>";
}


function phone_format($phone_string) { //' +7 (905) 506-3-506'
	$pattern = '/\D/i';
	$replacement = '';
	$phone = preg_replace($pattern, $replacement, $phone_string);
	$resoult = (substr($phone, 0, 1) == "7") ? "+" . $phone : $phone;

	return $resoult; //89055063506 || +79055063506
}


function getIdCat() {
	// id текущей категории
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;

	return $term_id;
}

function getIdCatPost() {
	// id категории к которой принадлежит текущая запись
	$infocat = get_the_category();
	$catID = $infocat[0]->cat_ID;

	return $catID;
}

// get field for all page
function getField($field, $is_parent_cat = false) {
	if ($is_parent_cat && is_single()) {
		$parentCatID = get_the_category(get_the_ID())[0]->term_id;
		$result = get_field($field, 'term_' . $parentCatID);
	} elseif (is_category()) {
		$result = get_field($field, 'term_' . getIdCat());
	} else {
		$result = get_field($field);
	}

	return $result;
}


function myRand($length = 10) {
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$stringRand = substr(str_shuffle($permitted_chars), 0, $length);
	return $stringRand;

}

function getPersonalizaciyaStyleBg($fieldCat = false, $fieldOptions = false, $dataDefault = false, $visibleFrontPage = true) {
	//$fieldCat - поле в рубриках
	//$fieldOptions - поле на странице опций
	//$dataDefault - путь к картинке по умолчанию
	//$visibleFrontPage - показывать на главной или нет
	if (is_front_page() && !$visibleFrontPage) {//скрыть на главной этот стиль
		$bg_faces = null;
	} else {//какой стиль показываем
		if (getField($fieldCat, true) && !is_front_page()) {//изображение берется из рубрики или родительской рубрики текущей записи
			$faceBgImgId = getField($fieldCat, true);
			$bg_faces_url = wp_get_attachment_image_url($faceBgImgId, 'full');
		} elseif (get_field($fieldOptions, 'options')) {//изображение со страницы настроек темы
			$bg_faces_url = wp_get_attachment_image_url(get_field($fieldOptions, 'options'), 'full');
		} elseif ($dataDefault) {//изображение по умолчанию
			$bg_faces_url = $dataDefault;
		} else {// если никакие условия не подходит, ни чего не возвращаем
			$bg_faces_url = null;
		}

		$bg_faces = ($bg_faces_url) ? "background: url(\"" . $bg_faces_url . "\") center top / cover;" : null;
	}

	return $bg_faces;
}

function getFieldCatOptions($field, $defaultPage = 'options') {
	if (is_page() || is_front_page()) {
		$field = (get_field($field, $defaultPage)) ?: [];
	} else {
		$field = (getField($field, true)) ?: (get_field($field, $defaultPage)) ?: [];
	}

	echo $field;
}

function UR_exists($url = false) {
	if ($url) {
		$headers = get_headers($url);
		return stripos($headers[0], "200 OK") ? true : false;
	}
	return false;
}

use \WebPExpress\AlterHtmlHelper;

class WebpExpressExtended
{
	public static function background($imgId = false, $size = 'full') {
		$img = wp_get_attachment_image_src($imgId, $size)[0];
		if (!$imgId || !$img) {
			return false;
		}
		if (class_exists("AlterHtmlHelper")) {
			return AlterHtmlHelper::getWebPUrl($img, null);
		} else {
			return null;
		}
	}
}