<?php 

/**
 * Plugin Name:       Add Top Bar to Sticky Header Effects
 * Plugin URI:        https://clwebdevelopment.com/
 * Description:       Integrates with Sticky Header Effects to animate a top bar smoothly with the main header.
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            Charles Loehle
 * Author URI:        https://clwebdevelopment.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        elementor-sticky-header-with-top-bar
 * Text Domain:       elementor-sticky-header-with-top-bar
 * Domain Path:       /languages
 */

/**
 * 1. give top bar id of #top-bar. Sticky header effects off 
 * 2. give main header id of #cl-web-header. Sticky header effects on with shrink header and shrink logo on. 
 * 3. change number in js file, (window.scrollY >= 60), to match Sticky Header Effects scroll distance value 
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) die();

function elementor_sticky_header_with_top_bar_scripts () {
	wp_enqueue_script('custom-js', plugin_dir_url( __FILE__ ) . 'assets/elementor-sticky-header-with-top-bar.js', [], time(), true);
	wp_enqueue_style('custom-css', plugin_dir_url( __FILE__ ) . 'assets/elementor-sticky-header-with-top-bar.css');
}
add_action('wp_enqueue_scripts', 'elementor_sticky_header_with_top_bar_scripts');