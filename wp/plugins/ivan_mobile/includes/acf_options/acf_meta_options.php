<?php 			if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_6294be8bde7d8',
		'title' => 'Мобильная версия',
		'fields' => array(
			array(
				'key' => 'field_6295b0e2acfd2',
				'label' => 'Отображать мобильное меню с шапкой',
				'name' => 'mobile_menu_is_visible',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_6295b11bacfd3',
				'label' => 'Отображать нижнюю полосу',
				'name' => 'mobile_line_is_visible',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_62957e9271236',
				'label' => 'Содержимое шапки',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6295b0e2acfd2',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6294be96f8daf',
				'label' => 'Логотип в мобильной версии',
				'name' => 'mobile-header__logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '15',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
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
				'key' => 'field_6294c4edf8db0',
				'label' => 'Название сайта',
				'name' => 'mobile-header__title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '15',
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
				'key' => 'field_6294c525f8db1',
				'label' => 'Описание сайта',
				'name' => 'mobile-header__description',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '15',
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
				'key' => 'field_6294c534f8db2',
				'label' => 'Номер телефона',
				'name' => 'menu-header__tel',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '15',
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
				'key' => 'field_6294c546f8db3',
				'label' => 'Email',
				'name' => 'menu-header__email',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '15',
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
				'key' => 'field_6294c7ca9feff',
				'label' => 'Данные под раскрывающемся меню',
				'name' => 'mobile-block__info',
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
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_6294c8219ff00',
						'label' => 'Параграфы',
						'name' => 'mobile-block__text',
						'type' => 'textarea',
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
						'maxlength' => '',
						'rows' => 2,
						'new_lines' => 'br',
					),
				),
			),
			array(
				'key' => 'field_62958236864b9',
				'label' => 'Стили шапки',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6295b0e2acfd2',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_629589a022d16',
				'label' => 'При какой ширине отображать',
				'name' => 'mobile-width',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 1200,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_62958a71c52a6',
				'label' => 'Какие элементы скрыть',
				'name' => 'mobile-elements-hidden',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '.class1, class3, #id1, #id2',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62957ed6e4a53',
				'label' => 'Ширина отступов',
				'name' => 'mobile-padding',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 10,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_62957fdae4a57',
				'label' => 'Высота мобильной шапки',
				'name' => 'mh-height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 60,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_62957f35e4a54',
				'label' => 'Цвет фона',
				'name' => 'mobile-bg',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(48,140,235,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_62957f75e4a55',
				'label' => 'Цвет текста',
				'name' => 'mobile-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(255,255,255,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_62957ffee4a58',
				'label' => 'Ширина логотипа',
				'name' => 'mh__logo-width',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 50,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6295800de4a59',
				'label' => 'Заголовок сайта, размер шрифта',
				'name' => 'mh__title-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 26,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6295808be4a5a',
				'label' => 'Описание сайта, размер шрифта',
				'name' => 'mh__description-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 10,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_629580aee4a5b',
				'label' => 'Телефон, размер шрифта',
				'name' => 'mh__tel-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 18,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_629580c2e4a5c',
				'label' => 'Email, размер шрифта',
				'name' => 'mh__email-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 12,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_62958247864ba',
				'label' => 'Стили меню',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6295b0e2acfd2',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6296fdb98c059',
				'label' => 'Направление текста',
				'name' => 'mobile-textalign',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => 'Слева',
				'ui_off_text' => 'Справа',
			),
			array(
				'key' => 'field_62958116e4a5d',
				'label' => 'Цвет текста, при наведении в меню',
				'name' => 'mb-color-hover',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(2, 2, 2, 0.46)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_6295818ce4a5e',
				'label' => 'Размер текста в меню',
				'name' => 'mb-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 16,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_629581b9e4a5f',
				'label' => 'текст под меню, размер',
				'name' => 'mb__text-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 14,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_629581eae4a60',
				'label' => 'email под меню, размер',
				'name' => 'mb__email-fontsize',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 12,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6295903b69632',
				'label' => 'Линия внизу',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6295b11bacfd3',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 1,
			),
			array(
				'key' => 'field_6295ad2987958',
				'label' => 'При какой ширине отображать',
				'name' => 'mobile_line_width_visible',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => 1200,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6295ad5987959',
				'label' => 'При какой ширине выровнять по всей ширине кнопки',
				'name' => 'mobile_line_width_between',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => 580,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6295ae2343569',
				'label' => 'Какие элементы скрыть',
				'name' => 'mobile_line-elements-hidden',
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
				'placeholder' => '.class1, class3, #id1, #id2',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62958dd56962e',
				'label' => 'Линия внизу',
				'name' => 'mobile_line',
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
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_62958df26962f',
						'label' => 'Заголовок меню',
						'name' => 'title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
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
						'key' => 'field_62958e2169630',
						'label' => 'Ссылка',
						'name' => 'link',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
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
						'key' => 'field_62958e8569631',
						'label' => 'Цвет кнопки',
						'name' => 'bg_color',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 1,
						'return_format' => 'string',
					),
					array(
						'key' => 'field_6295aa5affbd5',
						'label' => 'Цвет текста',
						'name' => 'text_color',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '20',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 1,
						'return_format' => 'string',
					),
				),
			),
			array(
				'key' => 'field_629590b1b2013',
				'label' => 'Стили',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_6295b11bacfd3',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'placement' => 'top',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_6295afaca6d25',
				'label' => 'Высота строки',
				'name' => 'ml-height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 85,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_6297048df4135',
				'label' => 'Высота кнопки',
				'name' => 'ml-btn-height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 47,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_629597d4fb5e5',
				'label' => 'Размер шрифта',
				'name' => 'ml-font-size',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 14,
				'placeholder' => 'px',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_62959808fb5e6',
				'label' => 'Заглавные буквы',
				'name' => 'ml-text-transform',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_6295983bfb5e7',
				'label' => 'Фон линии',
				'name' => 'ml-block-bg',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(74,120,149,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_629598a6fb5e8',
				'label' => 'Цвет обводки линии',
				'name' => 'ml-block-border-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(0, 0, 0,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_629598f8fb5e9',
				'label' => 'Цвет текста',
				'name' => 'ml-btn-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => '#ffffff',
				'enable_opacity' => 0,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_6295991ffb5ea',
				'label' => 'Цвет фона кнопки',
				'name' => 'ml-btn-bg-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(74,120,149,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_6295995efb5eb',
				'label' => 'Цвет фона кнопки телефона',
				'name' => 'ml-btn-phone-bg-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(212,56,44,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_6295bec3afa98',
				'label' => 'Цвет текста кнопки телефона',
				'name' => 'ml-btn-phone-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'rgba(212,56,44,1)',
				'enable_opacity' => 1,
				'return_format' => 'string',
			),
			array(
				'key' => 'field_6295c29211b33',
				'label' => 'Поставить иконку телефона?',
				'name' => 'ml-btn-phone-is_icon',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '20',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'mobile_block',
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
		'show_in_rest' => 0,
	));

endif;		 ?>