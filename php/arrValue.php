<?php
function arrValue($key = false) {//return null, for none key
	if (array_key_exists($key, $_SESSION)) {
		$result = $_SESSION[$key];
	} else {
		$result = 'null';
	}

	return $result;
}
