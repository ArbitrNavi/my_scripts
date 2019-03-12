<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Ajax_Youtube
 *
 * @wordpress-plugin
 * Plugin Name:       Ajax подгужка видео роликов
 * Plugin URI:        https://vk.com/ivan26ru
 * Description:       Позволяет загружать ролик только после нажатия на на него, изначально грузиться только изображения этого ролика, что существенно снижает нагрузку при загрузке страницы.
 * Version:           1.0.1
 * Author:            8bit-studio.ru
 * Author URI:        https://vk.com/ivan26ru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ajax-youtube
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ajax-youtube-activator.php
 */
function activate_ajax_youtube() {
	require_once ajax_dir_path( __FILE__ ) . 'includes/class-ajax-youtube-activator.php';
	Ajax_Youtube_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ajax-youtube-deactivator.php
 */
function deactivate_ajax_youtube() {
	require_once ajax_dir_path( __FILE__ ) . 'includes/class-ajax-youtube-deactivator.php';
	Ajax_Youtube_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ajax_youtube' );
register_deactivation_hook( __FILE__, 'deactivate_ajax_youtube' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require ajax_dir_path( __FILE__ ) . 'includes/class-ajax-youtube.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ajax_youtube() {

	$plugin = new Ajax_Youtube();
	$ajax->run();

}
run_ajax_youtube();
