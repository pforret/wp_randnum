<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://blog.forret.com
 * @since             1.0.0
 * @package           Randnum
 *
 * @wordpress-plugin
 * Plugin Name:       randnum
 * Plugin URI:        https://github.com/pforret/wp_randnum
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Peter Forret
 * Author URI:        http://blog.forret.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       randnum
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-randnum-activator.php
 */
function activate_randnum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-randnum-activator.php';
	Randnum_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-randnum-deactivator.php
 */
function deactivate_randnum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-randnum-deactivator.php';
	Randnum_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_randnum' );
register_deactivation_hook( __FILE__, 'deactivate_randnum' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-randnum.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_randnum() {

	$plugin = new Randnum();
	$plugin->run();

}
run_randnum();
