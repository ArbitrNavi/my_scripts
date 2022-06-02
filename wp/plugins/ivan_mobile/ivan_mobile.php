<?php
/**
 * Plugin Name: Ivan mobile(мобильное меню + нижняя полоса)
 * Description: мобильное меню + нижняя полоса
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван
 * Version:     2.6
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
// v2.2 возможность скрыть иконку телефона, жирный текст номера телефона, цвет иконки берется из цвета текста кнопки
// v2.3 пофиксил выравнивание по ширине на мобильной версии
// v2.4 добавил возможность выбора высоты кнопок, убрал полоски в меню, переверстал некоторые элементы
// v2.5 добавил выбор скрытия телефона и майла из шапки
// v2.6 пофиксил отображение без телефона и майла в шапке

// страница настроек acf
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_page.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/acf_options/acf_meta_options.php';

// ----- Подключение модулей
// мобильная шапка
require_once plugin_dir_path( __FILE__ ) . 'includes/moduls/mobile_header/mobile_header.php';

// нижнее меню
require_once plugin_dir_path( __FILE__ ) . 'includes/moduls/mobile_line/mobile_line.php';