<?php

/**
 *ivan_Social class
 * @ver 1.1
 *
 * Version 1.1 added shortcode params, now you can edit wraper and here class attribute, edit title, here wrap container and here class attribute.
 */

class ivan_Social
{

	function __construct() {
		add_action('wp_enqueue_scripts', array($this, 'ivan_social_scripts'));
		add_shortcode('ivan-social', array($this, 'add_social_shortcode'));
		add_shortcode('ivan-social-share', array($this, 'add_social_share_shortcode'));
	}

	function icon_social_svg($social_name) {
		switch ($social_name) {
			case 'vk':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M31.4907 63.4907C0 94.9813 0 145.671 0 247.04V264.96C0 366.329 0 417.019 31.4907 448.509C62.9813 480 113.671 480 215.04 480H232.96C334.329 480 385.019 480 416.509 448.509C448 417.019 448 366.329 448 264.96V247.04C448 145.671 448 94.9813 416.509 63.4907C385.019 32 334.329 32 232.96 32H215.04C113.671 32 62.9813 32 31.4907 63.4907ZM75.6 168.267H126.747C128.427 253.76 166.133 289.973 196 297.44V168.267H244.16V242C273.653 238.827 304.64 205.227 315.093 168.267H363.253C359.313 187.435 351.46 205.583 340.186 221.579C328.913 237.574 314.461 251.071 297.733 261.227C316.41 270.499 332.907 283.63 346.132 299.751C359.357 315.873 369.01 334.618 374.453 354.747H321.44C316.555 337.262 306.614 321.61 292.865 309.754C279.117 297.899 262.173 290.368 244.16 288.107V354.747H238.373C136.267 354.747 78.0267 284.747 75.6 168.267Z"/></svg>';
				break;

			case 'facebook':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>';
				break;

			case 'twitter':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>';
				break;

			case 'google-plus':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"/></svg>';
				break;

			case 'odnoklasniki':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M275.1 334c-27.4 17.4-65.1 24.3-90 26.9l20.9 20.6 76.3 76.3c27.9 28.6-17.5 73.3-45.7 45.7-19.1-19.4-47.1-47.4-76.3-76.6L84 503.4c-28.2 27.5-73.6-17.6-45.4-45.7 19.4-19.4 47.1-47.4 76.3-76.3l20.6-20.6c-24.6-2.6-62.9-9.1-90.6-26.9-32.6-21-46.9-33.3-34.3-59 7.4-14.6 27.7-26.9 54.6-5.7 0 0 36.3 28.9 94.9 28.9s94.9-28.9 94.9-28.9c26.9-21.1 47.1-8.9 54.6 5.7 12.4 25.7-1.9 38-34.5 59.1zM30.3 129.7C30.3 58 88.6 0 160 0s129.7 58 129.7 129.7c0 71.4-58.3 129.4-129.7 129.4s-129.7-58-129.7-129.4zm66 0c0 35.1 28.6 63.7 63.7 63.7s63.7-28.6 63.7-63.7c0-35.4-28.6-64-63.7-64s-63.7 28.6-63.7 64z"/></svg>';
				break;

			case 'telegram':
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z"/></svg>';
				break;

			default:
				$resoult = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z"/></svg>';
				break;
		}

		$resoult = '<span class="ivan_wrap_social_icon">' . $resoult . '</span>';
		return $resoult;
	}

	function add_social_shortcode($atts) {
		$atts = shortcode_atts(array(
			'wrap'             => 'div',
			'wrap_class'       => '',
			'wrap_title'       => 'h3',
			'wrap_title_class' => '',
			'title'            => 'Мы в социальных сетях: ',
			'before_links'     => '',
			'after_links'      => '',
			'link_class'       => 'ivan-social-item'
		), $atts);

		$result = !empty($atts['wrap']) ? '<' . $atts['wrap'] . ' class="ivan-social' . (!empty($atts['wrap_class']) ? ' ' . $atts['wrap_class'] : '') . '">' : '';

		$result .= !empty($atts['wrap_title']) ? '<' . $atts['wrap_title'] . '' . (!empty($atts['wrap_title_class']) ? ' class="' . $atts['wrap_title_class'] . '"' : '') . '>' . $atts['title'] . '</' . $atts['wrap_title'] . '>' : '';

		$result .= !empty($atts['before_links']) ? $atts['before_links'] : '';

		if ($vk_link = get_option('ivan-social-links-vk', '')) $result .= '<a href="' . $vk_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' vk-social-link"' : '') . ' target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>';
		if ($fb_link = get_option('ivan-social-links-fb', '')) $result .= '<a href="' . $fb_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' facebook-social-link"' : '') . ' target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
		if ($instagram_link = get_option('ivan-social-links-instagram', '')) $result .= '<a href="' . $instagram_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' instagram-social-link"' : '') . ' target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
		if ($youtube_link = get_option('ivan-social-links-youtube', '')) $result .= '<a href="' . $youtube_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' youtube-social-link"' : '') . ' target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';
		if ($g_plus_link = get_option('ivan-social-links-g-plus', '')) $result .= '<a href="' . $g_plus_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' google-plus-social-link"' : '') . ' target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
		if ($odnoklassniki_link = get_option('ivan-social-links-odnoklassniki', '')) $result .= '<a href="' . $odnoklassniki_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' odnoklassniki-social-link"' : '') . ' target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>';
		if ($telegram_link = get_option('ivan-social-links-telegram', '')) $result .= '<a href="' . $telegram_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' telegram-social-link"' : '') . ' target="_blank"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>';
		if ($twitter_link = get_option('ivan-social-links-twitter', '')) $result .= '<a href="' . $twitter_link . '"' . (!empty($atts['link_class']) ? ' class="' . $atts['link_class'] . ' twitter-social-link"' : '') . ' target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';

		$result .= !empty($atts['after_links']) ? $atts['after_links'] : '';

		$result .= !empty($atts['wrap']) ? '</' . $atts['wrap'] . '>' : '';

		return $result;
	}

	function add_social_share_shortcode($atts) {
		$atts = shortcode_atts(array(
			'wrap'               => 'div',
			'wrap_class'         => '',
			'wrap_title'         => 'h3',
			'wrap_title_class'   => '',
			'title'              => 'Мы в социальных сетях: ',
			'before_links'       => '',
			'after_links'        => '',
			'link_class'         => 'ivan-social-item',
			'vk-share'           => true,
			'facebook-share'     => true,
			'twitter-share'      => true,
			'google-plus-share'  => true,
			'odnoklasniki-share' => true,
			'telegram-share'     => true,
			'link'               => get_the_permalink(),
			'text'               => 'Поделиться',
			'title_page'         => '',
			'description_page'   => '',
			'image_page'         => ''
		), $atts);

		$resoult = '
				<div class="ivan_share">
					<div class="button-share__wrapper">
						<span class="button-share social_share"><a href="#" class="ivan_share_link_open">' . $this->icon_social_svg('') . 'Поделиться</a></span>
					<div class="wrap-window-share">
					<div class="window-share">';

		if (!empty($atts['vk-share'])) {
			$social_name = 'vk';
			$resoult .= '<a class="ivan-social-share vk-share" onclick="window.open(\'https://vk.com/share.php?url=' . urlencode($atts['link']) . '\',\'pmw\',\'scrollbars=1,top=0,left=0,resizable=1,width=680,height=350\');">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		if (!empty($atts['facebook-share'])) {
			$social_name = 'facebook';
			$resoult .= '<a class="ivan-social-share facebook-share" onclick="window.open(\'https://facebook.com/sharer/sharer.php?app_id=948645581949079&amp;kid_directed_site=0&amp;sdk=joey&amp;u=' . urlencode($atts['link']) . '&amp;display=popup&amp;ref=plugin&amp;src=share_button\',\'pmw\',\'scrollbars=1,top=0,left=0,resizable=1,width=680,height=350\');">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		if (!empty($atts['twitter-share'])) {
			$social_name = 'twitter';
			$resoult .= '<a class="ivan-social-share twitter-share" href="http://twitter.com/share?text=' . $atts['title_page'] . '&via=twitterfeed&hashtags=&url=' . $atts['link'] . '" class="twitter-share-button" title="Поделиться ссылкой в Твиттере" onclick="window.open(this.href, this.title, \'toolbar=0, status=0, width=548, height=325\'); return false" target="_parent">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		if (!empty($atts['google-plus-share'])) {
			$social_name = 'google-plus';
			$resoult .= '<a class="ivan-social-share google-plus-share" href="//plus.google.com/share?app=110&amp;url=' . urlencode($atts['link']) . '" target="_blank" onclick="window.open(this.href,\'\',\'scrollbars=1,resizable=1,width=400,height=620\');return false;">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		if (!empty($atts['odnoklasniki-share'])) {
			$social_name = 'odnoklasniki';
			$resoult .= '<a class="ivan-social-share odnoklasniki-share" href="https://connect.ok.ru/offer?url=' . urlencode($atts['link']) . '&title=' . addslashes($atts['title_page']) . '&description=' . addslashes($atts['description_page']) . '&imageUrl=' . urlencode($atts['image_page']) . '" target="_blank" onclick="window.open(this.href,\'\',\'scrollbars=1,resizable=1,width=400,height=620\');return false;">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		if (!empty($atts['telegram-share'])) {
			$social_name = 'telegram';
			$resoult .= '<a class="ivan-social-share telegram-share" href="https://telegram.me/share/url?url=' . urlencode($atts['link']) . '&text=' . addslashes($atts['description_page']) . '" target="_blank" onclick="window.open(this.href,\'\',\'scrollbars=1,resizable=1,width=400,height=620\');return false;">' . $this->icon_social_svg($social_name) . $atts['text'] . '</a>';
		}

		$resoult .= '</div></div></div></div>';

		return $resoult;
	}

	function ivan_social_scripts() {
		wp_enqueue_style('ivan-social-styles', STYLES_URL . 'styles.css', array(), false);
		wp_enqueue_script('ivan-social-vk-share', 'https://vk.com/js/api/share.js?95', array(), '', false);
		wp_enqueue_script('ivan-social-scripts', SCRIPTS_URL . 'scripts.js', array('jquery'), '0.1', true);
		wp_add_inline_script('ivan-social-scripts', 'window.___gcfg = {lang: \'ru\'}; (function() { var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true; po.src = \'https://apis.google.com/js/platform.js\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s); })();', 'after');
		wp_add_inline_script('ivan-social-scripts', '(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = \'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11&appId=948645581949079\';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, \'script\', \'facebook-jssdk\'));', 'after');
	}
}