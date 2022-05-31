<?php
/**
 * Plugin Name: Ivan mobile(мобильное меню + нижняя полоса)
 * Description: мобильное меню + нижняя полоса
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван
 * Version:     2.1
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

// v2.0 интеграция со станицей настроек acf
// v2.1 импорт настроек acf

// страница настроек acf
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_page.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_meta_options.php';

// Подключение стилей и скриптов
require_once plugin_dir_path( __FILE__ ) . 'includes/moduls/mobile_header/mobile_header.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/moduls/mobile_line/mobile_line.php';