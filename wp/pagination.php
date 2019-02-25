<?php 
// количество выводимых страниц в пагинации
// вставлять в functions.php
function get_posts_4_st( $query ) {
	$catID = 5;//к каким категориям применить, если несколько то указать массивом array(22,26)
	$val = 4; //сколько выводить постов на странице
    if ( !is_admin() && $query->is_main_query() && is_category($catID) ) {
        $query->set( 'posts_per_page', $val );
    }
}
add_action( 'pre_get_posts', 'get_posts_4_st' );
?>