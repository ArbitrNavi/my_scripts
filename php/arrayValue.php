<?php session_start();

function arrayValue($array, $key = false) {//return null, for none key
	if (array_key_exists($key, $array)) {
		$result = $array[$key];
	} else {
		$result = 'null';
	}

	return $result;
}


if (arrayValue($_SESSION,"testFalse") === "null") {
	echo "Данных нет, поэтому ни чего выводить не будет";
} else {
	if (arrayValue($_SESSION,"testFalse")) {
		echo "is TRUE";
	} else {
		echo "is FALSE";
	}
}


?>