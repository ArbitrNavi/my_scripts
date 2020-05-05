<?php 
/**
 * Plugin Name: ivan_lifehack
 * Description: Разные полезности для сайта, которые необходимы для сайтов.
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

// Версии
// v1.0 В рубриках длину описания убавил до 150 символов
// v1.1 Добавлена колонка в рубрики ID

// сократить описание в админ панеле для категорий до 150 символов
require_once plugin_dir_path( __FILE__ ) . 'includes/small_category_colonka.php';

// добавить колонки в категории(ID)
require_once plugin_dir_path( __FILE__ ) . 'includes/category_coloumn.php';

 ?>