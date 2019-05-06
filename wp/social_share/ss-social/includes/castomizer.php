<?php

if(!function_exists('ss_social_customize_panel')){

	function ss_social_customize_panel($wp_customize){

		$wp_customize->add_section('ss-social-panel', array(
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'title' => 'Социальные сети',
			'description' => 'Социальные сети от плагина SS Social'
		));

		$wp_customize->add_setting('ss-social-links-vk', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ss-social-links-vk', array(
			'label' => 'Ссылка на VK',
			'section' => 'ss-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ss-social-links-fb', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ss-social-links-fb', array(
			'label' => 'Ссылка на Facebook',
			'section' => 'ss-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ss-social-links-youtube', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ss-social-links-youtube', array(
			'label' => 'Ссылка на Youtube',
			'section' => 'ss-social-panel',
			'type' => 'text',
			'priority' => '9'
		));

		$wp_customize->add_setting('ss-social-links-g-plus', array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage'
		));

		$wp_customize->add_control('ss-social-links-g-plus', array(
			'label' => 'Ссылка на Google+',
			'section' => 'ss-social-panel',
			'type' => 'text',
			'priority' => '9'
		));
	}

}

if(!function_exists('ss_social_customizer')){
	function ss_social_customizer($wp_customize){
		if(function_exists('ss_social_customize_panel')) ss_social_customize_panel($wp_customize);
	}
}

if(function_exists('ss_social_customizer')) add_action('customize_register', 'ss_social_customizer');

?>