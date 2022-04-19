<?php

if(!function_exists('ivan_social_customize_panel')){
	function ivan_social_customize_panel($wp_customize){
		$wp_customize->add_section('ivan-social-panel', array(
			'priority' => 13,
			'capability' => 'edit_theme_options',
			'title' => 'Социальные сети',
			'description' => 'Социальные сети от плагина ivan Social'
		));
	}
}


if(!function_exists('ivan_social_customizer')){
	function ivan_social_customizer($wp_customize){
		if(function_exists('ivan_social_customize_panel')) ivan_social_customize_panel($wp_customize);
		
		$wp_customize->add_setting('ivan-social-links-vk', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-vk', array(
			'label' => 'Ссылка на VK',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-fb', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-fb', array(
			'label' => 'Ссылка на Facebook',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-instagram', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-instagram', array(
			'label' => 'Ссылка на Instagram',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-youtube', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-youtube', array(
			'label' => 'Ссылка на Youtube',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-g-plus', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-g-plus', array(
			'label' => 'Ссылка на Google+',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-odnoklassniki', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-odnoklassniki', array(
			'label' => 'Ссылка на Однокласники',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-twitter', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-twitter', array(
			'label' => 'Ссылка на Твиттер',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ivan-social-links-telegram', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ivan-social-links-telegram', array(
			'label' => 'Ссылка на Телеграм',
			'section' => 'ivan-social-panel',
			'type' => 'text',
			'priority' => '9'
		));
	}
}

if(function_exists('ivan_social_customizer')) add_action('customize_register', 'ivan_social_customizer');

?>