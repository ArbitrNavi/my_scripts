<?php
/**
 * Plugin Name: Ivan mobile(мобильное меню + нижняя полоса)
 * Description: мобильное меню + нижняя полоса, настройка таблицы(tablepress), Позволяет вставить миниатюры панорам в 2 колонки или на всю ширину с помощью шорткода [p3d ids="name_metka"] если указать width=100 то будет на всю ширину. Так же если указать ids=all выведутся все заданные панорамы. Данные подтягивюатся из страницы опций acf.
Требует наличие плагина acf pro!
 * Plugin URI:  https://vk.com/ivan26ru
 * Author URI:  https://vk.com/ivan26ru
 * Author:      Иван
 * Version:     4.3
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
// v2.7 изменил цвет по умолчанию для "Цвет текста кнопки телефона" на белый
// v2.8 пофиксил добавление меню в админку, переназначил стили на случай, если меню не выбрано, что б не ломалось
// v2.9 ширина логотипа выстраивается автоматически, поправил выбор цвета для кнопки при наведении, изменил поля по умолчанию, изменил svg изображение, что б занимали всю область контейнера
// v3.0 добавил модуль "Настройка таблицы(tablepress)", так же разбил на страницы опции плагина, раздел называется Иван модули. Добавил возможность выбирать брать поля из php или wp. В названии групп произвольных полей добавил префикс IM для удобства отображения
// v3.1 изменил описание произвольного поля "Цвет текста в таблице"
// v3.2 добавил выбор отступов у таблицы
// v3.3 добавил кнопку в шапку для обратной связи
// v3.4 пофиксил размер логотипа для iphone, так как при width 100% отображается некорректно
// v3.5 добавил возможность убрать значек огня при вставке тега span
// v4.0 добавил шорткод вывода миниатюр панорам
// v4.1 исправил конфликт стилей
// v4.2 исправил конфликт скриптов
// v4.3 добавил ссылку на главную страницу в шапку

// страница настроек acf
require_once plugin_dir_path(__FILE__) . 'includes/acf_options/acf_page.php';
// поля для программиста
require_once plugin_dir_path(__FILE__) . 'includes/acf_options/setting_programmer.php';

if (!get_field('ivan__acf-include', 'options')) {
	require_once plugin_dir_path(__FILE__) . 'includes/acf_options/acf_meta_options.php';
}

// ----- Подключение модулей
// мобильная шапка
require_once plugin_dir_path(__FILE__) . 'includes/moduls/mobile_header/mobile_header.php';

// нижнее меню
require_once plugin_dir_path(__FILE__) . 'includes/moduls/mobile_line/mobile_line.php';

// настройка внешнего вида для tablepress
require_once plugin_dir_path(__FILE__) . 'includes/moduls/tablepress_style/tablepress_style.php';

// шорткоды 3д туров
require_once plugin_dir_path(__FILE__) . 'includes/moduls/shortcode_360/shortcode_360.php';