<?php
/**
 * Plugin Name: Ajax подгузка видео роликов
 * Description: Позволяет загружать ролик только после нажатия на на него, изначально грузиться только изображения этого ролика, что существенно снижает нагрузку при загрузке страницы.
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван	
 * Version:     2.3
 *
 * Text Domain: Идентификатор перевода, указывается в load_plugin_textdomain()
 * Domain Path: Путь до файла перевода. Нужен если файл перевода находится не в той же папке, в которой находится текущий файл.
 *              Например, .mo файл находится в папке myplugin/languages, а файл плагина в myplugin/myplugin.php, тогда тут указываем "/languages"
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:     Укажите "true" для возможности активировать плагин по все сети сайтов (для Мультисайтовой сборки).
 */

// код
// добавление видео по клику

// для добавления поместить файл в папку
// добавить строку в файл functions.php require_once 'includes/youtube_click.php';
// добавить подобный шорткод на страницу [theme_video ids="qZnuI1Zrdbs, akweI7-LaWc, budU2vvJTYk, GcfKqPMiwwQ, OG9Cs6UFqiY, tiZei_2PUqk"] где ids это код видео с ютуба

// v2.2
// добавление страницы настроек и шаблонное использование на сайте, то есть в одном месте настроил видео и где надо они будут стоять одинаковые
// изменен тайтл страницы опций

// v2.3 
// добавил шорткод theme_video_resp позволяющий выводить одиночные видео во всю ширину, пропорционально задавая высоту, по умолчанию это 16:9

//Добавляем шорткод
add_shortcode('test_shortcode','my_shortcode_output');
//выводим на экран
function my_shortcode_output($atts, $content = '', $tag){
    $html = '';
    $html .= '<p>Hello World</p>';
    return $html;
}

// страница настроек
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_page.php';

// Настройки группы полей для данной страницы
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_meta_options.php';

// извлечь id видео из url youtube
require_once plugin_dir_path( __FILE__ ) . 'includes/youtube/id_url_youtube.php';

// шорткод вывода видео блоков по переданным id роликов
require_once plugin_dir_path( __FILE__ ) . 'includes/youtube/shortcode_theme_video.php';

// шорткод вывода видео блоков по переданным id роликов
require_once plugin_dir_path( __FILE__ ) . 'includes/youtube/shortcode_video_responsive.php';

// функция подставки id видео в шорткод из страницы опций acf
require_once plugin_dir_path( __FILE__ ) . 'includes/youtube/shortcode_theme_video_shablon.php';

// гугл карта выходит когда скроллим вниз
require_once plugin_dir_path( __FILE__ ) . 'includes/google_maps/google_maps_scroll.php';




// Подключение стилей и скриптов
require_once plugin_dir_path( __FILE__ ) . 'includes/add_style_scripts.php';