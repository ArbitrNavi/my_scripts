<?php
/**
 * Plugin Name: Ajax подгузка видео роликов
 * Description: Вставка видео с ютуба. Одно видео [theme_video_resp id="qZnuI1Zrdbs"]. Несколько видео [theme_video ids="qZnuI1Zrdbs, akweI7-LaWc"]. Вывод из "Шаблонные шорткоды видео" [theme_video_shablon metka="reklama"], metka="all" - вывесит все видео. Пропорции: size="16by9|4by3|2by1|1by1". Отступы верх:margin_top, низ:margin_bottom, значение без px. [theme_video_resp id="qZnuI1Zrdbs"  size="16by9" margin_top="100" margin_bottom="50"]
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван
 * Version:     3.22
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
// добавить подобный шорткод на страницу
// [theme_video ids="qZnuI1Zrdbs, akweI7-LaWc, budU2vvJTYk, GcfKqPMiwwQ, OG9Cs6UFqiY, tiZei_2PUqk"] где ids это код видео с ютуба

// v2.2
// добавление страницы настроек и шаблонное использование на сайте, то есть в одном месте настроил видео и где надо они будут стоять одинаковые
// изменен тайтл страницы опций

// v2.3
// добавил шорткод theme_video_resp позволяющий выводить одиночные видео во всю ширину, пропорционально задавая высоту, по умолчанию это 16:9

// v2.4
// Изменил описания, добавил примеры шорткодов, закомментировал тестовый шорткод

// //Добавляем шорткод
// add_shortcode('test_shortcode','my_shortcode_output');
// //выводим на экран
// function my_shortcode_output($attrs, $content = '', $tag){
//     $html = '';
//     $html .= '<p>Hello World</p>';
//     return $html;
// }

// v2.5
// Добавил возможность выбора пропорций для вывода нескольких видео
// так же добавлен адаптив, при размере экрана менее 600px в ряд становится по одному видео

// v2.6
// Исправлена значек плей, сделал ка как на ютубе

// v3.0
// удалил много js кода, сделал вывод изображений через php, добавил вывод в модальных окнах, добавил библиотеку jquery.modal. Исправил баг с дублированием внутреннего элемента. Сделал точный отступ в 10px между видео

// v3.1
// увеличил z-index модального окна

// v3.2
// изменил класс вызова модального окна с .modal на ay_modal. Сделал из за конфликта с бутстрапом

// v3.3
// изменил вывод кнопки svg, создал отдельные файлы для обычной кнопки и красной, так же добавил анимацию увеличения, так при простой замене иконки происходят пиксельные сдвиги

// v3.4
// изменил название класса с youtube на ay_youtube так как возникали конфликты

// v3.5
// если в шаблонах указано только одно видео - тогда оно выводится на всю ширину экрана

// v3.6
// добавил на страницу опций возможность выбрать border-radius(закругление углов). Так же добавил файл экспорта для ACF в формате json

// v3.7
// оптимизировал код страницы настроек, добавил иконку в админке к пункту меню

// v3.8
// добавил функцию для переменных в файле includes/var.php border-radius, margin-top, margin-bottom
// добавил возможность настройки одинаковых отступов для галереи видео и отдельно взятого видео

// v3.9
// изменил пропорции отображения и padding у модального окна

// v3.10
// исправил мелкие ошибки

// v3.11
// добавил индивидуальный отступ для каждого шорткода. Добавление отступов margin_top, margin_bottom, значение без px. Изменил описание плагина.

// v3.12
// пофиксил отступы при добавлении из шаблонов, так же передал все аттрибуты в шорткоде шаблонов theme_video_shablon, изменил название функции этого шорткода

// v3.2
// изменил название объекта на modalIvan так как возникали конфликты с элементором

// v3.21
// изменил версию на 3.21 так как считает, что 3.2 меньше, чем 3.12

// v3.22
// Вывод все видео metka = "all"

// переменные плагина
require_once plugin_dir_path( __FILE__ ) . 'includes/var.php';

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

// добавление HTML для модального окна
require_once plugin_dir_path( __FILE__ ) . 'includes/modal.php';