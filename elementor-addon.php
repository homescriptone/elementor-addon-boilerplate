<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple addon pour Elementor
 * Version:     1.0.0
 * Author:      Homescriptone Solutions
 * Author URI:  https://homescriptone.com/
 * Text Domain: hs-elementor-addon
 */

function hs_register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/country.php' );
	require_once( __DIR__ . '/widgets/helloworld.php' );

	$widgets_manager->register( new \Homescriptone\Country() );
	$widgets_manager->register( new \Homescriptone\HelloWorld() );

}
add_action( 'elementor/widgets/register', 'hs_register_hello_world_widget' );
