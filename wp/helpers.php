<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


if ( ! function_exists( 'get_pr' ) ) {
	/**
	 * Debug function print_r
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_pr( $var, $die = true ) {
		echo '<pre>';
		print_r( $var );
		echo '</pre>';
		if ( $die ) {
			die();
		}
	}
}
if ( ! function_exists( 'get_vd' ) ) {
	/**
	 * Debug function var_dump
	 *
	 * @param mixed $var
	 * @param boolean $die
	 */
	function get_vd( $var, $die = true ) {
		echo '<pre>';
		var_dump( $var );
		echo '</pre>';
		if ( $die ) {
			die();
		}
	}
}
if ( ! function_exists( 'get_num_ending' ) ) {
	/**
	 * Склонения числительных
	 *
	 * @param $number
	 * @param $ending_array
	 *
	 * @return mixed
	 */
	function get_num_ending( $number, $ending_array ) {
		$number = $number % 100;
		if ( $number >= 11 && $number <= 19 ) {
			$ending = $ending_array[2];
		} else {
			$i = $number % 10;
			switch ( $i ) {
				case ( 1 ):
					$ending = $ending_array[0];
					break;
				case ( 2 ):
				case ( 3 ):
				case ( 4 ):
					$ending = $ending_array[1];
					break;
				default:
					$ending = $ending_array[2];
			}
		}

		return $ending;
	}
}


function js_log( $data ) {
	echo "<script>console.log('" . $data . "');</script>";
}


function phone_format( $phone_string ) { //' +7 (905) 506-3-506'
	$pattern     = '/\D/i';
	$replacement = '';
	$phone       = preg_replace( $pattern, $replacement, $phone_string );
	$resoult     = ( substr( $phone, 0, 1 ) == "7" ) ? "+" . $phone : $phone;

	return $resoult; //89055063506 || +79055063506
}


function getIdCat() {
	// id текущей категории
	$queried_object = get_queried_object();
	$taxonomy       = $queried_object->taxonomy;
	$term_id        = $queried_object->term_id;

	return $term_id;
}

function getIdCatPost() {
	// id категории к которой принадлежит текущая запись
	$infocat = get_the_category();
	$catID   = $infocat[0]->cat_ID;

	return $catID;
}

function getField( $field ) {
	$result = '';
	if ( is_category() ) {
		$result = get_field( $field, 'term_' . getIdCat() );
	} else {
		$result = get_field( $field );
	}

	return $result;
}