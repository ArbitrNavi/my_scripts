<?php 
// вывод текущего года
function show_current_year(){
	return date('Y');
}
add_shortcode('show_current_year', 'show_current_year');