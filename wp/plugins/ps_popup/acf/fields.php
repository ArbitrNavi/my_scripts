<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d0b031786390',
	'title' => 'попап',
	'fields' => array(
		array(
			'key' => 'field_5d0b032d7ac68',
			'label' => 'Заголовок',
			'name' => 'ps_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b03467ac69',
			'label' => 'подзагловок',
			'name' => 'ps_sub_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b03507ac6a',
			'label' => 'Надпись вверху слева',
			'name' => 'ps_text_top_left',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b03797ac6b',
			'label' => 'Надпись вверху справа',
			'name' => 'ps_text_top_right',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b03867ac6c',
			'label' => 'Видео ролики',
			'name' => 'ps_video',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 4,
			'max' => 4,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d0b03ae7ac6d',
					'label' => 'id ролика',
					'name' => 'video_id',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
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
					'key' => 'field_5d0b03bc7ac6e',
					'label' => 'Подпись к видео',
					'name' => 'title',
					'type' => 'textarea',
					'instructions' => 'Если нужно выделить слово, необходимо оформить его тегом span
Например: &lt;span&gt;Эксклюзив!!!&lt;/span&gt;',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
			),
		),
		array(
			'key' => 'field_5d0b04247ac6f',
			'label' => 'Надпись внизу слева',
			'name' => 'ps_text_bottom_left',
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
			'key' => 'field_5d0b071e64af5',
			'label' => 'Текст ссылки 1',
			'name' => 'ps_bottom_text_link_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b043f7ac70',
			'label' => 'Ссылка 1 внизу',
			'name' => 'ps_bottom_link_1',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'page',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
		array(
			'key' => 'field_5d0b073664af6',
			'label' => 'Текст ссылки 2',
			'name' => 'ps_bottom_text_link_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5d0b045d7ac71',
			'label' => 'Ссылка 2 внизу',
			'name' => 'ps_bottom_link_2',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
				1 => 'page',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'allow_archives' => 1,
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
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