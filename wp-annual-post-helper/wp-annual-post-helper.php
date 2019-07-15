<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 * 
 * @link              https://github.com/TerranUp16/WP-Annual-Post-Helper
 * @since             0.0.1
 * @package           WP_Annual_Post_Helper
 * 
 * @wordpress-plugin
 * Plugin Name: WP Annual Post Helper
 * Plugin URI:  https://github.com/TerranUp16/WP-Annual-Post-Helper
 * Description: Plugin for WordPress enabling a report of past posts to be generated on a regular schedule.
 * Version:     0.0.1
 * Author:      Robert Schwyzer
 * Author URI:  https://github.com/TerranUp16
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
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
define( 'WP_Annual_Post_Helper_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/wp-annual-post-helper-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/wp-annual-post-helper-activator.php';
	WP_Annual_Post_Helper_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_wp-annual-post-helper() {

	$plugin = new WP_Annual_Post_Helper();
	$plugin->run();

}
run_wp-annual-post-helper();
?>