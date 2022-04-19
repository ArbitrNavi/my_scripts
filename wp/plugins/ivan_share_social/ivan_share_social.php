<?php

/**
 * Plugin Name: Ivan share social Поделиться в социалках
 * Description: Поделиться в социалках
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван
 * Version:     1.00
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

define('INCLUDES_PATH', 'includes/');
define('STYLES_URL', plugin_dir_url(__FILE__) .'assets/styles/');
define('SCRIPTS_URL', plugin_dir_url(__FILE__) .'assets/scripts/');
define('LIBRARIS_URL', plugin_dir_url(__FILE__) .'assets/libraris/');

require_once INCLUDES_PATH .'castomizer.php';
require_once INCLUDES_PATH .'social.class.php';

new ivan_Social();

?>