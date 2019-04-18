<?php 
// Автоматическое добавление тайтла к картинкам
if ( !function_exists('avd_insert_image_title') ) : 
function avd_insert_image_title( $html, $id, $attachment ) {
    if ( !strpos($html, "title=") ) {
        $html = str_replace('<img', '<img title="'. get_the_title( $id ) .'"' , $html);
    }
    return $html;
}
endif;
add_filter( 'media_send_to_editor', 'avd_insert_image_title', 10, 3 );
 ?>