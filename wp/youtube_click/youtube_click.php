<?php 
// добавление видео по клику

// для добавления поместить файл в папку
// добавить строку в файл functions.php require_once 'includes/youtube_click.php';
// добавить подобный шорткод на страницу [theme_video ids="qZnuI1Zrdbs, akweI7-LaWc, budU2vvJTYk, GcfKqPMiwwQ, OG9Cs6UFqiY, tiZei_2PUqk"] где ids это код видео с ютуба

// v2.2
// добавление страницы настроек и шаблонное использование на сайте, то есть в одном месте настроил видео и где надо они будут стоять одинаковые
// изменен тайтл страницы опций

function theme_video_func($attrs){
		$attrs = shortcode_atts(array(
			'wrap' => 'div',
			'ids' => '',
			'wrap_classes' => 'theme-video-wrap'
		), $attrs);

		if(!empty($attrs['wrap'])) $result = '<'. $attrs['wrap'] . (!empty($attrs['wrap_classes']) ? ' class="'. $attrs['wrap_classes'] .'"' : '') .'>';

		$ids = explode(',', $attrs['ids']);

		foreach($ids as $id){
			$result .= '<div class="youtube" id="'. trim($id) .'"></div>';
			//$result .= '<iframe src="https://www.youtube.com/embed/'. trim($id) .'?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
		}

		if(!empty($attrs['wrap'])) $result .= '</'. $attrs['wrap'] .'>';
		$result.="<style>.theme-video-wrap{
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}

.theme-video-wrap .youtube,
.theme-video-wrap iframe
{
	width: 49%;
	height: 190px;
    margin-bottom: 20px;
    background-size: cover;
}

.youtube {
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    display: inline-block;
    overflow: hidden;
    transition: all 200ms ease-out;
    cursor: pointer;
}

.youtube .play {
    position: absolute;
    height: 100%;
    width: 100%;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
}

.youtube .play svg{
	transition: all 0.2s ease-out;
	width:  50px;
}

.youtube .play:hover .youtube_color_icon {
    fill: #ffffff!important;
}

</style>
<script>(function ($){
	$(\".youtube\").each(function (){
		$(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

		$(this).append('<div class=\"play\"><svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"	 viewBox=\"0 0 461.001 461.001\" style=\"enable-background:new 0 0 461.001 461.001;\" xml:space=\"preserve\"><path style=\"fill:#F61C0D;\" class=\"youtube_color_icon\" d=\"M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728	c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137	C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607	c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z\"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div>');

		$(document).delegate('#'+this.id, 'click', function() {
			var iframe_url = \"https://www.youtube.com/embed/\" + this.id + \"?autoplay=1&autohide=1\";
			if ($(this).data('params')) iframe_url+='&'+$(this).data('params');

			var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

			$(this).replaceWith(iframe);
		});
	});

})(jQuery)</script>";
		return $result;
}

add_shortcode( 'theme_video', 'theme_video_func' );


// Добавление страницы настроек в тему сайта wordpress с установленным плагином acf pro
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
	'page_title' => 'Дополнительные настройки',
	'menu_title' => 'Дополнительные настройки',
	'menu_slug' => 'theme-general-settings',
	'capability' => 'edit_posts',
	// 'redirect' => false
	));
	acf_add_options_sub_page(array(
	'page_title' => 'Шаблонные шорткоды видео',
	'menu_title' => 'Шаблонные шорткоды видео',
	'menu_slug' => 'shortkod_shablon',
	'parent_slug' => 'theme-general-settings',
	));

};

// функция для извлечения id видео из url ютуба
	function YoutubeCode ($YoutubeCode){
		unset($YoutubeCodeId);
	preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $YoutubeCode, $matches);

	if(isset($matches[2]) && $matches[2] != ''){
	    $YoutubeCodeId = $matches[2];
	    return $YoutubeCodeId;
	};
};

// функция подставки id видео в шорткод
function theme_video_shortkod($atts){
// проверяем есть ли в повторителе данные
if( have_rows('all_shortkod', 'option') ):
 	// перебираем данные
    while ( have_rows('all_shortkod', 'option') ) : the_row();
        // отображаем вложенные поля
$metka_field = get_sub_field('metka');//id шорткода
$all_video = get_sub_field('all_video');//повторитель со сборником видео
$id_video=[];//массив с id роликов


		$metka_arr[]=$metka_field;
		if($atts['metka']==$metka_field){ //совпадение с меткой

		// видео внутри
			foreach ($all_video as  $value) {
				// $value_arr.='|' . $value['video'];
					$id_video[]=YoutubeCode($value['video']);//id video помещаем в новый массив
			}
		// .видео внутри
$id_video_str=implode(",", $id_video);//преобразуем массив в строку разделяемуя запятой

		};//.совпадение с меткой

   endwhile;
endif;


return(do_shortcode('[theme_video ids="'
.$id_video_str
.'"]') 
);
};//theme_video_shortkod

add_shortcode( 'theme_video_shablon', 'theme_video_shortkod' );



?>