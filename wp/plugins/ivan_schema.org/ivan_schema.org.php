<?php 
/**
 * Plugin Name: ivan_schema.org
 * Description: Микроразметка schema.org
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван	
 * Version:     1.2
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

// Версии
// v1.0 перенес файлы микроразметки в плагин
// v1.1 имя автора изменил на Админ
// v1.2 удаление лишней микроразметки hentry

// страница настроек
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_page.php';

// Настройки группы полей для данной страницы
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_meta_options.php';

// файл микроразметки
require_once plugin_dir_path( __FILE__ ) . 'includes/seo_data.php';

// удаление лишней микроразметки hentry
require_once plugin_dir_path( __FILE__ ) . 'includes/remove_hentry.php';
?>