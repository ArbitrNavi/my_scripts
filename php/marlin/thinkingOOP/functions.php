<?php
function dd($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	die();
}

function projectDir(){
	return __DIR__;
}