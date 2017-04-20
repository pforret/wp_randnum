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
 * @package           Wp_randnum
 *
 * @wordpress-plugin
 * Plugin Name:       Random number shortcode
 * Plugin URI:        https://github.com/pforret/wp_randnum
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Peter Forret
 * Author URI:        http://blog.forret.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_randnum
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp_randnum-activator.php
 */
function activate_wp_randnum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp_randnum-activator.php';
	Wp_randnum_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp_randnum-deactivator.php
 */
function deactivate_wp_randnum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp_randnum-deactivator.php';
	Wp_randnum_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_randnum' );
register_deactivation_hook( __FILE__, 'deactivate_wp_randnum' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp_randnum.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_randnum() {

	$plugin = new Wp_randnum();
	$plugin->run();

}
run_wp_randnum();
