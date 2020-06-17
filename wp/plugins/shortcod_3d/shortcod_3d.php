<?php 
/**
 * Plugin Name: Вставка миниатюр панорам на сайт
 * Description: Позволяет вставить миниатюры панорам в 2 колонки или на всю ширину с помощью шорткода [p3d ids="name_metka"] если указать width=100 то будет на всю ширину. Так же если указать ids=all выведутся все заданные панорамы. Данные подтягивюатся из страницы опций acf.
 Требует наличие плагина acf pro!
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван    
 * Version:     1.1
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

// 1.1 добавил надписть Посмотреть тур, сделал кликабельным весь блок, а не только текст ссылки

// регистринуем размер изображений
add_image_size('480x241', 480, 241, true);

// страница настроек
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_page.php';

// Настройки группы полей для данной страницы
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_meta_options.php';

// Шорткод p3d
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode_p3d.php';

// Подключение стилей и скриптов
require_once plugin_dir_path( __FILE__ ) . 'includes/add_style_scripts.php';
?>