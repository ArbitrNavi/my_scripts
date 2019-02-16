<?php 
// фукнция вывода урезанного чистого контенте
function small_content($length='100'){
	// если в админке заполнена превью
	if (has_excerpt() ) {
		return strip_tags(get_the_excerpt());
	}else{
		// обрезаем текущий контент, по умолчанию обрезается в 100 символов
		return mb_substr(strip_tags(get_the_content()),0,$length);
	}
 };
 
 ?>