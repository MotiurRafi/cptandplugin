<?php
/**
 * Plugin Name: Elementor Test Addon
 * Description: Custom Elementor addon.
 * Plugin URI:  https://sitastam.com/plugin
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: textdomain
 * 
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function elementor_test_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Elementor_Test_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'elementor_test_addon' );

// Function to load your custom template
function load_custom_template() {
    if (is_page_template('templates/custom-template.php')) {
        get_template_part('templates/custom-template');
    }
}

add_action('template_redirect', 'load_custom_template');