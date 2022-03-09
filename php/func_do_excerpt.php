<?php
//Обрезать содержимое по словам

function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit) array_pop($words);
	return implode(' ', $words) . ' ...';
}

?>