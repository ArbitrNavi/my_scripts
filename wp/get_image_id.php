<?php
//получения id картинки по ее адерсу(url)
function get_image_id( $image_url ) {

    global $wpdb;
    // Если нет url - вернем false

    if ( '' == $image_url ) {
        return false;
    }
    // получим директорию загрузки
    $upload_dir_paths = wp_upload_dir();

    // удаляем лишнее из адреса картинки(например размеры миниатюры)
    $image_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', trim( $image_url ) );

    // удаляем путь загрузки
    $image_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $image_url );

    // поиск картинки в базе
    $attachment = $wpdb->get_results( "SELECT $wpdb->posts.ID FROM $wpdb->posts WHERE $wpdb->posts.guid LIKE '%{$image_url}';", ARRAY_N );

    return ( ! empty( $attachment[0][0] ) ) ? $attachment[0][0] : false;

}
?>