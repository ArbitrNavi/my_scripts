<?php 
// создание произвольной страницы используя плагин acf 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'микроразметка',
		'menu_title'	=> 'микроразметка',
		'menu_slug' 	=> 'schema.org',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));
	
};

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cc07cc715aee',
	'title' => 'микроразметка',
	'fields' => array(
		array(
			'key' => 'field_5cc07d906ae13',
			'label' => 'SEO плагин',
			'name' => 'shema_seo_plugin',
			'type' => 'radio',
			'instructions' => 'Какой сео плагин используется на сайте',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yeast' => 'yeast',
				'all_seo' => 'all_seo',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'yeast',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5cc07cdd6ae11',
			'label' => 'Протокол',
			'name' => 'shema_protocol',
			'type' => 'radio',
			'instructions' => 'Подключен ли ssl сертификат, сайт начинается с https или c	http',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'http' => 'http',
				'https' => 'https',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'http',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5cc07dda6ae14',
			'label' => 'Title',
			'name' => 'shema_title',
			'type' => 'text',
			'instructions' => 'Заголовок сайта, если не будет в мета полях, то есть по умолчанию',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07d5a6ae12',
			'label' => 'Description по умолчанию',
			'name' => 'shema_description',
			'type' => 'textarea',
			'instructions' => 'Описание сайта, если не будет в мета полях, то есть по умолчанию',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5cc07e006ae15',
			'label' => 'Год',
			'name' => 'shema_year',
			'type' => 'number',
			'instructions' => 'Копирайтинг - год',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5cc07e116ae16',
			'label' => 'Лого',
			'name' => 'shema_logo',
			'type' => 'image',
			'instructions' => 'Лого сайта или компании',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5cc07e336ae17',
			'label' => 'Телефон',
			'name' => 'shema_tel',
			'type' => 'text',
			'instructions' => 'номер телефона',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07e496ae18',
			'label' => 'Email',
			'name' => 'shema_email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5cc07e5b6ae19',
			'label' => 'Адрес',
			'name' => 'shema_adress',
			'type' => 'text',
			'instructions' => 'Полный адрес',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07e6e6ae1a',
			'label' => 'Адрес город',
			'name' => 'shema_adress_sity',
			'type' => 'text',
			'instructions' => 'Город только',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07e7c6ae1b',
			'label' => 'Адрес регион',
			'name' => 'shema_adress_region',
			'type' => 'text',
			'instructions' => 'Регион только',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07e8e6ae1c',
			'label' => 'Название компании',
			'name' => 'shema_company',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc07e9e6ae1d',
			'label' => 'цена минимум',
			'name' => 'shema_price_min',
			'type' => 'number',
			'instructions' => 'Минимальная цена на услуги/товары',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5cc07eaa6ae1e',
			'label' => 'цена максимум',
			'name' => 'shema_price_max',
			'type' => 'text',
			'instructions' => 'Максимальная цена на услуги/товары',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cc083c732def',
			'label' => 'Валюта',
			'name' => 'shema_value',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'schema.org',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif; ?>