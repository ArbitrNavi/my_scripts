<?php
// добавление произвольных полей в запись
// Создаем массив значений для записи
$post_data = array(
	'post_author'    => '1',                                                     // ID автора записи
	'post_status'    => 'private',         // Статус создаваемой записи.
	'post_title'     => $name,                                                   // Заголовок (название) записи.
	'post_type'      => 'submissions', // Тип записи.
	'meta_input'     => array(
		'email'=>$email,
		'phone'=>$phone,
		'request'=>$request,
		'date'=>$date,
		'type'=>$type,
		'number_guests'=>$number_guests,
		'subscribe'=>$subscribe,
	),                             // добавит указанные мета поля. По умолчанию: ''. с версии 4.4.
);

// Вставляем данные в БД
$post_id = wp_insert_post( wp_slash($post_data) );

?>