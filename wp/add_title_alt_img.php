<?php 
/**
 * Заполняет поле для атрибута alt на основе заголовка изображения при его вставки в контент поста.
 *
 * @param array $response
 *
 * @return array
 */
function change_empty_alt_to_title( $response ) {
	if ( ! $response['alt'] ) {
		$response['alt'] = sanitize_text_field( $response['title'] );
	}

	return $response;
}

add_filter( 'wp_prepare_attachment_for_js', 'change_empty_alt_to_title' );

// Через фильтр проходят подобные данные (содержимое переменной $response):
// Array
// (
// 	[id] => 291
// 	[title] => семенной картофель в коробках
// 	[filename] => семенной-картофель-в-коробках.jpg
// 	[url] => http://wp-test.ru/wp-content/uploads/2019/02/семенной-картофель-в-коробках.jpg
// 	[link] => http://wp-test.ru/%d1%80%d0%b5%d0%ba%d0%bb%d0%b0%d0%bc%d0%b0-4/%d1%81%d0%b5%d0%bc%d0%b5%d0%bd%d0%bd%d0%be%d0%b9-%d0%ba%d0%b0%d1%80%d1%82%d0%be%d1%84%d0%b5%d0%bb%d1%8c-%d0%b2-%d0%ba%d0%be%d1%80%d0%be%d0%b1%d0%ba%d0%b0%d1%85/
// 	[alt] => 
// 	[author] => 1
// 	[description] => 
// 	 => 
// 	[name] => %d1%81%d0%b5%d0%bc%d0%b5%d0%bd%d0%bd%d0%be%d0%b9-%d0%ba%d0%b0%d1%80%d1%82%d0%be%d1%84%d0%b5%d0%bb%d1%8c-%d0%b2-%d0%ba%d0%be%d1%80%d0%be%d0%b1%d0%ba%d0%b0%d1%85
// 	[status] => inherit
// 	[uploadedTo] => 253
// 	[date] => 1553934323000
// 	[modified] => 1553934323000
// 	[menuOrder] => 0
// 	[mime] => image/jpeg
// 	[type] => image
// 	[subtype] => jpeg
// 	[icon] => http://wp-test.ru/wp-includes/images/media/default.png
// 	[dateFormatted] => 30.03.2019
// 	[nonces] => Array
// 		(
// 			[update] => 1b5fa93d47
// 			[delete] => ac1bd4e05d
// 			[edit] => 1cfee6cba3
// 		)

// 	[editLink] => http://wp-test.ru/wp-admin/post.php?post=291&action=edit
// 	[meta] => 
// 	[authorName] => campusboy
// 	[uploadedToLink] => http://wp-test.ru/wp-admin/post.php?post=253&action=edit
// 	[uploadedToTitle] => Реклама 4
// 	[filesizeInBytes] => 41842
// 	[filesizeHumanReadable] => 41 KB
// 	[context] => 
// 	[height] => 451
// 	[width] => 600
// 	[orientation] => landscape
// 	[sizes] => Array
// 		(
// 			[thumbnail] => Array
// 				(
// 					[height] => 150
// 					[width] => 150
// 					[url] => http://wp-test.ru/wp-content/uploads/2019/02/семенной-картофель-в-коробках-150x150.jpg
// 					[orientation] => landscape
// 				)

// 			[medium] => Array
// 				(
// 					[height] => 226
// 					[width] => 300
// 					[url] => http://wp-test.ru/wp-content/uploads/2019/02/семенной-картофель-в-коробках-300x226.jpg
// 					[orientation] => landscape
// 				)

// 			[full] => Array
// 				(
// 					[url] => http://wp-test.ru/wp-content/uploads/2019/02/семенной-картофель-в-коробках.jpg
// 					[height] => 451
// 					[width] => 600
// 					[orientation] => landscape
// 				)

// 		)

// 	[compat] => Array
// 		(
// 			[item] => 
// 			[meta] => 
// 		)

// )

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