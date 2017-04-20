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
 * Description:       provides the [randnum] shortcode to add random numbers in text/URLs
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


function randnum_generate($atts){
	extract(shortcode_atts(array(
		'min' => 0,
		'max' => 100000,
		), $atts));
	$return_string=rand ( $min , $max );
	return $return_string;
}

function randnum_register(){
   add_shortcode('randnum', 'randnum_generate');
}

add_action( 'init', 'randnum_register');

