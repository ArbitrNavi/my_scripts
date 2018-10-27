<?php
// вставка текста в контент после тега p


// включено ли произвольное поле(acf)
if (get_field('show_link')) {

// if audio тип страницы audio
if( has_post_format( 'audio' ) ) {

// фильтр для обработки контента нашей функцией
add_filter('the_content', 'kama_content_advertise', -10 );

// функция обработки контента
function kama_content_advertise( $text, $num = false ){
	if( ! is_singular() ) return $text; // убедимся что мы на отдельной странице

	if( ! $num ) $num = 0;

	// Код рекламы
	ob_start();
	?>


<?php
// массив для произвольных полей
	$links_ads = array();

	// if mobile отображаем только если это мобильные устройства

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android')!==false) {
	// отображаем только на андроидах
	$links_ads[1] = array(0 => get_field('google_podcast'), 1 => 'Google Podcaster');
	$links_ads[2] = array(0 => get_field('spotify'), 1 => 'Spotify Podcaster');
	$links_ads[3] = array(0 => get_field('acast'), 1 => 'Acast Podcaster');
	$links_ads[4] = array(0 => get_field('overcast'), 1 => 'Overcast Podcaster');
}elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')!==false||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')!==false) {
	// отображаем на iPad и iPhone
	$links_ads[0] = array(0 => get_field('apple_podcast'), 1 => 'Apple Podcaster');
	$links_ads[2] = array(0 => get_field('spotify'), 1 => 'Spotify Podcaster');
	$links_ads[3] = array(0 => get_field('acast'), 1 => 'Acast Podcaster');
	$links_ads[4] = array(0 => get_field('overcast'), 1 => 'Overcast Podcaster');
}
// .if mobile


// перебираем произвольные поля и подставляем данные
	foreach ($links_ads as $key => $item) {
		// подставляем данные в теги
		if ($item[0]) { ?>
	                <a href="<?php echo $item[0]; ?>" target="_blank">Lyssna i <?php echo $item[1]; ?></a>
	    	<?php };//if ?>
	    <?php };//foreach ?>

	<?php
	$adsense = ob_get_clean();

	// Раскомментируйте, если нужно вставить блок сразу перед тегом <!--more-->
	# return str_replace('<!--more-->', $adsense.'<!--more-->', $text);

	// регулярка, которая определяет после чего будет вставляться наша реклама
	return preg_replace('~[^^]{'. $num .'}.*?(?:\r?\n\r?\n|</p>)~su', "\${0}$adsense", trim( $text ), 1);
};//kama_content_advertise
};//if audio


};//if show_link
?>