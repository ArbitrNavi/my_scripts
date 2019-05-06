<?php 

class SS_Social{

	function __construct(){
		add_action('wp_enqueue_scripts', array($this, 'ss_social_scripts'));
		add_shortcode('ss-social', array($this, 'add_social_shortcode'));
	}

	function add_social_shortcode($atts){

		$result = '<div class="ss-social links circle">';

		if($vk_link = get_option('ss-social-links-vk', '')) $result .= '<a href="'. $vk_link .'" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>';
		if($fb_link = get_option('ss-social-links-fb', '')) $result .= '<a href="'. $fb_link .'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
		if($youtube_link = get_option('ss-social-links-youtube', '')) $result .= '<a href="'. $youtube_link .'" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';
		if($g_plus_link = get_option('ss-social-links-g-plus', '')) $result .= '<a href="'. $g_plus_link .'" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';

		$result .= '</div>';

		return $result;
	}

	function ss_social_scripts(){
		wp_enqueue_style('ss-social-styles', STYLES_URL .'styles.css', array(), false);
		wp_enqueue_style('font-awesome', LIBRARIS_URL .'font-awesome-4.7.0/css/font-awesome.min.css', array(), false);
	}
}