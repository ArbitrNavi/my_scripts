<?php
/**
 * Заполняет поле для атрибута alt на основе заголовка Записи у картинки при её добавлении в контент.
 *
 * @param array $response
 *
 * @return array
 */
function change_empty_alt_to_title( $response ) {
	if ( ! $response['alt'] ) {
		$response['alt'] = sanitize_text_field( $response['uploadedToTitle'] );
	}

	return $response;
}

add_filter( 'wp_prepare_attachment_for_js', 'change_empty_alt_to_title' );
?>