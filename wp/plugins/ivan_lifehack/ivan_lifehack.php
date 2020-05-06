<?php 
/**
 * Plugin Name: ivan_lifehack
 * Description: Разные полезности для сайта, которые необходимы для сайтов.
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван	
 * Version:     1.4
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
// v1.2 Запоняет alt в изображениях
// v1.3 404 на определенные get
// v1.4 исправил ошибку с функцией is_user_logged_in так как в плагинах она еще не определена
// v1.5 выключил подставку альтов, так как пользуюсь плагином PB SEO Friendly Images

// сократить описание в админ панеле для категорий до 150 символов
require_once plugin_dir_path( __FILE__ ) . 'includes/small_category_colonka.php';

// добавить колонки в категории(ID)
require_once plugin_dir_path( __FILE__ ) . 'includes/category_coloumn.php';
 
// Заполняет поле для атрибута alt на основе заголовка Записи у картинки при её добавлении в контент.
// require_once plugin_dir_path( __FILE__ ) . 'includes/img_alt.php';
 
// Ставим 404 ответ на мусорные страницы, определяемые по get запросу
require_once plugin_dir_path( __FILE__ ) . 'includes/get_404.php';

 ?>