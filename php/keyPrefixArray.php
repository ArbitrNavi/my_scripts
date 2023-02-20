<?php
function keyprefix($keyprefix, array $array) {

	foreach ($array as $k => $v) {
		$array[$keyprefix . $k] = $v;
		unset($array[$k]);
	}

	return $array;
}
